<?php include('./header.php') ?>
<?php include('./slidebar.php') ?>

<style>
@import url(https://fonts.googleapis.com/icon?family=Material+Icons);
@import url('https://fonts.googleapis.com/css?family=Raleway');

// variables
$base-color: cadetblue;
$base-font: 'Raleway',
sans-serif;



::-webkit-scrollbar {
    -webkit-appearance: none;
    width: 7px;
}

::-webkit-scrollbar-thumb {
    border-radius: 4px;
    background-color: rgba(0, 0, 0, .5);
    box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}

body {
    font-family: $base-font;
    height: 100vh;
    /* display: flex; */
    /* justify-content: center; */
    /* align-items: center; */
    /* flex-direction: column; */
    background-color: lighten($base-color, 45%);
}

.wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    overflow-x: scroll;
}

.wrappermore {
    display: flex;
    overflow-x: scroll;
}

h1 {
    font-family: inherit;
    margin: 0 0 .75em 0;
    color: desaturate($base-color, 15%);
    text-align: center;
}

.box {
    display: block;
    min-width: 300px;
    height: 300px;
    margin: 10px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    overflow: hidden;
}

.boxadd1 {
    display: block;
    min-width: 300px;
    height: 300px;
    margin: 10px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
    overflow: hidden;
}

.upload-options {
    position: relative;
    height: 75px;
    background-color: $base-color;
    cursor: pointer;
    overflow: hidden;
    text-align: center;
    transition: background-color ease-in-out 150ms;

    &:hover {
        background-color: lighten($base-color, 10%);
    }

    & input {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    & label {
        display: flex;
        align-items: center;
        width: 100%;
        height: 100%;
        font-weight: 400;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        overflow: hidden;

        &::after {
            content: 'add';
            font-family: 'Material Icons';
            position: absolute;
            font-size: 2.5rem;
            color: rgba(230, 230, 230, 1);
            top: calc(50% - 2.5rem);
            left: calc(50% - 1.25rem);
            z-index: 0;
        }

        & span {
            display: inline-block;
            width: 50%;
            height: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            vertical-align: middle;
            text-align: center;

            &:hover i.material-icons {
                color: lightgray;
            }
        }
    }
}


.js--image-preview {
    height: 78%;
    width: 100%;
    position: relative;
    overflow: hidden;
    background-image: url('');
    background-color: white;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

    &::after {
        content: "photo_size_select_actual";
        font-family: 'Material Icons';
        position: relative;
        font-size: 4.5em;
        color: rgba(230, 230, 230, 1);
        top: calc(50% - 3rem);
        left: calc(50% - 2.25rem);
        z-index: 0;
    }

    &.js--no-default::after {
        display: none;
    }

    &:nth-child(2) {
        background-image: url('http://bastianandre.at/giphy.gif');
    }
}

i.material-icons {
    transition: color 100ms ease-in-out;
    font-size: 2.25em;
    line-height: 55px;
    color: white;
    display: block;
}

.drop {
    display: block;
    position: absolute;
    background: transparentize($base-color, .8);
    border-radius: 100%;
    transform: scale(0);
}

.animate {
    animation: ripple 0.4s linear;
}

@keyframes ripple {
    100% {
        opacity: 0;
        transform: scale(2.5);
    }
}
</style>


</head>

<script>
function setBackgroundproduct(id, url) {
    path = "../product/" + url;
    document.getElementById(id).style.backgroundImage = "url(" + path + ")";
}
</script>

<body>
    <?php 
        include('../condb.php');
        $productID = $_POST['productID'];
        $sql = "SELECT * FROM product WHERE productID = '$productID'";
        $result = mysqli_query($conn, $sql) or die ("Error sql = $sql " . mysqli_error());
        $row = mysqli_fetch_array($result);
    ?>
    <form name="add_product" method="post" action="./productsql.php?type=edit" id="add_product" name="frmMain"
        target="iframe_target5" enctype="multipart/form-data">
        <iframe id="iframe_target" name="iframe_target" src="#"
            style="width:0;height:0;border:0px solid #fff;"></iframe>
        <div class="wrapper">
            <div class="box" style="height: 80vh">
                <h4 style="margin-top: 20px;margin-left: 10px">Banner Desktop</h4>
                <div class="js--image-preview" id="bannerDesktop"></div>
                <!-- //Todo set background -->
                <?php echo '<script>setBackgroundproduct("bannerDesktop","' . $row['product_desktop'] .'")</script>' ?>
                <!-- //Todo set background -->
                <div class="upload-options" style="margin-top: 20px;">
                    <label>
                        <input type="file" name="bannerDesktop" class="image-upload form-control" accept="image/*" />
                        <br><br>
                        <br>
                    </label>
                </div>
            </div>
            <div class="box" style="height: 80vh">
                <h4 style="margin-top: 20px;margin-left: 10px">Banner Mobile</h4>
                <div class="js--image-preview" id="bannerMobile"></div>
                <!-- //Todo set background -->
                <?php echo '<script>setBackgroundproduct("bannerMobile","' . $row['product_Mobile'] .'")</script>' ?>
                <!-- //Todo set background -->
                <div class="upload-options" style="margin-top: 20px;">
                    <label>
                        <input type="file" name="bannerMobile" class="image-upload form-control" accept="image/*" />
                        <br><br>
                        <br>
                    </label>
                </div>
            </div>
        </div>
        <div class="price">
            <h2 class="bannertext"><input type="text" class="inputbannertext" placeholder="Model" name="model" id=""
                    value="<?php echo $row['model'] ?>" required></h2>
            <h5 class="pricetext">CONDITION: <span style="font-weight: bold;">
                    <select name="condition" id="" required>
                        <option value="New">New</option>
                        <option value="New">New</option>
                    </select></span> |
                PRICE:
                <input type="number" style="width: 120px" name="price" required value="<?php echo $row['price'] ?>">
                BAHT
            </h5>
        </div>
        <div class="wrappermore" id="imageproduct">
            <div class="boxadd1" style="height: 80vh;text-align: center">
                <div class="boxadd" id="added">
                    <div class="addproducr">+</div>
                </div>
            </div>
            <?php 
                $query = "SELECT * FROM product_image WHERE productID = '$productID' ORDER BY productDesID";
                $resultproductimg = mysqli_query($conn, $query) or die ("Error $sql" . mysqli_error());
                $z = 0;
                foreach($resultproductimg as $rs){
                    $z++;
            ?>
            <div class="box" style="height: 80vh" id="row1<?php echo $rs['productID'].$rs['productDesID']  ?>">
                <h4 style="margin-top: 20px;margin-left: 10px">Image more <span
                        style="float: right;padding-right: 15px;font-size: 20px;cursor: pointer;"> <i
                            class="far fa-trash-alt btn_remove btn_removeimg"
                            id="<?php echo $rs['productID'].$rs['productDesID'] ?>"></i></span></h4>
                <div class="js--image-preview" id="imgloop<?php echo $z ?>"></div>
                <!-- //Todo set background -->
                <?php echo '<script>setBackgroundproduct("imgloop'.$z.'","' . $rs['imageProDes'] .'")</script>' ?>
                <!-- //Todo set background -->
                <div class="upload-options" style="margin-top: 20px;">
                    <label>
                        <input type="file" class="image-upload form-control"
                            name="imageproduct<?php echo $rs['productDesID'] ?>" accept="image/*" />
                        <br><br>
                        <br>
                    </label>
                </div>
            </div>
            <input type="hidden" name="Delete<?php echo $rs['productDesID'] ?>" value=""
                id="delete<?php echo $rs['productID'].$rs['productDesID'] ?>">
            <?php } ?>
        </div>
        <div class="price">
            <h2 class="bannertext">EXTERIOR + INTERIOR</h2>
            <p class="pricetext"><input type="text" name="exterior" style="width: 80%;text-align: center" id=""
                    value="<?php echo $row['detail'] ?>"></p>
        </div>
        <div class="wrapper">
            <div class="box" style="height: 80vh">
                <h4 style="margin-top: 20px;margin-left: 10px">Banner Desktop</h4>
                <div class="js--image-preview" id="detail_Desktop"></div>
                <!-- //Todo set background -->
                <?php echo '<script>setBackgroundproduct("detail_Desktop","' . $row['detail_Desktop'] .'")</script>' ?>
                <!-- //Todo set background -->
                <div class="upload-options" style="margin-top: 20px;">
                    <label>
                        <input type="file" name="bannerDesktopDes" class="image-upload form-control" accept="image/*" />
                        <br><br>
                        <br>
                    </label>
                </div>
            </div>
            <div class="box" style="height: 80vh">
                <h4 style="margin-top: 20px;margin-left: 10px">Banner Mobile</h4>
                <div class="js--image-preview" id="detail_Mobile"></div>
                <!-- //Todo set background -->
                <?php echo '<script>setBackgroundproduct("detail_Mobile","' . $row['detail_Mobile'] .'")</script>' ?>
                <!-- //Todo set background -->
                <div class="upload-options" style="margin-top: 20px;">
                    <label>
                        <input type="file" name="bannerMobileDes" class="image-upload form-control" accept="image/*" />
                        <br><br>
                        <br>
                    </label>
                </div>
            </div>
        </div>

        <div class="price">
            <h2 class="bannertext">EQUIPMENT HIGHLIGHTS</h2>
        </div>

        <!-- //? Start ref -->
        <div class="container" style="margin-bottom: 30px;margin-top: 50px">
            <div class="row" id="detail">
                <div class="col-md-12 ">
                    <div class="ref refadded" id="refadded">
                        + Add New
                    </div>
                </div>
                <?php 
                 $queryhig = "SELECT * FROM productHigh WHERE productID = '$productID' ORDER BY proHighID";
                 $resulthig = mysqli_query($conn, $queryhig) or die ("Error $sql" . mysqli_error());
                 foreach($resulthig as $rsh){
                ?>
                <div class="col-md-6" id="row<?php echo $rsh['productID'].$rsh['proHighID'] ?>">
                    <div class="ref" style="padding-top: 5px">
                        <input type="text" name="equipment<?php echo $rsh['proHighID'] ?>"
                            style="height: 20px;width: 90%" id="" required value="<?php echo $rsh['highlight'] ?>"><span
                            style="margin-left: 10px"><i class="far fa-trash-alt btn_removeDes btn_removeDes2"
                                id="<?php echo $rsh['productID'].$rsh['proHighID'] ?>"></i></span>
                    </div>
                </div>
                <input type="hidden" name="Deletetext<?php echo $rsh['proHighID'] ?>" value=""
                    id="deletetext<?php echo $rsh['productID'].$rsh['proHighID'] ?>">
                <?php } ?>
            </div>
        </div>
        <!-- //? End ref -->
        <br>
        <div class="col-12">
            <div class="btnsave">
                <input type="submit" id="submit" class="btn btn-success"></input>
                <input type="hidden" name="productID" value="<?php echo $row['productID'] ?>">
            </div>
        </div>
        <br>
    </form>
</body>



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
            window.location = "./product.php"
        }, 1500);
    } else if (result == 2) {
        swal("Error", "Some Thing Warnning", "error");
    }
}

function initImageUpload(box) {
    let uploadField = box.querySelector('.image-upload');

    uploadField.addEventListener('change', getFile);

    function getFile(e) {
        let file = e.currentTarget.files[0];
        checkType(file);
    }

    function previewImage(file) {
        let thumb = box.querySelector('.js--image-preview'),
            reader = new FileReader();

        reader.onload = function() {
            thumb.style.backgroundImage = 'url(' + reader.result + ')';
        }
        reader.readAsDataURL(file);
        thumb.className += ' js--no-default';
    }

    function checkType(file) {
        let imageType = /image.*/;
        if (!file.type.match(imageType)) {
            throw 'Datei ist kein Bild';
        } else if (!file) {
            throw 'Kein Bild gewählt';
        } else {
            previewImage(file);
        }
    }

}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
    let box = boxes[i];
    initDropEffect(box);
    initImageUpload(box);
}

function test() {
    var boxes = document.querySelectorAll('.box');

    for (let i = 0; i < boxes.length; i++) {
        let box = boxes[i];
        initDropEffect(box);
        initImageUpload(box);
    }
}


/// drop-effect
function initDropEffect(box) {
    let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;

    // get clickable area for drop effect
    area = box.querySelector('.js--image-preview');
    area.addEventListener('click', fireRipple);

    function fireRipple(e) {
        area = e.currentTarget
        // create drop
        if (!drop) {
            drop = document.createElement('span');
            drop.className = 'drop';
            this.appendChild(drop);
        }
        // reset animate class
        drop.className = 'drop';

        // calculate dimensions of area (longest side)
        areaWidth = getComputedStyle(this, null).getPropertyValue("width");
        areaHeight = getComputedStyle(this, null).getPropertyValue("height");
        maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

        // set drop dimensions to fill area
        drop.style.width = maxDistance + 'px';
        drop.style.height = maxDistance + 'px';

        // calculate dimensions of drop
        dropWidth = getComputedStyle(this, null).getPropertyValue("width");
        dropHeight = getComputedStyle(this, null).getPropertyValue("height");

        // calculate relative coordinates of click
        // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
        x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10) / 2);
        y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10) / 2) - 30;

        // position drop and animate
        drop.style.top = y + 'px';
        drop.style.left = x + 'px';
        drop.className += ' animate';
        e.stopPropagation();

    }
}

function setBackgroundproduct(id, url) {
    document.getElementById("bannerDesktop").style.backgroundImage = "url('../product/11089989220210903_054349.png')";
}
</script>

<script>
$(document).ready(function() {
    var i = 1
    var d = 1
    $('#added').click(function() {
        i++;
        $('#imageproduct').append(
            '<div id="row1' + i +
            '" class="box" style="height: 80vh"><h4 style="margin-top: 20px;margin-left: 10px">Image more <span style = "float: right;padding-right: 15px;font-size: 20px;cursor: pointer;" > <i class ="far fa-trash-alt btn_remove" id = "' +
            i +
            '"></i></span></h4><div class="js--image-preview"></div><div class="upload-options" style="margin-top: 20px;"><label><input type="file" class="image-upload form-control" name="imageproductTest[]" accept="image/*" required /><br><br><br></label></div></div>'
        );
        test();
    });
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row1' + button_id + '').remove();
    });

    $(document).on('click', '.btn_removeimg', function() {
        var button_id = $(this).attr("id");
        $('#delete' + button_id + '').val("Delete");
    });



    $('#refadded').click(function() {
        d++;
        $('#detail').append(
            '<div class="col-md-6 " id="row' + d +
            '"><div class="ref" style="padding-top: 5px"><input type="text" name="equipment[]" style="height: 20px;width: 90%" id="" required><span style="margin-left: 10px"><i class="far fa-trash-alt btn_removeDes" id="' +
            d + '"></i></div></div>'
        );
    });
    $(document).on('click', '.btn_removeDes', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });
    $(document).on('click', '.btn_removeDes2', function() {
        var button_id = $(this).attr("id");
        $('#deletetext' + button_id + '').val("Delete");
    });
});


// $('#submit').click(function() {
//     $.ajax({
//         url: "name.php",
//         method: "POST",
//         data: $('#add_name').serialize(),
//         success: function(data) {
//             alert(data);
//             $('#add_name')[0].reset();
//         }
//     });
// });
</script>

</html>