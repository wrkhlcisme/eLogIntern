<?php
session_start();
include_once('../../templates/header.php');
require('../../connect.php');

$reportid = $_GET['reportid'];
$recordFetchDataQuery = "SELECT * FROM record WHERE logid = $reportid";
$getData = mysqli_query($connection, $recordFetchDataQuery);
?>
<div class="">
    <?php while ($data = mysqli_fetch_array($getData)) { ?>
        <form action="../../remarks.php" method="POST" enctype="multipart/form-data">

            <div class="container pt-3">

                <div class="form-group">
                    <label for="casedate">Date</label>
                    <input class="form-control" type="text" name="inputDate" value="<?php echo $data['logdate']; ?>" readonly>

                </div>
                <div class="form-group">
                    <label for="casetime">Report</label>
                    <input class="form-control" type="text" name="inputReport" value="<?php echo $data['logreport']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="casetime">Remarks</label>
                    <input class="form-control" type="text" name="inputRemarks">
                </div>
                <input type="hidden" name="recordId" value="<?php echo $reportid; ?>">
                <div class="container">
                    <div class="float-right">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </div>

        </form>
    <?php } ?>
</div>