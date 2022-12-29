<?php

class Product
{
    
    public function create($DATA, $FILES)
    {
        $_SESSION['error'] = "";
        $DB = Database::newInstance();
        $arr['name'] = ucwords($DATA->name);
        $arr['description'] = ucwords($DATA->description);
        $arr['category'] = ucwords($DATA->category);
        $arr['date'] = date("Y-m-d H:i:s");

        if (!preg_match("/^[a-zA-Z ]+$/", trim($arr['name']))) {
            $_SESSION['error'] .= "Enter Valid Product Name";
        }
        if (!preg_match("/^[a-zA-Z ]+$/", trim($arr['description']))) {
            $_SESSION['error'] .= "Enter Valid Description";
        }
        if (!is_numeric($arr['category'])) {
            $_SESSION['error'] .= "Enter Valid Category";
        }

        $arr['image'] = "";
        $arr['image2'] = "";
        $arr['image3'] = "";
        $arr['image4'] = "";

        $allowed[] = "image/jepg";
        $allowed[] = "image/jpg";
        $allowed[] = "image/png";

        $size = 10;
        $size = ($size*1024*1024);

        $folder = "upload/";

        if(!file_exists($folder)){
            mkdir($folder, 0777, true);
        }

        // error below while checking for allowed file types

        foreach($FILES as $key => $img_row) {
            if($img_row['error'] == 0 ) {
                if($img_row['size'] < $size) {
                    $destination = $folder . $img_row['name'];
                    move_uploaded_file($img_row['tmp_name'], $destination);
                    $arr[$key] = $destination;
                }
                else {
                    $_SESSION['error'] .= $key . "is bigger than required size";
                }
            }
        }

        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $query = "insert into products (name, description, category, date, image, image2, image3, image4) values (:name, :description, :category, :date, :image, :image2, :image3, :image4)";
            $check = $DB->write($query, $arr);

            if ($check) {
                return true;
            }
        }
        return false;
    }
    public function edit($id, $name)
    {
        $DB = Database::newInstance();
        
        $arr['id'] = (int) $id;
        $arr['name'] = $name;
        $query = "update products set name = :name where id = :id limit 1";
        $DB->write($query, $arr);
    }

    public function delete($id)
    {
        $DB = Database::newInstance();
        $id = (int) $id;
        $query = "delete from products where id = '$id' limit 1";
        $DB->write($query);
    }
    public function get_all()
    {
        $DB = Database::newInstance();
        return $DB->read("select * from products order by id desc");
        
    }
    public function get_one($id)
    {
        $id = (int) $id;
        $DB = Database::newInstance();
        $data = $DB->read("select * from categories where id = '$id' limit 1");
        return $data[0];
        
    }
    public function make_table($cats, $model = null) 
    {
        $result = "";
        if (is_array($cats)) {
            foreach ($cats as $cat_row) {
                $edit_args = $cat_row->id.",'".$cat_row->name."'";
                // $one_cat = $model->get_one($cat_row->category);
                $result .= "<tr>";
                $result .= '
                    <td><a href="basic_table.html#">'.$cat_row->id.'</a></td>
                    <td><a href="basic_table.html#">'.$cat_row->name.'</a></td>
                    <td><a href="basic_table.html#">'.$cat_row->description.'</a></td>
                    <td><a href="basic_table.html#">'.$cat_row->category.'</a></td>
                    <td><a href="basic_table.html#"><img src ="'.ROOT.$cat_row->image.'" style="width:50px; height:50px" /></a></td>
                    <td><a href="basic_table.html#">'.$cat_row->date.'</a></td>
                    <td>
                        <button onclick = "show_edit_product('.$edit_args.', event)" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button name="delete_row" value="'.$edit_args.'" type="submit" onclick = "delete_row('.$edit_args.')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                    </td>';
                $result .= "</tr>";
            }
        }
        return $result;
    }

}