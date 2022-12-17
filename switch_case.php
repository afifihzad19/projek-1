<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $buah = "apel";
        switch($buah){
            case "mangga":
                echo "Buah favorit anda adalah mangga";
            break;
            case "jeruk":
                echo "Buah favorit anda adalah jeruk";
            break;
            case "anggur":
                echo "Buah favorit anda adalah anggur";
            break;
            default:
                echo "Buah favorit anda tidak tersedia";
        }
    ?>
</body>
</html>