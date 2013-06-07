<?php
if(!true){
  echo "This is static true value.";
}elseif(true){
  echo "This is coming from elseif.";
}else{
  echo "Well, i am default. If no one would care, than i will get executed.";
}

/*
if(true):
  echo "Coming from new if format."
endif;
*/
/*
$i = 1;
while($i <= 10){
  echo "I am incresing this value by: $i \n";
  ++$i;
}

for($a = 1; $a <= 10; ++$a){
  echo "Value: {$a}\n";
}

*/

$array_var1 = array("priya", "Manisha", "Saloni");  //array declaration type1

echo $array_var1[0];

$array_var2[0] = "priya0";                         //array declaration type2
$array_var2[1] = "priya1";
$array_var2[2] = "priya2";
$array_var2[3] = "priya3";

echo $array_var2[3];

$array_var3[] = "priya0";                         //array declaration type3
$array_var3[] = "priya2";
$array_var3[] = "priya3";
$array_var3[] = "priya4";
$array_var3[] = "priya5";
$array_var3[] = "priya6";

echo $array_var3[5];

/*
$i =0;
while($i <= count($array_var1)-1){
 echo $array_var1[$i]."\n";
 $i++;
}
*/

foreach($array_var3 as $index => $value){
  echo "Value of array_var3: {$index}:{$value}\n";
}

/*
$array_var4 = array(                               //three dimensional array
                    array(
                         array("Priya1", "8th"),
                         array("Priya2", "7th")
                       ),
                  array("Deepak", "9th")
              );
echo $array_var4[1][1];
echo $array_var4[0][1][1]; 
 //echo $array_var4[1][0];
*/

$array_var5 = array(                                       //associative array
                    "name" => "Priya", 
                    "address" => "Shiva ji nagar",
                    "new index which is default"
               );

echo $array_var5[address];
			   
foreach($array_var5 as $index=>$value){
  echo "{$index} : {$value}\n";
}

$students = array(
               array("name" => "Saloni", "address" => "do not know"),
               array("name" => "Priya", "address" => "whatever saloni has"),
               array("name" => "Garg", "address" => "whatever saloni has")
              );

echo $students[2][name];
/*
foreach($students as $index=>$val){
echo "\n" . $index . "NAME:" . $val[name] . "\t" .'Address: '.$val['address'] . "\n";
  echo '-------------------';
}
*/