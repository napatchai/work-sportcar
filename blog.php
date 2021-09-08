<?php include('./header.php') ?>
<?php include('./navbar.php') ?>
<?php 
include('./condb.php');
$query = "SELECT * FROM blog b inner join blog_detail d on d.blogID = b.blogID group by d.blogID ORDER by d.blogDesID asc ";
$resule = mysqli_query($conn, $query);

?>
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
    <?php 
    $z = 0;
    foreach($resule as $row) { 
        if($z == 0){    
    ?>
    <div class="test" style="margin-bottom: 50px">
        <div class="headernew">
            <h2 style="margin-bottom: 20px;margin-top: 20px;font-size: 35px"><?php echo $row['subject'] ?></h2>
            <img src="./blog/<?php echo $row['blog_desktop'] ?>" width="100%" alt="">
        </div>
        <div class="row">
            <div class="col-12">
                <h5 style="margin-top: 20px">
                    <?php echo strtoupper(date('d M Y', strtotime($row['date']))); ?>
                </h5>
            </div>
            <div class="col-12 col-sm-10">
                <a href="./blogDetail.php?ID=<?php echo $row['blogID'] ?>" id="headerlink">
                    <h4 style="margin-top: 20px"><?php echo strtoupper($row['subjectDes']) ?></h4>
                </a>
                <h4 style="margin-top: 20px" id="headerunlink"><?php echo strtoupper($row['subjectDes']) ?></h4>
                <p class="discriptionnew"><?php echo $row['description'] ?></p>
            </div>
            <div class="col-sm-2">
                <a href="./blogDetail.php?ID=<?php echo $row['blogID'] ?>">
                    <div class="readmoreblog">
                        Read more
                    </div>
                </a>
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
        <?php }else { ?>
        <!-- //? Start News -->
        <div class="row" style="margin-top: 30px">
            <div class="col-sm-6">
                <img src="./blog/<?php echo $row['blog_desktop'] ?>" width="100%" alt="">
            </div>
            <div class="col-sm-6 paddingnews">
                <h5 class="newdescription"><?php echo strtoupper(date('d M Y', strtotime($row['date']))); ?></h5>
                <a href="./blogDetail.php?ID=<?php echo $row['blogID'] ?>" id="headerlink">
                    <h2 class="newssub"><?php echo strtoupper($row['subjectDes']) ?></h2>
                </a>
                <h2 class="newssub" id="headerunlink"><?php echo strtoupper($row['subjectDes']) ?></h2>
                <a href="./blogDetail.php?ID=<?php echo $row['blogID'] ?>">
                    <div class="readmoreblognews">
                        Read more
                    </div>
                </a>
            </div>
        </div>
        <?php  } $z++ ?>
        <!-- //? End News -->
        <?php } ?>
    </div>
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
        document.getElementById("bannerblog").src = "./img/bannerblogMobile.png";
        document.getElementById("bannerblog").style.height = "auto";
    } else {
        document.getElementById("bannerblog").src = "./img/bannerblog.png";
    }
}
</script>
<?php include('./footer.php') ?>