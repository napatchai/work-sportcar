<nav>
    <input type="checkbox" id="check" onclick="calc()">
    <label for="check" class="checkbtn" id="fontcheck">
        <i class="fas fa-bars" id="first" style="line-height: 55px;"></i>
        <i class="fas fa-times" style="display:none;z-index: 99999999;margin-top: 13px" id="cancel1"></i>
    </label>
    <label class="logo">Logo</label>
    <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a href="./product.php">Product</a></li>
        <li><a href="./service.php">Service</a></li>
        <li><a href="./blog.php">Blog</a></li>
        <li><a href="./contact.php">Contact</a></li>
        <li><a href="#">Login </a><span class="btnlogin-sign">|</span><a href="./signup.php">Sign up</a></li>
    </ul>
</nav>

<script>
function calc() {
    var checkvalue = document.getElementById("check").checked
    if (checkvalue) {
        document.getElementById("first").style.display = "none";
        document.getElementById("cancel1").style.display = "block";

    } else {
        document.getElementById("first").style.display = "block";
        document.getElementById("first").style.marginTop = "13px";
        document.getElementById("cancel1").style.display = "none";
    }
}
</script>