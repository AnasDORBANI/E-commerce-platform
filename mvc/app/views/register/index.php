<?php 
session_start();
if (isset($_SESSION['user'])) {
    redirect('home');
}

require_once ROOTPATH."views/templates/header.php"
?>

<div class="container-md w-25 vh-100 d-flex align-items-center justify-content-center">
    <form class="bg-dark text-white p-5 rounded-3" method="post" action= "<?php echo URLROOT?>Users/register">
        <h2>Registering</h2>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <div class="box-container row px-2 gap-3">
                <input class="form-control d-inline-block col inline" type="text" placeholder="First Name"
                    name="fName" erequired>
                <input class="form-control d-inline-block col inline" type="text" placeholder="Last Name"
                    name="lName" erequired>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Username</label>
            <div class="box-container row px-2 gap-3">
                <input class="form-control d-inline-block col inline" type="text" placeholder="Username"
                    name="username" erequired>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <div class="box-container row px-2 gap-3">
                <input class="form-control d-inline-block col inline" type="email" placeholder="Email"
                    name="email" erequired>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="box-container row px-2 gap-3">
                <input class="form-control d-inline-block col inline" type="password" placeholder="Password" name="password" erequired>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Sexe</label>
            <div class="sexe_container d-flex justify-content-around">
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" id="male" name="sexe" value="M" erequired>
                    <label for="form-check-label">Male</label>
                </div>
                <div class="form-check d-inline-block">
                    <input class="form-check-input" type="radio" id="female" name="sexe" value="F" erequired>
                    <label for="form-check-label">Female</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Birthday</label>
            <input class="form-control" type="date" class="date" name="bDay" erequired>
        </div>
        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" placeholder="Enter Your Address" rows="4" name="adresse"
                erequired></textarea>
        </div><!-- 
        <div class="mb-3">
            <label class="form-label">Service</label>
            <select class="form-select" name="service" placeholder="Select your service" erequired>
                <option selected class="fw-bold" value="">Choose a service</option>
                <option value="1">Vente</option>
                <option value="2">Approvisionnement</option>
                <option value="3">Reclamation</option>
            </select>
        </div> -->
        <div class="mb-3 row px-3 gap-3">
            <input class="btn btn-danger col clear" type="reset" value="clear">
            <input class="btn btn-primary col submit" type="submit" value="Submit">
        </div>
    </form>
</div>

<?php require_once ROOTPATH."views/templates/footer.php"?>