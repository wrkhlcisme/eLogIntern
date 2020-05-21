<?php
session_start();
include_once('../../templates/header.php');
require('../../connect.php');
?>

<div class="">
    <!-- intern view and update-->
    <?php
    $id = $_SESSION['id'];
    $getManage = "SELECT student.username,student.userid FROM `sv` JOIN _manage ON sv.svId=_manage.svId JOIN student ON _manage.userid=student.userid WHERE sv.svId = $id";
    $getName = mysqli_query($connection, $getManage);
    ?>
    <h1>Intern <?php while ($name = mysqli_fetch_array($getName)) {
                    echo $name['username'];
                } ?><h1>
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

                $viewlog = "SELECT * FROM `sv` JOIN _manage ON sv.svId=_manage.svId JOIN student ON _manage.userid=student.userid JOIN record ON student.userid=record.userid WHERE sv.svId = $id";
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
                            <a href="remark.php?reportid=<?php echo $data['logid'] ?>">Remark</a>
                        </td>
                    </tr> <?php
                        }
                            ?>
            </table>
</div> <?php
        include_once('../../templates/footer.php');
        ?>