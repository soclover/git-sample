<?php
$height = 230;
//もし150未満なら｛｝の中が実行
if($height < 150){
	echo "150cm 未満の方はご乗車できません。";
}else if($height >= 200){
	echo "200cm以上の方はご乗車できません。";
}
else{
	echo "ご乗車になれます";
}


$weekday = "木曜";
switch ($weekday){
case "月曜":
	echo "可燃ごみの日です。\n";
	break;
case "水曜日":
	echo "資源ごみの日です。\n";
	break;
default:
	echo "回収はありません。\n";
	break;
}

$a = 3;
$b = 3;
$c = "3";
echo "\n";
var_dump($a == $b);
echo "\n";
var_dump($a != $b);
echo "\n";
var_dump($a > $b);
echo "\n";
var_dump($a >= $b);
echo "\n";
var_dump($a < $b);
echo "\n";
var_dump($a <= $b);
echo "\n";
var_dump($a === $c);
echo "\n";
var_dump($a !== $c);
echo "\n";
var_dump($a == $c);

echo "\n課題はこちらからになります。よろしくお願いいたします。\n";
echo "課題1\n";
$name = "八木真紹";
if($name == "八木真紹"){
	    echo "あなたの名前です";
}else{
	    echo "あなたの名前ではありません";
}
echo "\n\n";

echo "課題2\n";
$total = 0;
echo "初期値:".$total."\n";
for($i = 0; $i <= 10000; $i++){
    $total += $i;
    }
    echo "計算結果:".$total;
    echo "\n\n";

echo "課題3\n";
    # 配列のすべての要素を出力
    $fruits = array("Mango", "Pineapple", "Kiwi", "Orange", "Cherry");

    echo "フルーツの種類は".count($fruits)."種類です。\n";
    //=> 5 と表示される。

    foreach ($fruits as $fruit) {
      echo $fruit."\n";
        }
        echo "\n";

echo "課題4\n";
        /* for文の始めの値を定義する */
        //↑元々はコメントアウトが閉じられていなかった
        $start = 1;
        /* for文の終わりの値を定義する */
        $end = 100;

        for($i = $start; $i <= $end; $i++){
        //↑元々は$i < $endとなっていたが、それだと99で止まってしまうので最後が95になる
          // 5で割り切れたら{}内を実行する
            if($i % 5 == 0){
                echo $i."\n";
                //↑元々は$iのあとの「;」がなかったのでバグる
                  }
                  }
