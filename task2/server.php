 <?php
 
function displayRegistrationData() {
    echo "<h2>Registration Data:</h2>";
    echo "First Name: " . ($_POST['firstName']) . "<br>";
    echo "Last Name: " .  ($_POST['lastName']) . "<br>";
    echo "password: " .  ($_POST['password']) . "<br>";
    echo " confirm password: " .  ($_POST['confirmPassword']) . "<br>";
}

function displayLoginData() {
    echo "<h2>Login Data:</h2>";
    echo "Email: " .($_POST['emaill']) . "<br>";
    echo "Password: " .($_POST['passwordl']) . "<br>";
}


 
    if (isset($_POST['register'])) {
        displayRegistrationData();
    } elseif (isset($_POST['login'])) {
        displayLoginData();
    } else {
        echo "No valid  ";
    
}
 
 
 
 ?>