<?php

include("config.php");


if(isset($_POST["submit"])){

    $id = $_POST['category_id'];

    $query = "DELETE FROM `category` where `id` = '$id'";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "<script>
        alert('Category Deleted Successfully');
        </script>;
        ";
        header("location:category.php");
    }

}

?>