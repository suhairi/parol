<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>jQuery Wan Spinner Plugin Demos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../build/wan-spinner.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <style>
        body { background-color:#ECF0F1; font-family:'Roboto Condensed';}
        .container { margin:150px auto; text-align:center; max-width:640px;}
        h1 { margin-bottom:50px;}
    </style>
</head>

<body>

<div class="container">
    <h1>jQuery Wan Spinner Plugin Demos</h1>
    <div class="wan-spinner wan-spinner-1">
        <a href="javascript:void(0)" class="minus">-</a>
        <input type="text" value="1">
        <a href="javascript:void(0)" class="plus">+</a>
    </div><br>

    <br/>
    <div class="wan-spinner wan-spinner-2">
        <a href="javascript:void(0)" class="minus">-</a>
        <input type="text" value="1">
        <a href="javascript:void(0)" class="plus">+</a>
    </div><br>
    <br>
    <div class="wan-spinner wan-spinner-3">
        <a href="javascript:void(0)" class="minus">-</a>
        <input type="text" value="1">
        <a href="javascript:void(0)" class="plus">+</a>
    </div>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../build/wan-spinner.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                maxValue: 10,
                minValue: -5,
                step: 0.131,
                inputWidth: 100,
                start: -2,
                plusClick: function(val) {
                    console.log(val);
                },
                minusClick: function(val) {
                    console.log(val);
                },
                exceptionFun: function(val) {
                    console.log("excep: " + val);
                },
                valueChanged: function(val) {
                    console.log('change: ' + val);
                }
            }
            $(".wan-spinner-1").WanSpinner(options);
            $(".wan-spinner-2").WanSpinner().css("border-color", "#2C3E50");
            $(".wan-spinner-3").WanSpinner({inputWidth: 100}).css("border-color", "#C0392B");
        });
    </script>
</div>
</body>

</html>
