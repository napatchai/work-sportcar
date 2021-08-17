<?php include('./header.php') ?>
<?php include('./navbar.php') ?>
<div class="who">
    <img src="./img/bannerblog.png" alt="Snow" class="bglogin" id="bannerlogin">
    <form action="">
        <div class="centered-login">
            <h2 style="margin-top: 40px">Login</h2>
            <div class="row">
                <div class="col-5 col-sm-3 form" style="padding-left: 50px">
                    Username
                </div>
                <div class="col-7 col-sm-9 form" style="padding-right: 40px">
                    <input type="text" class="forminput">
                </div>
                <div class="col-5 col-sm-3 form" style="padding-left: 50px">
                    password
                </div>
                <div class="col-7 col-sm-9 form" style="padding-right: 40px;text-align: right">
                    <input type="text" class="forminput"><br>
                    <a href="#" style="color: #000">
                        <span style="font-size: 13px">
                            Forgot password
                        </span>
                    </a>
                </div>
                <div class="col-12 formsubmit-login">
                    <button type="button" class="btn btn-dark" style="padding: 6px 22px">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include('./message.php') ?>
<?php include('./contentfooter.php') ?>
<script>
var width1 = screen.width;
setimg(width1);

window.addEventListener("resize", function(event) {
    setimg(document.body.clientWidth);
})

function setimg(size) {
    if (size <= 600) {
        document.getElementById("bannerlogin").src = "./img/bannerblogMobile.png";
    } else {
        document.getElementById("bannerlogin").src = "./img/bannerblog.png";
    }
}
</script>
<?php include('./footer.php') ?>