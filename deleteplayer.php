<?php
include 'dbconnect.php';
$Id=$_GET['Id'];
$sql="delete from playerdetails where Id='$Id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script>
    confirm('Do you really want to delete the selected data?')
    alert('records were deleted succesfully')
    window.location.href='http://localhost/DBMS%20Project/adminviewplayer.php';
    </script>";
}
else{
    echo "<script>
    alert('records were not deleted')
    </script>";
}