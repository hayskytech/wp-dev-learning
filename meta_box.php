<?php
add_action('add_meta_boxes', function () {

	add_meta_box(
		"book-price",
		// Unique ID
		"Book Price",
		// Box title
		"book_callback",
		// call back function
		"book",
		// Post type: post, page, book, product
		"side",
		"high"
	);

	function book_callback() {
		global $post;
		$price = get_post_meta($post->ID, "price", true);
		?>
		Price: <input type="number" name="price" value="<?php echo $price; ?>">
		<?php
	}
});

add_action("save_post", function () {
	if ("book" == $_POST["post_type"]) { // change "post" to "some other post_type"
		global $post;
		update_post_meta($post->ID, "price", $_POST["price"]);
	}
});