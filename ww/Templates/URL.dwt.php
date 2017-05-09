<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<?php
	if ($_SESSION['supLoggedIn'] == 0) { 
		require ("../dir/include/menuRegister.php"); } 
	if ($_SESSION['supLoggedIn'] == 1) { 
	require ("../dir/include/menuSuper.php"); }
	?>
</body>
</html>
