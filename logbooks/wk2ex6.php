<?php
  $marks[0] = 65;
  $marks[3] = 55;
  $marks[] = 76;

  echo " Index 0 = " . (isset($marks[0]) ? $marks[0] : '65') . "<br/>";
  echo " Index 1 = " . (isset($marks[1]) ? $marks[1] : 'Not Set') . "<br/>";
  echo " Index 2 = " . (isset($marks[2]) ? $marks[2] : 'Not Set') . "<br/>";
  echo " Index 3 = " . (isset($marks[3]) ? $marks[3] : '55') . "<br/>";
  echo " Index 4 = " . (isset($marks[4]) ? 'Not Set' : 'Not Set') . "<br/>";
  echo " Index 5 = " . (isset($marks[5]) ? $marks[5] : '76') . "<br/>";
?>
