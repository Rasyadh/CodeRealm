<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>

<?php
if (isset($this->session->userdata['admin_signed_in'])) {
    $email = $this->session->userdata['admin_signed_in']['email'];
} 
else {
    header("location: http://localhost/CodeRealm/admin/");
}
?>

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
    <link rel="manifest" href="<?= base_url("assets/favicon/manifest.json"); ?>">
    <title><?= $title ?> | Admin CodeRealm</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/semantic.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/jquery.dataTables.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/admin.css"); ?>">

    <script src="<?= base_url("assets/js/jquery.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/semantic.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/dataTables.semanticui.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/Chart.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/moment.js"); ?>"></script>
    <script src="<?= base_url("assets/js/admin.js"); ?>"></script>
</head>

<body>
    <div class="pusher">
        <?php include 'admin/partials/header.php'; ?>

        <?= $body; ?>

    </div>
</body>

</html>