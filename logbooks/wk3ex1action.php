<html>
<head>
  <title>Response to form</title>
</head>
<body>
<?php
  if (isset($_POST['txtname'])) {
    $name = $_POST['txtname'];
    echo "Your name is $name<br/>";
  }
  if (isset($_POST['radsex'])) {
    $gender = $_POST['radsex'];
    echo "Your gender is $gender<br/>";
  }
  if (isset($_POST['seloccupation'])) {
    $occupation = $_POST['seloccupation'];
    echo "Your occupation is $occupation<br/>";
  }
?>
</body>
</html>
