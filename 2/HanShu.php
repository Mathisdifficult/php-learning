<?php
/**
 * Created by PhpStorm.
 * User: ohhhhHansome
 * Date: 2018/3/18
 * Time: 16:43
**/
//反序输出一个整数
function OppNumber($num)
{
    if ($num > 0)
        {
            echo $num % 10;
            OppNumber(floor($num / 10));
        }
    else
        return;
     }

//水仙花数
function FlowerNumber($num)
{
    $baiwei = floor($num / 100);
    $shiwei = floor($num / 10) % 10;
    $gewei = floor($num % 10);
    if ($baiwei * $baiwei * $baiwei + $shiwei * $shiwei * $shiwei + $gewei * $gewei * $gewei == $num)
        return 1;
    else
        return 0;
}
for($i = 1;$i <= 9;$i++){
    for($j = 0;$j <= 9;$j++) {
        for($k = 0;$k <=9;$k++){
            if ($i * $i * $i + $j * $j * $j + $k * $k *$k == $i *100 + $j * 10 + $k )
                echo "$i$j$k"."<p>";
        }
    }
}

//是不是素数
function PrimeNumber($num)
{
    for ($i = 2;$i <= floor(sqrt($num));$i++)
    {
        if ($num % $i ==0)
            return $i;
    }
}

//求两个数的最大公约数和最小公倍数
function MaxDivisor($Num1,$Num2)
{
if($Num1 < $Num2){
    $temp = $Num1;
    $Num1 = $Num2;
    $Num2 = $temp;
}
while($Num1 % $Num2 != 0)
{
    $temp = $Num1 % $Num2;
    $Num1 = $Num2;
    $Num2 = $temp;
}
echo "最大公约数为"."$Num2"."<br>";
return 0;
}

function MinMultipie($Num1,$Num2)
{
  $temp = MaxDivisor($Num1,$Num2);
  $temo = ($Num1 * $Num2) / $temp;
  return $temp;
}

?>