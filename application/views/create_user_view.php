<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Create a user</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
</head>

<body>
	<div class="main-nav">
			<h3 style="margin-left: 30px; color: white; font-size: 21px; font-weight: bold;">Create New User</h3>
		</div>
<div style="float-right">
</div>
<div id="container">
	<div id "body">
<div align="center">	
<form id="form1" name="form1" method="post" action="">
  <h1>Create a user</h1>
  <p>Username: 
    <label for="username"></label>
    <input type="text" name="username" id="username" />
  </p>
  <p>Password: 
    <label for="password"></label>
    <input type="password" name="password" id="password" />
  </p>
  <p>Full name: 
    <label for="name"></label>
    <input type="text" name="name" id="name" />
  </p>
  <p>Street:    
    <label for="street"></label>
    <input type="text" name="street" id="street" />
  </p>
  <p>City: 
    <label for="city"></label>
    <input type="text" name="city" id="city" />
  </p>
  <p>State: 
    <label for="state"></label>
    <input type="text" name="state" id="state" />
  </p>
  <p>Zip: 
    <label for="zip"></label>
    <input type="text" name="zip" id="zip" />
  </p>
  <p>
    <input type="submit" name="create" id="create" value="Create User" />
  </p>
  <p>&nbsp;</p>
</form>
</div>
</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>