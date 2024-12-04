<?php

include("config.php");


if(isset($_POST["submit"])){

    $id = $_POST['company_id'];

    $query = "DELETE FROM `company` where `id` = '$id'";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "<script>
        alert('Company Deleted Successfully');
        </script>;
        ";
        header("location:companies.php");
    }

}

?>