<?php

class Product
{
    
    public function create($DATA, $FILES, $image_class = null)
    {
        $_SESSION['error'] = "";
        $DB = Database::newInstance();
        $arr['name'] = ucwords($DATA->name);
        $arr['description'] = ucwords($DATA->description);
        $arr['category'] = ucwords($DATA->category);
        $arr['sku'] = ucwords($DATA->sku);
        $arr['date'] = date("Y-m-d H:i:s");
        $arr['slug'] = $this->str_to_url($DATA->name);

        if (!preg_match("/^[a-zA-Z 0-9]+$/", trim($arr['name']))) {
            $_SESSION['error'] .= "Enter Valid Product Name";
        }
        if (!preg_match("/^[a-zA-Z .\-,]+$/", trim($arr['description']))) {
            $_SESSION['error'] .= "Enter Valid Description";
        }
        if (!is_numeric($arr['category'])) {
            $_SESSION['error'] .= "Enter Valid Category";
        }
        if (!preg_match("/^[a-zA-Z0-9 \-,_]+$/", trim($arr['sku']))) {
            $_SESSION['error'] .= "Enter Valid SKU";
        }

        //checking for unique slug
        $slug_arr = array();
        $slug_arr['slug'] = $arr['slug'];
        $query = "Select slug from products where slug = :slug limit 1";
        $check = $DB->read($query);
       if ($check) {
            $arr['slug'] .= "-" .rand(0, 99999);
        }

        $arr['image'] = "";
        $arr['image2'] = "";
        $arr['image3'] = "";
        $arr['image4'] = "";
        $arr['image5'] = "";

        $allowed = array();
        $allowed[] = "image/jpeg";
        $allowed[] = "image/jpg";
        $allowed[] = "image/png";

        $size = 10;
        $size = ($size*1024*1024);

        $folder = "upload/";

        if(!file_exists($folder)){
            mkdir($folder, 0777, true);
        }

        foreach($FILES as $key => $img_row) {
            if($img_row['error'] == 0 && in_array($img_row['type'], $allowed)) {
                if($img_row['size'] < $size) {
                    $destination = $folder . $image_class->generate_filename(60)  . "." . substr($img_row['type'], strrpos($img_row['type'], '/') + 1);
                    move_uploaded_file($img_row['tmp_name'], $destination);
                    $arr[$key] = $destination;

                    $image_class->resize_image($destination, $destination, 1500, 1500);
                }
                else {
                    $_SESSION['error'] .= $key . "is bigger than required size";
                }
            }
        }
        

        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $query = "insert into products (name, description, category, sku, date, image, image2, image3, image4, image5, slug) values (:name, :description, :category, :sku, :date, :image, :image2, :image3, :image4, :image5, :slug)";
            $check = $DB->write($query, $arr);

            if ($check) {
                return true;
            }
        }
        return false;
    }
    public function edit($data, $FILES, $image_class = null)
    {
        $id = $data->id;
        $name = $data->name;
        $description = $data->description;
        $category = $data->category;
        $sku = $data->sku;
        $arr['id'] = $id;
        $arr['name'] = $name;
        $arr['description'] = $description;
        $arr['category'] = $category;
        $arr['sku'] = $sku;
        
        $image_string = "";

        if (!preg_match("/^[a-zA-Z ]+$/", trim($arr['name']))) {
            $_SESSION['error'] .= "Enter Valid Product Name";
        }
        if (!preg_match("/^[a-zA-Z ]+$/", trim($arr['description']))) {
            $_SESSION['error'] .= "Enter Valid Description";
        }
        if (!is_numeric($arr['category'])) {
            $_SESSION['error'] .= "Enter Valid Category";
        }
        if (!preg_match("/^[a-zA-Z \-_,]+$/", trim($arr['description']))) {
            $_SESSION['error'] .= "Enter Valid Description";
        }

        $allowed = array();
        $allowed[] = "image/jpeg";
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
            if($img_row['error'] == 0 && in_array($img_row['type'], $allowed)) {
                if($img_row['size'] < $size) {
                    $destination = $folder . $image_class->generate_filename(60)  . "." . substr($img_row['type'], strrpos($img_row['type'], '/') + 1);
                    move_uploaded_file($img_row['tmp_name'], $destination);
                    $arr[$key] = $destination;

                    $image_class->resize_image($destination, $destination, 1500, 1500);

                    $image_string .= "," . $key . " = :" . $key;
                }
                else {
                    $_SESSION['error'] .= $key . "is bigger than required size";
                }
            }
        }

        if (!isset($_SESSION['error']) || $_SESSION['error'] == "") {
            $DB = Database::newInstance();
            $query = "update products set name = :name, description = :description, category = :category, sku = :sku $image_string where id = :id limit 1";
            $DB->write($query, $arr);
        }
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

    public function get_one_product($id) {
        $id = (int) $id;
        $DB = Database::newInstance();
        $data = $DB->read("select * from products where id = '$id' limit 1");
        return $data[0];
    }

    public function make_table($cats, $model = null) 
    {
        $result = "";
        if (is_array($cats)) {
            foreach ($cats as $cat_row) {
                $edit_args = $cat_row->id.",'".$cat_row->name."'";

                $info = array();
                $info['id'] = $cat_row->id;
                $info['name'] = $cat_row->name;
                $info['description'] = $cat_row->description;
                $info['category'] = $cat_row->category;
                $info['sku'] = $cat_row->sku;
                $info['image'] = $cat_row->image;
                $info['image2'] = $cat_row->image2;
                $info['image3'] = $cat_row->image3;
                $info['image4'] = $cat_row->image4;
                $info['image5'] = $cat_row->image5;
                $info = str_replace('"', "'", json_encode($info)) ;
                $one_cat = $model->get_one($cat_row->category);
                $result .= "<tr>";
                $result .= '
                    <td><a href="basic_table.html#">'.$cat_row->id.'</a></td>
                    <td><a href="basic_table.html#">'.$cat_row->name.'</a></td>
                    <td><a href="basic_table.html#">'.$cat_row->description.'</a></td>
                    <td><a href="basic_table.html#">'.$cat_row->sku.'</a></td>
                    <td><a href="basic_table.html#">'.$one_cat->category.'</a></td>
                    <td><a href="basic_table.html#"><img src ="'.ROOT.$cat_row->image.'" style="width:50px; height:50px" /></a></td>
                    <td><a href="basic_table.html#">'.$cat_row->date.'</a></td>
                    <td>
                        <button info = "'.$info.'" onclick = "show_edit_product('.$edit_args.', event)" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button name="delete_row" value="'.$edit_args.'" type="submit" onclick = "delete_row('.$edit_args.')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                    </td>';
                $result .= "</tr>";
            }
        }
        return $result;
    }

    public function str_to_url($url) {
        $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
        $url = trim($url, "-");
        $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
        $url = strtolower($url);
        $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
        return $url;
    }

}