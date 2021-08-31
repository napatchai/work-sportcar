<?php 
include('./condb.php');
    session_start();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if(isset($_POST['email'])){
        $sql = "SELECT * FROM member WHERE email = '$email' AND password = '$password'" or die ("ERROR: " . mysqli_error());
        $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
        
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION["mem_id"] = $row["mem_id"];
            $_SESSION["Fname"] = $row["Fname"];
            $_SESSION["Lname"] = $row["Lname"];
            $_SESSION["phone"] = $row["phone"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["Objective"] = $row["Objective"];
            $_SESSION["level"] = $row["level"];

            if($row['level'] == '1' ){
                echo "<script>window.top.window.showResult('0');</script>";
            }elseif($row['level'] == '2'){
                echo "<script>window.top.window.showResult('2');</script>";
            }
        }else{
            echo "<script>window.top.window.showResult('1');</script>";
        }
        
    }
?>