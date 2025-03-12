<!DOCTYPE html>
<html>

<head>
    <title>Marksheet Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            margin-bottom: 20px;
        }

        table {
            width: 500px;

            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .result-table {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <form method="post" action="">
        <div class="container">
            <label for="name">Student Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="roll">Roll Number:</label><br>
            <input type="number" id="roll" name="roll" required><br><br>

            <label for="dbms">DBMS Marks:</label><br>
            <input type="number" id="dbms" name="dbms" required><br><br>

            <label for="se">SE Marks:</label><br>
            <input type="number" id="se" name="se" required><br><br>

            <label for="os">OS Marks:</label><br>
            <input type="number" id="os" name="os" required><br><br>

            <label for="sl">SL Marks:</label><br>
            <input type="number" id="sl" name="sl" required><br><br>

            <label for="nm">NM Marks:</label><br>
            <input type="number" id="nm" name="nm" required><br><br>

            <button type="submit">Generate Marksheet</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $dbms = $_POST['dbms'];
        $se = $_POST['se'];
        $os = $_POST['os'];
        $sl = $_POST['sl'];
        $nm = $_POST['nm'];


        $total = $dbms + $se + $os + $sl + $nm;


        echo "
    <table class='result-table'>
        <tr>
            <th>Student Name</th>
            <td>$name</td>
        </tr>
        <tr>
            <th>Roll Number</th>
            <td>$roll</td>
        </tr>
        <tr>
            <th>DBMS</th>
            <td>$dbms</td>
        </tr>
        <tr>
            <th>SE</th>
            <td>$se</td>
        </tr>
        <tr>
            <th>OS</th>
            <td>$os</td>
        </tr>
        <tr>
            <th>SL</th>
            <td>$sl</td>
        </tr>
        <tr>
            <th>NM</th>
            <td>$nm</td>
        </tr>
        <tr>
            <th>Total Marks</th>
            <td>$total</td>
        </tr>
    </table>";
    }
    ?>

</body>

</html>