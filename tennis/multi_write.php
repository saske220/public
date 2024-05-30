<?php
// p176 9-9 
// 新しいファイル multi_write.phpを作る

/*
$fp = fopen("test.txt", "w");
if ($fp) {
    // プログラムで、改行命令 \n を書く
    //                           ⇩[option] + ¥
    // 改行命令を示すPHPの定数 PHP_EOL
    fwrite($fp, "書き込みテスト１行目" . PHP_EOL);
    fwrite($fp, "書き込みテスト２行目");
    fclose($fp);
    echo '書き込みました。';
} else {
    echo 'エラーが起きました。';
}
*/
// コードを書いたら、ブラウザで、multi_write.phpにアクセスする
// test.txtに２行で出力されているか？を確認する

// p177 file_put_contents関数
// fopen, fwrite, fcloseを一まとめにして実行
// 書き込みだけする場合は、こちらの方が楽
$contents = "書き込みテスト１行目";
$contents .= PHP_EOL;
$contents .= "書き込みテスト２行目";
$contents .= PHP_EOL;
$contents .= "書き込みテスト３行目";
file_put_contents("test.txt", $contents);

// fopen, fwrite, fcloseでやる方が、応用範囲は広い
// どちらで書いてもOK

//p178 check テストをやってみる