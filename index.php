<?
session_start();
?>
<!doctype html'>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Prueba PHP</title>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
       <![endif]-->

   </head>

   <body>

    <div>

        <h1>Login</h1>



        <form action="login.php" method="POST">

            <input type="text" name="username" placeholder="Usuario" required>

            <input type="password" name="password" placeholder="Password" required> 

            <input type="submit" value="Login">

            <footer>

            </footer>

        </form>



    </div> <!-- end login-form -->

</body>
</html>