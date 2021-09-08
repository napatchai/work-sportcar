<?php include('./header.php') ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<?php include('./navbar.php') ?>
<style>
html {
    scroll-behavior: smooth;
}
</style>
<?php 
include('./condb.php');
$queryProduct = "SELECT * FROM product ORDER BY date asc";
$resultProduct = mysqli_query($conn, $queryProduct);
$numresult = mysqli_num_rows($resultProduct);
?>

<script>
document.addEventListener("DOMContentLoaded", () => {
    document.cookie = "cookieName=" + screen.width;
});
</script>
<?php 
$widthScreen =  (int)$_COOKIE['cookieName'];
$per_page;
if($widthScreen > 1200){
    $per_page = 8;
}elseif($widthScreen <= 1200){
    $per_page = 4;
}
$pages = ceil($numresult/$per_page);
if(@$_GET['page']==""){
    $page="1";
    }else{
    $page=$_GET['page'];
    }
    $start    = ($page - 1) * $per_page;
    $sql     = $queryProduct." LIMIT $start,$per_page";
    $query2=mysqli_query($conn, $sql);
?>
<!-- //? Start Banner -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3500">
            <img src="./img/bannerproduct.png" class="d-block w-100" alt="..." id="bannerproduct">
        </div>
    </div>
</div>
<input type="hidden" name="pages" value="<?php echo $pages ?>" id="pages">
<!-- //? End banner -->
<div class="container1">
    <div class="image-angled image-angled--top"></div>
    <div class="image-angled image-angled--background"></div>
    <div class="image-angled image-angled--text">
        <div class="texttest">
            <p>Lorem Ipsum is simply dummy
                text of the printing and Ipsum
                has been the industry’s</p>
            <h1 class="textproduct">
                Product
            </h1>
        </div>
    </div>
    <div class="image-angled image-angled--bottom"></div>
</div>
<!-- //? Start Filter -->
<div class="content-filter" id="product">
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
</div>

<!-- //? End Filter -->
<!-- //? Start Product -->

<div class="row indexproduct" style="padding-left: 15px" id="result"></div>

<!-- //? Start message -->
<?php include('./message.php') ?>
<!-- //? End message -->
<!-- //? End Product -->
<?php include('./contentfooter.php') ?>
<script>
var width1 = screen.width;
load_data(1)
setimg(width1);

window.addEventListener("resize", function(event) {
    setimg(document.body.clientWidth);
})

function setimg(size) {
    load_data(1)
    if (size <= 600) {
        document.getElementById("bannerproduct").src = "./img/mc20-hero.png";
    } else {
        document.getElementById("bannerproduct").src = "./img/bannerproduct.png";
    }
}

function load_data(page) {

    $.ajax({
        url: "./product_load.php",
        method: "POST",
        data: {
            screenwidth: screen.width,
            page: page

        },
        success: function(data) {
            $('#result').html(data);
        }
    });
}
</script>
<?php include('./footer.php') ?>