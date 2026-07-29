<?php
setcookie("username","",time()-3600,"/");
header("Location: cookie_user.php");
exit();
?>