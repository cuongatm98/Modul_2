<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ứng dụng hiển thị thời gian của server</title>
</head>
<body>
<form>
    <table>
        <h1> Bây giờ là: <?php echo date('Y-M-d h:m:s'); ?> </h1>
        <h2> Bây giờ là: <?php date_default_timezone_set('Asia/Ho_Chi_Minh') ?> </h2>

    </table>

</form>
</body>
</html>
<?php
