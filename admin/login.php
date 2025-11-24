<?php
session_start(); require_once __DIR__ . '/../includes/db.php';
if (isset($_SESSION['admin'])) header('Location: messages.php');
$err='';
if ($_SERVER['REQUEST_METHOD']==='POST'){
$u = $_POST['username']; $p = $_POST['password'];
$res = $mysqli->query("SELECT id,password FROM admins WHERE username='".$mysqli->real_escape_string($u)."' LIMIT 1");
if ($row = $res->fetch_assoc()){
if (password_verify($p, $row['password'])){ $_SESSION['admin']=true; header('Location: messages.php'); exit; }
}
$err='Invalid credentials';
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Admin Login</title><link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css"></head><body>
<div class="container admin">
<h2>Admin Login</h2>
<?php if($err) echo '<p class="error">'.htmlspecialchars($err).'</p>'; ?>
<form method="post">
<label>Username</label><input name="username" required>
<label>Password</label><input name="password" type="password" required>
<button type="submit">Login</button>
</form>
</div></body></html>