<?php

$studentGrades = [
    ['Math'=>70, 'English'=>61, 'Science'=>60],
    ['Math'=>55, 'English'=>47, 'Science'=>58],
    ['Math'=>62, 'English'=>74, 'Science'=>85]
];

function avgGrade($arr){
   $length = count($arr);
   for ($i=0; $i<$length; $i++){
       $totalNumber=0;
       foreach ($arr[$i] as $key=>$val){
           $totalNumber += $val;
       }
       $averageNumber = $totalNumber/3;

       if($averageNumber<40){
           echo "Grade F \n";
       }
       elseif ($averageNumber>=40 && $averageNumber<50){
           echo "Grade D \n";
       }
       elseif ($averageNumber>=50 && $averageNumber<60){
           echo "Grade C \n";
       }
       elseif ($averageNumber>=60 && $averageNumber<70){
           echo "Grade B \n";
       }
       elseif ($averageNumber>=70 && $averageNumber<80){
           echo "Grade A \n";
       }
       else{
           echo "Grade A+ \n";
       }
   }
}

avgGrade($studentGrades);