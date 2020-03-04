<?php
return array(
'contact' => 'contact/index',

'about' => 'about/index',

'news/([0-9]+)' => 'news/show/$1',

'admin/news/page-([0-9]+)' => 'adminNews/index/$1',
'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
'admin/news/create' => 'adminNews/create',
'admin/logout' => 'admin/logout',
'admin' => 'admin/index',

'page-([0-9]+)' => 'site/index/$1',
'' => 'site/index'
);
