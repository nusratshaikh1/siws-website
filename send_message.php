<?php
require_once 'includes/db.php';
if($_SERVER['REQUEST_METHOD']!=='POST'){
    header('Location: '.BASE_URL.'/contact.php');
    exit;
}
$name=trim($_POST['name']);
$email=trim($_POST['email']);
$subject=trim($_POST['subject']);
$message=trim($_POST['message']);
$stmt=$mysqli->prepare("INSERT INTO messages (name,email,subject,message) VALUES (?,?,?,?)");
$stmt->bind_param('ssss',$name,$email,$subject,$message);
$stmt->execute();
header('Location: '.BASE_URL.'/contact.php');
exit;
?>
