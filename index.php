<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Ryzyk Fizyk</title>
    <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Konkurs z Fizyki organizowany przez ZST Leżajsk">
    <meta name="author" content="Kamil Bączek">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
	<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>

<body>
    <header>
        <div class="logo-container">
            <div class="logo"><img src="atom.png" class="img-respnsive" alt=""> RYZYK-FIZYK </div>
        </div>
    </header>
    <nav class="navbar navbar-default navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost/ryzyk_fizyk/?page=main"><i class="fa fa-home" aria-hidden="true"></i> Strona Główna</a></li>
                    <li><a href="http://localhost/ryzyk_fizyk/?page=harmonogram"><i class="fa fa-calendar" aria-hidden="true"></i> Harmonogram</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list" aria-hidden="true"></i> Kategorie <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://localhost/ryzyk_fizyk/?page=kategoria_1">Kategoria I</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://localhost/ryzyk_fizyk/?page=kategoria_2">Kategoria II</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://localhost/ryzyk_fizyk/?page=kategoria_3">Kategoria III</a></li>
                        </ul>
                    </li>
                    <li><a href="http://localhost/ryzyk_fizyk/?page=contact"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Zapisy</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.coprimary-colorntainer-fluid -->
    </nav>
    <main>
        <?php
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }
    else
    {
        $page="main";
    }
    switch($page)
    {
        case "main":
        include("php/main.php");
        break;
        case "harmonogram":
        include("php/harmonogram.php");
        break;
                    case "kategoria_1":
        include("php/kategoria_1.php");
        break;
                                case "kategoria_2":
        include("php/kategoria_2.php");
        break;
                                            case "kategoria_3":
        include("php/kategoria_3.php");
        break;
                                                        case "contact":
        include("php/contact.php");
        break;
        default:
                include("php/main.php");
        break;
    }
    ?>
    </main>
    <footer class="main-footer">
        <div>Zespół Szkół Technicznych im. Tadeusza Kościuszki w Leżajsku ul. Adama Mickiewicza 67</div>
        <div>Copyright &copy; 2017 </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>