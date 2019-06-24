<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
</head>

<body>
  <textarea name="content" id="editor">This is some sample content.</textarea>
  <script>
    ClassicEditor
                  .create( document.querySelector( '#editor' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
  </script>
</body>

</html>