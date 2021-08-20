<?php include('./header.php'); ?>
<?php include('./navbar.php') ?>
<!-- //? Start Image Slide -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class=" active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <!-- //todo Start banner Desktop -->
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3500">
            <img src="./img/Firstbanner.png" class="test d-block w-100 imgdesktop" alt="...">
            <img src="./img/Hero_bannerMobile1.png" class="test d-block w-100 imgmobile" alt="...">
            <div class="carousel-caption  d-md-block">
                <h1>BUGATTI CHIRON</h1>
                <h5>The ultimate tourisme</h5>
                <a href="">
                    <div class="readmore">
                        Read more
                    </div>
                </a>
            </div>

        </div>
        <div class="carousel-item" data-bs-interval="3500">
            <img src="./img/Seconebanner.png" class="test d-block w-100 imgdesktop" alt="...">
            <img src="./img/Hero_bannerMobile1.png" class="test d-block w-100 imgmobile" alt="...">
            <div class="carousel-caption d-md-block">
                <h1>BUGATTI CHIRON</h1>
                <h5>The ultimate tourisme</h5>
                <a href="">
                    <div class="readmore">
                        Read more
                    </div>
                </a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3500">
            <img src="./img/thridbanner.png" class="d-block w-100 imgdesktop" alt="...">
            <img src="./img/Hero_bannerMobile1.png" class="test d-block w-100 imgmobile" alt="...">
            <div class="carousel-caption d-md-block">
                <h1>BUGATTI CHIRON</h1>
                <h5>The ultimate tourisme</h5>
                <a href="">
                    <div class="readmore">
                        Read more
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- //todo End banner Desktop -->
</div>
<!-- //? End Image Slide -->
<!-- //? Start Who -->
<div class="who">
    <img src="./img/wh.png" alt="Snow" class="imgwho">
    <div class="centered">
        Lorem Ipsum is simply dummy text <br>
        of the printing and typesetting industry. <br>
        Lorem Ipsum has been the industry’s standard dummy <br>
        text ever since the 1500s, when an <br>
        <div class="content-iconwho">
            <div class="row">
                <div class="col-4">
                    <a href="./product.php">
                        <img src="./img/supercar.png" width="100%" class="iconwho" alt="">
                    </a>
                </div>
                <div class="col-4">
                    <a href="./service.php">
                        <img src="./img/fix.png" width="100%" class="iconwho" alt="">
                    </a>
                </div>
                <div class="col-4">
                    <a onclick="togglePopupBooking()">
                        <img src="./img/headphones.png" width="100%" class="iconwho" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //? End Who -->

<!-- //? Start Filter -->
<!-- <div class="content-filter">
    <div class="filter">
        Filter > <span class="inputfilter">
            <span class="inputfilter">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Brand</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </span>
            <span class="inputfilter">/</span>
            <span class="inputfilter">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Year</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </span>
            <span class="inputfilter">/</span>
            <span class="inputfilter">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Price</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </span>
    </div>
</div> -->
<!-- //? End Filter -->
<!-- //? start index product -->




<div id="carouselExampleControls" class="carousel slide slide1" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <div class="row indexproduct">
                <div class="col-6 col-xl-3" style="padding-left: 20px">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <div class="product-content">
                        <label for="" class="labelmed">You’re not like everyone else</label> <br>
                        <p class="pevent">The masterful combination of style, power, sporty,<br>
                            handing, and comfort </p>
                        <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>
                    </div>
                    <div class="discovermore">
                        Discover more
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <div class="product-contentend">
                        <label for="" class="labelmed">You’re not like everyone else</label> <br>
                        <p class="pevent">The masterful combination of style, power, sporty,<br>
                            handing, and comfort </p>
                        <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>
                    </div>
                    <div class="discovermore">
                        Discover more
                    </div>
                </div>
                <div class="col-6 col-xl-3 productshownone">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <div class="product-content">
                        <label for="" class="labelmed">You’re not like everyone else</label> <br>
                        <p class="pevent">The masterful combination of style, power, sporty,<br>
                            handing, and comfort </p>
                        <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>
                    </div>
                    <div class="discovermore">
                        Discover more
                    </div>
                </div>
                <div class="col-6 col-xl-3 productshownone">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <!-- <div class="product-content"> -->
                    <label for="" class="labelmed">You’re not like everyone else</label> <br>
                    <p class="pevent">The masterful combination of style, power, sporty,<br>
                        handing, and comfort </p>
                    <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>

                    <div class="discovermore">
                        Discover more
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <div class="row indexproduct">
                <div class="col-6 col-xl-3" style="padding-left: 20px">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <div class="product-content">
                        <label for="" class="labelmed">You’re not like everyone else</label> <br>
                        <p class="pevent">The masterful combination of style, power, sporty,<br>
                            handing, and comfort </p>
                        <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>
                    </div>
                    <div class="discovermore">
                        Discover more
                    </div>
                </div>
                <div class="col-6 col-xl-3">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <div class="product-contentend">
                        <label for="" class="labelmed">You’re not like everyone else</label> <br>
                        <p class="pevent">The masterful combination of style, power, sporty,<br>
                            handing, and comfort </p>
                        <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>
                    </div>
                    <div class="discovermore">
                        Discover more
                    </div>
                </div>
                <div class="col-6 col-xl-3 productshownone">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <div class="product-content">
                        <label for="" class="labelmed">You’re not like everyone else</label> <br>
                        <p class="pevent">The masterful combination of style, power, sporty,<br>
                            handing, and comfort </p>
                        <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>
                    </div>
                    <div class="discovermore">
                        Discover more
                    </div>
                </div>
                <div class="col-6 col-xl-3 productshownone">
                    <label for="" class="labelproduct">Ghibli</label> <br>
                    <!-- <div class="product-content"> -->
                    <label for="" class="labelmed">You’re not like everyone else</label> <br>
                    <p class="pevent">The masterful combination of style, power, sporty,<br>
                        handing, and comfort </p>
                    <img src="./img/gh_front.png" width="100%" style="padding: 20px" alt=""> <br>

                    <div class="discovermore">
                        Discover more
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- 
<div class="row indexproduct">
    <div class="col-6 col-xl-3" style="padding-left: 20px">
        <label for="" class="labelproduct">Ghibli</label> <br>
        <div class="product-content">
            <label for="" class="labelmed">You’re not like everyone else</label> <br>
            <p class="pevent">The masterful combination of style, power, sporty,<br>
                handing, and comfort </p>
            <img src="./img/gh_front.png" width="100%" alt=""> <br>

            <div class="discovermore">
                Discover more
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-3">
        <label for="" class="labelproduct">Ghibli</label> <br>
        <div class="product-contentend">
            <label for="" class="labelmed">You’re not like everyone else</label> <br>
            <p class="pevent">The masterful combination of style, power, sporty,<br>
                handing, and comfort </p>
            <img src="./img/gh_front.png" width="100%" alt=""> <br>

            <div class="discovermore">
                Discover more
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-3 productshownone">
        <label for="" class="labelproduct">Ghibli</label> <br>
        <div class="product-content">
            <label for="" class="labelmed">You’re not like everyone else</label> <br>
            <p class="pevent">The masterful combination of style, power, sporty,<br>
                handing, and comfort </p>
            <img src="./img/gh_front.png" width="100%" alt=""> <br>

            <div class="discovermore">
                Discover more
            </div>
        </div>
    </div>
    <div class="col-6 col-xl-3 productshownone">
        <label for="" class="labelproduct">Ghibli</label> <br>
        <label for="" class="labelmed">You’re not like everyone else</label> <br>
        <p class="pevent">The masterful combination of style, power, sporty,<br>
            handing, and comfort </p>
        <img src="./img/gh_front.png" width="100%" alt=""> <br>

        <div class="discovermore">
            Discover more
        </div>
    </div>
</div> -->
<!-- //? end index product -->
<!-- //? Start image before footer -->
<div class="containerimglast">
    <div class="row" style="border: 0px solid #707070">
        <div class="col-12" id="rightclone" style="padding: 0px">
            <img src="./img/car-5840866_192021.png" width="100%" height="100%" style="object-fit: cover;" alt="">
        </div>
        <div class="col-12 col-sm-6" style="padding: 0px">
            <div class="row" style="padding: 0px;margin-left: 0px">
                <div class="col-6 col-sm-12">
                    <img src="./img/car-1376083_1920.png" width="100%" alt="" class="imgfooterleft">
                </div>
                <div class="col-6 col-sm-12">
                    <img src="./img/porsche-4795520_1920.png" width="100%" alt="" class="imgfooterright">
                </div>
            </div>
        </div>
        <div class="col-6" id="rightimg">
            <img src="./img/car-5840866_1920.png" width="100%" height="100%" style="object-fit: cover;" alt="">
        </div>
    </div>
</div>
<!-- //? End image before footer -->

<!-- //? Start popup booking -->
<div class="popupbooking" id="popup-1booking">
    <div class="overlaybooking" onclick="togglePopupBooking()"></div>
    <div class="contentbooking">
        <div class="close-btn-dotbooking" onclick="togglePopupBooking()">...</div>
        <div class="close-btnbooking" onclick="togglePopupBooking()">-</div>
        <p style="margin-bottom: 15px;margin-top: 20px">Lorem Ipsum is simply dummy text of the printing
            and typesetting industry.
        </p>
        <span class="footerleft-content-social"><img src="./img/viber.png" class="imgsocial" alt=""></span>
        <span class="footerleft-content-social"><img src="./img/facebook-app-logo.png" class="imgsocial" alt=""></span>
        <span class="footerleft-content-social"><img src="./img/line.png" class="imgsocial" alt=""></span>
        <div class="calendarcenter">
            <?php include('./testcalendar.php') ?>
        </div>
        <div class="row test1234">
            <div class="col-6">
                <input type="text" required placeholder="Name" class="inputbooking">
            </div>
            <div class="col-6">
                <input type="text" required placeholder="Phone" class="inputbooking">
            </div>
            <div class="col-6" style="margin-top: 20px">
                <select name="" id="" class="inputbooking">
                    <option value=""></option>
                    <option value="">one</option>
                    <option value="">two</option>
                </select>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="col-12 formsubmit" style="margin-bottom: 0px">
            <button type="button" class="btn btn-dark" style="padding: 6px 22px">Submit</button>

        </div>
    </div>
</div>

<div class="message">
    <img src="./img/messenger.png" width=" 50px" alt="" style="cursor: pointer;" onclick="togglePopup()">
</div>
<!-- //? End popup booking -->

<!-- //? Start footer -->
<?php include('./contentfooter.php') ?>
<!-- //? End footer -->

<!-- //? Start popup message -->
<?php include('./message.php') ?>
<!-- //? pop message -->
<script>
var width1 = screen.width;
setimg(width1);

window.addEventListener("resize", function(event) {
    setimg(document.body.clientWidth);
})

function setimg(size) {
    if (size <= 600) {
        document.getElementById("rightimg").style.display = "none";
        document.getElementById("rightclone").style.display = "block";
    } else {
        document.getElementById("rightimg").style.display = "block";
        document.getElementById("rightclone").style.display = "none";
    }
}
</script>

<script>
function togglePopupBooking() {
    document.getElementById("popup-1booking").classList.toggle("active");
}
</script>
<?php include('./footer.php'); ?>