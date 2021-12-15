<?php
// ##################### PHP START #####################
    if(isset($_GET['lang'])){

        // Sprachen-Weiche
        $sprache = $_GET['lang'];
    
        switch($sprache) {
            case 'fa': include('farsi.php');
                break;
            case 'jp': include('japanisch.php');
                break;
            default: include('deutsch.php');
        }

    } else {

        // Fallback
        include('deutsch.php');
    }




// ##################### PHP ENDE #####################
?>


<!DOCTYPE html>
<html lang="<?php echo $lang ?>" dir="<?php echo $dir ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $tit ?></title>
</head>

<body>
    <div>
        <a href="index.php?lang=de">deutsch</a> |
        <a href="index.php?lang=fa">فارسی</a> |
        <a href="index.php?lang=jp">日本語</a>
    </div>


    <div>
        <h1><?php echo $weihnachten ?></h1>
        <form action="">

            <input type="text" placeholder="<?php echo $name ?>" name="vorname">

            <br>

            <input type="text" placeholder="<?php echo $alter ?>" name="alter">

            <br>

            <select name="auswahl">
                <option value="0"><?php echo $opt0 ?></option>
                <option value="1"><?php echo $opt1 ?></option>
                <option value="2"><?php echo $opt2 ?></option>
                <option value="3"><?php echo $opt3 ?></option>
            </select>

            <br>
            <br>

            <p><?php echo $wieSollAus ?></p>


            <textarea name="beschreibung"></textarea>

            <br>

            <input type="submit" value="<?php echo $sendWeih ?>">
            
        </form>
    </div>  
    
    <br>
    <br>
    <br>
    <br>
    






<!-- ########## PHP START ########## -->
    <?php
    $h2 = '<h2>Hallo Welt</h2>';
    $x = 'alles Leer hier';
    
    $y = '<p>' . $x . '</p>';
    if($x){   
        echo $h2 . $y;
    }else{
        echo $h2;
    }


    $x = 42;
    echo $x++;


    
    ?>
<!-- ########## PHP ENDE ########## -->
</body>
</html>