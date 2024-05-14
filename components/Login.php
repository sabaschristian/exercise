<?php
    include('./db/connection.php');
    include('./controller/LoginController.php');
?>

<main>
    <div class="vh-100 bg-danger bg-opacity-75 position-relative">
        <div class="container w-75 h-75 rounded-2 bg-secondary-subtle position-absolute top-50 start-50 translate-middle p-5">
            <div class="row full-height">
                <div class="col p-0 d-flex flex-column bg-body-secondary rounded-start-2">
                    <div class=" my-auto">
                        <div class="mb-5 px-2">
                            <h1 class="text-center">Admin Login</h1>
                            <p class="text-center">Hey, enter the designated credentials below!</p>
                        </div>
                        <div class="mb-5">
                            <form class="w-75 mx-auto" action="" method="POST">
                                <div class="mb-4">
                                    <label for="exampleInputUsername1" class="form-label">Username</label>
                                    <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp">
                                    <p class="alert fs-6 fw-light text-danger p-1"><?php echo $errors['username']?></p>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>" class="form-control" id="exampleInputPassword1">
                                    <p class="alert fs-6 fw-light text-danger p-1"><?php echo $errors['password']?></p>
                                </div>
                                <button type="submit" name="submit" class="btn btn-danger mx-auto d-block mt-4 ">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col p-0 d-md-block d-none bg-image">
                    <img class="img-fluid h-100 rounded-end-2" src="./images/bloodbank.jpg" alt="Bloodbank">
                </div>
            </div>
        </div>
    </div>
</main>