<h3>Welcome User</h3>

<?php echo SITE_PATH; ?>
<form name="login" action="<?php echo SITE_PATH; ?>User" method="post" >
<p>Username : <input type="text" id="username" name="username"></p>
<p>Password : <input type="text" id="password" name="password"></p>
<input type="submit" value="Submit" name="loginbtn">
</form>
