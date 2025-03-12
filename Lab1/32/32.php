<?php

$mysqli = new mysqli("localhost", "root", "", "script");


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];
    $created_by = "admin";
    $created_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO users (name, rank, status, created_by, created_at) VALUES ('$name', '$rank', '$status', '$created_by', '$created_at')";
    $mysqli->query($sql);
}


$result = $mysqli->query("SELECT * FROM users");

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];
    $updated_by = "admin";
    $updated_at = date('Y-m-d H:i:s');

    $sql = "UPDATE users SET name='$name', rank='$rank', status='$status', updated_by='$updated_by', updated_at='$updated_at' ";
    $mysqli->query($sql);
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM users WHERE id='$id'");
}
?>


<form method="POST">

    Name: <input type="text" name="name"><br>
    Rank: <input type="text" name="rank"><br>
    Status:
    <select name="status" id="status">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>
    <br>

    <button type="submit" name="create">Create</button>
    <button type="submit" name="update">Update</button>
</form>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Rank</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Created By</th>
        <th>Updated At</th>
        <th>Updated By</th>
        <th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['rank']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['created_at'] ?></td>
            <td><?php echo $row['created_by'] ?></td>
            <td><?php echo $row['updated_at'] ?></td>
            <td><?php echo $row['updated_by'] ?></td>
            <td>
                <a href="?delete=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>