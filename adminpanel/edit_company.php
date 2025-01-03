<?php

include("config.php");

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $query = "SELECT * FROM company where `id` = '$id'";
    $result = mysqli_query($connection, $query);
    // print_r($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
            echo ' 
            <form action="update_company.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" value="' . $row['name'] . '" class="form-control" placeholder="Enter company Name" id="name" name="name" aria-describedby="nameHelp">
                    <input type="hidden" value="' . $row['id'] . '" class="form-control" id="company_id" name="company_id" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Email</label>
                    <input type="text" value="' . $row['email'] . '" class="form-control" placeholder="Enter company email" id="email" name="email" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Enter Description" id="floatingTextarea2" style="height: 100px" name="description">' . $row['description'] . '</textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="icon" class="form-label">Icon</label>
                        <input type="file" class="form-control" id="logo" name="logo" aria-describedby="iconHelp">
                        <span>' . $row['logo'] . '</span>
                    </div>
                    <div class="mb-3">
                        <label for="icon" class="form-label">Status</label>
                        <select name="status" id="mySelect" style="width: 100%;">
                            <option value="1" ' . ($row['status'] == 1 ? 'selected' : '') . '>Active</option>
                            <option value="0" ' . ($row['status'] == 0 ? 'selected' : '') . '>In Active</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                </div>
            </form>';
        
}
}




?>