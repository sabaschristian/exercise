<?php
session_start();

$username = '';

if(isset($_SESSION['authentication'])){
    $username = $_SESSION['auth_user']['username'];
}

?>

<div class="h-100">
    <div class="row h-100">
        <div class="col-1 bg-danger bg-opacity-75 h-100 px-0 py-1">
            <a href="./dashboard.php"><img class="img-fluid blend d-block mx-auto" src="./images/logo.jpg" alt="Bloodbank"></a>
        </div>
        <div class="col full-height w-100 p-0">
            <nav class="d-flex align-items-center justify-content-between p-2 bg-body-secondary">
                <div class="title px-2">
                    <h2>Dashboard</h2>
                </div>
                <div class="d-flex align-items-center gap-4 px-5">
                    <h6 class="mt-2">Welcome, <?php echo $username ?>!</h6>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </div>
            </nav>
        </div>
    </div>
</div>