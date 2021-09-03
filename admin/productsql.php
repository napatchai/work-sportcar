<?php 
print_r($_POST);
    include('../condb.php');
    $type = $_GET['type'];
    if($type == "add"){
        $model = $_POST['model'];
        $condition = $_POST['condition'];
        $price = $_POST['price'];
        $exterior = $_POST['exterior'];
        $productID = generateRandomString().random_int(1000000, 9999999);
        $newNameBannerDes = img('bannerDesktop');
        $newNameBannerMo = img('bannerMobile');
        $newNameBannerDesDes = img('bannerDesktopDes');
        $newNameBannerMoDes = img('bannerMobileDes');

        $sql = "INSERT INTO product (productID, product_desktop, product_Mobile, model, conditionPro, price, detail, detail_Desktop, detail_Mobile) VALUE ('$productID', '$newNameBannerDes', '$newNameBannerMo', '$model', '$condition', '$price', '$exterior', '$newNameBannerDesDes', '$newNameBannerMoDes')";
        $result = mysqli_query($conn, $sql) or die ("Error sql = $sql" . mysqli_error());

        if(is_array($_FILES)){
            foreach ($_FILES['imageproduct']['name'] as $name => $value)  
            {
                  $newnamemoreproduct = imgarray('imageproduct', $name);
                  $sql = "INSERT INTO product_image (productID, productDesID, ImageProDes) VALUE ('$productID', '$name', '$newnamemoreproduct')";
                  $result = mysqli_query($conn, $sql) or die ("Error sql = $sql" . mysqli_error());
            }
        }

        $equipment = count($_POST["equipment"]);  
        if($equipment > 0){
            for($i=0; $i<$equipment; $i++)  
            {
                if(trim($_POST["equipment"][$i] != ''))  
                {  
                    $value = $_POST["equipment"][$i];
                     $sql = "INSERT INTO productHigh (productID, proHighID, highlight) VALUE ('$productID', '$i', '$value')";
                     $result = mysqli_query($conn, $sql) or die ("Error sql = $sql" . mysqli_error());
                     if($result){
                        echo "<script>window.top.window.showResult('1');</script>";
                    }else{
                        echo "<script>window.top.window.showResult('2');</script>";
                    }
                } 
            }
        }
    }

    function img($file){
        $date1 = date("Ymd_His");
        //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
        $numrand = (mt_rand());
        $p_img = (isset($_POST[$file]) ? $_POST[$file] : '');
        @$upload=$_FILES[$file]['name'];
        if($upload != '') {
            //โฟลเดอร์เก็บไฟล์
            $path= "../product/";
            //แยกชื่อและนามสกุลของไฟล์ออกจากกัน
            $type = strrchr($_FILES[$file]['name'], ".");
            //ตั้งชื่อไฟล์ใหม่
            $newname = $numrand.$date1.$type;
            $path_copy = $path.$newname;
            $path_link = "../product/".$newname;
            //คัดลอกไฟล์ไปยังโฟลเดอร์
            move_uploaded_file($_FILES[$file]['tmp_name'], $path_copy);
            return $newname;
        }
        return false;
    }

    function imgarray($file, $name){
        $date1 = date("Ymd_His");
        //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
        $numrand = (mt_rand());
        $p_img = (isset($_POST[$file]) ? $_POST[$file] : '');
        @$upload=$_FILES[$file]['name'][$name];
        if($upload != '') {
            //โฟลเดอร์เก็บไฟล์
            $path= "../product/";
            //แยกชื่อและนามสกุลของไฟล์ออกจากกัน
            $type = strrchr($_FILES[$file]['name'][$name], ".");
            //ตั้งชื่อไฟล์ใหม่
            $newname = $numrand.$date1.$type;
            $path_copy = $path.$newname;
            $path_link = "../product/".$newname;
            //คัดลอกไฟล์ไปยังโฟลเดอร์
            move_uploaded_file($_FILES[$file]['tmp_name'][$name], $path_copy);
            return $newname;
        }
        return false;
    }


    function generateRandomString($length = 3) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>