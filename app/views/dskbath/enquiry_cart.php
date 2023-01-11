<?php $this->view("new_header", $data); ?>

<style>
    .payment-info {
        background: blue;
        padding: 10px;
        border-radius: 6px;
        color: #fff;
        font-weight: bold;
    }

    .product-details {
        padding: 10px;
    }

    body {
        background: #eee;
    }

    .cart {
        background: #fff;
    }

    .p-about {
        font-size: 12px;
    }

    .table-shadow {
        -webkit-box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
        box-shadow: 5px 5px 15px -2px rgba(0, 0, 0, 0.42);
    }

    .type {
        font-weight: 400;
        font-size: 10px;
    }

    label.radio {
        cursor: pointer;
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none;
    }

    label.radio span {
        padding: 1px 12px;
        border: 2px solid #ada9a9;
        display: inline-block;
        color: #8f37aa;
        border-radius: 3px;
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 300;
    }

    label.radio input:checked+span {
        border-color: #fff;
        background-color: blue;
        color: #fff;
    }

    .credit-inputs {
        background: rgb(102, 102, 221);
        color: #fff !important;
        border-color: rgb(102, 102, 221);
    }

    .credit-inputs::placeholder {
        color: #fff;
        font-size: 13px;
    }

    .credit-card-label {
        font-size: 9px;
        font-weight: 300;
    }

    .form-control.credit-inputs:focus {
        background: rgb(102, 102, 221);
        border: rgb(102, 102, 221);
    }

    .line {
        border-bottom: 1px solid rgb(102, 102, 221);
    }

    .information span {
        font-size: 12px;
        font-weight: 500;
    }

    .information {
        margin-bottom: 5px;
    }

    .items {
        -webkit-box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.25);
        box-shadow: 5px 5px 4px -1px rgba(0, 0, 0, 0.08);
    }

    .spec {
        font-size: 11px;
    }

    .teal-btn {
        background-color: rgb(36, 188, 189);
        border: white;
        color: white;
    }
</style>

<div class="container-fluid mt-5 p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-2">
                <a href="<?= ROOT ?>product">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span
                              class="ml-2">Continue Shopping</span></div>
                </a>
                <hr>
                <h6 class="mb-0">Shopping cart</h6>
                <?php if ($ROWS): ?>
                    <div class="d-flex justify-content-between"><span>You have <?= count($ROWS) ?> items in your cart</span>
                        <?php else: ?>
                        <div class="d-flex justify-content-between"><span>You have 0 items in your cart</span>
                            <?php endif; ?>
                    </div>
                    <?php if ($ROWS): ?>
                        <?php foreach ($ROWS as $key => $row): ?>
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <img src="<?= $row->image ?>"
                                             class="img-fluid"
                                             alt=""
                                             style="height: 10vh;">
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-row">
                                            <div class="p-2">
                                                <a href="<?= ROOT ?>add_to_cart/sub_quantity/<?= $row->id ?>">
                                                    <button type="button"
                                                            class="btn btn-dark btn-sm teal-btn">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="p-2">
                                                <input id="qty"
                                                       min="0"
                                                       oninput="edit_quantity(this.value, '<?= $row->id ?>')"
                                                       value="<?= $row->cart_qty ?>"
                                                       name="quantity"
                                                       class="form-control" />
                                                <label class="form-label"
                                                       for="qty">Quantity</label>
                                            </div>
                                            <div class="p-2">
                                                <a href="<?= ROOT ?>add_to_cart/add_quantity/<?= $row->id ?>">
                                                    <button type="button"
                                                            class="btn btn-dark btn-sm teal-btn">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col"
                                         style="height: 6vh;">
                                        <input type="text"
                                               name="item_message"
                                               id="item_message"
                                               value="<?= $_SESSION['CART'][$key]['item_message'] ?>"
                                               onchange="cart_item_message(<?= $row->id ?>, this.value)"
                                               placeholder="Message">
                                    </div>
                                    <div class="col"
                                         style="height: 6vh;">
                                        <a href="<?= ROOT ?>add_to_cart/remove/<?= $row->id ?>">
                                            <button type="button"
                                                    onclick="delete_item(this.getAttribute('delete_id'))"
                                                    delete_id="<?= $row->id ?>"
                                                    class="btn btn-dark btn-sm me-1 mb-2 teal-btn"
                                                    data-mdb-toggle="tooltip"
                                                    title="Remove item">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <?php endforeach; ?>
                        <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="fname"
                                   class="form-label">First Name</label>
                            <input type="text"
                                   class="form-control"
                                   id="fname"
                                   name="fname"
                                   placeholder="John">
                        </div>
                        <div class="col">
                            <label for="lname"
                                   class="form-label">Last Name</label>
                            <input type="text"
                                   class="form-control"
                                   id="lname"
                                   name="lname"
                                   placeholder="Doe">
                        </div>
                    </div>


                    <label for="email"
                           class="form-label">Email address</label>
                    <input type="email"
                           class="form-control"
                           id="email"
                           placeholder="name@example.com">
                    <label for="phone"
                           class="form-label">Contact Number</label>
                    <input type="text"
                           class="form-control"
                           id="phone"
                           placeholder="+91 XXXXX XXXXX">
                    <label for="city"
                           class="form-label">City</label>
                    <input type="text"
                           class="form-control"
                           id="city"
                           placeholder="Mumbai">
                    <label for="subject"
                           class="form-label">Subject</label>
                    <input type="text"
                           class="form-control"
                           id="subject"
                           placeholder="Subject">
                    <label for="message"
                           class="form-label">Message</label>
                    <textarea type="text"
                              class="form-control"
                              id="message"
                              placeholder="Message">
                </textarea>
                </div>
                <button class="btn btn-dark teal-btn button"
                        type="submit"
                        onclick="collect_cart_data(event)">Submit Enquiry</button>
            </div>
        </div>
    </div>
    <script>
        function cart_item_message(id, message) {
            var data = new FormData();
            data.append('id', id);
            data.append('item_message', message);

            send_data(data, "cart_item_message")
        }

        function collect_cart_data(e) {
            var fname_input = document.querySelector("#fname");
            if (fname_input.value.trim() == "" || !isNaN(fname_input.value.trim())) {
                alert("Please Enter a Valid First Name");
            }

            var lname_input = document.querySelector("#lname");
            if (lname_input.value.trim() == "" || !isNaN(lname_input.value.trim())) {
                alert("Please Enter a Valid Last Name");
            }

            var phone_input = document.querySelector("#phone");
            if (phone_input.value.trim() == "" || isNaN(phone_input.value.trim())) {
                alert("Please Enter a Valid Contact Number");
            }

            var city_input = document.querySelector("#city");

            var email_input = document.querySelector("#email");
            if (email_input.value.trim() == "") {
                alert("Please Enter a Email");
            }

            var subject_input = document.querySelector("#subject");

            var message_input = document.querySelector("#message");
            if (message_input.value.trim() == "" || !isNaN(message_input.value.trim())) {
                alert("Please Enter a Valid Message");
            }

            var data = new FormData();
            data.append('fname', fname_input.value.trim());
            data.append('lname', lname_input.value.trim());
            data.append('phone', phone_input.value.trim());
            data.append('city', city_input.value.trim());
            data.append('email', email_input.value.trim());
            data.append('subject', subject_input.value.trim());
            data.append('message', message_input.value.trim());
            data.append('ordered', 1);
            data.append('data_type', 'cart_submit');

            send_data(data);
        }

        function edit_quantity(quantity, id) {
            if (isNaN(quantity)) {
                alert("Enter Valid Quantity");
                return;
            }
            data = {
                quantity: quantity.trim(),
                id: id.trim()
            }
            send_data(data, "edit_quantity");
        }

        function delete_item(id) {
            data = {
                id: id.trim()
            }
            send_data(data, "delete_item");
        }

        function send_data(data = {}, data_type = "") {
            var ajax = new XMLHttpRequest();

            ajax.addEventListener('readystatechange', function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    handle_result(ajax.responseText);
                }
            });
            ajax.open('POST', "<?= ROOT ?>ajax_enquiry_cart/" + data_type + "/" + JSON.stringify(data), true);
            ajax.send(data);
        }

        function handle_result(result) {
            console.log(result);
            if (result != "") {
                var obj = JSON.parse(result);
                if (typeof obj.data_type != undefined) {
                    if (obj.data_type == "edit_quantity") {
                        window.location.href = window.location.href;
                    }
                    else if (obj.data_type == "delete_item") {
                        window.location.href = window.location.href;
                    }
                    else if (obj.data_type == "cart_submit") {
                        alert(obj.message);
                        window.location.href = window.location.href;
                    }
                    else if (obj.data_type == "cart_empty") {
                        alert(obj.message);
                    }

                }
            }
        }
    </script>

    <?php $this->view("new_footer", $data); ?>