<?php
session_start();
include_once('../../templates/header.php');
require('../../connect.php');
?>

<div class="">
    <!-- intern view and update-->
    <h1>Journal Intern<h1>
            <table>
                <tr>
                    <th>
                        Date
                    </th>
                    <th>
                        Report
                    </th>
                    <th>
                        Remark from CV
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                <?php

                $id = $_SESSION['id'];
                $viewlog = "SELECT * FROM record where userid =$id";
                $getData = mysqli_query($connection, $viewlog);
                while ($data = mysqli_fetch_array($getData)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $data['logdate']; ?>
                        </td>
                        <td>
                            <?php echo $data['logreport']; ?>
                        </td>
                        <td>
                            <?php echo $data['remark']; ?>
                        </td>
                        <td>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
</div>

<?php
include_once('../../templates/footer.php');
?>