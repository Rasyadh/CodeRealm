<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="theme-color" content="#3993bf">
    
    <!-- Site Properties -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url("assets/favicon/apple-touch-icon.png"); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url("assets/favicon/favicon-32x32.png"); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url("assets/favicon/favicon-16x16.png"); ?>">
    <link rel="mask-icon" href="<?= base_url("assets/favicon/safari-pinned-tab.svg"); ?>" color="#3993bf">
    <link rel="manifest" href="/manifest.json">
    <title><?= $title ?> | CodeRealm</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/semantic.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/app.css"); ?>">

    <script src="<?= base_url("assets/js/jquery.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/semantic.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/app.js"); ?>"></script>
    <script src="<?= base_url("assets/js/form-validation.js"); ?>"></script>
</head>

<body>
    <section class="sign-up-in">
        <div id="logo-code-realm">
            <a href="<?= site_url(); ?>">
                <img class="ui centered medium image"  src="<?= base_url("assets/image/logo-code-realm.svg"); ?>">
            </a>
        </div>
        <?= $body; ?>
        <div class="ui text center aligned container" id="copyright">
            <div class="ui horizontal list">
                <div class="item">&copy; 2017 CodeRealm</div>
                <a class="item" href="#">Privacy Police</a>
                <a class="item" href="#">Terms of Use</a>
            </div>
        </div>
    </section>
</body>

</html>