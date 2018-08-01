<?php
/*
 * Template Name: Workout Template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

    <section class="top-section" style="background: url('<?php echo CFS()->get( 'workout_background' ); ?>') no-repeat; background-size: cover; background-position-x: center">
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
      <div class="arrow"></div>
    </section>
    <section class="table-section">
      <div class="table-wrap">
        <div class="top table__headline table-radius">
          <p>Workout Information</p>
        </div>
        <table class="main-table border content-table" id="workout">
          <tbody>
          <tr class="head">
            <th class="first">Name</th><th>Workout date</th><th>Location</th><th>Surface condition</th><th>Time</th>
            <th>Distance</th><th class="fourth">Notes</th>
          </tr>
          </tbody>
        </table>
      </div>
    </section>
	</main>

<?php get_footer(); ?>
