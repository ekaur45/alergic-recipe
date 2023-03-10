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
                    <div class="card-body d-flex">
                        <?php $result = $conn->query("SELECT *, t1.id as glid from grocerylist t1 join ingredients t2 on t1.ingredientid = t2.id where t1.userid =" . $_SESSION["LOGGED_IN"]); ?>
                        <?php if ($result && $result->num_rows > 0) : ?>
                            <ul class="list-unstyled w-100">
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <form action="actions/delete.action.php">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <p class="mb-0">
                                                <?php echo $row["ingredient"]; ?>
                                            </p>
                                            <input type="hidden" name="id" value="<?php echo $row["glid"]; ?>">
                                            <button type="submit" class="btn btn-sm btn-success">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </li>
                                    </form>
                                <?php endwhile; ?>
                            </ul>
                        <?php else: ?>
                            <header>No data</header>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "inc/shared/footer.php"; ?>
    </div>

</body>

</html>