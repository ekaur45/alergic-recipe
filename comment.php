<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Cleaner</title>
    <?php include_once "inc/shared/head.php"; ?>
</head>

<body>
    <?php include_once "partials/data.partial.php"; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="actions/comment.action.php" method="post">
                            <h4>Leave a comment</h4>
                            <textarea name="comment" class="form-control mb-3" rows="6"></textarea>
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                            <button class="btn btn-success">Leave</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "inc/shared/footer.php"; ?>
    </div>

</body>

</html>