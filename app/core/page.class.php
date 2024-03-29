<?php

class Page {
    public static function get_offset($limit) {
        $limit = (int) $limit;

        $page_number = isset($_GET['pg']) ? (int)$_GET['pg'] : 1 ;
        $page_number = $page_number < 1 ? 1 : $page_number;
        return ($page_number - 1) * $limit;
    }

    public static function show_links()
    {   
        ?>
        <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item" style="<?= self::links()->current == 1 ? 'display:none' : '' ?>">
                        <a class="page-link" href="<?=self::links()->prev?>" tabindex="-1" style="color:rgb(36, 188, 189); font-weight: bold">Previous</a>
                    </li>
                    <?php
                        $max = self::links()->current + 3;
                        $cur = (self::links()->current > 3) ? self::links()->current -3 : 1;
                    ?>
                    <?php for ($i=$cur; $i < $max; $i++): ?>
                        <li class="page-item <?=self::links()->current == $i?'active':'' ?>"><a class="page-link" href="<?=self::generate($i);?>" 
                        style="color:rgb(36, 188, 189); font-weight: bold;<?=self::links()->current == $i? 'background-color: rgb(36, 188, 189); color: white; border: 1px solid rgb(36, 188, 189)': '' ?>"><?=$i?></a></li>
                    <?php endfor; ?>
                    <li class="page-item">
                    <a class="page-link" href="<?=self::links()->next?>" style="color:rgb(36, 188, 189); font-weight: bold">Next</a>
                    </li>
                </ul>
                </nav>
                <?php
    }

// Testing with Git on CPanel

    public static function generate($number){
        $number = (int) $number;
        $query_string = str_replace("url=", "", $_SERVER['QUERY_STRING']);
        $current_link =  ROOT . $query_string;     
        if (!strstr($query_string, "pg=")) {
            $current_link .= "&pg=1";
        }

        return preg_replace("/pg=[^&?=]+/", "pg=". $number, $current_link);
    }

    public static function links(){
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