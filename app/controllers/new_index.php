<?php

Class New_index extends Controller {
    public function index() {
        $data['page_title'] = "New Index";
        $this->view("new_index", $data);
    }

    
}