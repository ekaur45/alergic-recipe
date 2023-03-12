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
            <th>
                Action
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
                        <?= $i + 1 ?>
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
                    <td>
                        <a href="edit-ing.php?id=<?= $row["id"] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <button class="btn btn-delete-ing" data-id="<?= $row["id"] ?>">
                            <i class="bi bi-trash"></i>
                        </button>

                    </td>
                </tr>
        <?php }
        } ?>
    </tbody>
</table>

<script>
    $(".btn-delete-ing").on("click", function(e) {
        let id = $(this).data("id");
        $.ajax("actions/recipe/delete-ing.action.php?id=" + id).then(x => {
            loadIngredients();
        })
    })
</script>