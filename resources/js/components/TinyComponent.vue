<template>
	<tinymce 
	id="d1" 
	v-model="data"
	:plugins="plugins"
	:toolbar1="toolbar1"
	:toolbar2="toolbar2"
	/>
</template>

<script>
	export default {
		data(){
			return {
				data : '',
				plugins: 
				[
				'advlist autolink lists link image charmap print preview hr anchor pagebreak', 
				'searchreplace wordcount visualblocks visualchars code fullscreen', 
				'insertdatetime media nonbreaking save table contextmenu directionality',
				'template paste textcolor colorpicker textpattern imagetools toc help emoticons hr codesample',
				'autoresize'
				],
				toolbar1: '',
				toolbar2: '',
			}
		}
	}
</script>