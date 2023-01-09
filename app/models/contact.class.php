<?php
use LDAP\Result;

class Contact
{
    public $completed_contacts = 0;

    public function create($DATA)
    {
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
        $arr['ordered'] = ($DATA->ordered);
        $arr['date'] = date("Y-m-d H:i:s");

        if (!preg_match("/^[a-zA-Z ]+$/", trim($arr['fname']))) {
            $_SESSION['error'] .= "Enter a Valid First Name";
        }

        if (!preg_match("/^[a-zA-Z ]+$/", trim($arr['lname']))) {
            $_SESSION['error'] .= "Enter a Valid Last Name";
        }

        if (!is_numeric($arr['phone'])) {
            $_SESSION['error'] .= "Enter Valid Phone Number";
        }

        if (!preg_match("/^[a-zA-Z0-9@.]+$/", trim($arr['email']))) {
            $_SESSION['error'] .= "Enter a Valid Email";
        }

        if (!preg_match("/^[a-zA-Z 0-9,.]+$/", trim($arr['subject']))) {
            $_SESSION['error'] .= "Enter a Valid Subject";
        }

        if (!preg_match("/^[a-zA-Z 0-9,.]+$/", trim($arr['message']))) {
            $_SESSION['error'] .= "Enter a Valid Message";
        }

        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {

            $query = "insert into contacts (fname, lname, phone, city, email, subject, message, ordered, date) values (:fname, :lname, :phone, :city, :email, :subject, :message, :ordered, :date)";


            $check = $DB->write($query, $arr);

            if (($check)) {
                return $check;
            }
            return false;
        }
    }

    public function get_one_contact($email)
    {
        $DB = Database::newInstance();
        $data = $DB->read("select * from contacts where email = '$email' limit 1");
        return $data[0];
    }
    public function get_one_contact_id($id)
    {
        $id = (int) $id;
        $DB = Database::newInstance();
        $data = $DB->read("select * from contacts where id = '$id' limit 1");
        return $data[0];
    }

    public function make_table($contacts)
    {
        $result = "";
        if (is_array($contacts)) {
            foreach ($contacts as $contact) {
                // show($contact);
                $result .= "<tr>";
                $result .=
                    '<td>' . $contact->id . '</td>' .
                    '<td>' . $contact->fname . ' ' . $contact->lname . '</td>' .
                    '<td>' . $contact->city . '</td>' .
                    '<td>' . $contact->phone . '</td>' .
                    '<td>' . $contact->email . '</td>' .
                    '<div class="show_message hide">'.'<p id = "contact_message"></p>'.'</div>'.
                    '<td style="cursor: pointer" onclick = "show_contact_message(`' . $contact->message . '`)">' . $contact->subject . '</td>' .
                    '<td>' . $contact->date . ' </td>' .
                    '<td>' .
                    '<button onclick = "complete_contact(' . $contact->id . ')" class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button>' . ' ' .
                    '<button onclick = "delete-contact(' . $contact->id . ')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>' .
                    '</td>';

                $result .= "</tr>";
            }
        }
        return $result;
    }
}