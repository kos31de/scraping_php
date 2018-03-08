<?php
/**
 * Created by PhpStorm.
 * User: k
 * Date: 3/8/18
 * Time: 19:15
 */

// エラーを出力する
ini_set('display_errors', "On");

//require
require_once("phpQuery-onefile.php");

//ページ取得
$html  = file_get_contents('https://dev.to/');
//DOM
$doc = phpQuery::newDocument($html);

//要素
echo $doc["title"]->text();

//idで指定
echo $doc["title"]->text();

//echo pq("title")->text();　でも要素の取得可能

//属性で取得
$src = $doc["table:eq(1)"]->find("td:contains('image') + td img")->attr("src");
$href = $doc["table:eq(1)"]->find("td:contains('detail') + td a")->attr("href");

