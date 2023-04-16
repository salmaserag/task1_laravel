<!--to can print any code here change name of file ro -> .blade.php-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   @foreach ($student as $child)
   <a href='/students/{{ $child['id'] }}'>
   {{ $child['id'] }} - {{ $child['fname'] }}  {{ $child['lname'] }}
   </a>
     
     <br>

   @endforeach

</body>
</html>