<?php

include('config.php');

if(isset($_POST['submit'])) {
    $job_title = $_POST['job_title'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $responsibility = $_POST['responsibility'];
    $qualification = $_POST['qualification'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];

    $sql = "INSERT INTO jobs(`job_title`, `category_id`, `description`, `responsibility`, `qualification`, `location`, `salary`, `duration`, `status`)
    VALUES('$job_title', '$category_id', '$description', '$responsibility', '$qualification', '$location', '$salary', '$duration', '$status')";
    $result = mysqli_query($connection, $sql);

    if($result) {
        "<script>
        alert('Job Added Successfully');
        </script>";
        header("Location: jobs.php");
    }

}




?>

