<?php
if(isset($_POST['Submit'])){
 $name=trim($_POST["emp_name"]);
 $num=trim($_POST["emp_number"]);
 $email=trim($_POST["emp_email"]);
 if($name=="") $error="Enter Name";
 elseif($num=="") $error="Enter Number";
 elseif(!is_numeric($num)) $error="Number must be numeric";
 elseif(strlen($num)<10) $error="Number must be 10 digits";
 elseif($email=="") $error="Enter Email";
 elseif(!preg_match("/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/",$email)) $error="Invalid Email";
 else $success="Success";
}
?>
<h2>Employee Info Form</h2>
<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>
<?php if(isset($success)) echo "<p style='color:green'>$success</p>"; ?>
<form method="post">
 Name: <input type="text" name="emp_name" value="<?= $name ?? '' ?>"><br><br>
 Number: <input type="text" name="emp_number" value="<?= $num ?? ''
?>"><br><br>
 Email: <input type="text" name="emp_email" value="<?= $email ?? '' ?>"><br><br>
 <input type="submit" name="Submit" value="Submit">
</form>