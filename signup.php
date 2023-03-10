<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Signup</title>
    <?php include_once "inc/shared/head.php"; ?>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="actions/account/signup.action.php" method="post">
                    <div class="card">
                        <div class="card-header">
                            <h3>Signup</h3>
                        </div>
                        <div class="card-body">
                        <div class="form-group mb-3">
                                <label>Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Lastname</label>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Username</label>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer justify-content-between d-flex">
                        <a href="login.php" class="btn btn-link">Login</a>
                        <button class="btn btn-primary">Signup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once "inc/shared/footer.php"; ?>
</body>

</html>