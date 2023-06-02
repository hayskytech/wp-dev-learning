<?php
// add_shortcode('shortcode name' , 'call_back function')
add_shortcode('language_box_test', 'language_box_test_fun');
// reusable function
function language_box_test_fun() {
	ob_start();
	?>
	<h1>This is first shortcode</h1>
	<p>sgvdsabnmasd</p>
	<?php
	return ob_get_clean();
}

// one time usable function
// using OB

add_shortcode('language_test2', function () {
	ob_start();
	?>
	<h1>this is 2nd shortcode</h1>
	<p>kksad iasd halsi hlas dhash dals dui</p>
	<?php

	return ob_get_clean();
});

// Shortcode with attributes (Dynamic usage)

add_shortcode('show_topics', function ($atts) {

	echo 'You selected language: ' . $atts["language"];
	echo '<br>You selected category: ' . $atts["topic_cat"];

});

// In post / page add this [show_topics language="en" topic_cat="1"]