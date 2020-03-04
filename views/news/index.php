<!-- Header-->
<?php require ROOT.'/views/layouts/header.php'; ?>

<!-- Body -->
<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">Footnews</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">Про нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('template/images/main/main.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Футбольные новости</h1>
            <span class="subheading">Все новости с мира футбола &darr; </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php foreach ($newsList as $news) { ?>
        <div class="news-preview">
          <a href="/news/<?= $news['id'];?>">
            <h3 class="title">
              <?= $news['title'];?>
            </h3>
            </a>
            <span class="info"><?= $news['date']?> от <?= $news['author'];?></span><br>
            <p class="short_content">
              <?= $news['short_content'];?> <a class="read_more" href="news/<?= $news['id'];?>">Читать больше...</a>
            </p>
        </div>
        <hr>
      <?php } ?>

        <!-- Pager -->
       <?= $pagination->get();?>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <?php require ROOT.'/views/layouts/footer.php'; ?>
