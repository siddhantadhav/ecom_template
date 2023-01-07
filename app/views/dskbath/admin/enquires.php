<?php $this->view("admin/header", $data); ?>
<?php $this->view("admin/sidebar", $data); ?>

<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Enquires </h4> 
                <hr>
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> Name</th>
                        <th> City</th>
                        <th> Phone</th>
                        <th> Email</th>
                        <th> Subject</th>
                        <th> Message</th>
                        <th> Date</th>
                        <th><i class=" fa fa-edit"></i> Actions</th>
                    </tr>
                </thead>
                <tbody id="table_body">
                    <?php
                    echo $tbl_rows;
                    ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->

<?php $this->view("admin/footer", $data); ?>