<?php

class Ajax_Contact extends Controller
{
    public function index()
    {
        $data = (object) $_POST;
        

        if (is_object($data) && isset($data->data_type)) {
            
            $DB = Database::getInstance();
            $contact = $this->load_model("Contact");
            if ($data->data_type == 'send_contact') {
                if ($_SESSION['error'] != "") {
                    $arr['message'] = $_SESSION['error'];
                    unset($_SESSION['error']);
                    $_SESSION['error'] = "";
                    $arr['message_type'] = "error";
                    $arr['data_type'] = "";
                    
                    echo json_encode($arr);
                } else {
                    $check = $contact->create($data);
                    $arr['message'] = "Successful";
                    $arr['message_type'] = "info";
                    $arr['data_type'] = "send_contact";
                    echo json_encode($arr);
                }
            }
            
        }
    }
}