<?php
include 'header.php';
$sql = "select *, if(activityID in (
        select activityID from register
         where studentID={$_SEESION['user']['studentID']}'
        ), 1, 0) registed from activity
        where activityDate > curdate()";
$result =$conn->($sql);
?>
<table class="table table-striped">
    <tr class="table-dark" >
        <th>activityID</th>
        <th>activityName</th>
        <th>activityDate</th>
        <th>startTime</th>
        <th>endTime</th>
 </tr>
<?php
while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo "<tr>{$row['activityID']}</td>";
    echo "<tr>{$row['activityName']}</td>";
    echo "<tr>{$row['activityDate']}</td>";
    echo "<tr>{$row['startTime']}</td>";
    echo "<tr>{$row['endTime']}</td>";
    echo "<tr>
                    <a hred='#' class='btn btn-sm btn-secces ".
                    ($row['registed'] ? 'disabled' : '')."'>+</a>
                    <a href='#' class='btn btn-sm btn-danger ".
                    ($row['registed'] ? '' : 'disable')."'>-</a>
                  </td>";
            echo '</tr>;
}
?>
<?php
include 'footer.php';
?>