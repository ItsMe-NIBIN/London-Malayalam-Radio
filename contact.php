<?php include "./includes/header.php" ?>

<div id="pageWrapper">

    <section class="common-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-banner-contents">
                        <h1>Contact</h1>
                        <p>We built a company that places you and your needs
                            at the centre of everything we do.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="common-banner-wrapper">
                        <div class="common-banner-box common-banner-box--sm">
                            <img src="assets/images/contact-banner-1.png" alt="">
                        </div>
                        <div class="common-banner-box common-banner-box--lg">
                            <img src="assets/images/contact-banner-2.png" alt="">
                        </div>
                        <div class="common-banner-box common-banner-box--sm btm">
                            <img src="assets/images/contact-banner-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="Breadcrumbs">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact </li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-left">
                        <div class="contact-head">
                            <h3>How can we help you?</h3>
                            <p>We’d love to hear what you are working on. Drop us a note here and we’ll get back to you
                                within 24 hours. <br>
                                Required fields are marked *</p>
                            <div class="hint-box">
                                The internet is not a secure medium and the privacy of your data cannot be guaranteed.
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="javascript:void(0);">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-select select" data-select2-id="select2-Service"
                                                aria-label="Default select example" id="select2Service">
                                                <option selected disabled="disabled">Enquiry Type*</option>
                                                <option value="1">India</option>
                                                <option value="2">America</option>
                                                <option value="3">England</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Messages"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input type="checkbox" id="tick1" class="form-check-input">
                                                <label for="tick1" class="form-check-label">Tick this box if you want your details
                                                    to be stored on our database, which may then be used for marketing
                                                    purposes, and tick the boxes to show which option(s) you prefer
                                                    below</label>
                                            </div>
                                            <div class="form-check-wrapper">
                                                <div class="form-check">
                                                    <input type="checkbox" id="phone1" class="form-check-input">
                                                    <label for="phone1" class="form-check-label">Phone</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" id="text1" class="form-check-input">
                                                    <label for="text1" class="form-check-label">Text</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" id="email1" class="form-check-input">
                                                    <label for="email1" class="form-check-label">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="baseBtn hoveranim"><span>SEND</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="contact-right">
                        <div class="contact-address">
                            <h3>London Malayalam Radio</h3>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="assets/images/con-loc.png" alt="">
                                        <span>22, Eismann Way, Corby, <br> Northants,NN17 5ZB</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="assets/images/con-call.png" alt="">
                                        <span class="bold">01536 357806</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="assets/images/con-mail.png" alt="">
                                        <span>info@lilacfinancial.co.uk</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-map">
                            <iframe style="border:0" loading="lazy" allowfullscreen
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://maps.app.goo.gl/LrfpAkuDWc82oX6M8">
                            </iframe>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<!-- SELECT2-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    $(".select").select2({
        minimumResultsForSearch: Infinity,
        theme: "bootstrap-5",
        containerCssClass: "select2--small",
        selectionCssClass: "select2--small",
        dropdownCssClass: "select2--small",
    });
</script>

<?php include "./includes/footer.php" ?>