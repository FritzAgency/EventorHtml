<html>
    <head>
        ...
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css">

        <!-- You'll want to make sure to at least set a width on the -->
        <!-- .custom-file-container class... -->
        ...
    </head>
    <body>

        ...

        <div class="custom-file-container" data-upload-id="myUniqueUploadId">
            <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">Remove</a></label>

            <label class="custom-file-container__custom-file" >
                <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="*" multiple>
                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                <span class="custom-file-container__custom-file__custom-file-control"></span>
            </label>

             <div class="custom-file-container__image-preview" style="height: 500px; width: 500px"> </div>



        </div>

        ...

        <script src="https://unpkg.com/file-upload-with-preview"></script>
        <script>
            var upload = new FileUploadWithPreview('myUniqueUploadId')
        </script>

    </body>
</html>