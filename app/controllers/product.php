<?php

Class Product extends Controller {
    public function index() {
        

        $DB = Database::getInstance();
        $image_class = $this->load_model('Image');
        $ROWS = $DB->read("select * from products");
        $colors = $DB->read("select * from colors");
        $data['page_title'] = "Products";
        if($ROWS) {
            foreach ($ROWS as $key => $row) {
                # code...
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
            }
        }
        
        $category_class = $this->load_model('Category');
        $data['categories'] = $category_class->get_all();
        
        $data['ROWS'] = $ROWS;
        $data['colors'] = $colors;
        $this->view("product", $data);
        
    }
}