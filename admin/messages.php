<?php session_start(); require_once __DIR__ . '/../includes/db.php'; if (!isset($_SESSION['admin'])) header('Location: login.php');
$res = $mysqli->query('SELECT * FROM messages ORDER BY created_at DESC');
?><!doctype html><html><head><meta charset="utf-8"><title>Messages</title><link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css"></head><body>
<div class="container admin">
<h2>Messages</h2>
<a href="logout.php">Logout</a>
<table class="messages">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Received</th></tr>
<?php while($row = $res->fetch_assoc()): ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo htmlspecialchars($row['name']); ?></td>
<td><?php echo htmlspecialchars($row['email']); ?></td>
<td><?php echo htmlspecialchars($row['subject']); ?></td>
<td><?php echo nl2br(htmlspecialchars($row['message'])); ?></td>
<td><?php echo $row['created_at']; ?></td>
</tr>
<?php endwhile; ?>
</table>
</div></body></html>