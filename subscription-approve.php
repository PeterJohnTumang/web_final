<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `subscription` WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        // Redirect back to admin.php
        header("Location: subscription-admin.php");
        exit;
    } else{
        die(mysqli_error($con));
    }
}
?>

<script>
// Display the alert message
alert("Account successfully deleted");
</script>