<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nama Saya</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>
<body>
    
    {{--  {{ $data['name'] }} <br>
        {{ $data['age'] }} <br>
        {{ $data['address'] }} <br><br>

        <p>pemanggilan menggunakan foreach</p>
    @foreach ($data as $val)
        {{ $val }} <br>
    @endforeach
    </div>  --}}

    <div class="container mt-3">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <img 
                        src="https://images.unsplash.com/photo-1661961111184-11317b40adb2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80" 
                        class="card-img-top" alt="..."
                        style="width: 500px">
                    <div class="card-body">
                      <h5 class="card-title">{{ $data['name'] }} - ({{ $data['age'] }})</h5>
                      <p class="card-text">{{ $data['address'] }}</p>
                      {{--  <a href="#" class="btn btn-primary">{{ $data['address'] }}</a>  --}}
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

