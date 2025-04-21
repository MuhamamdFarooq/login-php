<?php
$conn = mysqli_connect('localhost', 'root', "", 'login');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM log WHERE id = $id";
    $result = mysqli_query($conn, $query); // ← semicolon added here

    if ($result) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Redirect back to the list page
    header("Location: index.php");
    exit();
}
?>
