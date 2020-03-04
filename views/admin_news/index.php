<?php include ROOT.'/views/layouts/header.php';?>

<section>
<div class="container">
  <div class="row">
    <br>
  <div class="breadcrumbs">
    <ol class="breadcrumb">
      <li><a href="/admin">Админ панель</a></li>
      <li class="active">Управление новостями</li>
    </ol>
  </div>
  <div class="create">
  <a href="/admin/news/create" class="btn btn-default back">Добавить новость</a>
  </div>
  <br>
  <div class="news_table">
    <h4>Список новостей</h4>
    <br>
    <table class="table-bordered table-striped table">
      <tr>
        <th>ID новости</th>
        <th>Заголовок</th>
        <th>Краткое описание</th>
        <th>Статус</th>
        <th></th>
      </tr>
      <?php foreach($newsList as $news){ ?>
        <tr>
          <td><?= $news['id'];?></td>
          <td><?= $news['title'];?></td>
          <td><?= $news['short_content'];?></td>
          <td><?= News::getStatus($news['status']);?></td>
          <td><a href="/admin/news/update/<?= $news['id'];?>" title="Редактировать">Редактировать<i class="fa fa-edit" style="font-size:36px"></i></a></td>
          <td><a href="/admin/news/delete/<?= $news['id'];?>" data-id="<?= $news['id'];?>" title="Удалить" id="delete">Удалить<i class="fa fa-times" aria-hidden="true"></i></a></td>
        </tr>
    <?php  }
    ?>
  </table>
  <?= $pagination->get();?>
</div>
</div>
</div>
</section>
<?php include ROOT.'/views/layouts/footer.php';?>
