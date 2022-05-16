<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        redirect('Users/login');
    }

    require_once ROOTPATH.'views/home/utils/header.php';
?>
<div class="container-md w-25 vh-100 d-flex align-items-center justify-content-center">
    <h1>Welcome, <?php echo $_SESSION['user'] ?></h1>
</div>