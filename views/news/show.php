<!-- Header-->
<?php include ROOT.'/views/layouts/header.php'; ?>

<!-- Body -->
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="nav-container">
    <img src="/template/images/main/main.jpg" style="width:100%; height:200px;left:0;position:relative;">
      <!--<a class="nav-main" href="/">Footnews</a> -->
    </div>
  </nav>


  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="news-single">
            <h3 class="title">
              <?= $news['title'];?>
            </h3>
            <span class="info" style="color:grey;"><?= $news['date']?> от <?= $news['author'];?></span><br>
            <img src="<?= News::getImageById($news['id']);?>" style="width:720px;"><br><br>
            <p class="short_content">
              <?= $news['content'];?>
            </p>
        </div>
        <hr>

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-left" href="/">Вернуться на главную</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php require ROOT.'/views/layouts/footer.php'; ?>
