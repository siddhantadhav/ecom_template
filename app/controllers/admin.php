<?php

class Admin extends Controller
{
    public function index()
    {
        // add login functionality


        
        $data['page_title'] = "Admin";
        $this->view("admin/index", $data);
    }

    public function categories()
    {
        // add login functionality



        $DB = Database::getInstance();
        $categories = $DB->read("select * from categories order by id desc");
        $category = $this->load_model('Category');
        $tbl_rows = $category->make_table($categories);

        $data['tbl_rows'] = $tbl_rows;
        $data['page_title'] = "Admin";
        
        $this->view("admin/categories", $data);
    }
}