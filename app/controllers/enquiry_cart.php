<?php

Class Enquiry_cart extends Controller {
    public function index() {
        $data['page_title'] = "Enquiry";
        $this->view("enquiry_cart", $data);
    }

    
}