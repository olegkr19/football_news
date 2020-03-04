<?php

class NewsController
{

  public function show($id)
  {
    $news = News::getNewsById($id);

    require_once(ROOT.'/views/news/show.php');
    return true;
  }
}
