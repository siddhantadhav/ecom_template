<?php

Class About extends Controller {
    public function index() {
        $category_class = $this->load_model('Category');
        $data['categories'] = $category_class->get_all();
        $data['page_title'] = "About";
        $this->view("about", $data);
    }

    
}