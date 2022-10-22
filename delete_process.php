<?php
include_once 'admin_itemList.php';
$sql = "DELETE FROM productb WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>
