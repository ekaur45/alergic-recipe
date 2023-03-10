<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Cleaner | Add</title>
    <?php include_once "inc/shared/head.php"; ?>
</head>

<body>
    <?php include_once "partials/data.partial.php"; ?>
    <div class="container">
        <form class="form" action="actions/recipe/add-recipe.action.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-header">Add Recipe</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="recipe-name" id="recipe-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Photo</label>
                                        <input type="file" name="theFile" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">
                                <i class="bi bi-plus"></i>
                                Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="actions/recipe/add-ingredients.acion.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-header">Add Recipe</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label class="control-label">Recipe</label>
                                        <?php
                                        include_once "inc/db/connection.php";
                                        $sql = "select * from recipe;";
                                        $recipesResult = $conn->query($sql);
                                        ?>
                                        <select name="recipe_id" id="" class="form-select">
                                            <?php
                                            if ($recipesResult->num_rows > 0) {
                                                while ($row = $recipesResult->fetch_assoc()) {
                                            ?>
                                                    <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <!-- <input
        type="text"
        class="form-control p-4"
        data-role="tagsinput"
      /> -->
                                    <header class="mb-3">Ingredient</header>
                                    <div id="normal-ingredients-container" class="mb-3">
                                            <div class="alert alert-info w-100">
                                                No Ingredients Added Yet
                                            </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="control-label"></label>
                                        <div class="input-group">
                                            <input type="text" id="normal-ind" class="form-control">
                                            <div class="input-group-text" id="normal-add"><i class="bi bi-plus-lg"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <header class="mb-3">Method</header>
                                    <div id="clean-ingredients-container" class="mb-3">
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="input-group">
                                            <input type="text" id="clean-ind" class="form-control">
                                            <div class="input-group-text" id="clean-add"><i class="bi bi-plus-lg"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">  <i class="bi bi-plus"></i> Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php include_once "inc/shared/footer.php"; ?>

        <script>
            $("#normal-add").on("click", function() {
                var __val = $("#normal-ind").val();

                $("#normal-ingredients-container").append(`    <div class="input-group">
                                            <input type="text" name="normal[]" readonly="readonly"  value='${__val}' class="form-control">
                                            <div class="input-group-text normal-remove" id=""><i class="bi bi-trash-fill"></i></div>
                                        </div>`);
                $("#normal-ind").val('')
                $(".normal-remove").on("click", removeParentDiv)
            });
            $("#clean-add").on("click", function() {
                var __val = $("#clean-ind").val();
                $("#clean-ingredients-container").append(`    <div class="input-group">
                                            <input type="text" name="clean[]" readonly="readonly"  value='${__val}' class="form-control">
                                            <div class="input-group-text clean-remove" id=""><i class="bi bi-trash-fill"></i></div>
                                        </div>`);
                $("#clean-ind").val('')
                $(".clean-remove").on("click", removeParentDiv)
            });

            function removeParentDiv() {
                $(this).parent().remove();
                $(".clean-remove").on("click", removeParentDiv)
            }
        </script>
    </div>
</body>

</html>