<?php
include("./processpages/register_process.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="name" value="<?php
                                                                                                    if (isset($name)) {
                                                                                                        echo $name;
                                                                                                    } ?>" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                    <label for="inputFirstName">Full Name</label>
                                                    <span class="text-danger"><?php
                                                                                if (isset($errorarr['error']['name'])) {
                                                                                    echo $errorarr['error']['name'];
                                                                                }
                                                                                ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control"  name="email" value="<?php
                                                                                                            if (isset($email)) {
                                                                                                                echo $email;
                                                                                                            } ?>" type="email" placeholder="Email" />
                                            <label >Email address</label>
                                            <span class="text-danger"><?php
                                                                        if (isset($errorarr['error']['email'])) {
                                                                            echo $errorarr['error']['email'];
                                                                        }
                                                                        ?>
                                            </span>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" name="pass" type="password" placeholder="Create a password" />
                                                    <label for="inputPassword">Password</label>
                                                    <span class="text-danger"><?php
                                                                                if (isset($errorarr['error']['pass'])) {
                                                                                    echo $errorarr['error']['pass'];
                                                                                }
                                                                                ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" name="cpass" type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                    <span class="text-danger"><?php
                                                                                if (isset($errorarr['error']['cpass'])) {
                                                                                    echo $errorarr['error']['cpass'];
                                                                                }
                                                                                ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <input type="submit" class="btn btn-primary" name="submit" value="Create Account">
                                            </div>
                                        </div>
                                    </form>
                                    <?php 
                                    unset($errorarr['error']);
                                    unset($name);
                                    unset($email);
                                    
                                    ?>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>