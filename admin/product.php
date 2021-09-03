<?php 
include('./header.php');
include('./slidebar.php');
include('../condb.php');
$sql = "SELECT * FROM product ORDER BY date asc";
$result = mysqli_query($conn, $sql);
?>

<!-- //?Start pop up Edit -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- <form name="frmMain" method="post" action="./bannersql.php?type=edit" target="iframe_target"
                enctype="multipart/form-data"> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a3 type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    onclick="document.getElementById('formdelete').submit();">Delete</a3>
                <a href="./productAdd.php" type="submit" class="btn btn-primary">Edit</a>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>
<!-- //? End popup Edit -->

<!-- //? Start form delete -->
<form name="frmMain" method="post" id="formdelete" action="./bannersql.php?type=delete" target="iframe_target"
    enctype="multipart/form-data">
    <input type="hidden" name="banner_id1" id="banner_id2">
</form>
<!-- //? End form Delete -->

<div class="height-100">
    <br><br>
    <h4>Manage Product</h4>
    <div class="row">
        <?php foreach($result as $row){  
            //  $subject = "'" . $row['subject'] . "'";
            //  $description = "'" . $row['description'] . "'";
            //  $banner_id = "'" . $row['banner_id'] . "'";
            ?>
        <div class="col-md-4 test">
            <a href="#" data-bs-toggle="modal"
                onclick="setinput(<?php echo  $banner_id . ',' . $subject . ',' . $description . ',' . $row['number'] ?>)"
                data-bs-target="#exampleModal1">
                <div class="managerbanner">
                    <img src="../product/<?php echo $row['product_desktop'] ?>" class="imgbanner" alt="">
                    <div class="detailbanner">
                        <h1><?php echo $row['model'] ?></h1>
                        <!-- <h3><?php echo $row['description'] ?></h3> -->
                    </div>
                </div>
            </a>
        </div>
        <?php }  ?>
        <div class="col-md-4 test">
            <a href="./productAdd.php">
                <div class="managerbanner added">
                    <div class="Addbanner">
                        <h1>+</h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php include('../footer.php') ?>

<script>
document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById("product").classList.add('active')
})

function showResult(result) {
    if (result == 1) {
        swal({
            title: "Save Success",
            type: "success",
            icon: "success",
        });
        setTimeout(function() {
            window.location = "./index.php"
        }, 1500);
    } else if (result == 2) {
        swal("Error", "Some Thing Warnning", "error");
    }
}

function setinput(banner_id, subject, description, number) {
    document.getElementById('subject1').value = subject;
    document.getElementById('description1').value = description;
    document.getElementById('banner_id2').value = banner_id;
    document.getElementById('banner_id').value = banner_id;
    document.getElementById('number').value = number;
}
</script>