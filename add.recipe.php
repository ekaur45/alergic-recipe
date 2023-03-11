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

        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ingredients</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Recipe</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li> -->
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div>
                        <?php include_once "./partials/add-ingredient.partial.php"; ?>
                        <div class="row">
                            <div class="col-md-12 overflow-auto" id="ingredient-container">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <?php include_once "./partials/add-recipe.partial.php"?>
                </div>
            </div>

            <?php include_once "inc/shared/footer.php"; ?>

            <script>
                function loadIngredients() {
                    // $("#ingredient-container").load("./partials/ingredients.partial.php", function() {
                    //     console.log("========", " DATA LOADED ", "========")
                    // });
                }
                $(document).ready(function() {

                    loadIngredients();
                    $("#add-ingredient-form").on("submit", function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: e.target.action,
                            method: e.target.method,
                            data: $(e.target).serialize(),
                            success: function() {
                                loadIngredients();
                                e.target.reset();
                            },
                            error: function() {}
                        })
                    })

                    $("#add-recipe-form").on("submit",function(e){
                        e.preventDefault();
                        let ids = [];
                        $("#destination li").each(function(){                            
                            ids.push($(this).data("id"));
                        });
                        $("#ids").val(ids.join(','));
                        $.ajax({
                            url: e.target.action,
                            method: e.target.method,
                            data: new FormData(e.target),
                            cache: false,
    contentType: false,
    processData: false,
                            success: function() {
                                loadIngredients();
                                e.target.reset();
                            },
                            error: function() {}
                        })
                    })
                    $(".source-item").on("click",onIngClick);
                    $(".destination-item").on("click",onDestClick);
                })
                function onDestClick(e){
                    if(!e.currentTarget) return;
                    e.currentTarget.classList.add("source-item");
                    e.currentTarget.classList.remove("destination-item");
                    $("#source").append(e.currentTarget);
                    $("#destination").remove(e.currentTarget);
                    $(".source-item").on("click",onIngClick);
                    $(".destination-item").on("click",onDestClick);
                }
                function onIngClick(e){
                    if(!e.currentTarget) return;
                    e.currentTarget.classList.remove("source-item");
                    e.currentTarget.classList.add("destination-item");
                    $("#destination").append(e.currentTarget);
                    $("#source").remove(e.currentTarget);
                    $(".source-item").on("click",onIngClick);
                    $(".destination-item").on("click",onDestClick);
                }
            </script>
        </div>
    </main>
</body>

</html>