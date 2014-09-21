<?php
include('classes/User.php');
if(!empty($_POST)) {
	$user = new User();
	$user->registration($_POST);
	$result = $user->result;
}
?>
<?php if(isset($result)): ?>
	<h2><?php echo $result; ?></h2>
<?php endif; ?>
		<from role="form" method="post">
			<div class="form-group">
				<input type="text" class="form-control <?php echo "hello"?>" name="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="pass" placeholder="Enter password">
				</div>
				<input type="submit" class="btn btn-default">
				</form>
				