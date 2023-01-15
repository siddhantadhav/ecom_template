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
        $categories_enabled = $DB->read("select * from categories where disabled = 0 order by id desc");
        $category = $this->load_model('Category');
        $tbl_rows = $category->make_table($categories);

        $data['tbl_rows'] = $tbl_rows;
        $data['categories_enabled'] = $categories_enabled;
        $data['page_title'] = "Admin";

        $this->view("admin/categories", $data);
    }

    public function products($param = "")
    {
        // add login functionality



        if ($param != "") {
            $param = addslashes($param);

            if ($param == "add") {

                $DB = Database::getInstance();
                $ROWS = $DB->read("select * from products");
                $colors = $DB->read("select * from colors");
                $category_class = $this->load_model('Category');
                $data['categories'] = $category_class->get_all();
                $data['ROWS'] = $ROWS;
                $data['colors'] = $colors;
                $data['page_title'] = "Admin";
                $this->view("admin/product_add", $data);
                return;
            }
        }

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

    public function enquires()
    {
        // add login functionality


        $DB = Database::getInstance();
        $contacts = $DB->read("select * from contacts where ordered = 0");
        $contact = $this->load_model('Contact');
        $tbl_rows = $contact->make_table($contacts);

        $data['tbl_rows'] = $tbl_rows;
        $data['page_title'] = "Admin";
        $this->view("admin/enquires", $data);
    }

    public function orders()
    {
        // add login functionality


        $DB = Database::getInstance();
        $orders = $DB->read("select * from orders order by date desc");
        $contact = $this->load_model('Contact');
        $product = $this->load_model('Product');
        $order = $this->load_model('Order');
        $tbl_rows = $order->make_table($orders, $contact, $product);

        $data['tbl_rows'] = $tbl_rows;
        $data['page_title'] = "Admin";
        $this->view("admin/orders", $data);
    }
}