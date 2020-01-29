<style>
	.test {
		display: none;
	}
</style>


<p>
	<a class="toggle" href="#example">search</a>
</p>

<div class="test" id="example">
	<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
		<input class="search-input" type="search" name="s" placeholder="<?php _e( 'search', 'html5blank' ); ?>">
		<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'html5blank' ); ?></button>
	</form>

	<a class="toggle" href="#example">X</a>

</div>