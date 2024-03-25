<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table Generator</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('style/homeworkmultiply.css') }}" />

</head>
<body>

<h2>ตารางแสดงแม่สูตรคูณ</h2>
<div class="container">
<label for="number">ป้อนตัวเลข</label>
<input type="number" id="number" name="number">
<button id="generate">แสดงผลลัพธ์ </button>
</div>

<div id="table-container"></div>

<script>
$(document).ready(function(){
    $("#generate").click(function(){
        var number = $("#number").val();
        if(number !== "") {
            var table = "<h3>แม่สูตรคูณของ  " + number + "</h3>";
            table += "<table>";
            table += "<th>สูตรคูณ</th><th>ผลลัพธ์</th></tr>";
            for(var i = 1; i <= 12; i++) {
                table += "<tr><td>" + number + " x " + i + "</td><td>" + (number * i) + "</td></tr>";
            }
            table += "</table>";
            $("#table-container").html(table);
        } else {
            alert("Please enter a number.");
        }
    });
});
</script>

</body>
</html>
