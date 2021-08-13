<div class="popup" id="popup-1">
    <div class="overlay" onclick="togglePopup()"></div>
    <div class="content">
        <div class="close-btn-dot" onclick="togglePopup()">...</div>
        <div class="close-btn" onclick="togglePopup()">-</div>
        <h1>Chat with V1</h1>
        <p>V1 สวัสดีค่ะ :) สามารถสอบถามข้อมูล
            ได้เลยนะคะ</p>
        <div class="btn" style="margin-top: 0px;width: 100%">
            <a class="btn btn-primary" style="width: 100%">แชทต่อด้วยชื่อ
                (Facebook Name)</a>
        </div>
    </div>
</div>

<div class="message">
    <img src="./img/messenger.png" width=" 50px" alt="" style="cursor: pointer;" onclick="togglePopup()">
</div>

<script>
function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
}
</script>