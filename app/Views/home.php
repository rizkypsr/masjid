<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start" style="height: 915px;">
            <div class="banner-content col-lg-9 col-md-12">
                <div class="card p-4" style="width: 450px;">
                    <form class="booking-form" id="myForm" action="donate.php">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <select name="type" class="app-select form-control" required>
                                    <option data-display="Project you want to donate">Project you want to donate
                                    </option>
                                    <option value="1">Wakaf</option>
                                    <option value="2">Zakat</option>
                                    <option value="3">Infaq</option>
                                </select>
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="fname" placeholder="Masukan nama" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Masukan nama'" class="form-control mt-20" required=""
                                    type="text" required>
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="email" placeholder="Masukkan email"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = 'Masukkan email'"
                                    onblur="this.placeholder = 'Masukkan email...'" class="form-control mt-20"
                                    required="" type="email">
                            </div>
                            <div class="col-lg-12 d-flex flex-column">
                                <input name="amound" placeholder="Jumlah (Rupiah)" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Jumlah (Rupiah)'" class="form-control mt-20" required=""
                                    type="text">

                                <textarea class="form-control mt-20" name="message" placeholder="Pesan"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan'"
                                    required=""></textarea>
                            </div>

                            <div class="col-lg-12 d-flex justify-content-end">
                                <button class="btn btn-success mt-20 text-uppercase ">donate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start about Area -->
<section class="about-area" id="about">
    <div class="container-fluid">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-6 col-md-12 about-left no-padding">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12 about-right">
                <h1>A very Lovely Welcome <br>
                    to our Company</h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                    standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
                    the job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <button class="primary-btn mt-20 text-uppercase ">learn more<span
                        class="lnr lnr-arrow-right"></span></button>
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->

<!-- Start volunteer Area -->
<section class="volunteer-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-80 header-text">
                <h1>Our Volunteers</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    <br> labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-vol">
                    <div class="content">
                        <a href="#" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="img/v1.jpg" alt="">
                            <div class="content-details fadeIn-bottom">
                                <h4>Andy Florence</h4>
                                <p>
                                    inappropriate behavior
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-vol">
                    <div class="content">
                        <a href="#" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="img/v2.jpg" alt="">
                            <div class="content-details fadeIn-bottom">
                                <h4>Andy Florence</h4>
                                <p>
                                    inappropriate behavior
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-vol">
                    <div class="content">
                        <a href="#" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="img/v3.jpg" alt="">
                            <div class="content-details fadeIn-bottom">
                                <h4>Andy Florence</h4>
                                <p>
                                    inappropriate behavior
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 vol-wrap">
                <div class="single-vol">
                    <div class="content">
                        <a href="#" target="_blank">
                            <div class="content-overlay"></div>
                            <img class="content-image img-fluid d-block mx-auto" src="img/v4.jpg" alt="">
                            <div class="content-details fadeIn-bottom">
                                <h4>Andy Florence</h4>
                                <p>
                                    inappropriate behavior
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End volunteer Area -->