<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Cleaner</title>
    <?php include_once "inc/shared/head.php"; ?>
</head>

<body>
    <?php include_once "partials/data.partial.php"; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex">
                        <?php $result = $conn->query("select * from comments t1 join recipe t2 on t1.rid = t2.id  join accounts t3 on t1.uid = t3.id"); ?>
                        <?php if ($result && $result->num_rows > 0) : ?>
                            <table class="table w-100">
                                <tr>
                                    <th>
                                        User
                                    </th>
                                    <th>
                                        Recipe
                                    </th>
                                    <th>
                                        Comment
                                    </th>
                                </tr>
                                <?php while ($row = $result->fetch_assoc()) : ?>
                                    <form action="actions/delete.action.php">
                                        <tr>
                                            <td>
                                                <?php echo $row["firstName"]; ?> <?php echo $row["lastName"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["name"];?>
                                            </td>
                                            <td>
                                                <?php echo $row["comment"];?>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endwhile; ?>
                                </table>
                        <?php else: ?>
                            <header>No comment</header>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "inc/shared/footer.php"; ?>
    </div>

</body>

</html>