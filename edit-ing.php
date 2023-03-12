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
    <main id="main" style="padding-top: 100px;">
        <?php
        include_once "inc/db/connection.php";
        $id = $_GET["id"];
        $ingredient = __select("select * from ingredients where id = $id");
        $row = $ingredient[0];
        ?>
        <form class="form" id="add-ingredient-form" action="actions/recipe/update-ingredient.action.php" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="section-header">
                                <p>Add <span>Ingredients</span></p>
                            </div>
                            <div class="row">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" name="name" value="<?= $row["name"] ?>" id="recipe-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <select type="file" name="type" class="form-control form-select" value="<?= $row["type"] ?>">
                                            <option value="Allergic">Allergic</option>
                                            <option value="Non-allergic">Non Allergic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="number" placeholder="Energy" name="energy" id="recipe" class="form-control" value="<?= $row["energy"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="number" placeholder="Fat" name="fat" id="recipe" class="form-control" value="<?= $row["fat"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="number" placeholder="Unsaturated Fat" name="unSaturatedFat" id="recipe-name" class="form-control" value="<?= $row["unSaturatedFat"] ?>">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="number" placeholder="Carbohydrates" name="carbohydrates" value="<?= $row["carbohydrates"] ?>" id="recipe-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="number" placeholder="Sugar" name="sugar" id="recipe-name" value="<?= $row["sugar"] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="number" placeholder="Protein" name="protein" id="recipe-name" value="<?= $row["protein"] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <input type="number" placeholder="Salt" name="salt" id="recipe-name" value="<?= $row["salt"] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">
                                    <i class="bi bi-plus"></i>
                                    Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>

</html>