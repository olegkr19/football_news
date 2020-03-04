<?php include ROOT.'/views/layouts/header.php';?>

<section>
<div class="container">
  <div class="row">
    <br>
  <div class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href="/admin">Админ панель</a></li>
      <li><a href="/admin/news/page-1">Управление новостями</a></li>
      <li class="active">Редактирование новости</li>
    </ol>
  </div>
  <div class="col-lg-4">
  <?php if(isset($errors) && is_array($errors)){ ?>
      <ul>
        <?php foreach($errors as $error){ ?>
          <li><?= $error; ?></li>
      <?php  } ?>
        </ul>
  <?php }else{ ?>
    <span><?= $success_message;?></span>
<?php  } ?>
  <hr>
    <h4>Редактировать новость</h4>
      <div class="create-form">
    <form method="post" action="#" enctype="multipart/form-data">
      <p>Заголовок</p>
      <input type="text" name="title" value="<?= $newsById['title'];?>" size="80" required/>
      <p>Изображение</p>
      <img src="<?= News::getImageById($newsById['id']);?>" style="width:200px;"><br>
      <input type="file" name="image" value="" required/>
      <p>Краткое описание</p>
      <textarea name="short_content" cols="80" rows="8" required><?= $newsById['short_content'];?></textarea>
      <p>Полное описание</p>
      <textarea name="content" cols="80" rows="10" required><?= $newsById['content'];?></textarea>
      <p>Автор</p>
      <input type="text" name="author" value="<?= $newsById['author'];?>" size="80" required/>
      <p>Статус</p>
      <select name="status">
          <option value="1"<?php if($newsById['status'] == 1){ echo 'selected';}?>>Открыто</option>
          <option value="0"<?php if($newsById['status'] == 0){ echo 'selected';}?>>Закрыто</option>
      </select>
      <br><br>
      <input type="submit" name="submit" class="btn btn-default" value="Сохранить"/>
      <br><br>
    </form>
  </div>
</div>
</section>
<br>
<?php include ROOT.'/views/layouts/footer.php';?>
