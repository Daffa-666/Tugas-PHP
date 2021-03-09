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
                        <li><a href="fibo.php">FIBONACCI</a></li>
                        <li><a href="deretf.php">DERET ARITMATIKA</a></li>
                        <li role="presentation"><a href="#"><i class="glyphicon glyphicon-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <?php
    
    $input1 = "";           
    $input2 = "";           
    $hasil = "";            
    $deret = "";           
    $jmlderet = "";        

    if (isset($_POST['submit'])) {     

        $input1 = $_POST["input1"];
        $input2 = $_POST["input2"];
        $jmlderet = $_POST["jmlderet"];

        //fibonacci

        $a = $input1;
        $b = $input2;
        $n = $jmlderet;

        $deret = $a . ", " . $b;
        for ($i = 0; $i < $n - 2; $i++) {

            $hasil = $a + $b;

            $a = $b;
            $b = $hasil;
            $deret = $deret . ", " . $hasil;
        }
    }
    ?>


    <section class="form">

        <div class="registration-form">
            <form method="POST" action="#">
                <h2>Fibonanci</h2>
                <div class="form-group">

                    <input type="number" class="form-control item" name="input1" placeholder="angka1" value="<?php echo $input1; ?>>
                </div>
                <div class=" form-group">
                    <input type="number" class="form-control item" name="input2" placeholder="angka2" value="<?php echo $input2; ?> >
                </div>
                <div class=" form-group">
                    <input type="number" class="form-control item" name="jmlderet" placeholder="Jumlah deret    " value="<?php echo $jmlderet; ?> >
                </div>
                <div class=" form-group">
                    <button type="submit" name="submit" class="btn btn-block ">Hasil</button>
                </div>
            </form>

            <div class="social-media">
                <br />
                <div class="form-group">
                    <h5> <b>Jumlah : </b> </h5>
                    <h4> <?php echo $deret; ?> </h4>
                </div>
            </div>

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>


</html>


</section>


</body>

</html>