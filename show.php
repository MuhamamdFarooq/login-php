<?php
$conn = mysqli_connect('localhost', 'root', "", 'login');


$query = "SELECT * FROM log"; 
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10' style='margin:20px auto;'>";
    echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Action</th></tr>";
    $row = mysqli_fetch_assoc($result);
    
    while ($row) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>
                <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                <a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Are you sure to delete?')\">Delete</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No records found.</p>";
}
?>
