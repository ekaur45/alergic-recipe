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
            <?php $result = $conn->query("SELECT * from recipe"); ?>
            <?php if ($result && $result->num_rows > 0) : ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo $row["file"]; ?>" alt="" class="w-100">
                                <h3><?php echo $row["name"]; ?></h3>
                                <?php $ingRes = $conn->query("SELECT * from ingredients where `type`='clean' and recipeid='" . $row["id"] . "'") ?>
                                <?php if ($ingRes && $ingRes->num_rows > 0) : ?>
                                <ul class="list-unstyled">
                                <?php while ($rowIng = $ingRes->fetch_assoc()) : ?>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <p class="m-0"><?php echo $rowIng["ingredient"] ?></p>
                                        <button class="btn btn-sm btn-outline-success add-to-grocery" data-id="<?php echo $rowIng["id"] ?>" title="Add to grocery list">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                                <div class="d-flex">
                                <a href="index.php" class="btn btn-outline-success w-100">View Normal</a>
                                <a href="comment.php?id=<?php echo $row["id"];?>" class="btn btn-outline-success w-100">Leave comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php include_once "inc/shared/footer.php"; ?>
    </div>
    <script>
        $(".add-to-grocery").on("click", function() {
            let __id = $(this).data("id");
            window.location.href = "actions/recipe/add-to-list.action.php?id=" + __id;
        })
    </script>
</body>

</html>