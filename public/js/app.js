  // Initialize Dropzone
    var myDropzone = new Dropzone("form", {
        url: "{{ route('upload') }}", // replace with your image upload URL
        paramName: "image",
        addRemoveLinks: true,
        dictDefaultMessage: "Drag and drop an image here or click to upload",
        acceptedFiles: "image/*",
        maxFilesize: 2, // maximum file size in MB
        timeout: 30000 // request timeout in milliseconds
    });

    // After a file is uploaded, update the image field value with the uploaded file path
    myDropzone.on("success", function(file, response) {
        document.querySelector('[name="image"]').value = response.path; // replace "path" with the actual field name that contains the file path in the response
    });

