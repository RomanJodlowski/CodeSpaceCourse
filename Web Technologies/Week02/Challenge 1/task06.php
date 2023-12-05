<!DOCTYPE html>
<html lang="eng">
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<body>

<?php
$result = array(
    "aarron" => array (
        "Physics" => '74%',
        "English" => '69%',
        "Maths" => '70%'
    ),

    "jamie" => array (
        "Physics" => '64%',
        "English" => '79%',
        "Maths" => '69%'
    ),

    "harry" => array (
        "Physics" => '55%',
        "English" => '52%',
        "Maths" => '57%'
    )
);
echo"<h3>Student Results</h3>";
echo '<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Physics</th>
    <th>English</th>
    <th>Maths</th>
  </tr>
  <tr>
    <td>Aarron</td>
    <td>'. $result['aarron']['Physics'] .'</td>
    <td>'. $result['aarron']['English'] .'</td>
    <td>'. $result['aarron']['Maths'] .'</td>
  </tr>
  <tr>
    <td>Jamie</td>
    <td>'.  $result['jamie']['Physics'].'</td>
    <td>'.  $result['jamie']['English'].'</td>
    <td>'.  $result['jamie']['Maths'].'</td>
  </tr>
  <tr>
    <td>Harry</td>
    <td>'.  $result['harry']['Physics'].'</td>
    <td>'.  $result['harry']['English'].'</td>
    <td>'.  $result['harry']['Maths'].'</td>
  </tr>
</table>';
echo '<br>';
echo "Result for Aarron on Physics : " ;
echo $result['aarron']['Physics'] . "<br>
";

echo "Result for Jamie on English: ";
echo $result['jamie']['English'] . "<br>
";

echo "Result for Harry on Maths : " ;
echo $result['harry']['Maths'] . "<br>
";

?>
</body>
</html>