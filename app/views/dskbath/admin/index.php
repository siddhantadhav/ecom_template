<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>




<div>
    <span><h2>Total Categories: <?=$categories->all_categories?></h2></span>
    <span><h2>Total Products: <?=$products->all_products?></h2></span>
    <span><h2>Total Orders: <?= $orders->all_orders;?></h2></span>
    <span><h2>Total Enquires: <?=$contacts->all_contacts?></h2></span>
    <span><h2>Total Users: <?=$users->all_users?></h2></span>
</div>
            


<?php $this->view("admin/footer", $data); ?>