<div class="row">
  <div class="container">
    <?php foreach($skill as $skills) { ?>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="progress skill-bar">
            <div class="progress-bar progress-bar b<?php echo $skills->color; ?>" role="progressbar" aria-valuenow="<?php echo $skills->mastery; ?>" aria-valuemin="0" aria-valuemax="100">
            <span class="skill" style="color:black;"><?php echo $skills->name; ?>
            <i class="val"><?php echo $skills->mastery; ?></i>
          </span>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>