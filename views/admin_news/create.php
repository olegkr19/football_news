<?php include ROOT.'/views/layouts/header.php';?>

<section>
<div class="container">
  <div class="row">
    <br>
  <div class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href="/admin">Админ панель</a></li>
      <li><a href="/admin/news/page-1">Управление новостями</a></li>
      <li class="active">Добавление новости</li>
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
    <h4>Добавить новость</h4>
      <div class="create-form">
    <form method="post" action="#" enctype="multipart/form-data">
      <p>Заголовок</p>
      <input type="text" name="title" value="" size="80" required/>
      <p>Изображение</p>
      <input type="file" name="image" value="" required/>
      <p>Краткое описание</p>
      <textarea name="short_content" cols="80" rows="8" required></textarea>
      <p>Полное описание</p>
      <textarea name="content" cols="80" rows="10" required></textarea>
      <p>Автор</p>
      <input type="text" name="author" value="" size="80" required/>
      <p>Статус</p>
      <select name="status">
          <option value="1">Открыто</option>
          <option value="0">Закрыто</option>
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
