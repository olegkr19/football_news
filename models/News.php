<?php

class News
{
  const SHOW_BY_DEFAULT = 6;

  public static function getNewsList($page)
  {
    $page = intval($page);
    $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
    $limit = self::SHOW_BY_DEFAULT;


    $db = DB::getConnection();
    $news = array();

    $sql = "SELECT * FROM news ORDER BY id DESC LIMIT $limit OFFSET $offset";
    $result = mysqli_query($db,$sql);

    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $news[$i]['id'] = $row['id'];
      $news[$i]['title'] = $row['title'];
      $news[$i]['date'] = $row['date'];
      $news[$i]['short_content'] = $row['short_content'];
      $news[$i]['author'] = $row['author'];
      $news[$i]['status'] = $row['status'];
      $i++;
    }
    return $news;
  }
  public static function getNewsById($id)
  {
    $id = intval($id);

    $db = DB::getConnection();

    $sql = "SELECT * FROM news WHERE id = '{$id}'";
    $result = mysqli_query($db,$sql);

    $news = mysqli_fetch_array($result);
    return $news;
  }
  public static function getTotalNews()
  {
    $db = DB::getConnection();

    $sql = "SELECT count(id) as count FROM news WHERE status = '1'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($result);

    return $row['count'];
  }
  public static function getStatus($status)
  {
    if($status == 1){
      echo "Открыто";
    }else{
    echo "Закрыто";
    }
  }
  public static function showAllNews($page)
  {
    $page = intval($page);
    $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
    $limit = self::SHOW_BY_DEFAULT;


    $db = DB::getConnection();
    $news = array();

    $sql = "SELECT * FROM news WHERE status = 1 ORDER BY id DESC LIMIT $limit OFFSET $offset";
    $result = mysqli_query($db,$sql);

    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $news[$i]['id'] = $row['id'];
      $news[$i]['title'] = $row['title'];
      $news[$i]['date'] = $row['date'];
      $news[$i]['short_content'] = $row['short_content'];
      $news[$i]['author'] = $row['author'];
      $news[$i]['status'] = $row['status'];
      $i++;
    }
    return $news;
  }
  public static function createNews($news)
  {
    $news = json_decode($news,true);

    $title = $news['title'];
    $short_content = $news['short_content'];
    $content = $news['content'];
    $author = $news['author'];
    $status = $news['status'];

    $db = DB::getConnection();

    $sql = "INSERT INTO `news`(title,short_content,content,author,status) VALUES('{$title}','{$short_content}','{$content}','{$author}','{$status}')";
    $result = mysqli_query($db,$sql);
    if($result){
      $inserted_id = mysqli_insert_id($db);
      return $inserted_id;
    }
    return 0;
  }
  public static function updateNews($id,$news)
  {
    $news = json_decode($news,true);

    $title = $news['title'];
    $short_content = $news['short_content'];
    $content = $news['content'];
    $author = $news['author'];
    $status = $news['status'];

    $db = DB::getConnection();

    $sql = "UPDATE news SET
    title = '{$title}',
    short_content = '{$short_content}',
    content = '{$content}',
    author = '{$author}',
    status = '{$status}'
    WHERE id = '{$id}'
    ";
    $result = mysqli_query($db,$sql);
    if($result){
      return true;
    }else {
      return false;
    }
  }
  public static function deleteNewsById($id)
  {
    $db = DB::getConnection();

    $sql = "DELETE FROM news WHERE id = '{$id}'";
    $result = mysqli_query($db,$sql);
    return $result;
  }
  public static function getImageById($id)
  {
    $no_image = 'no-image.jpg';

    $path = '/uploads/images/';

    $pathToNewsImage = $path . $id .'.jpg';

    if(file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToNewsImage)){
      return $pathToNewsImage;
    }
    return $path . $no_image;
  }

}
