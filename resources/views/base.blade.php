<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mb-3">
        <div class="container">
            <a href="" class="navbar-brand">COACHING Management System</a>

            
             <ul class="navbar-nav">
                <div class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></div>
               @guest
                    <div class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></div>
                    <div class="nav-item"><a href="{{route('signup')}}" class="nav-link">signup</a></div>
               @endguest
               @auth
                   <li class="nav-item"><a href="{{route('logout')}}" class="nav-link mx-2">Logout</a></li>
                  
               @endauth

               <li class="nav-item"><a href="{{route('student.create')}}" class="btn btn-dark">Apply For Admission</a></li>
             </ul>
        </div>
    </nav>

    @section('data')
        
    @show
    
</body>
</html>