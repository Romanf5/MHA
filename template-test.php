<?php
/*
 * Template Name: Test Template
 */
?>

<?php get_header(); ?>

  <main id="main" class="page-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <h2>Horse Roster Information</h2>

        <table id="tabel-test">
          <tr>
            <td>Name</td>
            <td>Current location</td>
            <td>Sex</td>
            <td>Sire</td>
            <td>Current location abbr</td>
            <td>Birth year</td>
            <td>Color</td>
            <td>Dam</td>
            <td>Dam dam</td>
            <td>Dam sire</td>
            <td>Sire dam</td>
            <td>Sire sire</td>
          </tr>
        </table>

        <h2>Owner info</h2>

        <table id="owner-table">
          <tr>
            <td>Name</td>
            <td>City</td>
            <td>Company name</td>
            <td>Ownership</td>
            <td>Race entry name</td>
          </tr>
        </table>

        <hr>

        <h2>Race Information</h2>

        <table id="race-information">
          <tr>
            <td>Date</td>
            <td>Horse</td>
            <td>Track</td>
            <td>Type</td>
            <td>Surface</td>
            <td>Placing</td>
            <td>Race</td>
            <td>Post</td>
            <td>jokey</td>
            <td>Earnings</td>
          </tr>
        </table>

        <hr>

        <h2>Workout Information</h2>

        <!--<table id="workout">
          <tr>
            <td>Name</td>
            <td>Workout date</td>
            <td>Location</td>
            <td>Surface condition</td>
            <td>Time</td>
            <td>Distance</td>
            <td>Activity</td>
          </tr>
        </table>-->

        <hr>

        <h2>YTD Information</h2>

        <table id="information">
          <tr>
            <td>Year</td>
            <td>Starts</td>
            <td>Wins</td>
            <td>Seconds</td>
            <td>Thirds</td>
            <td>Percent win</td>
            <td>Total earnings</td>
          </tr>
        </table>

        <hr>

        <h2>Owner information</h2>

        <table id="owner">
          <tr>
            <td>Full name</td>
            <td>Company name</td>
            <td>City</td>
            <td>Horse name</td>
            <td>Location</td>
            <td>Percent ownership</td>
            <td>Birth year</td>
          </tr>
        </table>

      <?php endwhile; ?>

  </main>

<?php get_footer(); ?>