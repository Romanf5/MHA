<?php
/*
 * Template Name: Accomplishments Template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">

  <section class="top-section" style="background: url('<?php echo CFS()->get( 'accomplishments_background' ); ?>') no-repeat; background-size: cover; background-position-x: center">
    <h1><?php echo CFS()->get( 'headline' ); ?></h1>
    <div class="arrow"></div>
  </section>

  <section class="table-section">

    <div class="table-wrap">
      <div class="table">
        <div class="table__headline">
          <p><?php echo CFS()->get( 'table_headline' ); ?></p>
        </div>
          <table class="main-table">
            <tr class="head">
              <th class="first">Year</th><th class="second">Race</th><th class="third">Hourse</th><th class="fourth">Grade</th>
            </tr>
              <?php
              $table_accomplishment = CFS()->get('accomlpishment');
              if ($table_accomplishment){
                  foreach ($table_accomplishment as $table_stat) { ?>
                    <tr>
                      <td class="first"><?php echo $table_stat['year'] ?></td>
                      <td class="second"><?php echo $table_stat['race'] ?></td>
                      <td class="third"><?php echo $table_stat['hourse'] ?></td>
                      <td class="fourth"><?php echo $table_stat['grade'] ?></td>
                    </tr>
                  <?php }
              }
              ?>
                <?php
                $table_hidden = CFS()->get('accomplishments_hidden');
                if ($table_accomplishment){
                    foreach ($table_hidden as $table_hiddenItem) { ?>
                      <tr class="hidden">
                        <td class="first"><?php echo $table_hiddenItem['hidden_year'] ?></td>
                        <td class="second"><?php echo $table_hiddenItem['hidden_race'] ?></td>
                        <td class="third"><?php echo $table_hiddenItem['hidden_hourse'] ?></td>
                        <td class="fourth"><?php echo $table_hiddenItem['hidden_grade'] ?></td>
                      </tr>
                    <?php }
                }
                ?>
          </table>
      </div>
    </div>

    <div class="ornament middle">
      <div class="ornament__outer">
        <div class="ornament__inner"></div>
      </div>
    </div>

    <div class="button-wrapper">
      <button id="table-toggle" class="toggle-button">
        <span class="text">full table</span>
        <i class="icon-back"></i>
      </button>
    </div>

  </section>

</main>

<?php get_footer(); ?>
