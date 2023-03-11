<?php
include_once "../inc/db/connection.php";
$sql = "SELECT * FROM ingredients order by id desc";
$ingredients = __select($sql);
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Name
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
                Type
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if ($ingredients && sizeof($ingredients) > 0) {
            for ($i = 0; $i < sizeof($ingredients); $i++) {
                $row = $ingredients[$i];
        ?>
                <tr>
                    <td>
                        <?=$i+1?>
                    </td>
                    <td>
                        <?= $row["name"]; ?>
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
                        <?= $row["type"]; ?>
                    </td>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>