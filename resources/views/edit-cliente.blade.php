<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>
        
    <form action="/edit-cliente/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
              <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" name="nombre" class="form-control form-control-sm" id="colFormLabelSm" value="{{$cliente->nombre}}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control" id="colFormLabel" value="{{$cliente->email}}">
                </div>
              </div>
              <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">fecha</label>
                <div class="col-sm-10">
                  <input type="date" name="fecha" class="form-control form-control-lg" id="colFormLabelLg" value="{{$cliente->fecha}}">
                </div>
              </div>
            <button type="submit" class="btn btn-success m-3 text-center">Success</button>
        </form>
    
    </form>
</body>
</html>