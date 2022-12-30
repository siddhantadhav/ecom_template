<?php

Class Product extends Controller {
    public function index() {
        

        $DB = Database::getInstance();

        $ROWS = $DB->read("select * from products");
        $data['page_title'] = "Products";
        $data['ROWS'] = $ROWS;
        $this->view("product", $data);
        
    }

    

    
}