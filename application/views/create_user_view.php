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


<!-- <form id="form1" name="form1" method="post" action=""> -->
  <?php echo form_open_multipart('dashboard/insert_new_user');?>
<table>
  <th><h1>Create a user</h1></th>

  <tr>
    <td><strong>Username:</strong> </td>
    <label for="username"></label>
    <td><input type="text" name="username" id="username" /></td>
  </tr>
  <tr>
    <td><strong>Password:</strong> </td>
    <label for="password"></label>
    <td><input type="password" name="password" id="password" /></td>
   </tr>
  <tr>
    <td><strong>Full Name:</strong> </td>
    <label for="name"></label>
    <td><input type="text" name="name" id="name" /></td>
  </tr>
  <tr>
    <td><strong>Street:</strong> </td>
    <label for="street"></label>
     <td><input type="text" name="street" id="street" /></td>
  </tr>
  <tr>
    <td><strong>City:</strong> </td>
    <label for="city"></label>
    <td><input type="text" name="city" id="city" /></td>  </tr>
  <tr>
    <td><strong>State:</strong> </td>
    <label for="state"></label>
     <td><input type="text" name="state" id="state" /></td>
  </tr>
  <tr>
    <td><strong>Zip:</strong> </td>
    <label for="zip"></label>
    <td><input type="text" name="zip" id="zip" /></td>  
  </tr>
  <tr>
    <td><strong>Email:</strong> </td>
    <label for="email"></label>
    <td><input type="text" name="email" id="email" /></td>  
  </tr>
    <tr>
      <td><input type="submit" name="create" id="create" value="Create User" /></td>
    </tr>
</table>
  <p>&nbsp;</p>
</form>
</div>
</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>