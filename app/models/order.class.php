<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class Order {
    public function total_orders_filled() {
        $DB = Database::newInstance();
        $general_info = $DB->read("select * from general_info");
        $general_info = $general_info[0];
        $new_order = $general_info->order_filled + 1;
        $DB->write("update general_info set order_filled = $new_order where id = 1");
    }

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

    public function get_all() {
        $DB = Database::newInstance();
        return $DB->read("select * from orders");
    }

    public function remove_order($id){
        $DB = Database::newInstance();
        $DB->write("delete from orders where id = $id limit 1");
    }

    public function make_table($orders, $contact, $product) {
        $result = "";
        if(is_array($orders)) {
            foreach ($orders as $order) {
                $product_details = $product->get_one_product($order->product_id);
                $client_details = $contact->get_one_contact_id($order->client_id);
                // show($client_details->fname);
                // show($client_details->lname);
                $result .= "<tr>";
                $result .=
                    '<td>' . $order->id . '</td>' .
                    '<td>' . $order->client_id . '</td>' .
                    '<div class="show_message hide">'.
                        '<p id = "contact_fname">Name: </p>'.
                        '<p id = "contact_city">City: </p>'.
                        '<p id = "contact_phone">Phone: </p>'.
                        '<p id = "contact_email">Email: </p>'.
                        '<p id = "contact_subject">Subject: </p>'.
                        '<p id = "contact_message">Message: </p>'.
                        '<button class= "btn btn-danger" style="margin-top: 20px" onclick = "show_contact_message(`'.$client_details->fname.'`,` '.$client_details->lname.'`,` '.$client_details->city.'`,` '.$client_details->phone.'`,` '.$client_details->email.'`,` '.$client_details->subject.'`,` '.$client_details->message.'`)"> Cancel </button></div>'.
                    '<td style="cursor: pointer" onclick = "show_contact_message(`'.$client_details->fname.'`,` '.$client_details->lname.'`,` '.$client_details->city.'`,` '.$client_details->phone.'`,` '.$client_details->email.'`,` '.$client_details->subject.'`,` '.$client_details->message.'`)">' . $client_details->email . '</td>' .
                    '<td>' . $product_details->name . '</td>' .
                    '<td>' . $product_details->sku . '</td>' .
                    '<td>' . $order->qty . '</td>' .
                    '<td>' . $order->item_message . '</td>' .
                    '<td>' . $order->date . '</td>' .
                    '<td>'.
                        '<button class="btn btn-primary btn-xs" onclick = "complete_order('.$order->id.', '.$client_details->id.')"><i class="fa fa-check"></i></button>'. ' ' .
                        '<button class="btn btn-danger btn-xs" onclick = "remove_order('.$order->id.', '.$client_details->id.')"><i class="fa fa-trash-o"></i></button>'.
                    '</td>';  
                $result .= "</tr>";
            }
        }
        return $result;
    }
}