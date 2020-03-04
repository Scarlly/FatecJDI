<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sistema de Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="POST" action="login.php">
        <!-- display validation errors here-->
       <?php include('errors.php');?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Não é um membro? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>
</html>