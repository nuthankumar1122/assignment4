<html>
<head><title>Random</title></head>
<body>
<p>Number generated randomly is  <?php
    $choice = rand(1, 100);
    echo $choice;
?>.</p><p> And its square root is <?php
    echo round(sqrt($choice),3);
?>.</p>
</body>
</html>