<?php

Class New_index extends Controller {
    public function index() {
        show($_POST);
        $DB = Database::getInstance();

        $ROWS = $DB->read("select * from products");
        $data['page_title'] = "New Index";
        $data['ROWS'] = $ROWS;
        $this->view("new_index", $data);
    }

    
}