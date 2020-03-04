
<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sistema de Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Home page</h2>
    </div>

    <div class="content">
       <?php if (isset($_SESSION['sucess'])):?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['sucess']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION['username'])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username'];?> </strong></p>
            <p><a href="" style="color: red;">Logout</a></p>
        <?php endif ?>

    </div>
    
</body>
</html>