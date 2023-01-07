<?php

class Order {
    public function create($contact_id)
    {
        
        $client_id = (int) $contact_id;
        $DB = Database::newInstance();

        if(isset($_SESSION['CART'])) {
            foreach($_SESSION['CART'] as $key => $item) {
                $arr = array();
                $arr['product_id'] = $item['id'];
                $arr['qty'] = $item['quantity'];
                $arr['item_message'] = $_SESSION['CART'][$key]['item_message'];
                $arr['client_id'] = $client_id;
                $query = "insert into orders (product_id, qty, item_message, client_id) values (:product_id, :qty, :item_message, :client_id)";
                $DB->write($query, $arr);
            }
        }        
    }
}