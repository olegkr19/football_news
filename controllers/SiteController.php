<?php

  class SiteController
  {

    public function index($page = 1)
    {
    $newsList = News::showAllNews($page);
    $total = News::getTotalNews();
    $pagination = new Pagination($total,$page,News::SHOW_BY_DEFAULT,'page-');

    require_once(ROOT.'/views/site/index.php');
    return true;
    }

}
