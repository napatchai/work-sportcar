<?php include('./header.php') ?>
<?php include('./navbar.php') ?>
<!-- //? Start Banner -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3500">
            <img src="./img/bannerblog.png" class="d-block w-100" alt="..." id="bannerblog">
        </div>
    </div>
</div>
<!-- //? End banner -->
<div class="container" style="margin-top: 50px">
    <h5>NEWS</h5>
    <div class="test">
        <div class="headernew">
            <h2 style="margin-bottom: 20px;margin-top: 20px">V1 Around The World</h2>
            <img src="./img/newsimg.png" width="100%" alt="">
        </div>
        <div class="row">
            <div class="col-12">
                <h5 style="margin-top: 20px">28 JULY 2020</h5>
            </div>
            <div class="col-sm-10">
                <h4 style="margin-top: 20px">MUDETEC: IN SEARCH OF THE FUTURE</h4>
                <p style="width: 60%;margin-top: 20px">The Lamborghini Museum has been updated to become Museum
                    of Technologies, where fascinating history, the iconic models and
                    tours of the production lines tell the story of over 50 years of
                    innovation that project Lamborghini into the future.</p>
            </div>
            <div class="col-sm-2">
                <div class="readmoreblog">
                    Read more
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./contentfooter.php') ?>
<script>
var width1 = screen.width;
setimg(width1);

window.addEventListener("resize", function(event) {
    setimg(document.body.clientWidth);
})

function setimg(size) {
    if (size <= 600) {
        document.getElementById("bannerblog").src = "./img/bannerblogMobile.png";
        document.getElementById("bannerblog").style.height = "auto";
    } else {
        document.getElementById("bannerblog").src = "./img/bannerblog.png";
    }
}
</script>
<?php include('./footer.php') ?>