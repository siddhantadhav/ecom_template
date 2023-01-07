<?php

class Ajax_enquiry_cart extends Controller
{
    public function index()
    {
        $data = (object) $_POST;
        if (is_object($data) && isset($data->data_type)) {

            $product = $this->load_model("Product");
            $order = $this->load_model("Order");
            $contact = $this->load_model("Contact");
            if (isset($_SESSION['CART'])) {
                if ($data->data_type == 'cart_submit') {
                    $check = $contact->create($data);
                    if ($_SESSION['error'] != "") {
                        $arr['message'] = $_SESSION['error'];
                        $arr['message_type'] = "error";
                        $arr['data_type'] = "";
                        $_SESSION['error'] = "";

                        echo json_encode($arr);
                    } else {

                        $arr['message'] = "Successful";
                        $arr['message_type'] = "info";
                        $arr['data_type'] = "cart_submit";
                        $contact_user = $contact->get_one_contact($data->email);
                        $order->create($contact_user->id);

                        echo json_encode($arr);
                    }
                }
                unset($_SESSION['CART']);
            } else {
                $_SESSION['error'] = "FAILED";
                $arr['message'] = "Empty Cart";
                $arr['message_type'] = "error";
                $arr['data_type'] = "cart_empty";
                $_SESSION['error'] = "";

                echo json_encode($arr);
            }
        }
    }

    public function edit_quantity($data = "")
    {
        $obj = json_decode($data);

        $id = addslashes($obj->id);
        $quantity = addslashes($obj->quantity);
        if (isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                # code...
                if ($item['id'] == $id) {
                    $_SESSION['CART'][$key]['quantity'] = (int) $quantity;
                    break;
                }
            }
        }

        $obj->data_type = "edit_quantity";
        echo (json_encode($obj));
    }

    public function delete_item($data = "")
    {
        $obj = json_decode($data);

        $id = addslashes($obj->id);
        $obj->data_type = "delete_item";
        if (isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                # code...
                if ($item['id'] == $id) {
                    unset($_SESSION['CART'][$key]);
                    $_SESSION['CART'] = array_values($_SESSION['CART']);
                    break;
                }
            }
        }
    }

    public function cart_item_message($data = "")
    {
        $data = (object) $_POST;

        $id = addslashes($data->id);
        $item_message = addslashes($data->item_message);
        if (isset($_SESSION['CART'])) {
            foreach ($_SESSION['CART'] as $key => $item) {
                if ($item['id'] == $id) {
                    $_SESSION['CART'][$key]['item_message'] = $item_message;
                    break;
                }
            }
        }
    }
}