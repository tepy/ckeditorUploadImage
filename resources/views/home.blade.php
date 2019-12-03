<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>

<textarea name="editor1"></textarea>

<!-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> -->
<script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script type="text/javascript">

  CKEDITOR.replace('editor1', {
    filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ]) }}",
    filebrowserUploadMethod: 'form',
    
    height: 500
  });
</script>
</body>
</html>