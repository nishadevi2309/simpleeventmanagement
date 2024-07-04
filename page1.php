<?php
session_start();


// Database connection
$servername = "localhost"; // Change to your database server
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "loginpage"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit();
        } else {
            $login_error = "Invalid username or password";
        }
    } else {
        $login_error = "Invalid username or password";
    }

    $stmt->close();
}

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $new_username = $_POST['new_username'];
    $new_password = $_POST['new_password'];

    // Hash the new user's password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $new_username, $hashed_password);
    $stmt->execute();

    // Provide feedback to the user
    if ($stmt->affected_rows > 0) {
        $registration_message = "User registered successfully!";
    } else {
        $register_error = "Error registering user.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">

    <title>Login and Registration</title>
    <style>
        body {
            font-family: 'Ribeye Marrow', serif;
            font-size: 20px;
            background-color: rgba(237, 121, 102, 0.5);
            margin: 0;
            padding: 20px;
            
        }
        h2 {
            color:  grey;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 300px;
            margin: 0 auto;
		  font-family: 'Single Day', cursive;
            font-size:20px
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
		font-family: 'Single Day', cursive;
            font-size:20px
        }
        input[type="submit"] {
            background-color: rgba(237, 121, 102, 0.5);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
		font-family: 'Single Day', cursive;
            font-size:20px
        }
        input[type="submit"]:hover {
            background-color: #E7BCDE;
        }
        .error {
            color: #ff0000;
            margin-bottom: 10px;
            text-align: center;
        }
        .success {
            color: #008000;
            margin-bottom: 10px;
            text-align: center;
        }
      .contain{
        display:flex;
        flex-direction:row;
	justify-content:space-evenly;




 }

     h1{
  text-align:center;
 font-family: 'Ribeye Marrow', serif;
 color:grey;
 
}
    </style>
</head>
<body>
    <h1>Event Planner</h1>
    <div class="contain">

    <div class="col1">

    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login">
        <?php if(isset($login_error)) { echo '<div class="error">' . $login_error . '</div>'; } ?>
    </form>
    </div>
    
   <div class="col2">
    <h2>Register</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="new_username" placeholder="New Username" required><br>
        <input type="password" name="new_password" placeholder="New Password" required><br>
        <input type="submit" name="register" value="Register">
        <?php if(isset($registration_message)) { echo '<div class="success">' . $registration_message . '</div>'; } ?>
    </form>
    </div>
</div>
</body>
</html>

<?php
$conn->close();
?>
