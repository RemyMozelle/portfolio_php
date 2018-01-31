<nav class="navbar navbar-default bgc-header header-fix" style="background-color: rgba(40, 44, 52, 1" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <img id="minimoi" class="nav-brand" src="<?php echo IMG . 'img/minimoi.png'; ?>" alt="mini avatar de Rémy" style="visibility:hidden">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <div class="sr-only">Toggle navigation</div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
        <div class="icon-bar"></div>
      </button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php foreach($menu as $menus) { ?>
          <li><a style="visited:green;" href="<?php echo $menus->url; ?>"><span><</span><?php echo $menus->name; ?><span> /></span></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>