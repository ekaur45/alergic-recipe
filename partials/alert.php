<script>
    function clearAlert() {
        if ($) {
            $.get('actions/clear-alert.action.php').then(x => {
                console.log("=============", " CLEARED ", "=============");
            });
        }
    }
</script>
<?php
if (!isset($_SESSION))
    session_start();
$alert = "";
if (isset($_SESSION["ERROR"])) {
    $alert = $_SESSION["ERROR"];
}

//var_dump($_SESSION["ERROR"]);
?>

<?php if ($alert) { ?>

    <div class="toast-container position-absolute top-0 end-0 p-3">
        <div class="toast show" id="generic-toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header text-white <?= $alert["type"] == "Error" ? "bg-danger" : "bg-success" ?>">
                <strong class="me-auto"><?= $alert["type"] ?></strong>
                <!-- <small class="text-muted">just now</small> -->
                <!-- <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button> -->
            </div>
            <div class="toast-body <?= $alert["type"] == "Error" ? "alert-danger" : "alert-success" ?>">
                <?= $alert["msg"] ?>
            </div>
        </div>
    </div>
    <script>
        setTimeout(() => {
            let toast = $("#generic-toast");
            toast.hide(500)
            clearAlert();
        }, 3000);
    </script>
<?php } ?>