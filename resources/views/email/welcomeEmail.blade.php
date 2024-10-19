<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>email service rz</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h2>Hi {{ $name}},</h2>
    <hr>
    <!-- variables from supportEmail.php -->
    {{ $content }} 
    <br> this is a welcoming email from email services system. <br>
    best regards.
  </body>
</html>