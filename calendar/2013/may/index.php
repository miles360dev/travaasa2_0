<?php
session_start();
$loc = @$_GET['loc']; 
if (strlen($loc) > 0 && ($loc == 'hana' || $loc == 'austin')){ 
  $_SESSION["origLoc"] = $loc;
} elseif (isset($_SESSION["origLoc"])) {
  $loc = $_SESSION["origLoc"];
} else {
  $loc = "default";
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Travaasa - Real Travel for Real Experiences.</title>
	<meta name="keywords" content="travaasa, travel, resorts, hana, hāna, hawaii, austin, texas, Austin resort, Austin spa, travaasa Austin, Austin spa resort, experiential, hotel, Austin hotel, Austin conference center, Austin group meeting" />
	<meta name="description" content="Rediscover the magic of travel with Travaasa Austin, Texas or Hana, Maui." />
	<meta name="author" content="www.travaasa.com.com">
	<link rel="shortcut icon" href="/favicon.ico">
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/219cfca3-6d64-4b4f-98fa-9e9b1197e3d8.css"/>
	<link rel="stylesheet" href="/assets/css/html5reset.css" media="all">
	<link rel="stylesheet" href="/assets/css/col.css" media="all">
	<link rel="stylesheet" href="/assets/css/2cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/3cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/4cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/5cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/6cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/7cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/8cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/9cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/10cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/11cols.css" media="all">
	<link rel="stylesheet" href="/assets/css/12cols.css" media="all">
    <link rel="stylesheet" href="/assets/css/shadowbox.css" media="screen">
    <link rel="stylesheet" href="/assets/css/global_trav.css" media="all">
    <link rel="stylesheet" href="/assets/css/homepage.css" media="all">
    <link rel="stylesheet" href="/assets/scripts/pe.flare/jquery.pixelentity.flare.min.css" media="all">
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects --><script src="/assets/scripts/modernizr-2.5.3-min.js"></script>
<!-- start NAVIS Code -->
<script type="text/javascript" src="http://www.navistechnologies.info/JavascriptPhoneNumber/js.aspx?account=15070&amp;jspass=ivcsp4gaxk4fbz8banxd&amp;dflt=8558687282"></script>
<script type="text/javascript">ProcessNavisNCKeyword();</script>
<!-- end NAVIS Code -->
</head>
<body>
<?php if ($loc == 'hana') : ?><!-- #BeginLibraryItem "/Library/Travaasa_Menu_Hana.lbi" --><header>
  <div id="logo"><a href="/"><span>TRAVAASA Experiential Resorts</span></a></div>
  <nav id="main_nav" class="clearfix">
    <ul class="location_selector_nav menu_top">
    	<li class="menu_main"><a href="/hana" id="current_location">HANA, MAUI</a>
        	<ul class="menu_sub">
                <li><a href="/hana">HANA, MAUI</a></li>
                <li><a href="/austin">AUSTIN, TX</a></li>
             </ul>
        </li>
    </ul>
    <div id="hana_location_nav" class="location_group_nav">
     <ul class="location_nav menu_top">
          <li><a class="lnk_gallery" href="/hana/hanaphotos">GALLERY</a></li>
          <li><a class="lnk_experiences" href="/hana/travaasa-hana-experiences">EXPERIENCES</a></li>
          <li><a class="lnk_spa" href="/hana/hana-the-spa-at-travaasa-hana">SPA</a></li>
          <li><a class="lnk_rooms" href="/hana/accomodations">ROOMS</a></li>
          <li><a class="lnk_dining" href="/hana/hana-dining-overview">DINING</a></li>
          <li><a class="lnk_rates" href="/hana/hana-rates-and-packages">RATES</a></li>
          <li class="menu_main menu_plus"><a href="#" class="plus"><span>+</span></a>
              <ul class="menu_sub">
                  <li><a class="lnk_schedule" href="/hana/hanaschedule">EXPERIENCE SCHEDULE</a></li>
                  <li><a class="lnk_locationinfo" href="/hana/hana-maui">HANA &amp; GETTING HERE</a></li>
                  <li><a class="lnk_groups" href="/hana/hana-groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
                  <li><a class="lnk_offproperty" href="/hana/hana-off-property-excursions">OFF-PROPERTY EXCURSIONS</a></li>
               </ul>
          </li>
      </ul>
      <ul class="location_condensed_nav menu_top">
          <li class="menu_main"><a href="#">EXPLORE</a>
              <ul class="menu_sub">
                  <li><a class="lnk_gallery" href="/hana/hanaphotos">GALLERY</a></li>
                  <li><a class="lnk_experiences" href="/hana/travaasa-hana-experiences">EXPERIENCES</a></li>
                  <li><a class="lnk_spa" href="/hana/hana-the-spa-at-travaasa-hana">SPA</a></li>
                  <li><a class="lnk_rooms" href="/hana/accomodations">ROOMS</a></li>
                  <li><a class="lnk_dining" href="/hana/hana-dining-overview">DINING</a></li>
                  <li><a class="lnk_rates" href="/hana/hana-rates-and-packages">RATES</a></li>
                  <li><a class="lnk_schedule" href="/hana/hanaschedule">EXPERIENCE SCHEDULE</a></li>
                  <li><a class="lnk_locationinfo" href="/hana/hana-maui">HANA &amp; GETTING HERE</a></li>
                  <li><a class="lnk_groups" href="/hana/hana-groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
                  <li><a class="lnk_offproperty" href="/hana/hana-off-property-excursions">OFF-PROPERTY EXCURSIONS</a></li>
               </ul>
           </li>
      </ul>
    </div>
  </nav>
</header><!-- #EndLibraryItem --><?php elseif ($loc == 'austin') : ?><!-- #BeginLibraryItem "/Library/Travaasa_Menu_Austin.lbi" --><header>
  <div id="logo"><a href="/"><span>TRAVAASA Experiential Resorts</span></a></div>
  <nav id="main_nav" class="clearfix">
    <ul class="location_selector_nav menu_top">
    	<li class="menu_main"><a href="/austin" id="current_location">AUSTIN, TX</a>
        	<ul class="menu_sub">
                <li><a href="/hana">HANA, MAUI</a></li>
                <li><a href="/austin">AUSTIN, TX</a></li>
             </ul>
        </li>
    </ul>
    <div id="austin_location_nav" class="location_group_nav">
      <ul class="location_nav menu_top">
          <li><a class="lnk_gallery" href="/austin/austinphotos">GALLERY</a></li>
          <li><a class="lnk_experiences" href="/austin/austin-experiences">EXPERIENCES</a></li>
          <li><a class="lnk_spa" href="/austin/travaasa-spa-overview">SPA</a></li>
          <li><a class="lnk_rooms" href="/austin/accomodations">ROOMS</a></li>
          <li><a class="lnk_dining" href="/austin/dining">DINING</a></li>
          <li><a class="lnk_rates" href="/austin/rates-and-packages">RATES</a></li>
          <li><a class="lnk_groups" href="/austin/groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
          <li class="menu_main menu_plus"><a href="#" class="plus"><span>+</span></a>
              <ul class="menu_sub">
                  <li><a class="lnk_schedule" href="/austin/austinschedule">EXPERIENCE SCHEDULE</a></li>
               </ul>
          </li>
      </ul>
      <ul class="location_condensed_nav menu_top">
          <li class="menu_main"><a href="#">EXPLORE</a>
              <ul class="menu_sub">
                  <li><a class="lnk_gallery" href="/austin/austinphotos">GALLERY</a></li>
                  <li><a class="lnk_experiences" href="/austin/austin-experiences">EXPERIENCES</a></li>
                  <li><a class="lnk_spa" href="/austin/travaasa-spa-overview">SPA</a></li>
                  <li><a class="lnk_rooms" href="/austin/accomodations">ROOMS</a></li>
                  <li><a class="lnk_dining" href="/austin/dining">DINING</a></li>
                  <li><a class="lnk_rates" href="/austin/rates-and-packages">RATES</a></li>
                  <li><a class="lnk_groups" href="/austin/groups-and-meetings">GROUPS &amp; MEETINGS</a></li>
                  <li><a class="lnk_schedule" href="/austin/austinschedule">EXPERIENCE SCHEDULE</a></li>
               </ul>
           </li>
      </ul>
    </div>
  </nav>
</header><!-- #EndLibraryItem --><?php else : ?><!-- #BeginLibraryItem "/Library/Travaasa_Menu.lbi" --><header>
  <div id="logo"><a href="/"><span>TRAVAASA Experiential Resorts</span></a></div>
  <nav id="main_nav" class="clearfix">
    <ul class="location_selector_nav menu_top">
    	<li class="menu_main"><a href="#" id="current_location">LOCATION</a>
        	<ul class="menu_sub">
                <li><a href="/hana">HANA, MAUI</a></li>
                <li><a href="/austin">AUSTIN, TX</a></li>
             </ul>
        </li>
    </ul>
  </nav>
</header><!-- #EndLibraryItem --><?php endif; ?>
<section id="feature1_wrapper" class="feature_carousel clearfix">
    <div id="feature1" class="feature">
      <div class="slide"><img src="/assets/images/feature_months_may_2013_1600x640.jpg" alt="May is Nuture Month at Travaasa"></div>
    </div>
</section>
<section id="content">
<article id="main">
  <section class="intro pad clearfix">    
    <div class="section group">
    	<div class="col span_1_of_2">
            <h2>Fitness</h2>
            <div class="listing">
                <h6>Boot Camp Training <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let this nature-filled workout be your morning coffee. This outdoor boot camp class incorporates many different training modalities, including strength, cardio, core, speed, agility, flexibility and injury prevention. This high-energy, outdoor/indoor workout will leave you feeling refreshed and ready to take on your day!</p>
            </div>
            <div class="listing">
                <h6>Bosu Uplifting <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>This total body BOSU workout will uplift and re-focus your mind and body. These core and balance focused exercises will strengthen every muscle group in your body while re-enforcing your mind to body connection.</p>
            </div>
            <div class="listing">
                <h6>Cherish Your Pilates Practice <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Pilates practice is a well rounded exercise method that works with the deeper muscles along the spine. They are very important for one's posture and mobilitiy. Cherishing your Pilates practice will allow for a strong torso and core stability which creates greater range of motion, stronger, more controlled movement and a leaner, more toned physique.</p>
            </div>
            v
            <div class="listing">
                <h6>Core Support Training <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>You have probably at least heard the term core or core stability. These terms are now commonly used by physical therapists, fitness professionals and even some doctors. The "core" is a word used to describe a group of deeper muscles along the torso which support the spine, pelvis and shoulder girdle. Strengthening these muscles will not only give you a thinner, sleeker waist-line, they also help reduce and prevent lower back pain and improve postural alignment. This class focuses on strengthening and toning the core muscles.</p>
            </div>
            <div class="listing">
                <h6>Zumba Fitness <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Dance as you explore other cultures and their moves. Discover your natural happiness that arises when we move freely to various ethnical rhythms. Zumba is a fun dance party that can burn as many as 600 calories per hour.</p>
            </div>
            <div class="listing">
                <h6>Embrace Your Hips &amp; Knees Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Our hips and knees are all connected and often they are in need of some nurturing. Using yoga asana that will create more awareness,  range of motion and strengthen the muscles around these joints for better mobilitiy and enjoyment of life.</p>
            </div>
        </div>
        <div class="col span_1_of_2">
            <div class="listing">
                <h6>Nurturing Yoga <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>A gentle yoga class designed to restore and renew. </p>
            </div>
            <div class="listing">
                <h6>Nurture Your Feet <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Your feet are an extremely vital part of your musculo-skeletal system. They can influence all the other joints above including your spine. Learning about your feet, massaging them and strengthening the muscles that are necessary for good posture and alignment is imperative. It is also important to note that areas in the foot that when stimulated will affect some of our organs. Thus good foot care will certainly be great for your posture, mobility and general health.</p>
            </div>
            <div class="listing">
                <h6>Embrace &amp; Dance <span class="disclaimer">– <a href="/austin">Austin</a></span></h6>
                <p>Let's embrace our inner dancer and your dance partner. Begin with the basic foot work, embrace your partner and move in harmony around the dance floor. In this salsa dance class, you will learn the basic salsa steps, how to properly lead, turn and some beginner to intermediate patterns to go salsa dance with confidence!</p>
            </div>
            <h2>Culinary</h2>
            <div class="listing">
                <h6>Comfort Foods <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Learn healthy ways to prepare those old-time favorites that mother used to make.</p>
            </div>
            <h2>Culture</h2>
             <div class="listing">
                <h6>May Lei Celebration <span class="disclaimer">– <a href="/hana">Hana, Maui</a></span></h6>
                <p>Ancient Polynesians honored the gods by twining flowers and greens into adornments for the body.  Learn the art of Lei making from our Makana Team.  Craft a ti leaf, feather or shell lei to take home and cherish for years to come.</p>
            </div>
            <h2>Spa &amp; Wellness</h2>
            <div class="listing">
                <h6>Nurturing Breath <span class="disclaimer">– <a href="/austin">Austin</a> &amp; <a href="/hana">Hana, Maui</a></span></h6>
                <p>Connect with mother earth and use your breath to direct healing the healing energy of life throughout your body.</p>
            </div>
        </div>
    </div>  
  </section>
  
  <section class="grey pad">
        <h4>See upcoming months</h4>
  		<div class="group">
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/april/"><img src="/assets/images/months/apr-grow.png" alt="April is Grow Month"></a></div></div>
            <div class="col span_1_of_3 month"><div class="active"><a href="/calendar/2013/may/"><img src="/assets/images/months/may-nuture.png" alt="May is Nuture Month"></a></div></div>
            <div class="col span_1_of_3 month"><div><a href="/calendar/2013/june/"><img src="/assets/images/months/jun-man.png" alt="June is Man Month"></a></div></div>
        </div>
  </section>
</article>
</section><!-- #BeginLibraryItem "/Library/Travaasa_Testimonials.lbi" --><section id="comments" class="section group">
	<div class="pad">
        <div class="col span_1_of_7">
            <img src="/assets/images/global/trip-advisor.png" alt="As seen of TripAdvisor">
        </div>
        <div class="col span_2_of_7">
            <p class="fittext_quotes" id="quote_1"></p>
        </div>
        <div class="col span_2_of_7">
            <p class="fittext_quotes" id="quote_2"></p>
        </div>
        <div class="col span_2_of_7">
            <p class="fittext_quotes" id="quote_3"></p>
        </div>
     </div>
</section><!-- #EndLibraryItem --><?php if ($loc == 'hana') : ?><!-- #BeginLibraryItem "/Library/Travaasa_Footer_Hana.lbi" --><div id="reservations-bar">
	<div class="reservations-bar-inner">
        <p class="phone"><script type="text/javascript">ShowNavisNCPhoneNumber();</script><noscript>1-888-820-1043</noscript></p>
        <ul class="reservation_nav menu_top">
            <li class="reservation"><a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=HNMHM&amp;numberOfAdults=2')]); return false;">MAKE A RESERVATION</a></li>
        </ul>
        <ul class="pricing">
            <li>
                <h2>INCLUSIVE<br><span>Starting at</span></h2>
                <h3><sup>$</sup>825</h3>
            </li>
            <li>
                <h2>A LA CARTE<br><span>Starting at</span></h2>
                 <h3><sup>$</sup>375</h3>
            </li>
        </ul>
    </div>
</div>
<footer class="clear">
  <nav id="footer_links" class="group">
    <div class="col span_1_of_4">
      <h2 class="hdr">TRAVAASA HANA</h2>
      <p>5031 Hana Hwy<br>
		Hana, Hi 96713<br>
<br>Tel: <script type="text/javascript">ShowNavisNCPhoneNumber();</script><noscript>808-359-2401</noscript><br>
Fax: 808-248-7202<br>
<br>
<a href="http://maps.google.com/maps?hl=en&amp;q=5031+Hana+Highway+Hana,+HI+96713&amp;gs_upl=3125l8296l0l9305l5l5l0l0l0l1l203l724l1.3.1l5l0&amp;bav=on.2,or.r_gc.r_pw.,cf.osb&amp;biw=638&amp;bih=933&amp;um=1&amp;ie=UTF-8&amp;hq=&amp;hnear=0x7954ac25effd1793:0x535647e82e0e776,5031+Hana+Hwy,+Hana,+HI+96713&amp;gl=us&amp;ei=Hh4GT_KFB4nE2wX9zIn5CQ&amp;sa=X&amp;oi=geocode_result&amp;ct=title&amp;resnum=1&amp;ved=0CB0Q8gEwAA5">DIRECTIONS</a></p>
    </div>
    <div class="col span_1_of_4">
      <p><a href="/hana/hanaphotos">GALLERY</a><br>
      <a href="/hana/travaasa-hana-experiences">EXPERIENCES</a><br>
      <a href="/hana/hanaschedule">EXPERIENCE SCHEDULE</a><br>
      <a href="/hana/hana-the-spa-at-travaasa-hana">SPA</a><br>
      <a href="/hana/accomodations">ROOMS</a><br>
      <a href="/hana/hana-dining-overview">DINING</a><br>
      <a href="/hana/hana-rates-and-packages">RATES</a><br>
      <a href="/hana/hana-maui">HANA &amp; GETTING HERE</a><br>
      <a href="/hana/hana-groups-and-meetings">GROUPS &amp; MEETINGS</a><br>
      <a href="/hana/hana-off-property-excursions">OFF-PROPERTY EXCURSIONS</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">INQUIRIES</h2>
      <p><a href="/about-us">ABOUT TRAVAASA</a><br>
      <a href="/contact-us">CONTACT US</a><br>
      <a href="http://www.travaasa.com/press-room/">PRESS ROOM</a><br>
      <a href="http://www.travaasa.com/blog">BLOG</a><br>
      <a href="http://giftcards.travaasa.com/">GIFT CARDS</a><br>
      <a href="https://theapplicantmanager.com/php/careers.php?co=tv">CAREERS</a><br>
	  <a href="/site-map">SITE MAP</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">FOLLOW US</h2>
      <ul id="social" class="clearfix">
      	<li><a href="http://www.facebook.com/travaasa" target="_blank" id="facebook"><img src="/assets/images/global/transparent.gif" alt="Facebook"></a></li>
        <li><a href="http://www.twitter.com/travaasa" target="_blank" id="twitter"><img src="/assets/images/global/transparent.gif" alt="Twitter"></a></li>
        <li><a href="http://www.youtube.com/user/Travaasa" target="_blank" id="youtube"><img src="/assets/images/global/transparent.gif" alt="YouTube"></a></li>
        <li><a href="http://pinterest.com/travaasa/" target="_blank" id="pinterest"><img src="/assets/images/global/transparent.gif" alt="Pinterest"></a></li>
        <li><a href="http://travaasa.com/blog" target="_blank" id="blog"><img src="/assets/images/global/transparent.gif" alt="Blog"></a></li>
      </ul>
      <p><a class="btn" href="http://www.data2gold.com/gallery/travaasa/eClub/eClub.html">SIGN UP FOR OUR NEWSLETTER</a></p>
    </div>
<p class="clear" id="footer-copyright"><a title="Preferred Boutique" target="_blank" href="http://preferredhotelgroup.com/preferred-boutique/destinations/hana/travaasa-hana/"><img src="/assets/images/global/preferred-logo-white-144px.png" alt=""></a><span>&copy;2013 Green Tea, LLC.</span></p>
  </nav>
</footer>
<script type="text/javascript">
var loc = "hana";
</script><!-- #EndLibraryItem --><?php elseif ($loc == 'austin') : ?><!-- #BeginLibraryItem "/Library/Travaasa_Footer_Austin.lbi" --><div id="reservations-bar">
	<div class="reservations-bar-inner">
        <p class="phone"><script type="text/javascript">ShowNavisNCPhoneNumber();</script><noscript>1-877-261-7792</noscript></p>
        <ul class="reservation_nav menu_top">
            <li class="reservation">
            <a href="https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC" target="_blank" onclick="_gaq.push(['_link', AppendNavisKeywordToURL('https://www.phgsecure.com/IBE/bookingRedirect.ashx?propertyCode=AUSTC')]); return false;">MAKE A RESERVATION</a></li>
        </ul>
        <ul class="pricing">
            <li>
                <h2>INCLUSIVE<br><span>Starting at</span></h2>
                <h3><sup>$</sup>350</h3>
            </li>
            <li>
                <h2>A LA CARTE<br><span>Starting at</span></h2>
                 <h3><sup>$</sup>200</h3>
            </li>
        </ul>
    </div>
</div>
<footer class="clear">
  <nav id="footer_links" class="group">
    <div class="col span_1_of_4">
      <h2 class="hdr">TRAVAASA AUSTIN</h2>
      <p>13500 Farm to Market Road 2769<br>
Austin, TX 78726<br>
<br>Tel: <script type="text/javascript">ShowNavisNCPhoneNumber();</script><noscript>512-364-0061</noscript><br>
Fax: 512-506-9737<br>
<br>
<a href="http://maps.google.com/maps?hl=en&amp;q=travaasa+austin&amp;safe=off&amp;ie=UTF8&amp;sqi=2&amp;hq=travaasa&amp;hnear=Austin,+Travis,+Texas&amp;t=m&amp;vpsrc=6&amp;ll=30.45844,-97.835999&amp;spn=0.12326,0.221786&amp;z=13&amp;iwloc=A&amp;cid=5151063792531704065">DIRECTIONS</a></p>
    </div>
    <div class="col span_1_of_4">
      <p><a href="/austin/austinphotos">GALLERY</a><br>
      <a href="/austin/austin-experiences">EXPERIENCES</a><br>
      <a href="/austin/austinschedule">EXPERIENCE SCHEDULE</a><br>
      <a href="/austin/travaasa-spa-overview">SPA</a><br>
      <a href="/austin/accomodations">ROOMS</a><br>
      <a href="/austin/dining">DINING</a><br>
      <a href="/austin/groups-and-meetings">GROUPS &amp; MEETINGS</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">INQUIRIES</h2>
      <p><a href="/about-us">ABOUT TRAVAASA</a><br>
      <a href="/contact-us">CONTACT US</a><br>
      <a href="http://www.travaasa.com/press-room/">PRESS ROOM</a><br>
      <a href="http://www.travaasa.com/blog">BLOG</a><br>
      <a href="http://giftcards.travaasa.com/">GIFT CARDS</a><br>
      <a href="https://theapplicantmanager.com/php/careers.php?co=tv">CAREERS</a><br>
	  <a href="/site-map">SITE MAP</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">FOLLOW US</h2>
      <ul id="social" class="clearfix">
      	<li><a href="http://www.facebook.com/travaasa" target="_blank" id="facebook"><img src="/assets/images/global/transparent.gif" alt="Facebook"></a></li>
        <li><a href="http://www.twitter.com/travaasa" target="_blank" id="twitter"><img src="/assets/images/global/transparent.gif" alt="Twitter"></a></li>
        <li><a href="http://www.youtube.com/user/Travaasa" target="_blank" id="youtube"><img src="/assets/images/global/transparent.gif" alt="YouTube"></a></li>
        <li><a href="http://pinterest.com/travaasa/" target="_blank" id="pinterest"><img src="/assets/images/global/transparent.gif" alt="Pinterest"></a></li>
        <li><a href="http://travaasa.com/blog" target="_blank" id="blog"><img src="/assets/images/global/transparent.gif" alt="Blog"></a></li>
      </ul>
      <p><a class="btn" href="http://www.data2gold.com/gallery/travaasa/eClub/eClub.html">SIGN UP FOR OUR NEWSLETTER</a></p>
    </div>
<p class="clear" id="footer-copyright"><a title="Preferred Boutique" target="_blank" href="http://preferredhotelgroup.com/preferred-boutique/destinations/united-states/texas/austin/travaasa-austin"><img src="/assets/images/global/preferred-logo-white-144px.png" alt=""></a><span>&copy;2013 Green Tea, LLC.</span></p>
    
    
  </nav>
</footer>
<script type="text/javascript">
var loc = "austin";
</script><!-- #EndLibraryItem --><?php else : ?><!-- #BeginLibraryItem "/Library/Travaasa_Footer.lbi" --><footer class="clear global">
  <nav id="footer_links" class="group">
    <div class="col span_2_of_4">
      <h2 class="hdr">TRAVAASA EXPERIENTIAL RESORTS</h2>
        <p>Introducing Travaasa, a new collection of experiential spa resorts that emphasizes real travel and the unique, authentic qualities that make a destination magical. Learn more about the <a href="/about-us">Travaasa Vision</a>. Our hotels are tailored to the intellectually active and culturally curious, offering a resort experience that is defined by guided adventures, culinary classes, cultural encounters, healing spa treatments, as well as fitness and wellness workshops.</p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">INQUIRIES</h2>
      <p><a href="/about-us">ABOUT TRAVAASA</a><br>
      <a href="/contact-us">CONTACT US</a><br>
      <a href="http://www.travaasa.com/press-room/">PRESS ROOM</a><br>
      <a href="http://www.travaasa.com/blog">BLOG</a><br>
      <a href="http://giftcards.travaasa.com/">GIFT CARDS</a><br>
      <a href="https://theapplicantmanager.com/php/careers.php?co=tv">CAREERS</a><br>
	  <a href="/site-map">SITE MAP</a></p>
    </div>
    <div class="col span_1_of_4">
      <h2 class="hdr">FOLLOW US</h2>
      <ul id="social" class="clearfix">
      	<li><a href="http://www.facebook.com/travaasa" target="_blank" id="facebook"><img src="/assets/images/global/transparent.gif" alt="Facebook"></a></li>
        <li><a href="http://www.twitter.com/travaasa" target="_blank" id="twitter"><img src="/assets/images/global/transparent.gif" alt="Twitter"></a></li>
        <li><a href="http://www.youtube.com/user/Travaasa" target="_blank" id="youtube"><img src="/assets/images/global/transparent.gif" alt="YouTube"></a></li>
        <li><a href="http://pinterest.com/travaasa/" target="_blank" id="pinterest"><img src="/assets/images/global/transparent.gif" alt="Pinterest"></a></li>
        <li><a href="http://travaasa.com/blog" target="_blank" id="blog"><img src="/assets/images/global/transparent.gif" alt="Blog"></a></li>
      </ul>
      <p><a class="btn" href="http://www.data2gold.com/gallery/travaasa/eClub/eClub.html">SIGN UP FOR OUR NEWSLETTER</a></p>
    </div>
<p class="clear" id="footer-copyright"><a title="Preferred Boutique" target="_blank" href="http://preferredhotelgroup.com/preferred-boutique/destinations/hana/travaasa-hana/"><img src="/assets/images/global/preferred-logo-white-144px.png" alt=""></a><span>&copy;2013 Green Tea, LLC.</span></p>
  </nav>
</footer>
<script type="text/javascript">
var loc = "all";
</script><!-- #EndLibraryItem --><?php endif; ?><!-- #BeginLibraryItem "/Library/Travaasa_Scripts.lbi" --><!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<!-- JavaScript at the bottom for fast page loading -->
<script>window.jQuery || document.write('<script src="/assets/scripts/jquery-1.7.2.min.js"><\/script>')</script>
<script type="text/javascript" src="/assets/scripts/jquery.carouFredSel-6.1.0-packed.js"></script>
<![if !IE]>
<script type="text/javascript" src="/assets/scripts/jquery.touchSwipe.min.js"></script>
<![endif]>
<script type="text/javascript" src="/assets/scripts/jquery.lazyload.js"></script>
<script type="text/javascript" src="/assets/scripts/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="/assets/scripts/jquery.fittext.js"></script>
<script type="text/javascript" src="/assets/scripts/travaasa.js"></script>
<!--[if (lt IE 9) & (!IEMobile)]>
<script src="/assets/scripts/selectivizr-min.js"></script>
<![endif]-->
<script type="text/javascript" src="/assets/scripts/responsivegridsystem.js"></script>
<!--<script type="text/javascript" src="/assets/scripts/pe.flare/jquery.pixelentity.flare.min.js"></script>//-->
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.theme.utils.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.browser.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.geom.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.preloader.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.transition.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.youtube.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/froogaloop.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.utils.vimeo.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/video/projekktor.min.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.video.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.videoPlayer.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.transform.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.flare.lightbox.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.flare.lightbox.render.image.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.backgroundSlider.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.simplethumb.js"></script>
<script type="text/javascript" src="/assets/scripts/pe.flare/src/jquery.pixelentity.flare.lightbox.render.gallery.js"></script>
<script type="text/javascript" src="/assets/scripts/jquery.address-1.5.min.js"></script>

<!-- start Adserving Tag -->
<script type='text/javascript'>
// Conversion Name: Travaasa Home Page
var ebRand = Math.random()+'';
ebRand = ebRand * 1000000;
//<![CDATA[ 
document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=213436&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
//]]>
</script>
<noscript>
<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?cn=as&amp;ActivityID=213436&amp;ns=1"/>
</noscript>
<!-- end Adserving Tag-->
<script type="text/javascript">AppendNavisKeywordToLink("lnkBookingEngine1");</script>
<!-- start IMI -->
<script type="text/javascript">
document.write(unescape('%3Cscript src="' + document.location.protocol + '//d1ivexoxmp59q7.cloudfront.net/imi/live.js" type="text/javascript"%3E%3C/script%3E'));
</script>
<!-- end IMI -->
<!-- start Retargeting Tag -->
<script type="text/javascript">
// Retargeting Tag Name: Travaasa Home Page Retargeting
// The retargeting Tags should be placed at the top of the <BODY> section of the HTML page.
var ebRand = Math.random()+ ' ';
ebRand = ebRand * 1000000;
//<![CDATA[
document.write('<scr'+'ipt src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?CN=TT&amp;TID=4095&amp;AdvertiserID=52437&amp;TKV0=z&amp;rnd=' + ebRand + '"></scr' + 'ipt>');
//]]>
</script>
<noscript>
<img width="1" height="1" style="border:0" src="HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?CN=TT&amp;TID=4095&amp;AdvertiserID=52437&amp;TKV0=z&amp;ns=1"/>
</noscript>
<!-- end Retargeting Tag -->
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-17613889-1']);
_gaq.push(['_setDomainName', '.travaasa.com']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_setAllowHash', false]);
_gaq.push(['_setAllowAnchor', true]);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') 
+ '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<!-- begin olark code --><script data-cfasync="false" type='text/javascript'>/*{literal}<![CDATA[*/
window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){f[z]=function(){(a.s=a.s||[]).push(arguments)};var a=f[z]._={},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={0:+new Date};a.P=function(u){a.p[u]=new Date-a.p[0]};function s(){a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{b.contentWindow[g].open()}catch(w){c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{var t=b.contentWindow[g];t.write(p());t.close()}catch(x){b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('1552-236-10-1169');/*]]>{/literal}*/</script>
<script>olark.configure('system.require_email', 0);</script>
<!-- end olark code -->
<!-- begin IMI retargeting --><script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1004189758;
var google_conversion_label = "oxLWCPLEoAMQvvDq3gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1004189758/?value=0&amp;label=oxLWCPLEoAMQvvDq3gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript">
adroll_adv_id = "FZE6L5WNEBGM5O4WNFGEWL";
adroll_pix_id = "2AKTCGXQFJG5BFH7S37JH2";
(function () {
var oldonload = window.onload;
window.onload = function(){
__adroll_loaded=true;
var scr = document.createElement("script");
var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
scr.setAttribute('async', 'true');
scr.type = "text/javascript";
scr.src = host + "/j/roundtrip.js";
((document.getElementsByTagName('head') || [null])[0] ||
document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
if(oldonload){oldonload()}};
}());
</script>
<!-- end IMI retargeting --><!-- #EndLibraryItem --><script type="text/javascript">
$(function() {
	createSubpageStorylines(true, true);
});
</script>
</body>
</html>