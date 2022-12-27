<?php

Class About extends Controller {
    public function index() {
        $data['page_title'] = "New Index";
        $this->view("about", $data);
    }

    
}