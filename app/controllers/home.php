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
        $data['page_title'] = "New Index";
        $data['ROWS'] = $ROWS;
        $this->view("new_index", $data);
        
    }

    

    
}