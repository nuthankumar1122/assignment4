<html>
<head>
    <title>Time</title>
    
</head>
<body style="background-color: black;color: yellow;">
<p>
    The Current  Time is :
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s A');
    ?>.
</p>
</body>
</html>