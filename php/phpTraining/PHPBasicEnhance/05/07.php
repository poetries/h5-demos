<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 23:19
 */

/*
假设某人有100,000现金。每经过一次路口需要进行一次交费。
交费规则为当他现金大于50,000时每次需要交5%如果现金小于等于50,000时每次交5,000。
请写一程序计算此人可以经过多少次这个路口。

分析:给此人100 000元,初始条件.

判断条件: 钱至少>=5000

过路口:钱减少

*/

/**
for($money = 100000,$num=0;$money >= 5000;$num++) {
if($money > 50000) {
$money *= 0.95; // 扣了5%,即原来的0.95倍
} else {
$money -= 5000;
}
}

echo $num;
 **/

for($money = 100000,$num=0;$money >= 5000;) { // 看此处,第2个";"号后竟然是空的??
    if($money > 50000) {
        $money *= 0.95; // 扣了5%,即原来的0.95倍
    } else {
        $money -= 5000;
    }

    $num += 1; // 把过桥记录加1
    echo '第',$num,'次过桥后,剩余,',$money,'元<br />';
}



// 最简单的for循环
for(;;) {
    echo 'haha';
}  // 别运行,死循环了.



/***
之前碰到的一些怪事:
023的显示问题
二进制的问题
16进制面试题的问题.

药死小白鼠的问题.

如上,给我带来的疑惑,都是因为进制的问题.

 ***/