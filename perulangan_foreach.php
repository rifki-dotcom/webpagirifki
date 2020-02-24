<?php
$hewan=array("sapi","ayam","tokek","kambing");
foreach($hewan as $value ){
    echo"$value[1]";
}
?>
<br>
<?php
$hewan=array("sapi","ayam","tokek","kambing"=>0,1,2,3);
foreach($hewan as $key=>$value ){
    echo"$hewan[0]<br>";
}
?>