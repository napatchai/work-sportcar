<?php include('./header.php') ?>
<?php include('./navbar.php') ?>
<!-- //? Start Banner -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3500">
            <img src="./img/Hero_Banner.png" class="d-block w-100 imgcoversingup" id="bannersignup" alt="...">
        </div>
    </div>
</div>
<!-- //? End banner -->

<!-- //? Start Content Sing up -->
<form action="">
    <div class="singup">
        <div class="row">
            <div class="col-12 form headsignup">
                <h2>Sign Up</h2>
            </div>
            <div class="col-4 col-sm-2 form">
                Name
            </div>
            <div class="col-8 col-sm-4 form">
                <input type="text" class="forminput">
            </div>
            <div class="col-4 col-sm-2 form surname">
                Surname
            </div>
            <div class="col-8 col-sm-4 form">
                <input type="text" class="forminput">
            </div>
            <div class="col-4 col-sm-2 form">
                Phone
            </div>
            <div class="col-8 col-sm-10 form">
                <input type="text" class="forminput">
            </div>
            <div class="col-4 col-sm-2 form">
                Email
            </div>
            <div class="col-8 col-sm-10 form">
                <input type="text" class="forminput">
            </div>
            <div class="col-4 col-sm-2 form">
                Password
            </div>
            <div class="col-8 col-sm-10 form">
                <input type="text" class="forminput">
            </div>
            <div class="col-4 col-sm-2 form">
                Objective for <br>
                member
            </div>
            <div class="col-8 col-sm-10 form">
                <div class="flex_container">
                    <div class="current_items">
                        <div class="wrapper_input">
                            <input type="radio" name="type-use" id="radio1" checked="checked" value="ใช้รถส่วนบุคคล">
                            <label for="radio1" class="labelradio">Purchase Car</label>
                        </div>
                        <div class="wrapper_input">
                            <input type="radio" name="type-use" id="radio2" value="ใช้รถเพื่อการพาณิชย์">
                            <label for="radio2" class="labelradio">Offer for sale</label>
                        </div>
                        <div class="wrapper_input">
                            <input type="radio" name="type-use" id="radio3" value="ใช้รถเพื่อการพาณิชย์">
                            <label for="radio3" class="labelradio">Dealer</label>
                        </div>
                        <div class="wrapper_input">
                            <input type="radio" name="type-use" id="radio4" value="ใช้รถเพื่อการพาณิชย์">
                            <label for="radio4" class="labelradio">Other</label>
                            <span><input type="text" class="forminputother"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 formsubmit">
                <button type="button" class="btn btn-dark">Submit</button>

            </div>
        </div>
    </div>
</form>
<!-- //? End Content Sing up -->
<?php include('./contentfooter.php') ?>
<script>
var width1 = screen.width;
setimg(width1);

window.addEventListener("resize", function(event) {
    setimg(document.body.clientWidth);
})

function setimg(size) {
    if (size <= 600) {
        document.getElementById("bannersignup").src = "./img/car-5840866_192021.png";
        document.getElementById("bannersignup").style.height = "auto";
    } else {
        document.getElementById("bannersignup").src = "./img/Hero_Banner.png";
    }
}
</script>
<?php include('./footer.php') ?>