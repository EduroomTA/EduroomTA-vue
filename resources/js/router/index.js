import Vue from 'vue'
import VueRouter from 'vue-router'
import NProgress from 'nprogress'
import 'nprogress/nprogress.css'

Vue.use(VueRouter)

const originalPush = VueRouter.prototype.push
VueRouter.prototype.push = function push (location) {
	return originalPush.call(this, location).catch(err => err)
}

// LANDING PAGE
import Home from '../pages/Landing/Home.vue'
import Tentang from '../pages/Landing/Tentang.vue'
import Paket from '../pages/Landing/Paket.vue'
import Panduan from '../pages/Landing/Panduan.vue'
import Panduan_Kategori from '../pages/Landing/PanduanKategori.vue'
import Panduan_Detail from '../pages/Landing/PanduanDetail.vue'
import Kontak from '../pages/Landing/Kontak.vue'
import Login from '../pages/Landing/Login.vue'
import Register from '../pages/Landing/Register.vue'
import RegisterSiswa from '../pages/Landing/RegisterSiswa.vue'
import RegisterSekolah from '../pages/Landing/RegisterSekolah.vue'






// GURU
import GuruDashboard from '../pages/Guru/Dashboard.vue'
import GuruKelas from '../pages/Guru/Kelas.vue'
import GuruKelasAnggota from '../pages/Guru/KelasAnggota.vue'
import GuruKelasMapel from '../pages/Guru/KelasMapel.vue'
import GuruSettingAkun from '../pages/Guru/SettingAkun.vue'
import GuruTinjauan from '../pages/Guru/Tinjauan.vue'

	//rapor
	import GuruKelasRaporNilai from '../pages/Guru/Rapor/KelasRaporNilai.vue'
	import GuruKelasRaporSikap from '../pages/Guru/Rapor/KelasRaporSikap.vue'
	import GuruKelasRaporKehadiran from '../pages/Guru/Rapor/KelasRaporKehadiran.vue'
	import GuruKelasRaporEkstrakurikuler from '../pages/Guru/Rapor/KelasRaporEkstrakurikuler.vue'
	import GuruKelasRaporPrestasi from '../pages/Guru/Rapor/KelasRaporPrestasi.vue'
	import GuruKelasRaporCatatan from '../pages/Guru/Rapor/KelasRaporCatatan.vue'

	//rekap nilai
	import GuruKelasMapelRekapPengetahuan from '../pages/Guru/Rekap/KelasMapelRekapPengetahuan.vue'
	import GuruKelasMapelRekapKeterampilan from '../pages/Guru/Rekap/KelasMapelRekapKeterampilan.vue'
	import GuruKelasMapelRekapSikap from '../pages/Guru/Rekap/KelasMapelRekapSikap.vue'

	//topik
	import GuruKelasTopik from '../pages/Guru/Topik/KelasTopik.vue'

	//// materi
	import GuruKelasMapelMateri from '../pages/Guru/Materi/KelasMapelMateri.vue'
	import GuruKelasMapelMateriDetail from '../pages/Guru/Materi/KelasMapelMateriDetail.vue'
	import GuruKelasMapelMateriRekap from '../pages/Guru/Materi/KelasMapelMateriRekap.vue'

	//// tugas
	import GuruKelasMapelTugas from '../pages/Guru/Tugas/KelasMapelTugas.vue'
		//////// Pengumpulan
		import GuruKelasMapelTugasPengumpulanDetail from '../pages/Guru/Tugas/KelasMapelTugasPengumpulanDetail.vue'
		import GuruKelasMapelTugasPengumpulanRekap from '../pages/Guru/Tugas/KelasMapelTugasPengumpulanRekap.vue'
		import GuruKelasMapelTugasPengumpulanJawaban from '../pages/Guru/Tugas/KelasMapelTugasPengumpulanJawaban.vue'

		//////// Kuis
		import GuruKelasMapelTugasKuisDetail from '../pages/Guru/Tugas/KelasMapelTugasKuisDetail.vue'
		import GuruKelasMapelTugasKuisRekap from '../pages/Guru/Tugas/KelasMapelTugasKuisRekap.vue'
		import GuruKelasMapelTugasKuisJawaban from '../pages/Guru/Tugas/KelasMapelTugasKuisJawaban.vue'

	//// diskusi
	import GuruKelasMapelDiskusi from '../pages/Guru/Diskusi/KelasMapelDiskusi.vue'
	import GuruKelasMapelDiskusiDetail from '../pages/Guru/Diskusi/KelasMapelDiskusiDetail.vue'
	import GuruKelasMapelDiskusiRekap from '../pages/Guru/Diskusi/KelasMapelDiskusiRekap.vue'
	import GuruKelasMapelDiskusiKontribusi from '../pages/Guru/Diskusi/KelasMapelDiskusiKontribusi.vue'

	//// ujian
	import GuruKelasMapelUjianSoal from '../pages/Guru/Ujian/KelasMapelUjianSoal.vue'
	import GuruKelasMapelUjianRekap from '../pages/Guru/Ujian/KelasMapelUjianRekap.vue'








// Siswa
import SiswaDashboard from '../pages/Siswa/Dashboard.vue'
import SiswaSettingAkun from '../pages/Siswa/SettingAkun.vue'

import SiswaKelas from '../pages/Siswa/Kelas.vue'
import SiswaKelasAnggota from '../pages/Siswa/KelasAnggota.vue'

import SiswaKelasMapel from '../pages/Siswa/KelasMapel.vue'
import SiswaKelasTopik from '../pages/Siswa/KelasTopik.vue'

import SiswaKelasMapelMateri from '../pages/Siswa/KelasMapelMateriDetail.vue'
import SiswaKelasMapelTugasPengumpulanDetail from '../pages/Siswa/KelasMapelTugasPengumpulanDetail.vue'
import SiswaKelasMapelDiskusi from '../pages/Siswa/KelasMapelDiskusi.vue'
import SiswaKelasMapelTugasKuisDetail from '../pages/Siswa/KelasMapelTugasKuisDetail.vue'

const routes = [

// LANDING PAGE
{
	name: 'home',
	path: '/',
	component: Home
},
{
	name: 'tentang',
	path: '/tentang',
	component: Tentang
},
{
	name: 'paket',
	path: '/paket',
	component: Paket
},
{ 
	path: '/panduan',
	component: { template: '<router-view/>' },
	children: [
	{ 
		name: 'panduan',
		path: '', 
		component: Panduan 
	},
	{ 
		name: 'panduan.kategori',
		path: 'kategori', 
		component: Panduan_Kategori 
	},
	{ 
		name: 'panduan.detail',
		path: 'detail', 
		component: Panduan_Detail 
	}
	]
},
{
	name: 'kontak',
	path: '/kontak',
	component: Kontak
},
{
	name: 'login',
	path: '/login',
	component: Login
},
{
	path: '/register',
	component: { template: '<router-view/>' },
	children: [
	{ 
		name: 'register',
		path: '', 
		component: Register 
	},
	{ 
		name: 'register.siswa',
		path: 'siswa', 
		component: RegisterSiswa 
	},
	{ 
		name: 'register.sekolah',
		path: 'sekolah', 
		component: RegisterSekolah
	}
	]
},

// GURU
{
	path: '/guru', component: { template: '<router-view/>' },

	children: [
	{ name: 'guru.dashboard', path: 'dashboard', component: GuruDashboard},
	{ name: 'guru.setting', path: 'setting', component: GuruSettingAkun},
	{ name: 'guru.tinjauan', path: 'tinjauan', component: GuruTinjauan},
	{
		path:'kelas', component: { template: '<router-view/>' }, //prefix kelas

		children: [
		{ name: 'guru.kelas.parent', path: '', redirect: { name: 'guru.kelas.mapels' }},
		{ name: 'guru.kelas.mapels', path: 'mapels', component: GuruKelas},
		{ name: 'guru.kelas.anggota', path: 'anggota', component: GuruKelasAnggota},
		{
			path:'rapor', component: { template: '<router-view/>' },

			children: [
			{ name: 'guru.kelas.rapor', path: '', redirect: { name: 'guru.kelas.rapor.nilai' }},
			{ name: 'guru.kelas.rapor.nilai', path: 'nilai/:id', component: GuruKelasRaporNilai},
			{ name: 'guru.kelas.rapor.sikap', path: 'sikap/:id', component: GuruKelasRaporSikap},
			{ name: 'guru.kelas.rapor.kehadiran', path: 'kehadiran/:id', component: GuruKelasRaporKehadiran},
			{ name: 'guru.kelas.rapor.ekstrakurikuler', path: 'ekstrakurikuler/:id', component: GuruKelasRaporEkstrakurikuler},
			{ name: 'guru.kelas.rapor.prestasi', path: 'prestasi/:id', component: GuruKelasRaporPrestasi},
			{ name: 'guru.kelas.rapor.catatan', path: 'catatan/:id', component: GuruKelasRaporCatatan},
			]
		},
		{
			path:'mapel', component: { template: '<router-view/>' }, //prefix mapel

			children: [
			{ name: 'guru.kelas.mapel', path: 'beranda', component: GuruKelasMapel},
			{ name: 'guru.kelas.mapel.topik', path: 'topik', component: GuruKelasTopik},
			{
				path:'rekap', component: { template: '<router-view/>' },

				children: [
				{ name: 'guru.kelas.mapel.rekap.parents', path: '', redirect: { name: 'guru.kelas.mapel.rekap.pengetahuan' }},
				{ name: 'guru.kelas.mapel.rekap.pengetahuan', path: 'pengetahuan', component: GuruKelasMapelRekapPengetahuan},
				{ name: 'guru.kelas.mapel.rekap.keterampilan', path: 'keterampilan', component: GuruKelasMapelRekapKeterampilan},
				{ name: 'guru.kelas.mapel.rekap.sikap', path: 'sikap', component: GuruKelasMapelRekapSikap},
				]
			},
			{
				path:'ujian', component: { template: '<router-view/>' },

				children: [
				{ name: 'guru.kelas.mapel.ujian.parents', path: '', redirect: { name: 'guru.kelas.mapel.ujian' }},
				{ name: 'guru.kelas.mapel.ujian.soal', path: 'soal', component: GuruKelasMapelUjianSoal},
				{ name: 'guru.kelas.mapel.ujian.rekap', path: 'rekap', component: GuruKelasMapelUjianRekap},
				]
			},
			{
				path:'bab', component: { template: '<router-view/>' }, //prefix bab

				children: [
				{ name: 'guru.kelas.mapel.bab', path: '', redirect: { name: 'guru.kelas.mapel.materi' }},
				{
					path:'materi', component: { template: '<router-view/>' }, //prefix materi

					children: [
					{ name: 'guru.kelas.mapel.materi', path: '', component: GuruKelasMapelMateri},
					{ name: 'guru.kelas.mapel.materi.detail', path: 'detail', component: GuruKelasMapelMateriDetail},
					{ name: 'guru.kelas.mapel.materi.rekap', path: 'rekap', component: GuruKelasMapelMateriRekap},
					]
				},
				{
					path:'tugas', component: { template: '<router-view/>' }, //prefix tugas

					children: [
					{ name: 'guru.kelas.mapel.tugas', path: '', component: GuruKelasMapelTugas},
					{ name: 'guru.kelas.mapel.tugas.pengumpulan.detail', path: 'pengumpulan/detail', component: GuruKelasMapelTugasPengumpulanDetail},
					{ name: 'guru.kelas.mapel.tugas.pengumpulan.rekap', path: 'pengumpulan/rekap', component: GuruKelasMapelTugasPengumpulanRekap},
					{ name: 'guru.kelas.mapel.tugas.kuis.detail', path: 'kuis/detail', component: GuruKelasMapelTugasKuisDetail},
					{ name: 'guru.kelas.mapel.tugas.kuis.rekap', path: 'kuis/rekap', component: GuruKelasMapelTugasKuisRekap},
					{ 
						name: 'guru.kelas.mapel.tugas.pengumpulan.jawaban', 
						path: 'pengumpulan/jawaban/:id', 
						component: GuruKelasMapelTugasPengumpulanJawaban,
					},
					{ 
						name: 'guru.kelas.mapel.tugas.kuis.jawaban', 
						path: 'kuis/jawaban/:id', 
						component: GuruKelasMapelTugasKuisJawaban,
					},
					]
				},
				{
					path:'diskusi', component: { template: '<router-view/>' }, //prefix diskusi

					children: [
					{ name: 'guru.kelas.mapel.diskusi', path: '', component: GuruKelasMapelDiskusi},
					{ name: 'guru.kelas.mapel.diskusi.detail', path: 'detail', component: GuruKelasMapelDiskusiDetail},
					{ name: 'guru.kelas.mapel.diskusi.rekap', path: 'rekap', component: GuruKelasMapelDiskusiRekap},
					{ name: 'guru.kelas.mapel.diskusi.kontribusi', path: 'rekap/kontribusi/:id', component: GuruKelasMapelDiskusiKontribusi},
					]
				},
				]
			}
			]
		}
		]
	}
	]
},

//Siswa
{
	path: '/siswa', component: { template: '<router-view/>' },

	children: [
	{ name: 'siswa.dashboard', path: 'dashboard', component: SiswaDashboard},
	{ name: 'siswa.setting', path: 'setting', component: SiswaSettingAkun},
	{
		path:'kelas', component: { template: '<router-view/>' }, //prefix kelas

		children: [
		{ name: 'siswa.kelas.parent', path: '', redirect: { name: 'siswa.kelas.mapels' }},
		{ name: 'siswa.kelas.mapels', path: 'mapels', component: SiswaKelas},
		{ name: 'siswa.kelas.anggota', path: 'anggota', component: SiswaKelasAnggota},
		{
			path:'mapel', component: { template: '<router-view/>' }, //prefix mapel

			children: [
			{ name: 'siswa.kelas.mapel', path: 'beranda', component: SiswaKelasMapel},
			{ name: 'siswa.kelas.mapel.topik', path: 'topik', component: SiswaKelasTopik},
			{
				path:'bab', component: { template: '<router-view/>' },

				children: [
				{ name: 'siswa.kelas.mapel.bab', path: '', redirect: { name: 'siswa.kelas.mapel.materi' }},
				{
					path:'materi', component: { template: '<router-view/>' }, 

					children: [
					{ name: 'siswa.kelas.mapel.materi', path: '', component: SiswaKelasMapelMateri},
					]
				},
				{
					path:'tugas', component: { template: '<router-view/>' }, 

					children: [
					{ name: 'siswa.kelas.mapel.tugas.pengumpulan', path: 'pengumpulan', component: SiswaKelasMapelTugasPengumpulanDetail},
					{ name: 'siswa.kelas.mapel.tugas.kuis', path: 'kuis', component: SiswaKelasMapelTugasKuisDetail},
					]
				},
				{
					path:'diskusi', component: { template: '<router-view/>' }, 

					children: [
					{ name: 'siswa.kelas.mapel.diskusi', path: '', component: SiswaKelasMapelDiskusi},
					]
				},
				]
			},
			]
		},
		]
	},
	]
},
]

const router = new VueRouter({
	linkActiveClass: 'active',
	mode: 'history',
	routes: routes
})

router.beforeResolve((to, from, next) => {
	if (to.name) {
		NProgress.start()
	}

	setTimeout(() => {
		next();
	}, 50)
})

router.afterEach((to, from) => {
	
	setTimeout(() => {
		NProgress.done();
		window.scrollTo(0, 0);
	}, 50)
})

export default router