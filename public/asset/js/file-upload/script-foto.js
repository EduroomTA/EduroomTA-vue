/*
We want to preview images, so we need to register the Image Preview plugin
*/
FilePond.registerPlugin(
	
	// encodes the file as base64 data
	FilePondPluginFileEncode,
	
	// validates the size of the file
	FilePondPluginFileValidateSize,
	
	// corrects mobile image orientation
	FilePondPluginImageExifOrientation,

	FilePondPluginFileValidateType,
	
	// previews dropped images
	FilePondPluginImagePreview
	);

// Select the file input and use create() to turn it into a pond
// FilePond.create(document.querySelector('#filepond-edit'));
FilePond.create(document.querySelector('#filepond-edit'), {
	acceptedFileTypes: ['image/*'],
	fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {

        // Do custom type detection here and return with promise

        resolve(type);
    })
});