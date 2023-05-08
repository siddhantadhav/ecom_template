<?php

Class Product_detail extends Controller {
    public function index($slug) {
        $slug = addslashes($slug);
        $DB = Database::getInstance();

        $ROW = $DB->read("select * from products where slug = :slug", ['slug' => $slug]);
        $CAT = $ROW[0];
        $category = $DB->read("select category from categories where id = $CAT->category");
        $color = $DB->read("select * from colors where id = $CAT->color");
        $similar_products = $DB->read("select * from products where category = $CAT->category limit 4");
        $related_products = array();
        foreach($similar_products as $similar_product){
            if($similar_product->id == $CAT->id){
                continue;
            }
            // show($similar_product);
            array_push($related_products, $similar_product);
        }

        $data['related_products'] = $related_products;
        $data['page_title'] = "Product Details";
        $data['ROW'] = is_array($ROW) ? $ROW[0] : false;
        $data['color'] = $color[0];
        $data['category'] = $category[0];
        $category_class = $this->load_model('Category');
        $data['categories'] = $category_class->get_all();
        

        $this->view("product_detail", $data);
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