<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swict case 2</title>
</head>
<body>
    <?php
        $kendaraan = "Sepeda";
        switch($kendaraan) {
        case "Grab":
            echo "Berangkat pake grab";
        break;
        case "Gojek":
            echo "Berangkat pake gojek";
        break;
        case "Mobil":
            echo "Berangkat pake mobil";
        break;
        case "Sepeda":
            echo "Berangkat pake sepeda";
        break;
        default :
            echo "Saya tidak berangkat";
            break;
        }
    ?>
</body>
</html>