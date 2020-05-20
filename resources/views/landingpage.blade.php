<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD SCB </title>
    <link href="navbar-top.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js.map">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    @import url("https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i&display=swap");

html {
    height: 100%;
    margin: 0
}

body {
    font-family: 'Lato', sans-serif !important;
    background-color: #DEDEDE;
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

header {
    height: 50px;
}

footer {
    height: 50px;
}

.bg-green {
    background-color: #057650;
}

.geser {
    padding-left: 100px;
}

.geserkanan {
    position: absolute;
    right: 100px;
}

.geserkanan a {
    color: #FFF;
}

.geserkanan a:hover {
    color: #7e7a7a;
}

.kotakgaya {
    position: absolute;
    width: 100%;
    height: 125px;
    left: 0px;
    top: 62px;
    background-color: #00593B;
}

.isi {
    padding-top: 25px;
}

.isi h1,
p {
    font-family: "Lato", sans-serif;
    line-height: 25px;
    text-align: center;
    color: #FFF;
}

.card-header {
    text-align: center;
    font-weight: 600;
    font-size: 22px;
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #FFDE59;
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.btn btn-center {
    position: absolute;
    float: center;
}

.form-group .btn-center {
    text-align: center;
}

.container {
    max-width: 60%;
}

.kotakputih {
    position: absolute;
    width: 77%;
    min-height: 30%;
    left: 154px;
    top: 162px;
    background-color: #FFFFFF;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.isikotakputih {
    padding: 40px 100px;
}

.isikotakputih h1 {
    font-family: "Lato", sans-serif;
    font-weight: 600;
    font-size: 24px;
    color: black;
}

.isikotakputih p {
    font-family: "Lato", sans-serif;
    font-weight: 400;
    color: black;
    text-align: justify;
}

footer {
    margin-top: 45%;
    width: 100%;
    height: 63px;
    background-color: #057650;
}

.isifooter {
    color: #FFF;
    display: block;
    padding-top: 22px;
}

.isifooter p {
    font-size: 12px;
    line-height: 1px;
}

.textprofile a {
    color: #000000;
}
.image{
    max-width: 150px;
}

    </style>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-md bg-green">
            <a class="navbar-brand geser" href="./"><img src="./LOGO.png" alt="Logo" class="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav geserkanan">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard"><i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.cendekiabaznas.sch.id/about-us/"><i class="fa fa-info"></i> Tentang SCB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-question-circle"></i> FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Login</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <div class="content">
            <div class="kotakgaya">
                <div class="isi">
                    <h1>Sistem Informasi Akademik</h1>
                    <p>Silahkan Login untuk masuk ke dalam sistem.</p>
                </div>
            </div>
<div class="kotakputih">
            <div class="isikotakputih">
                <h1><i class="fa fa-rss"></i> Selamat Datang</h1>
                <hr>
                <p>Sistem Informasi Akademik SMP Cendekia Baznas adalah portal akademik bagi civitas SMP Cendekia Baznaz. Jika terdapat masalah atau kendala dalam penggunaan Sistem Informasi Akademik SCB, silakan baca FAQ (Frequently Asked Questions).
                </p>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto ">
        <div class="isifooter">
        <p>

            Copyright © SMP Cendekia Baznaz 2020
        </p>
        <p>

            Kp. Cirangkong, Ds. Cemplang - Cibungbulang - Kab. Bogor
        </p>
        </div>
    </footer>


</body>
</html>
