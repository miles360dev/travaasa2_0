<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa - Real Travel for Real Experiences.</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
	<?php 
   include_once($path."/Library/Travaasa_Head.php");
	?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_AUSTIN ?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php 
   include_once($path."/Library/Travaasa_Menu_Austin.php");
?><section id="feature1_wrapper" class="subpage_bg"><img src="/assets/images/bg_hana_clouds.jpg" alt=""></section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix notheater">
        <br />
        <h1>Mom's Favorite Recipe Contest</h1>
        <p>Some of the best recipes are handed down generation after generation and become traditions with the family. Celebrate this Mother’s Day with a favorite recipe of your mom’s and win a mother/daughter getaway to Travaasa Austin.</p>
        <h3>Share mom's favorite recipe for your chance to win</h3>
        <ul>
          <li>Winner chosen by Travaasa Austin’s Executive Chef Benjamin Baker</li>
          <li>One grand prize winner of a Total Travaasa two night getaway for two (2) at Travaasa Austin</li>
          <li>Winning recipe will be featured in Travaasa's next newsletter and social channels</li>
        </ul>
        <h3>Terms &amp; Conditions</h3>
        <p>INSERT WUFOO ENTRY FORM</p>
        <p>INSERT TERMS AND CONDITIONS</p>
<div class="col span_1_of_1"><a href="/pdf/Travaasa-Austin-Property-Map.pdf" class="btn fitwidth" target="_blank">Property Map</a></div>
  </section>
</article>
</section>
<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer_Austin.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?><script type="text/javascript">
$(function() {
	$('a[data-target="flare"]').peFlareLightbox();
	setLocation("Austin");
});
</script>
</body>
</html>