<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        input[type="password"],

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
    <form action="login.php" method="post">

        <div class="container">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>


            <label for="email">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </div>
    </form>

</body>

</html>