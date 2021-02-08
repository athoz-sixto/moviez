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
        <h4>Película Nueva</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('moviez.store')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="titulo_original">Titulo original</label>
                        <input type="text" class="form-control" name="titulo_original" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="titulo_esp">Titulo en español</label>
                        <input type="text" class="form-control" name="titulo_esp" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="anio">Año</label>
                        <input type="text" class="form-control" name="anio" required maxlength="4">
                    </div>
                    <div class="form-group">
                        <label for="pais">País</label>
                        <input type="text" class="form-control" name="pais" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" class="form-control" name="director" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="reparto">Reparto</label>
                        <input type="text" class="form-control" name="reparto" required maxlength="200">
                    </div>
                    <div class="form-group">
                        <label for="genero">Género</label>
                        <input type="text" class="form-control" name="genero" required maxlength="60">
                    </div>
                    <div class="form-group">
                        <label for="sinopsis">Sinópsis</label>
                        <input type="text" class="form-control" name="sinopsis" required maxlength="400">
                    </div>
                    <div class="form-group" my-1>
                        <label for="imagen">URL Imagen</label>
                        <input type="text" class="form-control" name="imagen" required maxlength="150">
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-success" value="Cancelar">
                        <a href="javascript:history.back()" class="btn btn-success">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>