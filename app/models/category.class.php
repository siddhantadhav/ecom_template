<?php

class Category
{
    
    public function create($DATA)
    {
        $DB = Database::newInstance();
        $arr['category'] = ucwords(str_replace(" ", "_",$DATA->category));
        if($DATA->parent == "") {
            $arr['parent'] = 0;
        }
        else {
            $arr['parent'] = (int)($DATA->parent);
        }
        if (!preg_match("/^[a-zA-Z _]+$/", trim($arr['category']))) {
            $_SESSION['error'] = "Enter Valid Category Name";
        }
       
        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {

            $query = "insert into categories (category, parent) values (:category, :parent)";
            $check = $DB->write($query, $arr);

            if ($check) {
                return true;
            }
        }
        return false;
    }
    public function edit($data)
    {
        
        // die;
        $DB = Database::newInstance();
        if($data->parent != 0){
            $arr['parent'] = $data->parent;
        }
        else{
            $data->parent = 0;
        }
        $arr['id'] =  $data->id;
        $arr['category'] = $data->category;
        // die;
        
        $query = "update categories set category = '$data->category', parent = $data->parent where id = $data->id limit 1";
        $DB->write($query);
    }

    public function delete($id)
    {
        $DB = Database::newInstance();
        $id = (int) $id;
        $query = "delete from categories where id = '$id' limit 1";
        $DB->write($query);
    }
    public function get_all()
    {
        $DB = Database::newInstance();
        return $DB->read("select * from categories order by id desc");
        
    }
    public function get_one($id)
    {
        $id = (int) $id;
        $DB = Database::newInstance();
        $data = $DB->read("select * from categories where id = $id");
        return $data[0];
    }
    public function get_one_by_name($name)
    {
        $DB = Database::newInstance();
        $data = $DB->read("SELECT * FROM categories WHERE category = '$name' LIMIT 1");
        return $data[0];
    }
    public function make_table($cats) 
    {
        $result = "";
        if (is_array($cats)) {
            foreach ($cats as $cat_row) {
                $color = $cat_row->disabled ? "red" : "#5bc0de;" ;
                $cat_row->disabled = $cat_row->disabled ? "Disabled" : "Enabled";
                $args = $cat_row->id.",'".$cat_row->disabled."'";
                $edit_args = $cat_row->id.",'".$cat_row->category."',".$cat_row->parent;
                $parent = "";
                foreach ($cats as $cat_row2) {
                    if($cat_row->parent == $cat_row2->id) {
                        $parent = $cat_row2->category;
                    };
                }
                $replaced_str = str_replace("_", " ", $cat_row->category);
                $replaced_str_parent = str_replace("_", " ", $parent);


                $result .= "<tr>";
                $result .= '
                    <td><a href="basic_table.html#">'.$replaced_str.'</a></td>
                    <td><a href="basic_table.html#">'.$replaced_str_parent.'</a></td>
                    <td><span onclick = "disable_row('.$args.')" class="label label-info label-mini" style ="cursor: pointer; background-color:'.$color.';">'.$cat_row->disabled.'</span></td>
                    <td>
                        <button onclick = "show_edit_category('.$edit_args.', event)" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button onclick = "delete_row('.$edit_args.')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                    </td>';
                $result .= "</tr>";
            }
        }
        return $result;
    }

}