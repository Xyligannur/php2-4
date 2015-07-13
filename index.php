<?php
require_once 'classes.php';

//---------1 задание---------------

$a1 = new NewsArticle (1, 'Lorem 1', 'Содержимое Lorem 1');
$a2 = new NewsArticle (2, 'Lorem 2', 'Содержимое Lorem 2');
$a3 = new NewsArticle (3, 'Lorem 3', 'Содержимое Lorem 3');

$a4 = new CrossArticle (4, 'Lorem 4', 'Содержимое Lorem 4', 'link 1');
$a5 = new CrossArticle (5, 'Lorem 5', 'Содержимое Lorem 5', 'link 2');
$a6 = new CrossArticle (6, 'Lorem 6', 'Содержимое Lorem 6', 'link 3');

$a = new ArticleList();
$a->add($a1);
$a->add($a2);
$a->add($a3);
$a->add($a4);
$a->add($a5);
$a->add($a6);
$a->view();
// -------2 задание-----------
	echo "<center><h1>2 задание</h1></center>";
$a7 = new ImgArticle(7, 'Img 1', 'Картинка Img 1', 'img/1.png');
$a8 = new ImgArticle(8, 'Img 2', 'Картинка Img 2', 'img/2.png');
$a9 = new ImgArticle(9, 'Img 3', 'Картинка Img 3', 'img/3.png');

$a = new ArticleList();
$a->add($a7);
$a->add($a8);
$a->add($a9);

$a->view();

// -----------4 задание-----------
echo "<center><h1>4 задание</h1></center>";
$desca = new DescArticleList();
$desca->add($a1);
$desca->add($a2);
$desca->add($a3);
$desca->add($a4);
$desca->add($a5);
$desca->add($a6);
$desca->add($a7);
$desca->add($a8);
$desca->add($a9);

$desca->view();

