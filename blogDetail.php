<?php include('./header.php') ?>
<style>
.carousel-slide {
    background: #EEE;
}

.carousel-image {
    display: block;
    height: auto;
    /* set min-width, allow images to set cell width */
    width: 90%;
    margin-right: 10px;
    /* vertically center */
    top: 50%;
    transform: translateY(-50%)
}

@media (max-width: 600px) {
    .carousel-image {
        width: 100%
    }
}

.carousel.is-fullscreen .carousel-image {
    height: auto;
    max-height: 100%;
}

.carousel-slide .flickity-viewport .flickity-prev-next {
    display: none !important;
}

.flickity-prev-next-button {
    height: 0px !important
}

.flickity-page-dots .dot {
    height: 3px !important;
    width: 20px !important;
    border-radius: 0px !important;
}
</style>

<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.css">
<link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css">
<?php include('./navbar.php') ?>
<?php include('./condb.php'); ?>
<?php 
$blogID = $_GET['ID'];
$query = "SELECT * FROM blog b INNER JOIN blog_detail d ON d.blogID = b.blogID WHERE b.blogID = '$blogID'";
$result = mysqli_query($conn, $query);
?>

<div class="blogdetail">
    <div class="container">
        <?php 
        $z = 0;
        foreach($result as $rs) { 
        if($z == 0) {
            $newView = $rs['view'] + 1;
            $sqlUpdate = "UPDATE blog SET view = $newView WHERE blogID = '$blogID'";
            $resultUpdate = mysqli_query($conn, $sqlUpdate);
        ?>
        <h2><?php echo $rs['subject'] ?></h2>
        <?php }  ?>
        <div class="carousel-slide" data-flickity='{ "fullscreen": true, "lazyLoad": 2 , "wrapAround": true}'>
            <?php 
            $queryimg = "SELECT * FROM blog_detail_Banner WHERE blogID = '$blogID' AND blogDesID = $z" ;
            $resultimg = mysqli_query($conn, $queryimg);
            foreach($resultimg as $rsi){
            ?>
            <img class="carousel-image" data-flickity-lazyload="./blog/<?php echo $rsi['blog_banner'] ?>" />
            <?php } ?>
        </div>

        <!-- <div class="blogimgheader">
            <img src="./blog/<?php echo $rs['blog_desktop'] ?>" width="100%" alt="">
        </div> -->
        <div class="textheader">
            <?php if($z == 0) { ?>
            <h5><?php echo strtoupper(date('d M Y', strtotime($rs['date']))); ?></h5>
            <?php } ?>
            <h3><?php echo $rs['subjectDes'] ?></h3>
            <p><?php echo $rs['description'] ?></p>
        </div>
        <?php $z++ ?>
        <?php } ?>
    </div>
</div>
<?php include('./message.php') ?>
<?php include('./contentfooter.php') ?>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
<script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var elem = document.querySelector('.carousel-slide');
    console.log('test')
    var flkty = new Flickity(elem, {
        // options
        cellAlign: 'left',
        contain: true,
        wrapAround: true
    });
}, false);
</script>
<?php include('./footer.php') ?>