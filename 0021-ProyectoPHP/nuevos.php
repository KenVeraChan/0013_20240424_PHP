<?php
    session_start();
    if(isset($_SESSION["nombre"]))
    {
        $counter=$_SESSION["nombre"];
    }
    $con=$_SESSION["nombre"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP RECEPTORA</title>
    <script type="text/javascript">
        var uno=<?php echo json_encode($con)?>
        alert(uno);
    </script>
</head>
<body>
    <div><label><input type="text"></label></div>
</body>
</html>