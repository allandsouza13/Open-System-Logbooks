<html>
<head>
  <title>My Guestbook</title>
</head>
<body>

<h1>Welcome to my Guestbook</h1>
<h2>Please write me a little note below</h2>

<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <textarea cols="40" rows="5" name="note" wrap="virtual"></textarea>
  <input type="submit" value="Send it">
</form>

<?php
  if(isset($_POST['note']) && ($fp = fopen("yourLogin.txt", "a"))) {
    fwrite($fp, nl2br($_POST['note']) . '<br>');
    fclose($fp);
  } else {
    echo "Error: Unable to open the file.";
  }
?>

<h2>The entries so far:</h2>

<?php @readfile("yourLogin.txt"); ?>
</body>
</html>
