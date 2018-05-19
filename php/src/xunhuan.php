<?php  
   $num = 1;
   // while($num<=5){
   //  echo "this num is $num</br>";
   //  $num++;
   // }

   // do{
   //  echo "this num is $num</br>";
   //  $num++;
   // }while($num<=5);
   
   // for($i = 1; $i <=10; $i++){
   //  echo "this is $i</br>";
   // }
   
   $color = array("red","yellow","pink","orange");
   // foreach($color as $value){
   //  echo "$value </br>";
   // }
   for($i = 0; $i < count($color); $i++){
    // echo "$color[$i]</br>";
   }
   // echo count($color);
   
   function fun($name){
    // echo "$name";
   }
   // fun("zhangsan");


   $age = array("peter"=>"18","rose"=>"19","jone"=>"20");
   // echo "peter is" .$age['peter']."years old";
   foreach($age as $x=>$x_value){
    echo "key=" .$x ." value=" .$x_value;
    echo "</br>";
   }
?>