<?php
$string = '["20200225\\07b2c216c7e0f3fcfb6616e9e1bcf482.jpg","20200225\\e8f260f6b037c9493e468f8ce70b0a79.jpg"]';
$arr1 = explode('"',$string);
$length = count($arr1);
for($i=1;$i<$length;$i+=2){
    $arr2[] = $arr1[$i];
}
print_r($arr2);




