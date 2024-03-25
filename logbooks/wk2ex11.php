<?php
  $mymarks = array(
    "CS101" => 85,
    "CS102" => 72,
    "CS103" => 90,
    "CS104" => 78,
    "CS105" => 88,
    "CS106" => 95
  );

  // Display the marks using a loop
  foreach ($mymarks as $moduleCode => $mark) {
    echo "Module $moduleCode: $mark <br/>";
  }

  // Calculate the average mark
  $total = 0;
  foreach ($mymarks as $index => $value) {
    $total = $total + $mymarks[$index];
  }
  $average = $total / count($mymarks);

  // Output the average mark
  echo "<br/>Average Mark: $average";
?>
