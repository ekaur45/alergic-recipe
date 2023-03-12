<form class="form" action="actions/recipe/add-recipe.action.php" method="post" enctype="multipart/form-data" id="add-recipe-form">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="recipe-name" id="recipe-name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <input type="file" name="theFile" placeholder="Choose file" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <textarea name="recipe-description" placeholder="Description" class="form-control"  cols="30" rows="3"></textarea>
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
                                        <li class="list-group-item d-flex justify-content-between source-item" data-id="<?=$row["id"]?>" >
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
                            Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>