<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
</head>
<body>
   
   <h1>Hello, <?php echo $name; ?></h1>
   
   <ul>
   @foreach ($family as $sis)
       
        <li>Hi, {{ $sis }}</li>
        
    @endforeach
    </ul>
    
</body>
</html>