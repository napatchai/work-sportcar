<?php include('./header.php') ?>
<?php include('./navbar.php') ?>
<!-- //? Start Banner -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3500">
            <img src="./img/thridbanner.png" class="d-block w-100" alt="...">

        </div>
    </div>
</div>
<!-- //? End banner -->

<!-- //? Start Contact -->
<div style="margin-top: 50px">
    <div class="row">
        <div class="col-6 Contact">
            <div class="contentContact">
                <p> Lorem Ipsum is simply dummy text of the printing and Ipsum has been the industry’s</p>
                <h1>Contact</h1>
                <div class="test">
                    <span class="footerleft-content-social"><img src="./img/viber.png" class="imgsocialContact"
                            alt=""></span>
                    <span class="footerleft-content-social"><img src="./img/facebook-app-logo.png"
                            class="imgsocialContact" alt=""></span>
                    <span class="footerleft-content-social"><img src="./img/line.png" class="imgsocialContact"
                            alt=""></span>
                    <span class="footerleft-content-social footerrightlast"><img src="./img/instagram.png"
                            class="imgsocialContact" alt=""></span>
                </div>
            </div>

        </div>
        <div class="col-6">
            <?php include('./map.php') ?>
        </div>
    </div>
</div>
<div class="container" style="margin-bottom:70px">
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-3 form">
                    Name
                </div>
                <div class="col-9 form">
                    <input type="text" class="forminput">
                </div>
                <div class="col-3 form">
                    Phone
                </div>
                <div class="col-9 form">
                    <input type="text" class="forminput">
                </div>
                <div class="col-3 form">
                    Email
                </div>
                <div class="col-9 form">
                    <input type="text" class="forminput">
                </div>
                <div class="col-12 form">
                    Requirement or Question
                </div>
                <div class="col-12 form">
                    <textarea name="" id="" class="forminput" style="width: 100%" rows="5"></textarea>
                </div>
            </div>
        </div>
        <div class="col-6" style="margin-top: 20px">
            <div class="row">

                <div class="col-6">
                    <img src="./img/headphones.png" width="50%" class="imgcontact" alt="">
                </div>
                <div class="col-6">
                    <img src="./img/vector-qr-code-sample-isolated_255502-275.png" width="50%" class="imgcontact"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //? End Contact -->
<?php include('./contentfooter.php') ?>
<?php include('./message.php') ?>
<?php include('./footer.php') ?>