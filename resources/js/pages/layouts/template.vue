<script>
	import Header from './header.vue';
	import Footer from './footer.vue';
	export default {
  		components: {
    		Header,
			Footer    		
  		},
	}
</script>
<template>
	<Header />
	<main>
	   <slot />
	</main>
	<div class="container">
		<Footer />
	</div>
</template>
