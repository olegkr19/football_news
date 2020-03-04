<?php include ROOT.'/views/layouts/header.php';?>

<section>
<div class="container">
  <div class="row">
    <br>
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="/admin">Админ панель</a></li>
        <li><a href="/admin/news/page-1">Управление новостями</a></li>
        <li class="active">Удалить новость</li>
      </ol>
    </div>
    <div class="delete">
      <?= $success_message;?>
      <hr>
    <h4>Удалить новость №<?= $id; ?></h4>
    <p>Вы действительно хотите удалить эту новость?</p>
    <form method="post" action="">
      <input type="submit" name="submit" value="Удалить"/>
    </form>
  </div>
  </div>
</div>
</section>
<br>
<?php include ROOT.'/views/layouts/footer.php';?>
