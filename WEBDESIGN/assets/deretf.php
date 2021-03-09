<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FXTRT.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

</head>

<body>

    <section>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container" id="navbar">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand navbar-link"><img src="img/logo.png"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="../index.php">HOME</a></li>
                        <li role="presentation"><a href="#news">NEWS</a></li>
                        <li role="presentation"><a href="#gallery">GALLERY</a></li>
                        <li role="presentation"><a href="#about">ABOUT</a></li>
                        <li><a href="form.html">SIGN IN</a></li>
                        <li role="presentation"><a href="#"><i class="glyphicon glyphicon-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <?php

    $suku1 = "";
    $beda = "";
    $suku_n = "";
    $baris = "";
    $baristampil = "";
    $hasil = "";


    if (isset($_POST['submit'])) {

        $suku1 = $_POST["suku1"];
        $beda = $_POST["beda"];
        $suku_n = $_POST["suku_n"];



        $a = $suku1;
        $b = $beda;
        $n = $suku_n;


        $hasil = $a + ($n - 1) * $b;


        for ($i = 1; $i < $n + 1; $i++) {
            $baris = $a + ($i - 1) * $b;
            $baristampil .= $baris . " ";
        }
    }
    ?>


    <section class="form">

        <div class="registration-form">
            <form method="POST" action="#">
                <h2>Baris Aritmatika</h2>
                <div class="form-group">

                    <input type="number" class="form-control item" name="suku1" placeholder="Suku 1" value="<?php echo $suku1; ?>>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" name="beda" placeholder="Beda" value="<?php echo $beda; ?> >
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item" name="suku_n" placeholder="Suku yang dicari" value="<?php echo $suku_n; ?> >
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-block ">Hasil</button>
                </div>
            </form>

            <div class="social-media">
                <br />
                <div class="form-group">
                    <h5> <b>Suku Ke-N <?php echo $suku_n ?> adalah : </b> </h5>
                    <h4> <?php echo $hasil; ?> </h4>
                </div>

                <div class="form-group">
                    <h5> <b>Baris Aritmatika: </b> </h5>
                    <h4> <?php echo $baristampil; ?> </h4>
                </div>

            </div>
            
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</html>


</section>


</body>

</html>