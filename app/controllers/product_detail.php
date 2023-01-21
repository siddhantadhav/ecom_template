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
}