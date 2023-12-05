<!DOCTYPE html>
<html lang="eng">

<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>
<?php
echo"<h3>Avarage Temperature in Edinburgh</h3>";

$result = array("JulyAugHigh" => 19, "JanFebHigh" => 7, "JulyAugLow" => 11, "JanFebLow" => 1);

echo '<table style="width:100%">
  <tr>
    <th>Month</th>
    <th>High</th>
    <th>Low</th>
  </tr>
  <tr>
    <td>Jul-Aug</td>
    <td>'. $result['JulyAugHigh'] .' ^C</td>
    <td>'. $result['JulyAugLow'] .' ^C</td>
  </tr>
  <tr>
    <td>Jan-Feb</td>
    <td>'.  $result['JanFebHigh'].' ^C</td>
    <td>'.  $result['JanFebLow'].' ^C</td>
  </tr>
</table>';

?>
</body>
</html>