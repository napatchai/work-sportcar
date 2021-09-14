<?php include('./header.php') ?>
<!-- //? Start popup booking -->

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
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 Contact">
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
            <div class="col-12 col-sm-6 mapfirst" style="height: 250px">
                <?php include('./map.php') ?>
            </div>
        </div>
    </div>
</div>
<form action="./sendEmail.php" method="post" name="add_product">
    <div class="container" style="margin-top: 30px">
        <div class="" style="margin-bottom:70px;margin-left: 10px">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-3 form">
                            Name
                        </div>
                        <div class="col-9 form">
                            <input type="text" name="name" class="forminput" required>
                        </div>
                        <div class="col-3 form">
                            Phone
                        </div>
                        <div class="col-9 form">
                            <input type="text" name="phone" class="forminput" required>
                        </div>
                        <div class="col-3 form">
                            Email
                        </div>
                        <div class="col-9 form">
                            <input type="email" name="email" class="forminput" required>
                        </div>
                        <div class="col-12 form">
                            Requirement or Question
                        </div>
                        <div class="col-12 form">
                            <textarea name="message" id="" class="forminput" style="width: 100%" rows="5"
                                required></textarea>
                        </div>
                        <div class="col-12 form" style="text-align: center;">
                            <input type="submit" class="btnsubmit" value="Submit">
                        </div>
                    </div>
                </div>
                <div class="col-12 mapsec" style="height: 200px;margin-top: 40px;margin-bottom: 40px">
                    <?php include('./map1.php') ?>
                </div>
                <div class="col-12 col-sm-6" style="margin-top: 20px;padding: 0px">
                    <div class="row">
                        <div class="col-6">
                            <img src="./img/headphones.png" width="50%" onclick="togglePopupBooking()"
                                class="imgcontact" alt="">
                        </div>
                        <div class="col-6">
                            <img src="./img/vector-qr-code-sample-isolated_255502-275.png" width="50%"
                                class="imgcontact" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="" id="popForm">
    <div class="popupbooking" id="popup-1booking">
        <div class="overlaybooking" onclick="togglePopupBooking()"></div>
        <div class="contentbooking">
            <div class="close-btn-dotbooking" onclick="togglePopupBooking()">...</div>
            <div class="close-btnbooking" onclick="togglePopupBooking()">-</div>
            <p style="margin-bottom: 15px;margin-top: 20px">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry.
            </p>
            <span class="footerleft-content-social"><img src="./img/viber.png" class="imgsocial" alt=""></span>
            <span class="footerleft-content-social"><img src="./img/facebook-app-logo.png" class="imgsocial"
                    alt=""></span>
            <span class="footerleft-content-social"><img src="./img/line.png" class="imgsocial" alt=""></span>
            <div class="calendarcenter">
                <?php include('./testcalendar.php') ?>
            </div>
            <div class="row test1234">
                <div class="col-1 col-sm-2"></div>
                <div class="col-5 col-sm-4">
                    <input type="text" name="Name" id="namepop" required placeholder="Name" class="inputbooking">
                </div>
                <!-- <div class="col-1"></div> -->
                <div class="col-5 col-sm-4">
                    <input type="text" name="phone" id="phone" required placeholder="Phone" class="inputbooking">
                </div>
                <div class="col-1 col-sm-2"></div>
                <input type="hidden" name="Date" id="app">
                <div class="col-1 col-sm-2"></div>
                <div class="col-5 col-sm-4" style="margin-top: 20px">
                    <select name="Time" id="time" class="inputbooking">
                        <option value="">Time</option>
                        <option value="13:00-15:00">13:00-15:00</option>
                        <option value="15:00-18:00">15:00-18:00</option>
                        <option value="18:00-20:00">18:00-20:00</option>
                    </select>
                </div>
                <div class="col-6 col-sm-6"></div>
            </div>
            <div class="col-12 formsubmit" style="margin-bottom: 0px">
                <button type="button" class="btn btn-dark" onclick="SubForm()" style="padding: 6px 22px">Submit</button>
            </div>
        </div>
    </div>
</form>

<!-- //? End Contact -->
<?php include('./contentfooter.php') ?>
<?php include('./message.php') ?>
<?php include('./footer.php') ?>

<script>
function togglePopupBooking() {
    document.getElementById("popup-1booking").classList.toggle("active");
}
</script>