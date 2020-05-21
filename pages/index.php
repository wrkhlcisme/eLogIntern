<?php
session_start();
include_once('../templates/header.php');
require('../connect.php');
?>

<div class="">
    <div class="">
        <form action="../auth.php" method="POST" enctype="multipart/form-data">

            <div class="container pt-3">
                <div class="text-center pb-3">
                    <u>
                        <h2>Login Student</h2>
                    </u>
                </div>
                <div class="form-group">
                    <label for="casedate">Username</label>
                    <input class="form-control" type="text" name="inputUsername" id="inputUsername">

                </div>
                <div class="form-group">
                    <label for="casetime">Password</label>
                    <input class="form-control" type="password" name="inputPassword" id="inputPassword">

                </div>

                <div class="container">
                    <div class="float-right">
                        <input class="btn btn-primary" type="submit">
                    </div>
                </div>

        </form>
    </div>
</div>
<?php
include_once('../templates/footer.php');
?>