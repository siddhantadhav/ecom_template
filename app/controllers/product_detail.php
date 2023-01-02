<?php

Class Product_detail extends Controller {
    public function index($slug) {
        $slug = addslashes($slug);
        $DB = Database::getInstance();
        $ROW = $DB->read("select * from products where slug = :slug", ['slug' => $slug]);
        
        $data['page_title'] = "Product Details";
        $data['ROW'] = is_array($ROW) ? $ROW[0] : false;
        print_r($data['ROW']);
        $this->view("product_detail", $data);
        
    }
}