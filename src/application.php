<?php
 include('../adminpanel/config.php');
 print_r($_FILES);
 if(isset($_POST['submit'])){
    $jobId = $_POST['jobId'];
    $email = $_POST['email'];
    $company_email = $_POST['company_email'];
    $website = $_POST['website'];
    $coverLetter = $_POST['coverLetter'];
    $resume_name = $_FILES['resume']['name'];
    $tmp_name = $_FILES['resume']['tmp_name'];

    $query = "INSERT INTO `application` (`jobId`, `applicant_email`, `website`, `resume`, `coverletter`, `company_email`) VALUES ('$jobId', '$email', '$website', '$resume_name', '$coverLetter', '$company_email')";

    $result = mysqli_query($connection, $query);

    if($result){
        echo "<script>
        alert('Application Submitted Successfully');
        </script>;
        ";
        header("location:index.php");

    }

 }

?>