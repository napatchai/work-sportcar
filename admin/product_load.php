<?php 
    include('../condb.php');
    $sqlmore= '';
    if(Strlen($_POST['brand']) > 1 || Strlen($_POST['year']) > 1 || Strlen($_POST['price']) > 1){
        $sqlmore .= " WHERE ";
    }
    if($_POST['brand']){
        $brand = $_POST['brand'];
        $sqlmore .= " brand = '$brand'";
    }
    if($_POST['year']){
        if(Strlen($_POST['brand']) >= 1 ){
            $sqlmore .= " AND ";
        }
        $year = $_POST['year'];
        $sqlmore .= " year = '$year'";
    }
    if($_POST['price'] >= 1){
        $price = $_POST['price'];
        if(Strlen($_POST['brand']) >= 1 || Strlen($_POST['year']) >= 1){
            $sqlmore .= " AND ";
        }
        if($_POST['price'] == 1000000){
            $endprice = 10000000;
            $sqlmore .= "price BETWEEN $price AND $endprice";
        }elseif($_POST['price'] == 10000000){
            $endprice = 20000000;
            $sqlmore .= "price BETWEEN $price AND $endprice";
        }else{
            $endprice = 20000000;
            $sqlmore .= "price >= 20000000";
        }
    }
    $sql = "SELECT * FROM product $sqlmore ORDER BY date desc";
    $result = mysqli_query($conn, $sql);
    @$numresult = mysqli_num_rows($result)
?>

<?php if($numresult > 0) { ?>
<table class="table" id="table1" style="overflow-x:auto;white-space: nowrap;">
    <thead style="color: #4723D9">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Year</th>
            <th scope="col">Price(Bath)</th>
            <th scope="col">Publice at</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        foreach($result as $row) { ?>
        <tr>
            <th scope="row"><a href="../product/<?php echo $row['product_desktop'] ?>" target="_blank"><img
                        src="../product/<?php echo $row['product_desktop'] ?>" width="100px" alt=""></a></th>
            <td class="align-middle"><?php echo $row['brand'] ?></td>
            <td class="align-middle"><?php echo $row['model'] ?></td>
            <td class="align-middle"><?php echo $row['year'] ?></td>
            <td class="align-middle"><?php echo $row['price'] ?></td>
            <td class="align-middle"><?php echo strtoupper(date('d M Y H:m:s', strtotime(@$row['date']))); ?></td>
            <td class="align-middle">
                <form action="./productEdit.php" method="post" id="formedit">
                    <input type="hidden" name="productID" value="<?php echo $row['productID'] ?>" id="productID1">
                    <a style="cursor: pointer;" onclick="document.getElementById('formedit').submit();"><i
                            class="fas fa-edit"></i></a>
                </form>
            </td>
            <td class="align-middle">
                <form action="./productsql.php?type=delete" method="post" id="myForm" target="iframe_target1">
                    <input type="hidden" name="productID" value="<?php echo $row['productID'] ?>" id="productID">
                    <a style="cursor: pointer;" onclick="document.getElementById('myForm').submit();"><i
                            class="far fa-trash-alt"></i></a>
                </form>
            </td>
        </tr>
        <?php }} else {
            echo "<div style='width: 100%;text-align: center'>Data Not Found</div>";
        } ?>
    </tbody>
</table>