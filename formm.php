<html>
<body>
<?php
$userName=$_GET['username'];
$passWord=$_GET['password'];
echo 'welcome to our website'.' '." ". htmlspecialchars($passWord, ENT_QUOTES, 'UTF-8');

?>
<p>the page that contains all that you need</p>
<ul>
<li>facebook</li>
<li>teitter</li></ul>
<a href="project.html"><button type="onhoaver"> home page</button></a>
</body>
</html>
