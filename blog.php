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
    <!-- //? Start New header -->
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
            <div class="col-12 col-sm-10">
                <h4 style="margin-top: 20px">MUDETEC: IN SEARCH OF THE FUTURE</h4>
                <p class="discriptionnew">The Lamborghini Museum has been updated to become Museum
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
        <!-- //? End New header -->
        <!-- //? Start filter -->
        <div class="row" style="margin-top: 20px">
            <div class="col-12">
                Filter >
                <span class="inputfilter">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>All Article</option>
                        <option value="1">New</option>
                        <option value="2">Popular</option>
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
        </div>
        <!-- //? End filter -->

        <!-- //? Start News -->
        <div class="row" style="margin-top: 30px">
            <div class="col-sm-6">
                <img src="./img/bannerblog.png" width="100%" alt="">
            </div>
            <div class="col-sm-6 paddingnews">
                <h5 class="newdescription">28 JULY 2020</h5>
                <h2 class="newssub">MUDETEC: IN SEARCH OF
                    THE FUTURE</h2>
                <div class="readmoreblognews">
                    Read more
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;margin-bottom: 30px">
            <div class="col-sm-6">
                <img src="./img/bannerblog.png" width="100%" alt="">
            </div>
            <div class="col-sm-6 paddingnews">
                <h5 class="newdescription">28 JULY 2020</h5>
                <h2 class="newssub">MUDETEC: IN SEARCH OF
                    THE FUTURE</h2>
                <div class="readmoreblognews">
                    Read more
                </div>
            </div>
        </div>
        <!-- //? End News -->
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