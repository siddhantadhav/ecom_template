<?php

Class Home extends Controller {
    public function index() {
        

        // $DB = Database::getInstance();

        // $ROWS = $DB->read("select * from products");
        // $data['page_title'] = "Home";
        // $data['ROWS'] = $ROWS;
        // $this->view("index", $data);
        $DB = Database::getInstance();
        $ROWS = $DB->read("select * from products");
        $category_class = $this->load_model('Category');
        $data['categories'] = $category_class->get_all();
        $data['page_title'] = "Home";
        $data['ROWS'] = $ROWS;
        $this->view("new_index", $data);
        
    }
}