<?php
include 'includes/header.php';
$page = 'home';
?>
<!-- cart inner sec start here -->
<!-- cart banner start here -->
<section class="inner-banner-wrap">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="desc" data-aos="zoom-in-down" data-aos-duration="3000">
                    <h1>cart</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart banner end here -->

<!-- cart table start here -->
<section class="sec-product-cart">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap table-borderd ">
                        <thead>
                            <tr>
                                <th scope="row"></th>
                                <th scope="col"></th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="product">
                                <td><a href=""><i class="fa-regular fa-xmark"></i></a></td>
                                <td><img src="images/p8.jpg" alt="img" class="img-fluid"></td>
                                <td><a href="product-detail.php" class="btn dummy-btn">dummy product 8</a>
                                </td>
                                <td>$15.00</td>
                                <td><input type="number" name="number" min="0" max="100" step="5" value="1"></td>
                                <td>$15.00</td>
                            </tr>
                            <tr class="contact">
                                <td colspan="6">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <input type="number" name="coupen code" placeholder="copen code"
                                                required="">
                                            <button class="btn apply-btn">Apply coupen</button>
                                        </div>
                                        <button class="btn update-btn ">Update cart</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="cart-details">
                    <div class="cart-total">
                        <h5>Cart totals</h5>
                    </div>
                    <div class="table-responsive table-hover">
                        <table class="table table-striped">
                            <tbody>
                                <div class="total">
                                    <tr class="total">
                                        <th>Subtotal</th>
                                        <td>$15.00</td>
                                    </tr>
                                    <tr class="total">
                                        <th>Total</th>
                                        <td>$15.00</td>
                                    </tr>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="checkout">
                    <a href="checkout.php" class="btn check-btn">proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- cart table end here -->

<!-- cart inner sec end here -->






<?php
include 'includes/footer.php';
$page = 'home';
?>