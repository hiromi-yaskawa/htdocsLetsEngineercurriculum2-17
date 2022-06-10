//ループ文 × 条件分岐
<br>
<?php
define("GOAL",40);
$total =0;
for($i =1; $i<=GOAL;$i++) {
$n =rand(1,6);
$total += $n;
echo"{$i}回目＝＝{$n}</br>";
if($total >=GOAL){
echo "合計{$i}回でゴールしました";
break;
}
}
?>


<br>
//関数 × 条件分岐
<br>
<?php

if(date("H")>=6 and date("H")<=11){
echo"<p>おはようございます。</p>";
echo "<p>今日も一日頑張りましょう。</p>";
} else if (date("H")>=12 and date("H")<=17){
echo "<p>こんにちは</p>";
echo "<p>今日は良い天気です。</p>";
} else {
echo"<p>こんばんは。</p>";
echo "<p>今日もお疲れ様でした。</p>";
}

?>
