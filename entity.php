<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $table1 = array(
    array("Name"=>"Sanctification Yeboah", "Age"=> 19, "ID"=>1001),
    array("Name"=>"Prof G", "Age"=> 20, "ID"=>1002),
    array("Name"=>"Emannuel Yebs", "Age"=> 36, "ID"=>1003),

);
  $table2 = array(
    array("Name"=>"Kofi Bampo", "Age"=> 33, "ID"=>1101),
    array("Name"=>"Gizza_y", "Age"=> 40, "ID"=>1202),
    array("Name"=>"Kontomire", "Age"=> 39, "ID"=>1303),

);

echo "<pre>";
$join = array();
foreach ($table1 as $x=>$a){
    foreach ($table2 as $y=>$b){
        if ($a['ID'] == $b['ID']){
            $join = array_merge($a, $b);
            echo print_r($join);
            echo "<br>";
        }
    }
}
?>
</body>
</html>
