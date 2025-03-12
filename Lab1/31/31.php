<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];


    $username = trim($_POST['username']);
    if (strlen($username) < 8) {
        $errors[] = "Username must be at least 8 characters long.";
    }

    $email = trim($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }


    $dob = $_POST['dob'];
    if (empty($dob) || !strtotime($dob)) {
        $errors[] = "Invalid date of birth.";
    }


    $phone = trim($_POST['phone']);
    if (!preg_match('/^\d{10}$/', $phone)) {
        $errors[] = "Phone number must be 10 digits.";
    }


    if (empty($errors)) {

        $userData = "Username: $username, Email: $email, DOB: $dob, Phone: $phone\n";
        file_put_contents("users.txt", $userData, FILE_APPEND);
        echo "User registered successfully!";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 250px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;

        }

        label {
            display: block;
            margin: 5px;
        }

        input[type="text"],
        input[type="username"],
        input[type="email"],
        input[type="dob"],
        input[type="phone"],


        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }


        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }
    </style>



</head>

<body>

    <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
        <div class="container">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="dob">Date Of Birth:</label>
            <input type="date" id="dob" name="dob">

            <label for="phone">Phone:</label>
            <input type="phone" id="phone" name="phone">

            <input type="submit" value="Register">
        </div>
    </form>
</body>

</html>