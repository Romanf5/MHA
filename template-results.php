<?php
/*
 * Template Name: Results Template
 */
?>

<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

    <section class="future-races">
      <h1>Upcoming Races</h1>
      <div class="table-wrap">
        <div class="top table__headline table-radius">
          <p>Race Information</p>
        </div>
        <table class="main-table border content-table" id="future-races">
          <tbody>
          <tr class="head">
            <th class="first">Date</th><th>Horse</th><th>Track</th><th>Type</th><th>Surface</th>
            <th>Status</th><th>Race</th><th class="fourth">Jockey</th>
          </tr>
          </tbody>
        </table>
        <a href="#" id="target-link"></a>
      </div>
    </section>

    <section class="results">
      <h1>Results</h1>
      <div class="table-wrap">
        <div class="top table__headline table-radius">
          <p>Race Information</p>
        </div>
        <table class="main-table border content-table" id="race-information">
          <tbody>
          <tr class="head">
            <th class="first">Date</th><th>Horse</th><th>Track</th><th>Type</th><th>Surface</th>
            <th>Placing</th><th>Race</th><th>Jockey</th><th class="fourth">Earnings</th>
          </tr>
          </tbody>
        </table>
      </div>
    </section>
    <!--<section class="table-test">
      <table style="border: 1px solid black;">
        <tbody>
        <tr>
          <td style="border-right: 1px solid gray; color: #77A146; font-size: 50px;">Groupon</td>
          <td>Steal all the stares with over 25% off selected Party Styles</td>
        </tr>
        </tbody>
      </table>
    </section>-->

	</main>

<?php get_footer(); ?>
