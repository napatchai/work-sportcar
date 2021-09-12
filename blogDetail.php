<?php include('./header.php') ?>
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
        <div class="blogimgheader">
            <img src="./blog/<?php echo $rs['blog_desktop'] ?>" width="100%" alt="">
        </div>
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
<?php include('./footer.php') ?>