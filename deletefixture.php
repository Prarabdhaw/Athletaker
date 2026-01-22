<?php
include 'dbconnect.php';
$Fid=$_GET['Fid'];
$sql="delete from fixtures where Fid='$Fid'";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo "<script>
    confirm('Do you really want to delete the selected data?')
    alert('records were deleted succesfully')
    window.location.href='http://localhost/DBMS%20Project/adminviewthisseason.php';
    </script>";
}
else{
    echo "<script>
    alert('records were not deleted')
    </script>";
}