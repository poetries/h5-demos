
<?php
/**
 * Created by PhpStorm.
 * User: poerty
 * Date: 2016/5/22
 * Time: 15:50
 */

/**
3:百钱百鸡问题:
《张丘建算经》成书于公元5世纪，作者是北魏人．书中最后一道题堪称亮点，通常也被称为“百钱买百鸡”问题，民间则流传着县令考问神童的佳话书中原文如下：
今有鸡翁一，值钱五；鸡母一，值钱三；鸡雏三，值钱一；百钱买鸡百只，问鸡翁、母、雏各几何？
题目的意思是，公鸡5文钱1只，母鸡3文钱1只，小鸡1文钱买3只，现在用100文钱共买了100只鸡，问：在这100只鸡中，公鸡、母鸡和小鸡各是多少只？（设每种至少一只）

1只公鸡 5块钱
1只母鸡 3块
3只小鸡 1块

拿了100块钱,买回来100只鸡

问:公鸡,母鸡,小鸡各几只?

 **/


/*
思路:
公鸡 1-100只,
母鸡 1-100只
小鸡 1-100只,

暴力组合
*/


for($g = 1;$g <= 100; $g++) {
    for($m = 1;$m <= 100; $m++) {
        for($x = 1; $x <= 100; $x++) {
            if(($g + $m + $x) == 100 && (5*$g + 3 * $m + $x/3) == 100) {
                echo '公鸡',$g,',母鸡',$m,',小鸡',$x,'<br />';
            }
        }
    }
}


// 上面这个for循环,虽然算出来了解决,但效率很低.
// 因为,如果运气非常差.
// 要运行 100 * 100 * 100次 , 100W次.



// 优化一下.
// 因为公鸡 + 母鸡 + 小鸡 共100只, 因此 $x = 100 - $g - $m;

for($g = 1;$g <= 100; $g++) {
    for($m = 1;$m <= 100; $m++) {
        $x = 100 - $g - $m;
        if(($g + $m + $x) == 100 && (5*$g + 3 * $m + $x/3) == 100) {
            echo '公鸡',$g,',母鸡',$m,',小鸡',$x,'<br />';
        }
    }
}

// 这一次,优化掉一层for循环,运气最差,执行 100 * 100次.



// 继续优化,因为公鸡每只5元,共100元,因此,公鸡不可能超过20只
// 母鸡3元钱一只,不可能超过33只

for($g = 1; $g <= 20; $g++) {
    for($m = 1; $m <= 33; $m++) {
        $x = 100 - $g - $m;
        if(($g + $m + $x) == 100 && (5*$g + 3 * $m + $x/3) == 100) {
            echo '公鸡',$g,',母鸡',$m,',小鸡',$x,'<br />';
        }
    }
}

// 此时,利用边界条件,优化了效率,最多运行 20*33次.