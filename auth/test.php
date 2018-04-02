<html>
    <head>
        ...
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
        <!-- You'll want to make sure to at least set a width on the -->
        <!-- .custom-file-container class... -->



    
    </head>
    <body>

<form>
    <div class="input-group date" data-provide="datepicker calendar">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

</form>
        

    </body>
<script type="text/javascript">
    

$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});

    </script>

</html>