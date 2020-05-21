<?php
session_start();
include_once('../../templates/header.php');
require('../../connect.php');
?>

<div class="">
    <!-- Update -->
    <h1>Update my Journal today</h1>
    <div class="">
        <div class="">
            <form action="../../addreport.php" method="POST" enctype="multipart/form-data">

                <div class="container pt-3">
                    <div class="form-group">
                        <label for="casedate">logdate</label>
                        <input class="form-control" type="date" name="inputDate" id="inputDate">

                    </div>
                    <div class="form-group">
                        <label for="casetime">Journal</label>
                        <input class="form-control" type="text" name="inputReport" id="inputReport">

                    </div>

                    <div class="container">
                        <div class="float-right">
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </div>

            </form>
        </div>
    </div>
</div>

<?php
include_once('../../templates/footer.php');
?>