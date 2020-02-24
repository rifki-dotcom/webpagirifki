<?php
include "header.php";

?>
<!-- tag form -->
<form action="proses/proses_login.php" method="POST">
<label>USER</label>
<input type="text"name="username" placeholder="Masukkan Username">
<label>PASSWORD</label>
<input type="password"name="password" placeholder="Masukkan Password">

<input type="submit" class="btn btn-primary" name="login" value="LOGIN">
</form>



<?php
include "footer.php";
?>