<?php
include('config.php');




if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $file_name = $_FILES['logo']['name'];
    $tmp_name = $_FILES['logo']['tmp_name'];

    move_uploaded_file($tmp_name,'uploads/' . $file_name);

    $query = "INSERT INTO `company` ( `name`,`email` `logo`, `description`, `status`) VALUES ('$name', '$email','$file_name', '$description', '$status')";

    $connection_query = mysqli_query($connection, $query);

    if($connection_query){
        echo "<script>
        alert('Company Added Successfully');
        </script>;
        ";
        header("location:companies.php");

    }

}

    ?>


?>