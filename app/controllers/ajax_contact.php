<?php

class Ajax_Contact extends Controller
{
    
    public function index()
    {
        $data = (object) $_POST;

        if (is_object($data) && isset($data->data_type)) {
            $DB = Database::getInstance();
            $contact = $this->load_model("Contact");
            $order = $this->load_model("Order");
            if ($data->data_type == 'send_contact') {
                $check = $contact->create($data);
                if ($_SESSION['error'] != "") {
                    $arr['message'] = $_SESSION['error'];
                    unset($_SESSION['error']);
                    $_SESSION['error'] = "";
                    $arr['message_type'] = "error";
                    $arr['data_type'] = "";

                    echo json_encode($arr);
                } else {
                    $contacts = $DB->read("select * from contacts where ordered = 0");
                    $contact->make_table($contacts);
                    $arr['message'] = "Successful";
                    $arr['message_type'] = "info";
                    $arr['data_type'] = "send_contact";

                    echo json_encode($arr);
                }
            } 
            else if ($data->data_type == 'complete_contact') {
                $contact->total_enquiry_answered();
                $check = $contact->remove_contact($data->id);

                $arr['message'] = "Successful";
                $arr['message_type'] = "info";
                $arr['data_type'] = "complete_contact";

                $contacts = $DB->read("select * from contacts where ordered = 0");
                $contact->make_table($contacts);

                echo json_encode($arr);
            }
            else if ($data->data_type == 'remove_contact') {
                $check = $contact->remove_contact($data->id);
                

                $arr['message'] = "Successful";
                $arr['message_type'] = "info";
                $arr['data_type'] = "complete_contact";

                $contacts = $DB->read("select * from contacts where ordered = 0");
                $contact->make_table($contacts);

                echo json_encode($arr);
            }
            else if ($data->data_type == 'remove_order') {
                $check = $contact->remove_contact($data->client_id);
                $order->remove_order($data->id);

                $arr['message'] = "Successful";
                $arr['message_type'] = "info";
                $arr['data_type'] = "remove_order";

                $contacts = $DB->read("select * from contacts where ordered = 1");
                $contact->make_table($contacts);

                echo json_encode($arr);
            }
            else if ($data->data_type == 'complete_order') {
                $order->total_orders_filled();
                $check = $contact->remove_contact($data->client_id);
                $order->remove_order($data->id);

                $arr['message'] = "Successful";
                $arr['message_type'] = "info";
                $arr['data_type'] = "complete_order";

                $contacts = $DB->read("select * from contacts where ordered = 1");
                $contact->make_table($contacts);

                echo json_encode($arr);
            }

        }
    }
}