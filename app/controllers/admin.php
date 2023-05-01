<?php

class Admin extends Controller
{
    public function index() {   
        
        $DB = Database::getInstance();
        if(isset($_SESSION['USER'])){
            
            $orders = $DB->read("select count(*) as all_orders from orders");
            $data['orders'] = $orders[0];
            
            $contacts = $DB->read("select count(*) as all_contacts from contacts where ordered = 0");
            $data['contacts'] = $contacts[0];
            
            $categories = $DB->read("select count(*) as all_categories from categories");
            $data['categories'] = $categories[0];
        
            $products = $DB->read("select count(*) as all_products from products");
            $data['products'] = $products[0];
            
            $users = $DB->read("select count(*) as all_users from users");
            $data['users'] = $users[0];
            $general_info = $DB->read("select * from general_info");
            $data['general_info'] = $general_info[0];
            $data['page_title'] = "Admin";
            $this->view("admin/index", $data);
        }
        else{
            $this->view("admin/login");
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Check into database for values
            
            $loggedIn = $DB->read("SELECT * FROM users WHERE username = 'developerCM3'");
            show($loggedIn);

        }        
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
    
    public function users()
    {
        // add login functionality


        $DB = Database::getInstance();
        $users = $DB->read("select * from users");
        $user = $this->load_model('User');
        $tbl_rows = $user->make_table($users);

        $data['tbl_rows'] = $tbl_rows;
        $data['page_title'] = "Admin";
        $this->view("admin/users", $data);
    }
}