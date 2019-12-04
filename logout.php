<!DOCTYPE html>
<html>
<body>
<?php
	session_start();
    echo "세션이 종료되었습니다. 다시 로그인해주세요.";
	session_destroy();
    ?>
<form method="post" action="test2.html"><br>
<br><br>
<input  type="submit" value="HOME">
</form>
</body>
</html>