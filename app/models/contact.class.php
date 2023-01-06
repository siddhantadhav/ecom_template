<?php

class Contact {
    public function create ($DATA) {
        $_SESSION['error'] = "";
        $DB = Database::newInstance();
        $arr = array();
        $arr['fname'] = ucwords($DATA->fname);
        $arr['lname'] = ucwords($DATA->lname);
        $arr['phone'] = ($DATA->phone);
        $arr['city'] = ucwords($DATA->city);
        $arr['email'] = ($DATA->email);
        $arr['subject'] = ucwords($DATA->subject);
        $arr['message'] = ($DATA->message);

        if(!preg_match("/^[a-zA-Z ]+$/", trim($arr['fname']))) {
            $_SESSION['error'] .= "Enter a Valid First Name";
        }

        if(!preg_match("/^[a-zA-Z ]+$/", trim($arr['lname']))) {
            $_SESSION['error'] .= "Enter a Valid Last Name";
        }

        if (!is_numeric($arr['phone'])) {
            $_SESSION['error'] .= "Enter Valid Phone Number";
        }

        if(!preg_match("/^[a-zA-Z0-9@.]+$/", trim($arr['email']))) {
            $_SESSION['error'] .= "Enter a Valid Email";
        }

        if(!preg_match("/^[a-zA-Z 0-9,.]+$/", trim($arr['message']))) {
            $_SESSION['error'] .= "Enter a Valid Message";
        }

        if(!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $query = "insert into contacts (fname, lname, phone, city, email, subject, message) values (:fname, :lname, :phone, :city, :email, :subject, :message)";
            $check = $DB->write($query, $arr);

            if($check) {
                return true;
            }
            return false;
        }
    }

    public function get_one_contact($email) {
        $DB = Database::newInstance();
        $data = $DB->read("select * from contacts where email = '$email' limit 1");
        return $data[0];
    }
}