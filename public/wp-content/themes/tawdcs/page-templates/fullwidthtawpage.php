<?php
/**
 * Template Name: Full Width Page TAW Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

$post_args = [
    'posts_per_page' => 5
];
query_posts($post_args);

get_header(); ?>

<div class="wrapper taw-wrapper" id="full-width-page-wrapper">

    <div class="jumbotron">
	<div class="container">
	    <h1>Welcome to the TAW Digital Combat Simulator website!</h1>
	    <p> We are a community of combat simulator pilots, dedicated to having loads of fun while trying to simulate being a combat pilot at an extremely high level. We fly as a team, train as a team and improve our skills on a daily basis to be ready for the most realistic air combat experience a simulator pilot can achieve.</p>
	    <p><a class="btn btn-primary btn-lg" href="/taw/" role="button">Learn more »</a></p>
	</div>
    </div>
    <div class="container taw-container">
	<div class="row">
	    <div class="col-md-12">
		<a href="http://ko.tawdcs.org" target="_blank"><img src="/wp-content/themes/tawdcs/images/KO_banner.jpg" /></a>
	    </div>
	</div>
    </div>
    <div class="container taw-container" style="display:none;">
	<div class="col-md-12">
	    <h2>Welcome to the TAW Digital Combat Simulator website!</h2>

	    <p>
	    We are a community of combat simulator pilots, dedicated to having loads of fun while trying to simulate being a combat pilot at an extremely high level. We fly as a team, train as a team and improve our skills on a daily basis to be ready for the most realistic air combat experience a simulator pilot can achieve.
	    </p>
	    <p>
	    Digital Combat Simulator by Eagle Dynamics is by far the most comprehensive and realistic simulator on the public market, WE LOVE IT!!!! Thank you Eagle Dynamics for your time and effort into this simulator and your continuing development. We fly fighters, strikers and helicopters and have different squadrons setup in our fighting wing division. The main aircraft we fly are the F-15C, SU-27, SU-33, MIG-29S, M-2000C, A-10C, SU-25T, KA-50, UH-1H, MI-8, SA342 and all upcoming fully clickable modern aircraft.
	    </p>
	    <p>
	    If you are interested in becoming a member of our awesome community after reading this and if you are willing to put time and effort into this, you can then click JOIN TAW in the main menu.
	    </p>
	    <p>
	    We have divided our team into smaller 'squadrons' who are at a maximum of 8 pilots per team, with a squadron leader to coordinate all its members, also element leads to lead the smaller teams in the squadron. We have a command structure, similar to the USMC, in order to have people fulfill responsibilities to make the lives of our pilots within TAW as much fun as possible. Of course everybody is just as much responsible to create a great environment, where we simulate air combat as a team.
	    </p>
	    <p>
	    This is a place where you can go to if you like to meet possible new friends with the same level of interest in air combat.
	    </p>
	    <p>
		We have very skilled instructors to train for tactics, systems knowledge, brevity (radio communication) and piloting skills. These guys have loads of experience in all fields of DCS and have proven themselves worthy instructors by dedicating time and effort for the TAW DCS community. When a new member wants to join, we do expect this pilot to have at least basic pilot skills and systems knowledge. It is nearly impossible for our instructors to teach every single person the basics, which should easily be learned by reading the manual and doing some searches on the Internet and following all the training sections that DCS itself provides. You have to have a form of discipline in order to be a simulator pilot and be willing to put time and effort into this, not just by asking around, but by reading and understanding the plane/helicopter you want to fly.</p>

	    <b>THIS IS A SIMULATOR, NOT AN ARCADE GAME.</b>

	    <p>
	    We use DCS SIMPLE RADIO for realistic radio communication. We also have a team of HUMAN ATC, who control our airbases and also do GCI/AWACS.
	    </p>
	    <p>
	    We have one mandatory event per week on Sunday evenings 18:45Z for the European Division (19:45CET GMT+1, 19:45CEST GMT+2) and 8:00PM Eastern Standard Time for the North American Division. Unfortunately, due to the time zone difference it is impossible to align these events for Europe and North America, so we have separate events for these sides of the world. These events will take approximately 1.5 hours with a briefing before and a debrief afterwards.
	    </p>
	    <p>
	    We ask of all pilots to be present at least 50% of the mandatory Sunday events per month. We have several optional trainings planned every week and you are free to attend at any time. Other than that, the squadrons fly together as much as possible so they become one magnificent oiled war machine! We attend different annual combat competitions as both TAW DCS and also the smaller individual squadrons as well, but always representing TAW DCS.
	    </p>
	    <p>
		<ul>
		    <li>Squadrons in the 52nd TAW Wing (EUROPE)</li>
		    <li>Aggressors (SU27)</li>
		    <li>Interceptors (F15C)</li>
		    <li>Grim Reapers (F-15C)</li>
		    <li>Red Devils (A10C/SU-25T)</li>
		    <li>Black Hogs (A10C/SU-25T)</li>
		    <li>Vortex Vikings (Rotary)</li>
		    <li>Dust Devils (Rotary)</li>
		    <li>Daggers (M2000C)</li>
		    <li>Tigers (M2000C)</li>

		    <li>Squadrons in the 33rd TAW Wing (AMERICA)</li>
		    <li>Black Knights (F15C)</li>
		    <li>Tiger Sharks (A10C)</li>
		    <li>Hells Archers (Rotary)</li>
		</ul>
	    </p>

	</div>
    </div>

    <div class="container taw-container">
	<div class="row">
	    <div class="col-md-12">
		<main id="main" class="site-main" role="main">

		    <?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop-templates/content', '' ); ?>
		    <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-4">
	    </div>
	    <div class="col-md-4" align="center">
		<a href="/category/blog/" class="btn btn-primary" role="button">Read all posts</a>
	    </div>
	    <div class="col-md-4">

	    </div>
	</div>
    </div>
    <div class="container taw-container">
	<!-- Example row of columns -->
	<div class="row">
	    <div class="col-md-4">
		<h2>DCS</h2>
		<p class="taw-text-small">Digital Combat Simulator by Eagle Dynamics is by far the most comprehensive and realistic simulator on the public market, WE LOVE IT!!!! Thank you Eagle Dynamics for your time and effort into this simulator and your continuing development. We fly fighters, strikers and helicopters and have different squadrons setup in our fighting wing division.</p>
		<p><a class="btn btn-default" href="/taw/" role="button">View details &raquo;</a></p>
	    </div>
	    <div class="col-md-4">
		<h2>Squadrons</h2>
		<p class="taw-text-small">We have divided our team into smaller 'squadrons' who are at a maximum of 8 pilots per team, with a squadron leader to coordinate all its members, also element leads to lead the smaller teams in the squadron. We have a command structure, similar to the USMC, in order to have people fulfill responsibilities to make the lives of our pilots within TAW as much fun as possible.</p>
		<p><a class="btn btn-default" href="/taw/" role="button">View details &raquo;</a></p>
	    </div>
	    <div class="col-md-4">
		<h2>TAW</h2>
		<p class="taw-text-small">This is a place where you can go to if you like to meet possible new friends with the same level of interest in air combat. We have very skilled instructors to train for tactics, systems knowledge, brevity (radio communication) and piloting skills. These guys have loads of experience in all fields of DCS and have proven themselves worthy instructors by dedicating time and effort for the TAW DCS community.</p>
		<p><a class="btn btn-default" href="/taw/" role="button">View details &raquo;</a></p>
	    </div>
	</div>

	<hr>
    </div>


    <div id="content" class="container">
	<div class="row taw-row">
	    <div class="col-md-12">
		<?php dynamic_sidebar('taw-front-page-top'); ?>
	    </div>
	</div>
	<div class="col-md-12">
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
		    <div class="carousel-item active">
			<img src="/wp-content/themes/tawdcs/images/taw-slide-1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
			<img src="/wp-content/themes/tawdcs/images/taw-slide-2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
			<img src="/wp-content/themes/tawdcs/images/taw-slide-3.jpg" alt="Third slide">
		    </div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="icon-prev" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="icon-next" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12">
		<?php dynamic_sidebar( 'Hero Slider' ); ?>
	    </div>
	</div>

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
