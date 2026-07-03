<!-- form validation using php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
<br>
        <label for ="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>

    <!-- line 24-26 bhujena vane copy and ask to github copilot it will answer you -->
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];

            echo "Your email is: " . $email . " and your password is submitted ";
        }


