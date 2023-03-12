<?php
include_once "../inc/db/connection.php";
?>
<table class="table table-bordered">
    <tr>
        <th>

            Name
        </th>
        <th>
            Description
        </th>
        <th>
            Ingredients
        </th>
        <th>
            Energy
        </th>
        <th>
            Fat
        </th>
        <th>
            Unsaturated Fat
        </th>

        <th>
            Carbohydrates
        </th>

        <th>
            Sugar
        </th>
        <th>
            Protein
        </th>
        <th>
            Salt
        </th>
        <th>
            Action
        </th>
    </tr>
    <?php

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

    $result = __select($sql);
    for ($i = 0; $i < sizeof($result); $i++) {
        $row = $result[$i];
    ?>
        <tr>
            <td class="d-flex align-items-center">
                <img src="<?= $row["file"] ?>" alt="" class="w-54x54">
                <span>
                    <?= $row["name"] ?>
                </span>
            </td>
            <td>
                <?= $row["description"] ?>
            </td>
            <td>
                <?= $row["ingName"] ?>
            </td>
            <td>
                <?= $row["energy"]; ?>
            </td>
            <td>
                <?= $row["fat"]; ?>
            </td>
            <td>
                <?= $row["unSaturatedFat"]; ?>
            </td>
            <td>
                <?= $row["carbohydrates"]; ?>
            </td>
            <td>
                <?= $row["sugar"]; ?>
            </td>
            <td>
                <?= $row["protein"]; ?>
            </td>
            <td>
                <?= $row["salt"]; ?>
            </td>
            <td>
                <div class="align-items-center d-flex justify-content-center">

                    <a href="edit-recipe.php?id=<?= $row["id"] ?>">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <button class="btn btn-delete-recipe" data-id="<?= $row["id"] ?>">
                        <i class="bi bi-trash"></i>
                    </button>

            </td>
            </div>
        </tr>
    <?php
        # code...
    }
    if (sizeof($result) < 1) {
    ?>
        No record found
    <?php
    }
    ?>
</table>
