<?php
$x = "DD10MM06AA22";
$dia =substr($x,2,2);
$mes =substr($x,6,2);
$anio=substr($x,10,2);

//echo $dia . '/' . $mes . '/' . $anio;

$y = "DD1MM12AA1992";

//metodo 2
$arr1 = str_split($y);
$arr2 = [];


//print_r($arr1);
/**do{
   if($arr1[$i] == $arr1[$i+1]){
    $arr2[$i] = $arr1[$i+2];
}else{
    echo 'no se pudo';
}
$i++;
}while($tamano2 < 3);

print_r($arr2);
**/
//metodo 1
for($i = 0;$i < sizeof($arr1);$i++){
    //echo "hello my position is" . $arr1[$i];
    if($arr1[$i] != 'D' && $arr1[$i] != 'M' && $arr1[$i] != 'A'){
        //echo "january";
        $arr2[$i] = $arr1[$i];
        //echo $arr2[$i];
        //print_r($arr2);

    }
}

echo('<pre>');
 
print_r($arr2);
 
echo('</pre>');


?>
