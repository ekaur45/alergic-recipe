<form class="form" id="add-ingredient-form" action="actions/recipe/add-ingredient.action.php" method="post">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="section-header">
                        <p>Add <span>Ingredients</span></p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name" id="recipe-name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <select type="file" name="type" class="form-control form-select">
                                    <option value="Allergic">Allergic</option>
                                    <option value="Non-allergic">Non Allergic</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="number" placeholder="Energy" name="energy" id="recipe" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="number" placeholder="Fat" name="fat" id="recipe" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="number" placeholder="Unsaturated Fat" name="unSaturatedFat" id="recipe-name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="number" placeholder="Carbohydrates" name="carbohydrates" id="recipe-name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="number" placeholder="Sugar" name="sugar" id="recipe-name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="number" placeholder="Protein" name="protein" id="recipe-name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <input type="number" placeholder="Salt" name="salt" id="recipe-name" class="form-control">
                            </div>
                        </div>
                    </div>
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