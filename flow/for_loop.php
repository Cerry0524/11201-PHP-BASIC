<?php

for($i=0;$i<10;$i++){
    echo $i*10;
    echo "<br>";
}

echo '$i='.$i;


echo "<hr>";

//以公式算出目標值前需要執行的迴圈數
//再以公式算出每一圈應該要印出的奇數
$n=21;
//$limit=ceil($n/2);
for($i=1;$i<=ceil($n/2);$i++){
    //echo '$i=' . $i . "=>";
    echo $i*2-1;
    echo ",";
}
echo "<br>";

echo "<hr>";

//以間隔2的方式印出奇數
$n=21;
//$limit=ceil($n/2);
for($i=1;$i<=$n;$i=$i+2){
    //echo '$i=' . $i . "=>";
    echo $i;
    echo ",";
}
echo "<br>";

echo "<hr>";



//質數判斷方法
$n=96;
$check=false;  //設定一個檢查值，如果為false，表示沒有其它的因數出現

//迴圈從2開始檢查到n-1，看看有沒有那一個數可以整除n
for($i=2;$i<$n;$i++){  

    if($n%$i==0){  //使用餘數是否為0來判斷是否有整除成功
        $check=true;  //如果餘數為0，表示n有1和n以外的因數，此時把check設為true
        break;  //只要一出現1和n以外的因數，跳出整個迴圈不執行
    }

}

//在迴圈結束後，檢查$check這個變數的結果為false或是true
if($check==false){

    //如果$check是false，表示在上面的迴圈檢查過程中，
    //沒有在2 ~ n-1 的數字中發現任何可以整除n的數字
    echo $n . "是質數";  
}else{

    //如果$check是true，表示在上面的迴圈檢查過程中，
    //有在2 ~ n-1 的數字中發現至少一個可以整除n的數字
    echo $n . "不是質數";
}


echo "<hr>";

/*****************************************************
   結合上述的找質數方法，現在問題變成在一個整數區間2 ~ n
   找出這個整數區間的所有質數
   可以理解為2 ~ n間的每一個數字都要做一次質數的檢查
   然後把質數印出來 
******************************************************/

$n=97;

for($i=3;$i<=97;$i++){
    $check=false;
    for($j=2;$j<$i;$j++){
    
        if($i%$j==0){
            $check=true;
            break;
        }
    }
    
    if($check==false){
        echo $i . ",";
    }
}

