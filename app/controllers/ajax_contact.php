<?php

class Ajax_Contact extends Controller
{
    public function index()
    {
        $data = (object) $_POST;

        if (is_object($data)) {
            $DB = Database::getInstance();
            $contact = $this->load_model('Contact');

            if ($data->email != '' || $data->phone > 0) {
                $contact->create($data);
                $arr['message'] = "Successful !!!";
                $_SESSION['error'] = "";
                $arr['message_type'] = "info";

                echo json_encode($arr);
                
            }
        }
    }
}