<?php

$url = 'https://umayadia-apisample.azurewebsites.net/api/persons';

$ch = curl_init();

// URL とその他のオプションを設定
curl_setopt($ch, CURLOPT_URL, "https://umayadia-apisample.azurewebsites.net/api/persons");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);


/*
// curlオプションを設定する
$options = array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $options);

// curlを実行し、URLの情報を保存する
$response  = curl_exec($ch);

//返却値を表示する
echo "<pre>";
print_r($response);
echo "</pre>";

// curlセッションを終了する
curl_close($ch);
*/


// URL を取得し、それをブラウザに渡す
$res = curl_exec($ch);

// 配列で返す
$json = json_decode($res, true);
// cURL リソースを閉じ、システムリソースを解放する
curl_close($ch);

print_r($json);


foreach ($json['data'] as $a){
  //print_r($a);
  echo "{$a['name']}の年齢は{$a['age']}です\n";
}

?>