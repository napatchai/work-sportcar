<?php 
include('../condb.php');
print_r($_POST);
$type = $_GET['type'];
if($type == 'add'){
    $blogID = generateRandomString().random_int(1000000, 9999999);
    $subjectHead = $_POST['Subject'];
    $sql = "INSERT INTO blog (blogID, subject) VALUE ('$blogID', '$subjectHead')";
    $result = mysqli_query($conn, $sql);
    if(is_array(@$_FILES['bannerDesktop'])){
        foreach ($_FILES['bannerDesktop']['name'] as $name => $value)  
        {
              $newNameBannerDesktop = imgarray('bannerDesktop', $name);
              $newNameBannerMobile = imgarray('bannerMobile', $name);
              $subjectDes = $_POST["subject"][$name];
              $blogDes = $_POST["description"][$name];
               if(strlen($newNameBannerDesktop) > 5 && strlen($newNameBannerDesktop) > 5){
                $sql = "INSERT INTO blog_detail (blogID, blogDesID, blog_desktop, blog_mobile, subjectDes, description) VALUE ('$blogID', '$name', '$newNameBannerDesktop', '$newNameBannerMobile', '$subjectDes', '$blogDes')";
                $result = mysqli_query($conn, $sql) or die ("Error sql = $sql" . mysqli_error());
               }
               if($result){
                echo "<script>window.top.window.showResult('1');</script>";
            }else{
                echo "<script>window.top.window.showResult('2');</script>";
            }
        }
    }
}else if($type == 'delete'){
    $blogID = $_POST['blogID'];
    $sql = "DELETE FROM blog WHERE blogID = '$blogID'";
    $result = mysqli_query($conn, $sql);
    $sql = "DELETE FROM blog_detail WHERE blogID = '$blogID'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>window.top.window.showResult('1');</script>";
    }else{
        echo "<script>window.top.window.showResult('2');</script>";
    }
}

function imgarray($file, $name){
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
    $numrand = (mt_rand());
    $p_img = (isset($_POST[$file]) ? $_POST[$file] : '');
    @$upload=$_FILES[$file]['name'][$name];
    if($upload != '') {
        //โฟลเดอร์เก็บไฟล์
        $path= "../blog/";
        //แยกชื่อและนามสกุลของไฟล์ออกจากกัน
        $type = strrchr($_FILES[$file]['name'][$name], ".");
        //ตั้งชื่อไฟล์ใหม่
        $newname = $numrand.$date1.$type;
        $path_copy = $path.$newname;
        $path_link = "../blog/".$newname;
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