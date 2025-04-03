<?php
//store the user inputs in variables and hash the password
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);

//connect to db
require_once './addToPage/database.php';

//set up and run the query
$sql = "SELECT user_id FROM useraccount WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

//store the number of results in a variable
$count = $result -> rowCount();

//check if any matches found
if($count == 1){
    echo "<main><p>Logged in successfully</p></main>";
    foreach($result as $row){
        //access the existing session to created automatically by the server
        session_start();
        // take user id from database and store it in a session variable
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $username;
        // redirect user
        Header('Location: admin_page.php');
    }
  
} else {
    echo "<p>Invalid Login</p>";
}
$conn = null;




?>