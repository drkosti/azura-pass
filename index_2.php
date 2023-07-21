<?php
$host = 'localhost';
$port = '8005';
$uzytkownik = htmlspecialchars(@$_POST['nazwa_uzytkownika']);
$haslo = htmlspecialchars(@$_POST['haslo']);
$pmont = '/';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="styl.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>AzuraCast - generator hasła</title>
</head>

<body>

<div class="container">
    <div class="box">
        <h2>AzuraCast - Generator hasła</h2>
        <div class="mb-3">
            <form name="form" action="" method="post">
            <input type="text" class="form-control" name="host" id="host" placeholder="Host/IP" value="<?php echo $host; ?>">
            <input type="text" class="form-control" name="port" id="port" placeholder="Port" value="<?php echo $port;?>">
            <input type="text" class="form-control" name="nazwa_uzytkownika" id="nazwa_uzytkownika" placeholder="Nazwa użytkownika" value="<?php echo $uzytkownik;?>">
            <input type="text" class="form-control" name="haslo" placeholder="TUTAJ ZOSTANIE WYGENEROWANE HASŁO" id="password" value="<?php echo $haslo; ?>" readonly>
            <input type="text" class="form-control" name="pmont" placeholder="Punkt montowania domyślnie '/' sam ukośnik." id="pmont" value="<?php echo $pmont;?>">
            <input type="submit" name="wyslij" value="Generuj info" onclick="genPassword();" class="btn btn-success"/>
            </form>
            


            <form class="row g-3">
            <div class="col-auto">
    <input  id="samohaslo" placeholder="SAMO HASŁO" class="form-control" value="<?php echo $haslo;?>" readonly />
            </div>
            <div class="col-auto">
            <a id="button" class="btn btn-warning kopiujhaslo" onclick="kopiujHaslo()"><i class="fa-regular fa-clipboard"></i> Kopiuj</a>
            </div>
            </form>

        </div>
   
    <h2>Icecast</h2>

<textarea rows="13" id="info1" class="form-control" readonly>
Twoje dane do połączenia (IceCast):
<?php echo "\n"; ?>
IP/Host:<?php echo "\n"; ?><?php echo $host; echo "\n"; ?>
Port:<?php echo "\n"; ?><?php echo $port; echo "\n"; ?>
Nazwa użytkownika:<?php echo "\n"; ?><?php echo $uzytkownik; echo "\n"; ?>
Hasło:<?php echo "\n"; ?><?php echo $haslo; echo "\n"; ?>
Punkt montowania:<?php echo "\n"; ?><?php echo $pmont; echo "\n"; ?>
</textarea>
    <a id="button" class="btn btn-warning" onclick="kopiujInfo1()"><i class="fa-regular fa-clipboard"></i> Kopiuj</a>
            
 
    <h2>Shoutcast</h2>
    
<textarea rows="9" id="info2" class="form-control" readonly>
Twoje dane do połączenia (Shoutcast):
<?php echo "\n"; ?>
IP/Host:<?php echo "\n"; ?><?php echo $host; echo "\n"; ?>
Port:<?php echo "\n"; ?><?php echo $port; echo "\n"; ?>
Hasło:<?php echo "\n"; ?><?php echo $uzytkownik;?>:<?php echo $haslo; echo "\n"; ?>
</textarea>
    <a id="button" class="btn btn-warning" onclick="kopiujInfo2()"><i class="fa-regular fa-clipboard"></i> Kopiuj</a>
    </div>
<footer class="text-center stopka">
    Konrad K. <a href="https://tuxinfo.pl" target="_blank">TuxInfo.pl</a> <a href="https://www.facebook.com/tuxinfopl/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
</footer>
</div>

</body>

<script src="bootstrap.bundle.min.js"></script>
<script src="hasla.js"></script>
</html>
