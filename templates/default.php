<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo IMG . 'css/progressBar.css'; ?>">
  <link rel="stylesheet" href="<?php echo IMG . 'css/style.css'; ?>">
  <link rel="stylesheet" href="<?php echo IMG . 'css/form.css'; ?>">
  <title>Document</title>
</head>
<body>
<div id="acceuil"></div>
<?php echo $content; ?>
<div id="contact"></div>
<?php include SRC . '/Views/includes/contact/inc_contact.php'; ?>

<footer>
    <div class="container">
      <div class="row">
        <div class="a-propos col-md-6">
          <h4 class="vert">À_propos</h4>
          <p class="blanc">
            Je suis
            <span class="vert">Rémy Mozelle</span>, apprenti développeur web à la Réunion. Je suis actuellement en formation intensive à
            <span class="orange">Simplon</span>
            <br> Passioné par les nouvelles technologie.Je souhaite faire du web mon métier</p>
          </p>
        </div>
        <div class="me-suivre col-md-3">
          <h4 class="vert"><span><<span>Me_suivre</span>></span></h4>
          <div class="rs">
            <figure><a target="_blank" href="https://github.com/RemyMozelle/"><img src="<?php echo IMG . 'img/contact/rs-git.png'; ?>" alt="github de Rémy"></a></figure>
            <figure><a href=""><img src="<?php echo IMG . 'img/contact/rs-twitter.png'; ?>" alt="twitter de Rémy"></a></figure>
            <figure><a target="_blank" href="https://www.linkedin.com/in/r%C3%A9my-mozelle-801ab8154/"><img src="<?php echo IMG . 'img/contact/rs-lin.png'; ?>" alt="linkdin de Rémy"></a></figure>
          </div>
        </div>
        <div class="cv col-md-3">
          <h4 class="vert"><span><<span>Mon_cv</span>></span></h4>
          <a href="cv/Mozelle_Rémy.pdf" class="btn bvert"><span class="glyphicon glyphicon-save" style="padding-right:5px;color:black;">Télécharger</span></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="<?php echo IMG . 'js/progressBar.js'; ?>"></script>
  <script src="<?php echo IMG . 'js/scrollMenuFix.js'; ?>"></script>
  <script src="<?php echo IMG . 'js/smooth_ancre.js'; ?>"></script>

</body>
</html>