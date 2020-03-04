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
  <!--<div class="container">
    <div class="row"> -->
     <div class="col-lg-8 col-md-10 mx-auto">
        <div class="form">
          <h2>Отправить нам сообщение</h2>
          <form action="" method="post">
            <label for="email">Ваша почта:</label><br>
            <input type="email" name="email"/><br>
            <label for="text">Сообщение:</label><br>
            <textarea name="text" rows="8" cols="35"></textarea><br><br>
            <input type="submit" name="submit" value="Отправить">
          </form>
        </div>
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

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-left" href="/">Вернуться на главную</a>
        </div>
      <!--</div>
    </div> -->
  <!--</div> -->

  <hr>

  <!-- Footer -->
  <?php require ROOT.'/views/layouts/footer.php'; ?>
    </div>
