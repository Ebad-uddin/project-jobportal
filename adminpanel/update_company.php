<?php
include('config.php');



// print_r($_POST);

if(isset($_POST['submit'])){
    $id = $_POST['company_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $image_name = $_FILES['logo']['name'];
    $tmp_name = $_FILES['logo']['tmp_name'];

    move_uploaded_file($tmp_name, 'uploads/' . $image_name);
    $query = "UPDATE `company` SET `name` = '$name', `description` = '$description', `logo` = '$image_name' , `status` = '$status' WHERE `id` = '$id'";

    $result = mysqli_query($connection, $query);
    if($result){
        echo "<script>
        alert('Company Updated Successfully');
        </script>;
        ";
        header("location:companies.php");
    }
}


?>