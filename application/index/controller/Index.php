<?php
namespace app\index\controller;
use think\Controller;
use think\view;
class Index
{
    public function index(){
        return view('index');
    }
    public function index2()
    {
        $k = 3;
        $a = [1, 99, 88, 5, 4];
        /*  冒泡排序
         *  优点：比较稳定；
　　     *  缺点：比较慢，每次只能移动相邻两个数据
         * */
        for ($i = 0; $i < count($a); $i++) {
            for ($j = $i + 1; $j < count($a); $j++) {
                if ($a[$i] < $a[$j]) {
                    $tem = $a[$i];
                    $a[$i] = $a[$j];
                    $a[$j] = $tem;
                }
            }
        }
        print_r(array_chunk($a,$k,true)[0]);
        print "<hr>";
        /*  快速排序
         *　优点：移动数据的次数可以知道（i-1 次）；
　　     *  缺点：比较次数多。
         * */
        $mid = $a[0];
        $leftArray = array();
        $leftArray[0] = $a[0];
        $rightArray = array();
        for ($i = 0; $i < count($a); $i++) {
            if($a[$i] > $mid)
                $rightArray[] = $a[$i];
            if($a[$i] < $mid)
                $leftArray[] =$a[$i];
        }
        $array = array_merge($leftArray,$rightArray);
        print_r(array_chunk($array,$k,true)[0]);
        print "<hr>";

        /*
         * 冒泡排序
         * */
        $k = 3;
        $test = array(5,9,8,3,95,6,8,5,89);
        for($i = 0; $i<=$k;$i++){
            for($j = $i+1;$j<count($test);$j++){
                if($test[$j]>$test[$i]){
                    $tem = $test[$i];
                    $test[$i] = $test[$j];
                    $test[$j] = $tem;
                }
            }
        }
        print_r(array_chunk($test,$k,true)[0]);
        echo "<hr>";




    }
    function quick_sort2($arr)
    {
        if(!is_array($arr)) return false;
        $length = count($arr);
        if($length<=1) return $arr;
        $left = $right = array();
        for($i=1; $i<$length; $i++)
        {
            if($arr[$i]<$arr[0]){
                $left[]=$arr[$i];
            }else{
                $right[]=$arr[$i];
            }
        }
        $left=$this->quick_sort2($left);
        $right=$this->quick_sort2($right);
    }



    public function quick_sort($test){
        /*
         * 快速排序
         * */

        $test =isset($test)?$test: array(5,9,8,3,95,6,8,5,89);
        var_dump($test) ;
        $mid = $test[0];
        $leftArray = array();
        $rightArray = array();
        for ($i = 0; $i < count($test); $i++) {
            if($test[$i] > $mid)
                $rightArray[] = $test[$i];
            else{
                $leftArray[] =$test[$i];
            }

        }
        $leftArray=$this->quick_sort($leftArray);
        $rightArray=$this->quick_sort($rightArray);
        $array = array_merge($leftArray,$rightArray);
        var_dump($array);
        return $array;
    }


}
