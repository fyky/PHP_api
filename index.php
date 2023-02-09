<?php

$url = 'https://umayadia-apisample.azurewebsites.net/api/persons';

$ch = curl_init();

// URL とその他のオプションを設定
curl_setopt($ch, CURLOPT_URL, "https://umayadia-apisample.azurewebsites.net/api/persons");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);

// URL を取得し、それをブラウザに渡す
$res = curl_exec($ch);

// 配列で返す
$json = json_decode($res, true);
// cURL リソースを閉じ、システムリソースを解放する
curl_close($ch);

//print_r($json);

foreach ($json['data'] as $a){
  echo "{$a['name']}の年齢は{$a['age']}です\n";
}

?>