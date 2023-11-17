<?php
include 'includes/header.php';
$page = 'home';
?>
<main>

    <!-- sec-faq-banner start here -->
    <section class="inner-banner-wrap">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc"data-aos="zoom-in-down" data-aos-duration="3000">
                        <h1>Dummy Product</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-faq-banner end here -->

    <section class="product-detail-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="main-img">
                        <a href="images/p8.jpg" class="mb-4 col-6 col-sm-4 img-fluid" data-fancybox="images">
                            <img class="img-fluid" src="images/p8.jpg" alt="img" />
                        </a>
                        <div class="tag">
                            <h5>sale!</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="product-content">
                        <h4 class="title">Dummy Product</h4>
                        <h5 class="price"><span>$20.00</span>$15.00</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="qty-btn-box">
                            <div class="number">
                                <span class="minus min-qty"><i class="fa-regular fa-minus"></i></span>
                                <input type="text" class="form-control" value="1" min="1" max="15" />
                                <span class="plus add-qty"><i class="fa-regular fa-plus"></i></span>
                            </div>
                            <div class="cart-bt">
                                <a href="javascript:;" class="btn btn-cart">add to cart</a>
                            </div>
                        </div>

                        <div class="pro-list">
                            <ul>
                                <li><a href="javascript:;">Home</a></li>
                                <li><i class="fa-regular fa-slash-forward"></i></li>
                                <li><a href="javascript:;">Uncategorized</a></li>
                                <li><i class="fa-regular fa-slash-forward"></i></li>
                                <li>
                                    <p>Dummy Product</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="long-desc-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="tabs-list">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Description
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Reviews (0)</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="desc">
                                    <h5>Description</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="review-content">
                                            <h5>Reviews</h5>
                                            <p>There are no reviews yet.</p>
                                            <div class="reviw-list">
                                                <!-- <div class="review-card">
                                                    <div class="pr-img">
                                                        <img src="images/bg-flower.jpg" alt="img" class="img-fluid">
                                                    </div>
                                                    <div class="pr-desc">
                                                        <ul>
                                                            <li><i class="fa-duotone fa-star"></i></li>
                                                            <li><i class="fa-duotone fa-star"></i></li>
                                                            <li><i class="fa-duotone fa-star"></i></li>
                                                            <li><i class="fa-duotone fa-star"></i></li>
                                                            <li><i class="fa-duotone fa-star"></i></li>
                                                        </ul>
                                                        <h5>Lorem Ipsum</h5>
                                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat
                                                            predefined chunks as necessary, making this the first true
                                                            on the Internet.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="review-form">
                                            <h5>Be the first to review “Dummy Product”</h5>
                                            <form>
                                                <div class="row">
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <h5>Your email address will not be published. Required fields
                                                            are marked<span>*</span></h5>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="rating">
                                                            <h5>Your rating :<span>*</span></h5>
                                                            <ul>
                                                                <li><i class="fa-duotone fa-star"></i></li>
                                                                <li><i class="fa-duotone fa-star"></i></li>
                                                                <li><i class="fa-duotone fa-star"></i></li>
                                                                <li><i class="fa-duotone fa-star"></i></li>
                                                                <li><i class="fa-duotone fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1"
                                                                class="form-label">Your review
                                                                <span>*</span></label>
                                                            <textarea class="form-control" id="" rows="3" placeholder=""
                                                                name=""></textarea>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Name <span>*</span></label>
                                                            <input type="email" class="form-control" id=""
                                                                placeholder="" name="">
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1"
                                                                class="form-label">Email <span>*</span></label>
                                                            <input type="email" class="form-control" id=""
                                                                placeholder="" name="">
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="review">
                                                            <label class="form-check-label" for="review">
                                                                Save my name, email, and website in this browser for
                                                                the next time I comment.
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                                        <div class="review-btn">
                                                            <button type="submit" class="btn btn-review">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sec-home-cart start here -->
    <section class="sec-home-cart related-products">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="cart-title">
                        <h2>Related products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card product-card">
                        <img src="images/p7.jpg" alt="img" class="img-fluid">
                        <div class="cart-details">
                            <h5>Dummy Product 8</h5>
                            <p> <span>$20</span>$15</p>
                            <a href="#" class="btn btn-cart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card product-card">
                        <img src="images/p8.jpg" alt="img" class="img-fluid">
                        <div class="cart-details">
                            <h5>Dummy Product 8</h5>
                            <p><span>$20</span> $15</p>
                            <a href="#" class="btn btn-cart">Add to cart</a>
                            <span class="onsale">sale</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card product-card">
                        <img src="images/p6.jpg" alt="img" class="img-fluid">
                        <div class="cart-details">
                            <h5>Dummy Product 8</h5>
                            <p><span>$20</span>$15 </p>
                            <a href="#" class="btn btn-cart">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card product-card">
                        <img src="images/p5.jpg" alt="img" class="img-fluid">
                        <div class="cart-details">
                            <h5>Dummy Product 8</h5>
                            <p> <span>$20</span>$15</p>
                            <a href="#" class="btn btn-cart">Add to cart</a>
                            <span class="onsale">sale</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec-home-cart end here -->

</main>

<?php
include 'includes/footer.php';
$page = 'home';
?>