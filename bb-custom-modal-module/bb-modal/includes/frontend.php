<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example:
 */

?>
<!-- Button trigger modal -->
<div class="modal-upper">
  <button type="button" class="btn btn-primary bb-modal-btn" data-toggle="modal" data-target=".bb-modal">
    <img src="<?php echo $settings->modal_image_src; ?>" alt="<?php echo $settings->modal_image_alt; ?>" class="modal-image" />
  </button>
  <h3 class="modal-title"><?php echo $settings->modal_title; ?></h3>
  <h4 class="modal-description"><?php echo $settings->modal_description; ?></h4>
</div>

<!-- Modal -->
<div class="modal fade bb-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-body row">
        <div class="col-md-4">
          <img src="<?php echo $settings->modal_image_src; ?>" alt="<?php echo $settings->modal_image_alt; ?>" class="modal-image" />
        </div>
        <div class="col-md-8">
          <h3 class="modal-title"><?php echo $settings->modal_title; ?></h3>
          <h4 class="modal-description"><?php echo $settings->modal_description; ?></h4>
          <?php echo $settings->modal_editor; ?>
        </div>
      </div>
    </div>
  </div>
</div>
