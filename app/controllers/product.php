<?php

Class Product extends Controller {
    public function index() {
        

        $DB = Database::getInstance();
        $image_class = $this->load_model('Image');
        $ROWS = $DB->read("select * from products");
        $data['page_title'] = "Products";
        if($ROWS) {
            foreach ($ROWS as $key => $row) {
                # code...
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
            }
        }
        $data['ROWS'] = $ROWS;
        $this->view("product", $data);
        
    }
}