<?php session_start(); session_unset(); session_destroy(); header('Location: login.php'); exit; ?>


---- FILE: assets/css/style.css ----
/* Minimal styles */
body{font-family:Arial,Helvetica,sans-serif;margin:0;color:#222}
.container{width:95%;max-width:1000px;margin:0 auto;padding:14px}
.site-header{background:#f8f8f8;padding:12px;border-bottom:1px solid #ddd}
.logo{font-weight:700;font-size:20px}
.nav a{margin-right:10px;text-decoration:none;color:#333}
.hero{padding:30px 0}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px}
.card{padding:12px;border:1px solid #eee;border-radius:6px}
form input, form textarea{width:100%;padding:8px;margin:6px 0;border:1px solid #ccc;border-radius:4px}
button{background:#1a73e8;color:#fff;padding:8px 12px;border:none;border-radius:6px}
.site-footer{background:#f2f2f2;padding:12px;margin-top:20px;text-align:center}
.admin .messages{width:100%;border-collapse:collapse}
.admin .messages th,.admin .messages td{border:1px solid #ddd;padding:6px}
.error{color:#b00020}
.portrait{max-width:200px;border-radius:6px}