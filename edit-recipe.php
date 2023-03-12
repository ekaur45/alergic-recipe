<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Cleaner | Add</title>
    <?php include_once "inc/shared/head.php"; ?>
</head>

<?php
include_once "inc/db/connection.php";
$id = $_GET["id"];
$recipe_sql = "SELECT t.*,group_concat(t1.ingredient_id) as ingredients FROM recipe t join recipe_ingredients t1 on t.id = t1.recipe_id where t.id = $id;";
$recipes = __select($recipe_sql);

$row1 = $recipes[0];
?>



<body>
    <?php include_once "partials/data.partial.php"; ?>
    <main id="main" style="padding-top: 100px;">
        <form class="form" action="actions/recipe/update-recipe.action.php" method="post" enctype="multipart/form-data" id="edit-recipe-form">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="id" value="<?= $row1["id"]; ?>">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name" name="recipe-name" value="<?= $row1["name"] ?>" id="recipe-name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="file" name="theFile" placeholder="Choose file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <textarea name="recipe-description" placeholder="Description" class="form-control" cols="30" rows="3"><?= $row1["description"] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex w-100 mb-3">
                                    <div class="w-100">
                                        <label>Ingredients</label>
                                        <?php $ings = __select("SELECT * FROM ingredients;") ?>
                                        <ul class="list-group" id="source">

                                            <?php for ($i = 0; $i < sizeof($ings); $i++) {
                                                $row = $ings[$i]; ?>
                                                <li class="list-group-item d-flex justify-content-between source-item sourceno-<?= $row["id"]; ?>" data-id="<?= $row["id"] ?>">
                                                    <?= $row["name"] ?> <span style="border-radius: 50px;" class="badge <?= $row["type"] == "Allergic" ? "bg-danger" : "bg-success" ?>"><?= $row["type"] ?></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="p-3 d-flex flex-column justify-content-center">
                                        <button class="btn btn-sm"><i class="bi bi-arrow-left-circle flex-shrink-0 icon"></i></button>
                                        <button class="btn btn-sm"><i class="bi bi-arrow-right-circle flex-shrink-0 icon"></i></button>
                                    </div>
                                    <div class="w-100">
                                        <label>Included</label>
                                        <ul class="list-group" id="destination">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="ids" name="ids">
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
        <?php include_once "inc/shared/footer.php"; ?>
        <script>
            let ingredients = '<?= $row1["ingredients"]; ?>'.split(',');
            $(document).ready(function() {
                ingredients.map((obj,ndx)=>{
                    let item = $(".sourceno-"+obj);
                   if(item.length>0){
                    item[0].classList.remove("source-item");
                    item[0].classList.add("destination-item");
                    $("#source").remove(item[0]);
                    $("#destination").append(item[0]);
                    $(".source-item").on("click", onIngClick);
                    $(".destination-item").on("click", onDestClick);
                   }
                })

                $("#edit-recipe-form").on("submit", function(e) {
                    e.preventDefault();
                    let ids = [];
                    $("#destination li").each(function() {
                        ids.push($(this).data("id"));
                    });

                    debugger
                    $("#ids").val(ids.join(','));
                    $.ajax({
                        url: e.target.action,
                        method: e.target.method,
                        data: new FormData(e.target),
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function() {
                            window.location.href="add.recipe.php";
                            e.target.reset();
                        },
                        error: function() {}
                    })
                })
                $(".source-item").on("click", onIngClick);
                $(".destination-item").on("click", onDestClick);
            })

            function onDestClick(e) {
                if (!e.currentTarget) return;
                e.currentTarget.classList.add("source-item");
                e.currentTarget.classList.remove("destination-item");
                $("#source").append(e.currentTarget);
                $("#destination").remove(e.currentTarget);
                $(".source-item").on("click", onIngClick);
                $(".destination-item").on("click", onDestClick);
            }

            function onIngClick(e) {
                if (!e.currentTarget) return;
                e.currentTarget.classList.remove("source-item");
                e.currentTarget.classList.add("destination-item");
                $("#destination").append(e.currentTarget);
                $("#source").remove(e.currentTarget);
                $(".source-item").on("click", onIngClick);
                $(".destination-item").on("click", onDestClick);
            }
        </script>
    </main>
</body>

</html>