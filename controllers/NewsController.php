<?php

/**
 *
 */
class NewsController
{
  /*public function index($page = 2)
  {
    $newsList = News::getNewsList();
    $total = News::getTotalNews();
    $pagination = new Pagination($total,$page,News::SHOW_BY_DEFAULT,'page-');

    require_once(ROOT.'/views/news/index.php');
    return true;
  }*/
  public function show($id)
  {
    $news = News::getNewsById($id);

    require_once(ROOT.'/views/news/show.php');
    return true;
  }
}
