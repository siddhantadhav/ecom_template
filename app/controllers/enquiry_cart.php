<?php

class Enquiry_cart extends Controller
{
    public function index() {

        $DB = Database::getInstance();
        $ROWS = false;
        $product_ids = array();
        if (isset($_SESSION['CART'])) {
            $product_ids = array_column($_SESSION['CART'], 'id');
            $ids_str = "'" . implode("','", $product_ids) . "'";
            $ROWS = $DB->read("select * from products where id in ($ids_str)");

        }

        if (is_array($ROWS)) {
            foreach ($ROWS as $key => $row) {
                foreach ($_SESSION['CART'] as $item) {
                    if ($row->id == $item['id']) {
                        $ROWS[$key]->cart_qty = $item['quantity'];
                        break;
                    }
                }
            }
        }
        $image_class = $this->load_model('Image');
        $data['page_title'] = "Enquiry";
        if ($ROWS) {
            foreach ($ROWS as $key => $row) {
                # code...
                $ROWS[$key]->image = $image_class->get_thumb_post($ROWS[$key]->image);
            }
        }
        $data['ROWS'] = $ROWS;
        $this->view("enquiry_cart", $data);

        show($_SESSION);

    }


}