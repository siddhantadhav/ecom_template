<?php

class Page {

    private static function links(){
        $links = (object) [];
        $links->prev = "";
        $links->next = "";
        $query_string = str_replace("url=", "", $_SERVER['QUERY_STRING']) ;
        $page_number = isset($_GET['pg']) ? (int)$_GET['pg'] : 1;
        $page_number = $page_number < 1 ? 1 : $page_number;
        $next_page = $page_number+1;
        $prev_page = ($page_number > 1) ? ($page_number - 1) : 1;

        $current_link =  ROOT . $query_string;     
        if (!strstr($query_string, "pg=")) {
            $current_link .= "&pg=1";
        }
        $links->next = preg_replace("/pg=[^&?=]+/", "pg=". $next_page, $current_link);
        $links->prev = preg_replace("/pg=[^&?=]+/", "pg=". $prev_page, $current_link);
        $links->current = $page_number;

        return $links;
    }
}