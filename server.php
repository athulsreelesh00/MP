<?php
include 'connect.php';
if (isset($_POST['Url'])) {
    $carbrand = $_POST['Url'];
    $query = "SELECT * FROM state where state_name = '$carbrand' ";
    $result = mysqli_query($con, $query);
    echo "<option value='0' class='vechicle'>-- Choose Your District --</option>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='".$row['district']."' class='vechicle'>" . $row['district'] . "</option>";
    }
}
?>