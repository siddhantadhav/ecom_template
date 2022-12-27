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

    public function products()
    {
        // add login functionality



        $DB = Database::getInstance();
        $products = $DB->read("select * from products order by id desc");
        $categories = $DB->read("select * from categories where disabled = 0 order by id desc");
        $product = $this->load_model('Product');
        $category = $this->load_model('Category');
        $tbl_rows = $product->make_table($products, $category);

        $data['tbl_rows'] = $tbl_rows;
        $data['categories'] = $categories;
        $data['page_title'] = "Admin";
        
        $this->view("admin/products", $data);
    }
}