<?php $this->view("new_header", $data); ?>

<style>

</style>

<section class="h-100">
    <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Cart</h5>
                    </div>
                    <?php if ($ROWS): ?>
                        <?php foreach ($ROWS as $row): ?>
                            <div class="card-body">
                                <!-- Single item -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                             data-mdb-ripple-color="light">
                                            <img src="<?=ROOT?><?=$row->image?>"
                                                 class="w-100"
                                                 alt="Blue Jeans Jacket" />
                                            <a href="#!">
                                                <div class="mask"
                                                     style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                            </a>
                                        </div>
                                        <!-- Image -->
                                    </div>

                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong><?=$row->name?></strong></p>
                                        <a href="<?=ROOT?>add_to_cart/remove/<?=$row->id?>">
                                        <button type="button"
                                                class="btn btn-primary btn-sm me-1 mb-2"
                                                data-mdb-toggle="tooltip"
                                                title="Remove item">
                                            <i class="fa fa-trash"></i>
                                        </button></a>
                                        <!-- Data -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Quantity -->
                                        <div class="d-flex mb-4"
                                             style="max-width: 300px">
                                             <a href="<?=ROOT?>add_to_cart/sub_quantity/<?=$row->id?>">
                                            <button class="btn btn-primary px-3 me-2">
                                                <i class="fa fa-minus"></i>
                                            </button></a>

                                            <div class="form-outline">
                                                <input id="form1"
                                                       min="0"
                                                       value="<?=$row->cart_qty?>"
                                                       name="quantity"
                                                       type="number"
                                                       class="form-control" />
                                                <label class="form-label"
                                                       for="form1">Quantity</label>
                                            </div>
                                            <a href="<?=ROOT?>add_to_cart/add_quantity/<?=$row->id?>">
                                            <button class="btn btn-primary px-3 ms-2">
                                                <i class="fa fa-plus"></i>
                                            </button></a>
                                        </div>
                                        <!-- Quantity -->

                                        <!-- Price -->

                                        <!-- Price -->
                                    </div>
                                </div>
                                <!-- Single item -->

                                <hr class="my-4" />
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function edit_quantity(quantity) {

    }

    function send_data(data = {}) {
        var ajax = new XMLHttpRequest();

        ajax.addEventListener('readystatechange', function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handle_result(ajax.responseText);
            }

        });
        ajax.open("POST", "<?= ROOT ?>ajax_cart/edit_quantity/" . JSON.stringify(data)", true);
        ajax.send();
    }
</script>

<?php $this->view("new_footer", $data); ?>