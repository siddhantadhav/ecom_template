<?php

class User {
    public function new_user($POST){

    }

    public function login($POST){

    }
    
    public function get_user($url){
        
    }
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
}