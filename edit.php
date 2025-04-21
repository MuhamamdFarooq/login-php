<?php
$conn = mysqli_connect('localhost', 'root', "", 'login');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM log WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "UPDATE log SET username='$user', password='$pass' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully.";
        header("Location: show.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label>Username: </label>
    <input type="text" name="username" value="<?php echo $data['username']; ?>"><br><br>
    <label>Password: </label>
    <input type="text" name="password" value="<?php echo $data['password']; ?>"><br><br>
    <input type="submit" name="update" value="Update">
</form>
