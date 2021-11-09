<?php require_once 'config/system.php'?>
<!DOCTYPE html>
<html lang="tr" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Shopside - Study Case</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./public/images/shop-logo.svg">
    <link href="./public/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Hesabınıza kaydolun</h4>
                                <style> .statusInfo{display: none;}</style>
                                <div class="statusInfo alert alert-info"></div>
                                <form>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Adınız</strong></label>
                                        <input name="name" type="text" class="form-control" placeholder="Adınızı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Soyadınız</strong></label>
                                        <input name="surname" type="text" class="form-control" placeholder="Soyadınızı Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>E-Posta Adresiniz</strong></label>
                                        <input name="email" type="email" class="form-control" placeholder="Eposta Adresinizi Giriniz">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Şifre</strong></label>
                                        <input name="password" type="password" class="form-control" placeholder="******">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button id="register" type="button" class="btn btn-primary btn-block">Kayıt Ol</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Zaten hesabınız var mı? <a class="text-primary" href="./login.php">Giriş Yap</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="./public/vendor/global/global.min.js"></script>
<!--<script src="./public/js/jquery-3.6.0.min.js"></script>-->
<script src="./public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./public/js/custom.min.js"></script>
<script src="./public/js/deznav-init.js"></script>
<script src="./public/js/shopside.js"></script>

</body>
</html>