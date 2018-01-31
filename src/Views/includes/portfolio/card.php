<section class="row">
  <?php foreach($card as $cards) { ?>
    <article class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <div class="fix-relative-img">
          <img src="<?php echo IMG . $cards->url; ?>" alt="intégration the montaigne" style="width:100%;height:232px;">
          <figure class="fix-absolute-img">
            <a target="_blank" href="<?php echo $cards->github; ?>">
              <img class="resize-git-view" src="<?php echo IMG . 'img/contact/git.png'; ?>" alt="">
            </a>
          </figure>
        </div>
        <div class="caption">
          <h3>
            <?php echo $cards->name; ?>
          </h3>
          <p>
          <?php echo $cards->description; ?>
          </p>
          <p style="font-size:1em;">
            <?php $techno = explode(',', $cards->technologies); ?>
            <?php $color = explode(',', $cards->color); ?>
            <?php for($i = 0; $i < count($techno); $i++) { ?>
              <span class="label label-default b<?php echo $color[$i]; ?>"><?php echo $techno[$i]; ?></span>
            <?php } ?>
          </p>
        </div>
      </div>
    </article>
<?php } ?>
</section>