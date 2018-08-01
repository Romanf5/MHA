<div class="slider-holder">
    <?php
    $slider = CFS()->get('slider_loop');
    if ($slider){
        foreach ($slider as $slider_item) { ?>
          <div class="slider-holder__item" style="background: url('<?php echo $slider_item['slider_image'] ?>') no-repeat; background-size: cover; background-position-x: center">
            <div class="slider-content">
              <div class="main-container">
                <div class="prew"><span class="icon-back"></span></div>
                <div class="inner-wrapper">
                  <p class="small-text"><?php echo $slider_item['small_text'] ?></p>
                  <p class="big-text"><?php echo $slider_item['big_text'] ?></p>
                </div>
                <div class="next"><span class="icon-next"></span></div>
              </div>
            </div>
          </div>
        <?php }
    }
    ?>
</div>