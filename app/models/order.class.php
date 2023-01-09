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
                $product_details = $product->get_one_product($order->product_id);
                $client_details = $contact->get_one_contact_id($order->client_id);
                $result .= "<tr>";
                $result .=
                    '<td>' . $order->id . '</td>' .
                    '<td>' . $order->client_id . '</td>' .
                    '<div class="show_message hide">'.
                        '<p id = "contact_name"></p>'.
                        '<p id = "contact_city"></p>'.
                        '<p id = "contact_phone"></p>'.
                        '<p id = "contact_email"></p>'.
                        '<p id = "contact_subject"></p>'.
                        '<p id = "contact_message"></p></div>'.
                    '<td style="cursor: pointer" onclick = "show_contact_message(`'.$client_details->fname.'`,` '.$client_details->lname.'`,` '.$client_details->city.'`,` '.$client_details->phone.'`,` '.$client_details->email.'`,` '.$client_details->subject.'`,` '.$client_details->message.'`)">' . $client_details->email . '</td>' .
                    '<td>' . $product_details->name . '</td>' .
                    '<td>' . $order->qty . '</td>' .
                    '<td>' . $order->item_message . '</td>' .
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