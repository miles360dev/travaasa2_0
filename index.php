<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   include_once($path."/Library/Travaasa_Common.php");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa Experiential Resorts - Rediscover the Magic of Travel.</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
  <meta name="p:domain_verify" content="8b5fe67201926cfeb859a9501821fc80"/>
<?php 
   include_once($path."/Library/Travaasa_Head.php");
?>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=<?php echo NAVIS_GLOBAL_DEFAULT ?>"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MW4X3M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MW4X3M');</script>
<!-- End Google Tag Manager -->
<?php 
   include_once($path."/Library/Travaasa_Menu.php");
?>
<section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><a href="/hana/"><img src="/assets/images/feature_home_1600x640_beach_flirt.jpg" alt=""></a></div>
      <!--<div class="slide"><a href="/hana/"><img src="/assets/images/feature_home_1600x640_adventure-flirt.jpg" alt=""></a></div>-->
      <div class="slide"><a href="/austin/dining/"><img data-original="/assets/images/feature_home_1600x640_culinary.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
      <div class="slide"><a href="/hana/"><img data-original="/assets/images/feature_home_1600x640_culture2.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
      <div class="slide"><a href="/austin/"><img data-original="/assets/images/feature_home_1600x640_fitness.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
      <div class="slide"><a href="/austin/travaasa-spa-overview/"><img data-original="/assets/images/feature_home_1600x640_spa.jpg" src="/assets/images/global/placeholder.gif" alt=""></a></div>
    </div>
    <a class="carousel_prev" id="feature1_prev" href="#"><span><b>prev</b></span></a> <a class="carousel_next" id="feature1_next" href="#"><span><b>next</b></span></a>
</section>
<section id="content" class="clearfix">
<article id="main" class="clearfix">
  <section class="section group" class="clearfix">
  	<div class="pad">
        <div class="col span_4_of_7">
            <div id="location-selector">
                <h1>SELECT A LOCATION</h1>
                <ul>
                    <li><a href="./hana">HANA, MAUI</a></li>
                    <li><a href="./austin">AUSTIN, TX</a></li>
                </ul>
             </div>
         </div>
        <div class="col span_3_of_7 col_reservation">
            <!--<h1 style="display:block; color:#666666; font-size:13px; line-height:20px;">NO RESORT FEES AT TRAVAASA</h1>-->
            <a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC&amp;numberOfAdults=2" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC&amp;numberOfAdults=2')]); return false;" class="btn">BOOK AUSTIN</a>&nbsp;
            <a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2')]); return false;" class="btn">BOOK HANA</a>
         </div> 
     </div>
  </section>
</article>
</section>
<?php 
   include_once($path."/Library/Travaasa_Testimonials.php");
   include_once($path."/Library/Travaasa_Footer.php");
   include_once($path."/Library/Travaasa_Scripts.php");
?>
<script type="text/javascript">
$(document).ready(function(e) {
	createSubpageStorylines(true, false);
});
</script>
</body>
</html>