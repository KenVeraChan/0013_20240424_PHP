<?php
//ARRAY DE PHP //
$userArray = array('John Doe', 'john@example.com');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
    var users = <?php echo json_encode($userArray); ?>;
    alert(users[0]); //ARRAY DE JAVASCRIPT cuya salida por mensaje web es: "John Doe"
    </script>
</body>
</html>