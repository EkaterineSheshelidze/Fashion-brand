<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="<?= HOST . 'assets/admin_resources/css/style.css'?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Poiret+One&display=swap" rel="stylesheet">
</head>


<body id="login-body">
<div class="login-container">
    <div class="login-main">
        <form id="login-form" method="POST" action="../admin/login.php">
            <h2>Admin Login</h2>
            <input type="text" name="username" class="text-field" placeholder="Username" />
            <input type="password" name="password" class="text-field" placeholder="Password" />
            
            <input type="submit" class="button" value="Log In" />
        </form>
        <div class="purple-image" style="background-image: url('<?= HOST . 'assets/admin_resources/images/purple.jpg'?>');"></div>
    </div>
</div>
    
    
</body>
</html> 
