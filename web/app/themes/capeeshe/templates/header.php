<header class="w-full border-b border-salle-black" id="navbar">
	<a href="<?= esc_url( home_url( '/' ) ); ?>"><?= get_bloginfo( 'name' ) ?></a>

	<!-- logo -->
	<img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" />

</header>
<div id="diocane">
	{{ message }}
</div>

<script>
	var app = new Vue({
		el: '#diocane',
		data: {
			message: 'Hello Vue!'
		}
	}) 
</script>