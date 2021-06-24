<template>
	<div class="main">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
			<div class="container"> 
				<div class="collapse navbar-collapse">
					<div class="navbar-nav">
						<router-link to="/" class="nav-item nav-link">Home</router-link>
					</div>
				</div>
			</div>
		</nav>
		<div class="container"> 
			<router-view> </router-view>
		</div>
	</div>
</template>
 
<script>
    export default {}
</script> 