<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <a href="{{route('form')}}" style="position:relative;left:1000px;"><button type="button" class="btn btn-primary">ADD</button></a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">username</th>
            <th scope="col">city</th>
            <th scope="col">state</th>
            <th scope="col">zip</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($data as $d)
          <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->firstname}}</td>
            <td>{{$d->lastname}}</td>
            <td>{{$d->username}}</td>
            <td>{{$d->city}}</td>
            <td>{{$d->state}}</td>
            <td>{{$d->zip}}</td>
            <td><a href="{{route('edit',$d->id)}}"><button type="button" class="btn btn-primary">edit</button></a>
            <a href="{{route('delete',$d->id)}}"><button type="button" class="btn btn-primary">delete</button>
        </a></td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>
