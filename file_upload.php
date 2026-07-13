<!-- file uploading using php and html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Uploading</h1>
    <form action = "" method="POST" enctype="multipart/form-data">
        <label for =""> File Name : </label>
        <input type = "file" name ="file"/>
        <br>

        <input type = "submit" value = "Upload">
    </form>
</body>
</html>

<?php
    $error =[];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if($_FILES['file']['error'] == 0){
         if($_FILES['file']['size'] < 1000000){
            echo "File Uploaded Successfully";
         }else{
            echo "File size must not exceed 1MB";
         }
        }
    }