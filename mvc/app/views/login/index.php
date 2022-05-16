<?php 
session_start();
if (isset($_SESSION['user'])) {
    redirect('home');
}

require_once ROOTPATH."views/templates/header.php"
?>

<div class="container-md w-25 vh-100 d-flex align-items-center justify-content-center">
    <form action="<?php echo URLROOT?>Users/login" method="post" class="bg-dark text-white p-5 rounded-3">
        <h2>Login</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <input type="submit" class="btn w-100 btn-primary" value="Sign In">
    </form>
</div>

<?php require_once ROOTPATH."views/templates/footer.php"?>