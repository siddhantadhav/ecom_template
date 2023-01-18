<?php

class Ajax_user extends Controller {
    public function index() {   

        if(count($_POST) > 0) {
            $data = (object) $_POST;
        }
        else {
            $data = file_get_contents("php://input");
            $data = json_decode($data);
        }

        if (is_object($data) && isset($data->data_type)) {
            $DB = Database::getInstance();
            $user = $this->load_model('User');

            if ($data->data_type == 'add_user') {
                
                
                if ($_SESSION['error'] != "") {
                    $arr['message'] = $_SESSION['error'];
                    $_SESSION['error'] = "";
                    $arr['message_type'] = "error";
                    $arr['data'] = "";
                    $arr['data_type'] = "";

                    echo json_encode($arr);
                } else {

                    $arr['message'] = "Product Added Successfully";
                    $arr['message_type'] = "info";
                    $users = $DB->read("select * from users");
                    $arr['data'] = $user->make_table($users);
                    $arr['data_type'] = "add_product";

                    echo json_encode($arr);
                }
            }
        }
    }
}