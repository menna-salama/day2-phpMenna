 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration</title>
    <style>
    #form1{
       
        margin: 10% 10%;

    } 
    #form2{
        text-align: center;
        margin: -30% 10%;
        
    }  
    label {
            display: block; 
            margin-bottom: 5px;  }
 button {
            margin-top: 10px;  
            padding: 10px 20px;  
            background-color: #4CAF50; 
            color: white;  
            border: none;  
            }

         
    </style>

</head>
<body>
    <?php
    ?>
   
    <form  id="form1" action="server.php" method="post">
        <h1>Registration</h1>
        <div>
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName">
    </div>
    <div>
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword">
    </div>
    <button type="submit" name="register">Register</button>
    </form>

 <!-- Login Form -->
    <form  id="form2" action="server.php" method="post"> 
        <h1>Login</h1>
        <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="emaill">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="passwordl">
    </div>
    <button type="submit" name="login">Login</button>
    </form>

</form>
</body>
</html>
 