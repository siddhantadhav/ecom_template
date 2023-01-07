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
                $check = $DB->write($query, $arr);
            }
        }
        return $check;        
    }

    public function make_table($orders, $contact, $product) {
        $result = "";
        if(is_array($orders)) {
            foreach ($orders as $order) {
                // show($order);
                $product_details = $product->get_one_product($order->product_id);
                $client_details = $contact->get_one_contact_id($order->client_id);
                $result .= "<tr>";
                $result .=
                    '<td>' . $order->id . '</td>' .
                    '<td>' . $product_details->name . '</td>' .
                    '<td>' . $order->qty . '</td>' .
                    '<td>' . $order->item_message . '</td>' .
                    '<td>' . $client_details->email . '</td>' .
                    '<td>' . $order->date . '</td>' .
                    '<td>'.
                        '<button class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button>'. ' ' .
                        '<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>'.
                    '</td>';
                    
                $result .= "</tr>";
            }
        }
        return $result;
    }
}