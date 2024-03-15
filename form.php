<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accessing form input values
    if (isset($_POST['n1'])) {
        $n1 = $_POST['n1'];
    } else {
        $n1 = ''; // or set a default value
    }
    // Alternativ// This might cause the "Undefined array key" warning if 'n1' is not set
    if (isset($_POST['n2'])) {
        $n2= $_POST['n2'];
    } else {
        $n2 = ''; // or set a default value
    }
    if (isset($_POST['n3'])) {
        $n3 = $_POST['n3'];
    } else {
        $n3 = ''; // or set a default value
    }

    // Your processing logic here
    // ...
    $con=mysqli_connect("localhost","root","1234","web");
$q1="insert into data values('$n1','$n2','$n3')";
mysqli_query($con,$q1);
}
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accessing form input values
    if (isset($_POST['b1'])) {
        $b1 = $_POST['b1'];
    } else {
        $b1 = ''; // or set a default value
    }
    // Alternativ// This might cause the "Undefined array key" warning if 'n1' is not set
    if (isset($_POST['b2'])) {
        $b2= $_POST['b2'];
    } else {
        $b2 = ''; // or set a default value
    }
    if (isset($_POST['b3'])) {
        $b3 = $_POST['b3'];
    } else {
        $b3 = ''; // or set a default value
    }

    // Your processing logic here
    // ...
    $con=mysqli_connect("localhost","root","1234","web");
$q1="insert into data values('$b1','$b2','$b3')";
mysqli_query($con,$q1);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
  <div id="page1">
    <div class="container" id="container">
        <div class="form-container sign-up"> 
             <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" id="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>
                    or use your email for registration
                </span>
                <input type="text" placeholder="Name" name="n1" required >
                <input type="email" placeholder="Email" name="n2" required >
                <input type="password" placeholder="Password" name="n3" required >
                <button><a href="second/sec.html" style="text-decoration: none;">Sign up</></button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" id="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>
                    or use your email for password
                </span>
               
                <input type="text" placeholder="Name" name="b1" required  >
                <input type="email" placeholder="Email" name="b2" required >
                <input type="password" placeholder="Password" name="b3" required >
                <a href="./forgot.html" style="text-decoration: none;">Forget Your Password?</a>
                <button><a href="second/sec.html" style="text-decoration: none;">Sign In</a></button>
            </form>
        </div>
    
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back</h1>
                <p>Enter all your personal details to use all of site functions</p>
                <button class="hidden" id="'login">
                    Sign IN
                </button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello,Friend!</h1>
                <p>Register with your personal details to use all of site features</p>
                <button class="hidden" id="register">
                    Sign Up
                </button>
            </div>
        </div>
    </div>
</div>
</div>
    <script src="script.js"></script>
</body>
</html>