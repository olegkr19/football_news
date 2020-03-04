<?php

class AdminNewsController
{

  public function index($page = 1)
  {
    $newsList = News::getNewsList($page);
    $total = News::getTotalNews();
    $pagination = new Pagination($total,$page,News::SHOW_BY_DEFAULT,'page-');

    require_once(ROOT.'/views/admin_news/index.php');
    return true;
  }
  public function create()
  {
    $news = array();
    $success_message = '';

    $errors = false;

    if(isset($_POST['submit'])){
      $news['title'] = $_POST['title'];
      $news['short_content'] = $_POST['short_content'];
      $news['content'] = $_POST['content'];
      $news['author'] = $_POST['author'];
      $news['status'] = $_POST['status'];

      if(strlen($news['title']) < 2){
        $errors[] = 'Неправильный заголовок';
      }
      if($errors == false){
        //put data from news array in json format
        $news = json_encode($news);
        //get last inserted data from news table
        $id = News::createNews($news);
        //Post image to our upload folder

        //if we have last inserted data
          if($id){
          //if file is uploaded
            if(is_uploaded_file($_FILES['image']['tmp_name'])){
            //upload file to new directory
              move_uploaded_file($_FILES['image']['tmp_name'],$_SERVER['DOCUMENT_ROOT'] . "/uploads/images/{$id}.jpg");
          }
          //success message
          $success_message = 'Новость добавлена успешно';
        }else{
        //redirect to the previous page
        header("Location: /admin/news/page-1");
        }
      }
    }

    require_once(ROOT.'/views/admin_news/create.php');
    return true;
  }
  public function update($id)
  {
    $id = intval($id);

    $newsById = News::getNewsById($id);
    $news = array();

    $errors = false;
    $success_message = '';

    if(isset($_POST['submit'])){
      $news['title'] = $_POST['title'];
      $news['short_content'] = $_POST['short_content'];
      $news['content'] = $_POST['content'];
      $news['author'] = $_POST['author'];
      $news['status'] = $_POST['status'];

      if(strlen($news['title']) < 2){
        $errors[] = 'Неправильный заголовок';
      }
      if($errors == false){
        //put data from news array in json format
        $news = json_encode($news);
        //Post image to our upload folder

        //if we updated data
          if(News::updateNews($id,$news)){
          //if file is uploaded
            if(is_uploaded_file($_FILES['image']['tmp_name'])){
            //upload file to new directory
              move_uploaded_file($_FILES['image']['tmp_name'],$_SERVER['DOCUMENT_ROOT'] . "/uploads/images/{$id}.jpg");
          }
          //success message
          $success_message = 'Новость успешно изменена';
        }else{
        //redirect to the previous page
        header("Location: /admin/news/page-1");
        }
      }
    }
      require_once(ROOT.'/views/admin_news/update.php');
      return true;
  }
  public function delete($id)
  {
    $id = intval($id);


    $db = DB::getConnection();

    $success_message = '';

    if(isset($_POST['submit'])){
    News::deleteNewsById($id);
    $success_message = "Новость успешно удалена";
    }

    require_once(ROOT.'/views/admin_news/delete.php');
    return true;
  }
}
