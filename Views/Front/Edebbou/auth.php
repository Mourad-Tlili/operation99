<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="POST" action="connexion.php">
  <p>Login :
    <input type="text" name="login" id="login" />
  </p>
  <p>Password : 
    <input type="password" name="pwd" id="pwd" />

  </p>
  <p>
  <input type="hidden" name="rating" value="<?PHP echo $_POST['rating'];?>">
</p>
<p>
<input type="hidden" name="LeBrasse" value="LeBrasse">
</p>
  <p>
  
    <input type="submit" name="button" id="button" value="Valider" />
 
  </p>
</form>
</body>
</html>
