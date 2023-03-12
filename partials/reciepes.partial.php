<?php
include_once "../inc/db/connection.php";
$ids = $_GET["ids"];
$sql = "";
if ($ids) {

    $sql = "
    select c1.*,
    sum(t1.energy) energy,
    sum(t1.fat) fat,
    sum(t1.unSaturatedFat) unSaturatedFat,
    sum(t1.carbohydrates) carbohydrates,
    sum(t1.sugar) sugar,
    sum(t1.protein) protein,
    sum(t1.salt)  salt,
    GROUP_CONCAT(t1.name) as ingName
    from recipe c1 
    join 
    recipe_ingredients t on c1.id = t.recipe_id
    JOIN ingredients t1 ON t.ingredient_id = t1.id
     where not exists (
    select 1 from recipe_ingredients WHERE ingredient_id IN ($ids) and recipe_id = c1.id
    )
    group by c1.id
    
        ";
} else {
    $sql = "
    select c1.*,
    sum(t1.energy) energy,
    sum(t1.fat) fat,
    sum(t1.unSaturatedFat) unSaturatedFat,
    sum(t1.carbohydrates) carbohydrates,
    sum(t1.sugar) sugar,
    sum(t1.protein) protein,
    sum(t1.salt)  salt,
    GROUP_CONCAT(t1.name) as ingName
    from recipe c1     
    join 
    recipe_ingredients t on c1.id = t.recipe_id
    JOIN ingredients t1 ON t.ingredient_id = t1.id
    group by c1.id
    ";
}

$result = __select($sql);
for ($i = 0; $i < sizeof($result); $i++) {
    $row = $result[$i];
?>

    <div class="col-lg-4 menu-item">
        <a href="<?= $row["file"] ?>" class="glightbox"><img src="<?= $row["file"] ?>" class="menu-img img-fluid" alt=""></a>
        <h4>
            <?= $row["name"] ?>
        </h4>
        <p class="ingredients">
            <?= $row["description"] ?>
        </p>
        <p class="ingredients">
            <span class="ingredient-items">Ingredients: </span> <?= $row["ingName"] ?>
        </p>
        <p class="price">
        <table class="table table-bordered">
            <tr>
                <th>
                    Energy
                </th>
                <td>
                    <?= $row["energy"]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Fat
                </th>
                <td>
                    <?= $row["fat"]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Unsaturated Fat
                </th>
                <td>
                    <?= $row["unSaturatedFat"]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Carbohydrates
                </th>
                <td>
                    <?= $row["carbohydrates"]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Sugar
                </th>
                <td>
                    <?= $row["sugar"]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Protein
                </th>
                <td>
                    <?= $row["protein"]; ?>
                </td>
            </tr>
            <tr>
                <th>
                    Salt
                </th>
                <td>
                    <?= $row["salt"]; ?>
                </td>
                </thead>
        </table>
        </p>
    </div>
<?php
    # code...
}
if (sizeof($result) < 1) {
?>
    No record found
<?php
}
?>