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
  <!-- Errors -->
  <div class="errors" style="margin-left:500px;">
    <?php if(isset($errors) && is_array($errors)){ ?>
      <?php foreach ($errors as $error){ ?>
      <ul>
      <li><?= $error;?></li>
      </ul>
    <?php } ?>
  <?php  } ?>
  </div>
  <!-- Main Content -->
  <div class="container col-md-3" style="border: 2px solid grey;margin-left: 500px;margin-top:30px;">
      <div class="log">
  <form action="" method="post">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" id="email">
  </div>
  <div class="form-group">
    <label for="password">Пароль:</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="form-group">
    <input type="submit" class="form-control" name="submit" value="Войти">
  </div>
    </form>
    </div>
  </div>
