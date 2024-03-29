<?php
// error_reporting(E_ALL ^ E_NOTICE);  
class Product extends Controller
{
    public function index()
    {
        // Pagination Formula
        $limit = 12;
        $offset = Page::get_offset($limit);

        $DB = Database::getInstance();
        
        $image_class = $this->load_model('Image');
        $category_class = $this->load_model('Category');

        $ROWS = $DB->read("SELECT * FROM `products` LIMIT $limit OFFSET $offset;");
        $colors = $DB->read("select * from colors");
        $data['page_title'] = "Products";
        if ($ROWS) {
            foreach ($ROWS as $key => $row) {
                # code...
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
            }
        }
        
        $data['categories'] = $category_class->get_all();
        foreach ($data['categories'] as $cat) {
            $cat->category = str_replace(' ', '_', $cat->category);
        }

        $parents_children = array();

        foreach($ROWS as $row){
            if ($row->variations == 1){
                $parent_child = array();
                array_push($parent_child ,$row);
                foreach ($ROWS as $child){
                    if($child->variations == $row->id) {
                        array_push($parent_child, $child);
                    }
                }
                array_push($parents_children, $parent_child);
            }
        }

        $data['parent_child'] = $parents_children;
        $data['ROWS'] = $ROWS;
        $data['colors'] = $colors;
        $this->view("product", $data);

    }

    public function category($category = "", $sub_cat = "")
    {
        // Pagination Formula
        $limit = 2;
        $offset = Page::get_offset($limit);

        $DB = Database::getInstance();
        $image_class = $this->load_model('Image');
        $category_class = $this->load_model('Category');

        $cat_id = null;
        $check = $category_class->get_one_by_name($category);
        if (is_object($check)) {
            $cat_id = $check->id;
        }
        $ROWS = $DB->read("SELECT * FROM `products` WHERE category = $cat_id LIMIT $limit OFFSET $offset;");
        if (isset($sub_cat) && $sub_cat != "") {
            $check = $category_class->get_one_by_name($sub_cat);
            if (is_object($check)) {
                $cat_id = $check->id;
            }
            $ROWS = $DB->read("select * from products where category = $cat_id LIMIT $limit OFFSET $offset");
        }

        $colors = $DB->read("select * from colors");

        if ($ROWS) {
            foreach ($ROWS as $key => $row) {
                # code...
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
            }
        }


        $data['categories'] = $category_class->get_all();
        foreach ($data['categories'] as $cat) {
            $cat->category = str_replace(' ', '_', $cat->category);
        }

        $data['page_title'] = "Products";
        $data['ROWS'] = $ROWS;
        $data['colors'] = $colors;
        $this->view("product", $data);
    }

    public function color($color) {
        $DB = Database::getInstance();
        $image_class = $this->load_model('Image');
        $category_class = $this->load_model('Category');
        $check = $this->get_color_id_by_name($color);
        $color_id = null;
        if(is_object($check)){
            $color_id = $check->id;
        }
        $ROWS = $DB->read("SELECT * FROM products WHERE color = '$color_id';");
        $colors = $DB->read("select * from colors");
        $data['page_title'] = "Products";
        if ($ROWS) {
            foreach ($ROWS as $key => $row) {
                # code...
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
            }
        }

        $data['categories'] = $category_class->get_all();
        foreach ($data['categories'] as $cat) {
            $cat->category = str_replace(' ', '_', $cat->category);
        }

        $data['ROWS'] = $ROWS;
        $data['colors'] = $colors;
        $this->view("product", $data);
    }

    public function get_color_id_by_name($name) {
        $name = addslashes($name);
        $DB = Database::newInstance();
        $color_name = $DB->read("SELECT * FROM colors WHERE color = '$name' LIMIT 1;");
        return $color_name[0];
    }

    public function get_variations($product){
        $DB = Database::newInstance();
        $variations = $DB->read("SELECT * FROM `products` WHERE (name = '$product->name') AND (description = '$product->description') AND (category = $product->category);");
        foreach($variations as $key => $value){
            if($value->id == $product->id){
                unset($variations[$key]);
            }
        }
        return ($variations);
    }

    public function get_color_variations($product){
        $variations = $this->get_variations($product);
        $DB = Database::newInstance();
        $color_variation = array();
        foreach($variations as $variation){
            $color = $DB->read("SELECT * FROM colors WHERE id = $variation->color");
            array_push($color_variation, $color);
        }
        return($color_variation);
    }

    public function get_slug_variations($product_name, $color_id){
        $DB = Database::newInstance();
        $var_product = $DB->read("SELECT * FROM `products` WHERE name = '$product_name' AND color = $color_id;");
        return $var_product;
    }


}