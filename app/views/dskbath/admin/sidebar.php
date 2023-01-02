<aside>
    <div id="sidebar"
         class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu"
            id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?= ASSETS . THEME ?>admin/img/ui-sam.jpg"
                         class="img-circle"
                         width="60"></a></p>
            <h5 class="centered">Marcel Newman</h5>



            <li class="sub-menu">
                <a href="<?=ROOT?>admin">
                    <i class="fa fa-desktop"></i>
                    <span>Dashboard</span>
                </a>
                
            </li>
            <li class="sub-menu">
                <a href="j<?=ROOT?>admin/categories">
                    <i class="fa fa-list-alt"></i>
                    <span>Categories</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>admin/categories">View Category</a></li>
                    
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>admin/products">
                    <i class="fa fa-barcode"></i>
                    <span>Products</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>admin/products">View Products</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>admin/enquires">
                    <i class="fa fa-reorder"></i>
                    <span>Enquiries</span>
                </a>
                
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>admin/settings">
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
                <ul class="sub">
                    <!-- <li><a href="buttons.html">View Products</a></li> -->
                    <li><a href="<?=ROOT?>admin/settings/slider_images">Slider Images</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>admin/users">
                    <i class="fa fa-user"></i>
                    <span>Manage Users</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=ROOT?>admin/users/add">Add Users</a></li>
                    <li><a href="<?=ROOT?>admin/users/delete">Delete Users</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="<?=ROOT?>admin/backup">
                    <i class="fa fa-hdd-o"></i>
                    <span>Website Backup</span>
                </a>
                
            </li>



        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i><?=ucwords($data['page_title']) ?></h3>
        <div class="row mt">
            <div class="col-lg-12">