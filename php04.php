<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #000;
            color: #fff;
        }
        h1{
            border-left:solid 20px #fff;
            border-bottom:solid 2px #fff;
            padding:10px;
        }
        h2{
            border-left:solid 5px #fff;
            padding:8px;
        }
        h3::before{
            content: "★";
            padding-left:3px;
        }
    </style>
</head>
<body>
<h1>PHP/Laravel 04 関数を理解しよう 練習</h1>
<?php
// 1~10までを足した値を返す関数
 function sum($max){
     $result = 0;
         for($i = 1; $i <= $max; $i++){
                 $result += $i;
                     }
                         return $result;
                         }

                         echo sum(10);

                         $string = "ABCDEF";
                         echo strlen($string);

                         $string = "I love Ruby!";
                         $new_string = str_replace("Ruby","PHP",$string);
                         echo $new_string;

                         $array = array(1,2,3,4,5,6,7,8,9,10);
                         echo count($array);
                         echo "<br><br>";
                         $array = array(2,5,9,7,3,1,8,6,4);
                         asort($array);
                         print_r($array);
                         echo "<br><br>";
                         arsort($array);
                         print_r($array);
                         echo "<br><br>";

                         ?>
                         <hr>
                         <h1>PHP/Laravel 04 関数を理解しよう 課題</h1>
                         </h2>
                         <?php

                         echo "<h2>課題1.</h2>";
                         function double($value){
                             $result = $value * 2;
                                 return $result;
                                 }
                                 echo double(3.3);

                                 echo "<h2>課題2.</h2>";
                                 function add($a,$b){
                                     $result = $a + $b;
                                         return $result;
                                         }
                                         echo add(7,13);
                                         echo "<h2>課題3.</h2>";
                                         function arr(){
                                         $array = array(1,3,5,7,9);
                                          $result = array_product($array);
                                           return $result;
                                           }
                                           echo arr();

                                           echo "<h2>課題4.</h2>";
                                           function max_array($arr){
                                               $arr = array(1,3.2,50000,700,4);
                                                   // とりあえず配列の最初の要素を一番大きい値とする
                                                       $max_number = $arr[0];
                                                           $check = $max_number;
                                                               echo $check."チェックした数値<br>";
                                                                   foreach($arr as $a){
                                                                         // ここで配列の中の1番大きい値を探したい
                                                                               if($max_number < $a){
                                                                                       $max_number = $a;
                                                                                             }
                                                                                                 }
                                                                                                     return $max_number;
                                                                                                       }
                                                                                                         echo max_array($arr);

                                                                                                           echo "<h2>課題5.</h2>";
                                                                                                           //strip_tags 文字列から HTML および PHP タグを取り除く
                                                                                                           echo "<h3>5-1 strip_tagsについて</h3>";
                                                                                                           echo "<p>strip_tagsは文字列から HTML および PHP タグを取り除く</p>";
                                                                                                           $input = '<p>猫部ねこの代表作といえば、<b>「きんぎょ注意報！」</b>である。</p>';
                                                                                                           echo $input."↑全部のせ";
                                                                                                           echo "<hr>";
                                                                                                           echo strip_tags($input)."←HTML削除";
                                                                                                           echo "<hr>";
                                                                                                           echo strip_tags($input,'<b>')."←<b>タグだけ許可";

                                                                                                           //array_push
                                                                                                           echo "<h3>5-2 array_pushについて</h3>";
                                                                                                           echo "<p>array_pushは一つ以上の要素を配列の最後に追加する</p>";
                                                                                                           $fruits = array("パイナップル","ドラゴンフルーツ");
                                                                                                           array_push($fruits, "ライチ","マンゴスチン");
                                                                                                           print_r($fruits);
                                                                                                           echo "<br>ちなみに3番目のフルーツは：".$fruits[2];

                                                                                                           //array_merge
                                                                                                           echo "<h3>5-3 array_mergeについて</h3>";
                                                                                                           echo "<p>array_mergeはひとつまたは複数の配列をマージする</p>";
                                                                                                           $arr01 = array("猫科" => "猫", "いぬ",5271);
                                                                                                           $arr02 = array("ミスチル","エレカシ","猫科" => "猫",5271,"551の蓬莱");
                                                                                                           $result = array_merge($arr01, $arr02);
                                                                                                           print_r($result);
                                                                                                           echo "<br>ちなみに6番目の結果は：「".$result[5]."」でした！たまにめっちゃ食べたくなりますね。";

                                                                                                           //time, mktime
                                                                                                           echo "<h3>5-4 time, mktimeについて</h3>";
                                                                                                           echo "<p>timeは現在の Unix タイムスタンプを返す</p>";
                                                                                                           echo 'Now（unixtime）: '. time()."<br>";
                                                                                                           echo 'Now（date関数で変換）:'. date("Y年m月d日 H:i:s",time());
                                                                                                           echo "<p>mktimeは日付を Unix のタイムスタンプとして取得する</p>";
                                                                                                           echo 'Mktime（unixtime）:'. mktime(11,15,38,12,18,1997)."<br>";
                                                                                                           echo 'Mktime（date関数で変換）:'. date("Y年m月d日 H:i:s",mktime(11,15,38,12,18,1997));


                                                                                                           //date
                                                                                                           echo "<h3>5-5 dateについて</h3>";
                                                                                                           echo "<p>dateはUnixタイムスタンプを書式化する</p>";
                                                                                                           echo date('Y-m-d H:i:s');
                                                                                                           ?>
                                                                                                           </body>
                                                                                                           </html>

