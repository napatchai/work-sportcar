<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<div id="datepicker" class="calendar"></div>
<p>Alert the value: <button id="alert">Alert!</button>

    <body>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script>
    $(function() {
        var currentDate = new Date();

        currentDate.setYear(currentDate.getFullYear() + 543);
        $("#datepicker").datepicker({
            firstDay: 1,
            monthNames: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
            ],
            monthNamesShort: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.",
                "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
            ],
            dayNames: ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์"],
            dayNamesShort: ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
            dayNamesMin: ["อา.", "จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
            weekHeader: "Wk",
            dateFormat: "dd/mm/yy",
            showMonthAfterYear: false,
            minDate: 0
        });
    });

    $("#alert").click(function() {
        //alerting the value inside the textbox
        var date = $("#datepicker").datepicker("getDate");
        alert($.datepicker.formatDate("dd-mm-yy", date));
    });
    </script>

</html>