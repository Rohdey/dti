<!-- <?php
$servername = "localhost:8000";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("We can't show you the result go and have fun");
}
error_reporting(0);
// $ID = $_POST['ID'];
// $UserName = $_POST['UserName'];

// $phone = $_POST['phone'];
$Email = $_POST['Email'];
$password = $_POST['password'];
// $DOB = $_POST['DOB'];

$sql = "INSERT INTO `table` (`email`, `password`) VALUES ('$email', '$password')";

if ($conn->query($sql) == True) {
    echo "new record added";
}


// select data from a table
$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

// // display data in a table on the webpage
// if (mysqli_num_rows($result) > 0) {
//     echo "<table>";
//     echo "<tr><th>ID</th><br><th>UserName</th><th>phone</th><br><br><th>Email</th><th>password</th><th>DOB</th></tr>";
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["UserName"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["DOB"] . "</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }

// close database connection
mysqli_close($conn);

// $conn->close();


// ?> -->