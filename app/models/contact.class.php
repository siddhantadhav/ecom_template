<?php

class Contact {
    public function create ($DATA) {
        $_SESSION['error'] = "";
        $DB = Database::newInstance();
        $arr = array();
        $arr['fname'] = ucwords($DATA->fname);
        $arr['lname'] = ucwords($DATA->lname);
        $arr['phone'] = ucwords($DATA->phone);
        $arr['city'] = ucwords($DATA->city);
        $arr['email'] = ucwords($DATA->email);
        $arr['subject'] = ucwords($DATA->subject);
        $arr['message'] = ucwords($DATA->message);

        if(!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $query = "insert into contacts (fname, lname, phone, city, email, subject, message) values (:fname, :lname, :phone, :city, :email, :subject, :message)";
            $check = $DB->write($query, $arr);

            if($check) {
                return true;
            }
            return false;
        }
    }
}