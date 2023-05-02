<?php

class User {
    public function make_table($users) {
        $result = "";
        if(is_array($users)) {
            foreach ($users as $user) {
                $result .= "<tr>";
                $result .=
                    '<td>' . $user->id . '</td>' .
                    '<td>' . $user->username . '</td>' .
                    '<td>' . $user->user_email . '</td>' .
                    '<td>'.
                        '<button class="btn btn-primary btn-xs" onclick = "complete_order('.$user->id.')"><i class="fa fa-check"></i></button>'. ' ' .
                        '<button class="btn btn-danger btn-xs" onclick = "remove_order('.$user->id.')"><i class="fa fa-trash-o"></i></button>'.
                    '</td>';  
                $result .= "</tr>";
            }
        }
        return $result;
    }

    public function new_login($username, $password){
        $DB = Database::newInstance();
        $users = $DB->read("select * from users");
        foreach ($users as $user){
            if($user->username == $username){
                if($user->password == $password){
                    return $user;
                }
            }
        }
        return false;
    }
}