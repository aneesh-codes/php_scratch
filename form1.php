<!-- nov 2024 qno 21 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name"> Name: </label>
        <input type="text"  id="name" name="name" />
        <br>

        <label for="email"> Email: </label>
        <input type="email" id="email" name="email" />
        <br>

        <label for="phone"> Phone: </label>
        <input type="number" id="phone" name="phone" />
        <br>

        <label for="DOB"> Date of Birth: </label>
        <input type="date" id="DOB" name="DOB" />
        <br>

        <label> Gender: </label>
        <input type="radio" name="gender" id="Male" value="Male" /> <label for="Male">Male</label>
        <input type="radio" name="gender" id="Female" value="Female" /> <label for="Female">Female</label>
        <br>

        <!-- button -->
         <button type="submit"> Submit </button>
    </form>
</body>
</html>
<?php
    // yo php code copy ma explain xa hai. Regex paxadi see regex and yo both see
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $DOB = $_POST['DOB'];
        $gender = $_POST['gender'];

        // name must be atleast 8 characters long
        if(strlen($name)<8){
            echo "Name must be atleast 8 characters long";
        }
        // email must be in correct format
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email must be in correct format";
        }
        // phone must be a 10 digit number
        if(!preg_match('/^[0-9]{10}$/', $phone)){
            echo "Phone must be a 10 digit number";
        }
        // DOB must be a in mm/dd/yyyy format
        // $formattedDob = date("m-d-Y", strtotime($DOB));
    }
