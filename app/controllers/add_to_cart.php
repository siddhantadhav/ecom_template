<?php

Class Add_to_cart extends Controller {
    public function index($id = '') {

        $id = addslashes($id);
        $DB = Database::getInstance();
        $ROWS = $DB->read("select * from products where id = :id limit 1", ["id" =>$id]);
        if($ROWS) {
            $ROW = $ROWS[0];
            if (isset($_SESSION['CART'])) {
                $ids = array_column($_SESSION['CART'], "id");
                if(in_array($ROW->id, $ids)) {
                    $key = array_search($ROW->id, $ids);
                    $_SESSION['CART'][$key]['quantity']++;
                }
                else {
                    $arr = array();
                    $arr['id'] = $ROW->id;
                    $arr['quantity'] = 1;

                    $_SESSION['CART'][] = $arr;
                }
            }
            else {
                $arr = array();
                $arr['id'] = $ROW->id;
                $arr['quantity'] = 1;

                $_SESSION['CART'][] = $arr;

            }
            show($_SESSION);
        }

        

        // header("Location: " . ROOT . "product");
        // die;
        
    }
    public function add_quantity ($id = '') {
        $id = addslashes($id);
        if(isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                # code...
                if($item['id'] == $id) {
                    $item['quantity'] += 1;
                    break;
                }
            }
        }
        // echo "add";
        show($_SESSION['CART']);
    }
    public function sub_quantity ($id = '') {

    }
    public function remove ($id = '') {

    }
}