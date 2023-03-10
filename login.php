<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | Login</title>
    <?php include_once "inc/shared/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-3">
                <div class="section-header">
                    <!-- <h2>Book A Table</h2> -->
                    <p>Login <span>to</span> add recipe</p>
                </div>
                <form action="actions/account/login.action.php" method="post">
                    <div class="card">
                        <div class="card-body light-bg pt-5">
                            <div class="form-group mb-3">
                                <input type="text" name="username" placeholder="Username" id="username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" name="password" id="password" class="form-control">
                            </div>
                            <div class="justify-content-center d-flex">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once "inc/shared/footer.php"; ?>
</body>

</html>