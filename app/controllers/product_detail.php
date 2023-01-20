<?php

Class Product_detail extends Controller {
    public function index($slug) {
        $slug = addslashes($slug);
        $DB = Database::getInstance();

        $ROW = $DB->read("select * from products where slug = :slug", ['slug' => $slug]);
        
        $data['page_title'] = "Product Details";
        $data['ROW'] = is_array($ROW) ? $ROW[0] : false;
        $CAT = $ROW[0];
        
        // $CAT = $DB->read("select category from categories where id = :category", ['id' => $CAT->category]);
        $category = $DB->read("select category from categories where id = $CAT->category");
        $color = $DB->read("select * from colors where id = $CAT->color");
        $data['color'] = $color[0];
        
        $data['category'] = $category[0];
        $category_class = $this->load_model('Category');
        $data['categories'] = $category_class->get_all();

        $this->view("product_detail", $data);
    }
}