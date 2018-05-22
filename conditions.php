<?php
$weight= 75;
$height= 1.99;

$bmi= $weight / ($height*$height);

print"$bmi<br>";
if ($bmi<15)
{
print "you are very severly umderweight";

}
elseif ($bmi>=15 and $bmi<16)
{
    echo "you are severely underweight";

}
elseif ($bmi>=16 and $bmi<18.5) {
    echo "you are underweight";

}
elseif ($bmi>=18.5 and $bmi<25)
{ print  "you are normal(healthy weight)";
}
elseif ($bmi>=25 and $bmi<30)
{print "you are overweight";
}

elseif ($bmi>=30 and $bmi<35)
{print "you are obese class I";


}
elseif ($bmi>=35 and $bmi<40)
{print "you are obese class II(severely obese)";

}
elseif($bmi>=40)
{print "you are obese class III(very severely obese)";

}