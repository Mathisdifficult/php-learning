<?php
/**
 * Created by PhpStorm.
 * User: ohhhhHansome
 * Date: 2018/3/18
 * Time: 15:52
 * */
//创建数组
function CreateArray()
    {
        $flag = 0;
        $Array = array();
        for($i = 0;$i < 50;$i++)
        {
            if(($i+1)%2 != 0)
            {
                array_push($Array[$flag],$i);
                $flag++;
            }
            if($flag == 9)
                break;
        }
        return $Array;
    }

//最大数小标
function MaxArray($Array)
    {
        $Max = $Array(0);
        $flag = 0;
        for($i = 0;$i < count($Array);$i++)
        {
            if($Array($i) > $Max)
            {
                $Max = $Array($i);
                $flag = $i;
            }
        }
        return $flag;
    }

//最大数与最小数的差值
function MaxMinusMin($Array)
    {
        sort($array);
        $maxNum=$array[0];
        rsort($array);
        $minNum=$array[0];
        $diff=$maxNum-$minNum;
        return $diff;
    }

function ReverseOfIndex($Array)
{
    $newArray=array();
    for($i=count($Array)-1;$i>=0;$i--)
    {
        array_push($newArray,$Array[$i]);
    }
}
?>