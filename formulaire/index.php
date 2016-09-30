<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, , minimum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href=".././css/img/logo.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
    <link rel="stylesheet" href=".././css/animate.css"/>
    <link rel="stylesheet" href=".././css/main.css"/>


    <title> Portfolio jimmy </title>
  </head>
  <body>

    <nav class=" col-xs-12 containernav">
        <ul class="groupelistenav">
          <li class="listenav"><a class="js-scrollTo" href="../index.html">Page precedente</a></li>
          <!--<li class="listenav"><a href="#projet">Projet</a></li>-->
        </ul>
    </nav>

    <footer class="col-xs-12 contact" id="contact">
      <section>


<div class="container wow fadeIn" data-wow-duration="3s" data-wow-delay="20ms" data-wow-offset="100">
  <div class="starter-template">

    <?php if(array_key_exists('errors', $_SESSION)): ?>
        <div class="alert alert-danger">
            <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
    <?php endif; ?>
    <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert alert-success">
          Votre email a bien été envoyé
        </div>
    <?php endif; ?>

    <form action="post_contact.php" method="POST">
      <div class="row">
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputname">Votre nom</label>
            <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputprenom">Votre prénom</label>
            <input type="text" name="prenom" class="form-control" id="inputprenom" value="<?= isset($_SESSION['inputs']['prenom']) ? $_SESSION['inputs']['prenom'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputemail">Votre email</label>
            <input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="form-group">
            <label for="inputobjet">Objet</label>
            <input type="text" name="objet" class="form-control" id="inputobjet" value="<?= isset($_SESSION['inputs']['objet']) ? $_SESSION['inputs']['objet'] : ''; ?>">
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group ">
            <label for="inputmessage">Votre message</label>
            <textarea id="inputmessage" name="message" class="form-control champMessage"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary test col-xs-2 col-xs-offset-5">Envoyer</button>
        </div>
      </div>
    </form>

  </div>
</div>

 </section>
</footer>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="../javascript/smoothscroll.js"></script>
<script type="text/javascript" src="../javascript/wow.min.js"></script>
<script type="text/javascript" src="../javascript/initwow.js"> </script>

</body>
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);

?>
