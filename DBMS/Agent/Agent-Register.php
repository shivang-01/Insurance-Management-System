<?php
require_once 'header.php';
 ?>

<div>

<h1>Register</h1>


<form class="" action="includes/Agent-register-inc.php" method="post">
  <input type="number" name="Agency_code" placeholder="Agency_code">
  <input type="password" name="password" placeholder="Password">
  <input type="password" name="confirmPassword" placeholder="Confirm Password">
  <input type="number" name="Branch_id" placeholder="Branch_id">
  <input type="text" name="Name" placeholder="Name">
  <input type="number" name="Mobile_no" placeholder="Mobile Number">
  <input type="email" name="Email_id" placeholder="E-mail">
  <input type="date" name="DOB" placeholder="Date of Birth">
  <input type="text" name="Designation" placeholder="Designation">
  <input type="text" name="Address" placeholder="Address">
  <button type="submit" name="submit">Register</button>
</form>
<br />
<p>
  Already account? <a href="Agent-Login.php">Login Here!</a>
</p>

</div>

<?php
require_once 'footer.php';
 ?>
