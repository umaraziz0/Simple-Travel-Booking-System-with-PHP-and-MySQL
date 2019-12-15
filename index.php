
<?php
include 'config.php';
 
$conn = OpenCon();
 
echo "Connected Successfully";

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo '<table border = 0.5 cellspacing = 0 cellpadding = 0>';
echo '<tr><th>ID</th><th>username</th><th>password</th><th>email</th></tr>';
while($row = mysqli_fetch_assoc($result)){
    echo '<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td>'.$row['email'].'</td></tr>';
}
echo '</table>';
 
CloseCon($conn);
 
?>
