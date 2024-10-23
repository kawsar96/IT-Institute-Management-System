<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo</title>
</head>
<body>

    
       
                <h2>Show File</h2>
           
            
           @foreach($file as $file )
           
           
           
        <img src="storage/upload/{{$file->name}}"  style="width:200px ;margin:auto;height:200px;border-radius:50%"> 
    
@endforeach
           
</body>
</html>