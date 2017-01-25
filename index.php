<?php

require  __DIR__ .'/model/news.php';

$news = News_getAll();

include __DIR__ .'/view/index.php';
