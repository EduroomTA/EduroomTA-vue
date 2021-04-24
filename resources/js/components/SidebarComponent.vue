<template>
	<section v-if="$route.path.includes('/guru') || $route.path.includes('/guru/')">
		<ul id="sidenav-guru" class="sidenavs sidenav">
			<router-link tag="li" :to="{ name: 'guru.dashboard' }">
				<a class="sidenav-close">
					<i class="material-icons">dashboard</i>Dashboard
				</a>
			</router-link>
			<router-link tag="li" :to="{ name: 'guru.tinjauan' }">
				<a href="#!" class="sidenav-close">
					<i class="material-icons">pending_actions</i>Tinjauan
				</a>
			</router-link>

			<li><a class="subheader">Kelas Wali</a></li>
			<router-link tag="li" :to="{ name: 'guru.kelas.parent' }">
				<a class="sidenav-close">
					<i class="material-icons">home_work</i>10 Mipa 1
				</a>
			</router-link>

			<li><a class="subheader">Kelas Ajar</a></li>
			<li class="">
				<a href="#!" class="sidenav-close">
					<i class="material-icons">home_work</i>8C
				</a>
			</li>

		</ul>
	</section>

	<section v-else>
	</section>
</template>