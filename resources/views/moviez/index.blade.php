<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>Control Peliculas</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('moviez.index')}}" method="get">
                    <div class="form row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="txtabuscar" value="{{$texto}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('moviez.create')}}" class="btn btn-success">Agregar</a>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead> 
                            <tr class="tr align-middle">
                                <th>ID</th>
                                <th>TITULO ORIGINAL</th>
                                <th>TITULO EN ESPAÑOL</th>
                                <th>AÑO</th>
                                <th>PAIS</th>
                                <th>DIRECTOR</th>
                                <th>REPARTO</th>
                                <th>GENERO</th>
                                <th>SINOPSIS</th>
                                <th>IMAGEN</th>
                                <th>OPCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($peliculas)<=0)
                                <tr>    
                                    <td colspan="8">No se encontraron películas.</td>
                                </tr>
                            @else
                                @foreach ($peliculas as $pelicula)
                                    <tr>
                                        <td>{{$pelicula->id}}</td>
                                        <td>{{$pelicula->titulo_original}}</td>
                                        <td>{{$pelicula->titulo_esp}}</td>
                                        <td>{{$pelicula->anio}}</td>
                                        <td>{{$pelicula->pais}}</td>
                                        <td>{{$pelicula->director}}</td>
                                        <td>{{$pelicula->reparto}}</td>
                                        <td>{{$pelicula->genero}}</td>
                                        <td>{{$pelicula->sinopsis}}</td>
                                        <td><img src="{{$pelicula->imagen}}" width=100></td>
                                        <td>
                                            <a href="{{route('moviez.edit',$pelicula->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                            <br>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$pelicula->id}}">
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    @include('moviez.delete')
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$peliculas->links()}}
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>