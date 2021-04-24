require('./bootstrap');

import Vue from 'vue'
import router from './router'
import VueMq from 'vue-mq'
import VueTippy, { TippyComponent } from "vue-tippy"
import VueRouterBackButton from 'vue-router-back-button'
import tinymce from 'vue-tinymce-editor'
import moment from "moment"
import VueDummy from "vue-dummy"
import VueClipboard from 'vue-clipboard2'

import "tippy.js/themes/light.css"
import "tippy.js/themes/light-border.css"
import "tippy.js/themes/google.css"
import "tippy.js/themes/translucent.css"

Vue.use(VueClipboard)
Vue.component("tippy", TippyComponent);
Vue.component('tinymce', tinymce);
Vue.use(VueRouterBackButton, { router });
Vue.use(VueDummy);
Vue.use(VueTippy);
Vue.use(VueTippy, {
	directive: "tippy",
	flipDuration: 0,
	popperOptions: {modifiers: {preventOverflow: {enabled: false}}}
});

Vue.component('navbar-component', require('./components/NavbarComponent.vue').default);
Vue.component('sidebar-component', require('./components/SidebarComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('kategoripanduan-component', require('./components/KategoriPanduanComponent.vue').default);
Vue.component('kategoripanduan-component', require('./components/KategoriPanduanComponent.vue').default);

// TINY
Vue.component('input-tiny-component', require('./components/TinyComponent.vue').default);

// MODALS
// e-rapor
Vue.component('modal-rapor-unduh-rekap-component', require('./components/Modals/Rapor/ModalRaporUnduhRekapComponent.vue').default);
Vue.component('modal-rapor-ekstrakurikuler-add-component', require('./components/Modals/Rapor/ModalRaporEkstrakurikulerAddComponent.vue').default);
Vue.component('modal-rapor-ekstrakurikuler-edit-component', require('./components/Modals/Rapor/ModalRaporEkstrakurikulerEditComponent.vue').default);
Vue.component('modal-rapor-ekstrakurikuler-delete-component', require('./components/Modals/Rapor/ModalRaporEkstrakurikulerDeleteComponent.vue').default);

// mapel dashboard
Vue.component('modal-temakelas-component', require('./components/Modals/Tema_Kelas/ModalTemaKelasComponent.vue').default);
Vue.component('modal-kick-siswa-component', require('./components/Modals/Anggota_Kelas/ModalKickSiswaComponent.vue').default);

// topik
Vue.component('modal-bab-add-component', require('./components/Modals/Topik/ModalBabAddComponent.vue').default);
Vue.component('modal-bab-delete-component', require('./components/Modals/Topik/ModalBabDeleteComponent.vue').default);
Vue.component('modal-bab-edit-component', require('./components/Modals/Topik/ModalBabEditComponent.vue').default);

// nilai mapel
Vue.component('modal-kkm-component', require('./components/Modals/Nilai_Kelas/ModalKKMComponent.vue').default);
Vue.component('modal-unduh-rekap-kelas-component', require('./components/Modals/Nilai_Kelas/ModalUnduhRekapKelasComponent.vue').default);

// subtopik
Vue.component('modal-subtopik-add-component', require('./components/Modals/Topik/ModalSubTopikAddComponent.vue').default);
Vue.component('modal-subtopik-edit-component', require('./components/Modals/Topik/ModalSubTopikEditComponent.vue').default);
Vue.component('modal-subtopik-delete-component', require('./components/Modals/Topik/ModalSubTopikDeleteComponent.vue').default);

// materi
Vue.component('modal-materi-add-component', require('./components/Modals/Materi/ModalMateriAddComponent.vue').default);
Vue.component('modal-materi-edit-component', require('./components/Modals/Materi/ModalMateriEditComponent.vue').default);
Vue.component('modal-materi-delete-component', require('./components/Modals/Materi/ModalMateriDeleteComponent.vue').default);

// diskusi
Vue.component('modal-diskusi-add-component', require('./components/Modals/Diskusi/ModalDiskusiAddComponent.vue').default);
Vue.component('modal-diskusi-edit-component', require('./components/Modals/Diskusi/ModalDiskusiEditComponent.vue').default);
Vue.component('modal-diskusi-delete-component', require('./components/Modals/Diskusi/ModalDiskusiDeleteComponent.vue').default);
Vue.component('modal-diskusi-add-kontribusi-component', require('./components/Modals/Diskusi/ModalDiskusiAddKontribusiComponent.vue').default);
Vue.component('modal-diskusi-add-balasan-component', require('./components/Modals/Diskusi/ModalDiskusiAddBalasanComponent.vue').default);

// tugas
	//tugas pengumpulan
	Vue.component('modal-tugas-pengumpulan-add-component', require('./components/Modals/Tugas/ModalTugasPengumpulanAddComponent.vue').default);
	Vue.component('modal-tugas-kuis-add-component', require('./components/Modals/Tugas/ModalTugasKuisAddComponent.vue').default);
	Vue.component('modal-tugas-pengumpulan-edit-component', require('./components/Modals/Tugas/ModalTugasPengumpulanEditComponent.vue').default);
	Vue.component('modal-tugas-kuis-edit-component', require('./components/Modals/Tugas/ModalTugasKuisEditComponent.vue').default);
	Vue.component('modal-tugas-delete-component', require('./components/Modals/Tugas/ModalTugasDeleteComponent.vue').default);

	// add jawaban
	Vue.component('modal-tugas-pengumpulan-add-jawaban-teks-component', require('./components/Modals/Tugas/ModalTugasPengumpulanAddJawabanTeksComponent.vue').default);

//tugas kuis
Vue.component('modal-tugas-kuis-soal-detail-component', require('./components/Modals/Tugas/ModalTugasKuisSoalDetailComponent.vue').default);
Vue.component('modal-tugas-kuis-soal-add-component', require('./components/Modals/Tugas/ModalTugasKuisSoalAddComponent.vue').default);
Vue.component('modal-tugas-kuis-soal-bank-component', require('./components/Modals/Tugas/ModalTugasKuisSoalBankComponent.vue').default);
Vue.component('modal-tugas-kuis-soal-delete-component', require('./components/Modals/Tugas/ModalTugasKuisSoalDeleteComponent.vue').default);
Vue.component('modal-tugas-kuis-soal-edit-component', require('./components/Modals/Tugas/ModalTugasKuisSoalEditComponent.vue').default);
Vue.component('modal-tugas-kuis-setting-component', require('./components/Modals/Tugas/ModalTugasKuisSetting.vue').default);

// setting akun
Vue.component('modal-setting-akun-component', require('./components/Modals/Setting_Akun/ModalSettingAkunComponent.vue').default);

// SIDEBAR & NAVBAR
Vue.component('sidebar-list-jawaban-pengumpulan-component', require('./components/SidebarListJawbanPengumpulanComponent.vue').default);
Vue.component('sidebar-list-siswa-erapor-component', require('./components/SidebarListSiswaEraporComponent.vue').default);
Vue.component('navbar-nilai-mapel-component', require('./components/NavbarNilaiMapelComponent.vue').default);
Vue.component('navbar-rapor-kelas-component', require('./components/NavbarRaporKelasComponent.vue').default);

Vue.component('sidebar-second-component', require('./components/SidebarSecondComponent.vue').default);


Vue.use(VueMq, {
	breakpoints: {
		sm: 450,
		md: 1250,
		lg: Infinity,
	}
});

const app = new Vue({
	el: '#app',
	router,
});