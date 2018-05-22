<?php
//array
$scores =[44,56,77,88,90,34,24,65,75,11,22,66,77,99,00,15,79,06,60,10,23,24,69] ;

$names =["Brenda", "Kevin", "leo", "lilian","Mark", "Cheru","Kate",];





foreach ($scores as $marks)
{
  if($marks % 2!=0){

      print "$marks <br>";
}


}

//su total of arrays
echo array_sum($scores)."<br>";



//highest score

echo (max($scores). "<br>");





















/*print "$scores[0]<br>; $scores[9]<br>";

print "$names[3]<br>";


foreach ($names as $jina)
{print "$jina <br>";


}
foreach ($scores as $mark)
{
    print "$mark<br>";
}
$data = array("nairobi"=>4000000,"kampala"=>3500000,"arusha"=>1000000);



print $data["nairobi"];
extract($data);

print "<br>$nairobi <br>";
print "$arusha <br>";
print "$kampala <br>";*/