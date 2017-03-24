<!DOCTYPE html>
<head>
 <title>welcome to information</title>
</head>
<style>
 body{ background-color: blue;
 	color: white;
 	font-size: 20;
 }
</style> 
<body>
Hi <?php echo htmlspecialchars($_POST['name']); ?>.<br>
You are <?php echo (int)$_POST['age']; ?> years old.<br>
your email is <?php echo $_POST['email']?>.<br>
</body>
</html>
