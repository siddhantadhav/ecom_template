<?php

Class Contact extends Controller {
    public function index() {
        

        
        $data['page_title'] = "Contact";
        $this->view("contact", $data);
    } 
}