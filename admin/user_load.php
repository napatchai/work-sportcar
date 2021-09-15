<?php 
include('../condb.php');
$sqlmore = '';
if($_POST['level'] != '' ){
    $level = $_POST['level'];
    $sqlmore .= " WHERE level = '$level'";
}
?>

<!-- //?Start pop up Edit -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form name="frmMain" method="post" action="./usersql.php?type=edit" target="iframe_target"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <iframe id="iframe_target" name="iframe_target" src="#"
                        style="width:0;height:0;border:0px solid #fff;"></iframe>
                    <label for="">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" required>
                    <br>
                    <label for="">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" required>
                    <br>
                    <label for="">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                    <br>
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <!-- <br>
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" required> -->
                    <input type="hidden" name="mem_id" id="mem_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //? End popup Edit -->

<div class="table-responsive">
    <table class="table" id="table1" style="width: 100%">
        <thead style="color: #4723D9">
            <tr>
                <th style="width:10%">#</th>
                <th style="width:20%">First Name</th>
                <th style="width:20%">Last Name</th>
                <th style="width:20%">Phone</th>
                <th style="width:20%">Email</th>
                <th style="width:5%"></th>
                <th style="width:5%"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                // $quertAdmin = "SELECT * FROM member WHERE level = '1' ORDER BY date DESC";
                $resultAdmin = mysqli_query($conn, "SELECT * FROM member $sqlmore") or die ("Error $quertAdmin" . mysqli_error());
                $i = 0;
                foreach($resultAdmin as $rsa){
                    $i++;
                    $mem_id = "'".$rsa['mem_id']."'";
                    $fname = "'".$rsa['Fname']."'";
                    $lname = "'".$rsa['Lname']."'";
                    $phone = "'".$rsa['phone']."'";
                    $email = "'".$rsa['email']."'";
                ?>
            <tr>
                <td class="align-middle"><?php echo $i ?></td>
                <td class="align-middle"><?php echo $rsa['Fname'] ?></td>
                <td class="align-middle"><?php echo $rsa['Lname'] ?></td>
                <td class="align-middle"><?php echo $rsa['phone'] ?></td>
                <td class="align-middle"><?php echo $rsa['email'] ?></td>
                <td class="align-middle"><a href=""
                        onclick="setvalue(<?php echo $mem_id . ',' . $fname . ',' . $lname . ',' . $phone . ',' . $email ?>)"
                        style="color: #000" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i
                            class="fas fa-edit"></i></a></td>
                <td class="align-middle">
                    <form action="./usersql.php?type=delete" id="deleteform" method="post" target="iframe_target"
                        enctype="multipart/form-data">
                        <input type="hidden" name="mem_id" id="mem_id_delete">
                        <a style="color: #000"
                            onclick="document.getElementById('mem_id_delete').value = <?php echo $mem_id;?>;document.getElementById('deleteform').submit(); ">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
function setvalue(mem_id, fname, lname, phone, email) {
    document.getElementById('mem_id').value = mem_id;
    document.getElementById('fname').value = fname;
    document.getElementById('lname').value = lname;
    document.getElementById('phone').value = phone;
    document.getElementById('email').value = email;

}

function showResult(result) {
    if (result == 1) {
        swal({
            title: "Save Success",
            type: "success",
            icon: "success",
        });
        setTimeout(function() {
            window.location = "./user.php"
        }, 1500);
    } else if (result == 2) {
        swal("Error", "Some Thing Warnning", "error");
    }
}
</script>