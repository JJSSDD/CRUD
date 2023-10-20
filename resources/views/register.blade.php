<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Coorpsep</title>
  </head>
  <body>
  @auth
  <div class="m-3">
    <p >you are logged <button>Log out</button></p>
    <form action="/logout" method="post">
    @csrf
    
    </form> 
  </div>
  <div>

    <h1 class="font-weight-bold text-center">Bienvenido a tu interfaz de organizador.</h1>
    <div class="">        
        <div class="table-responsive">
            
            <table class="table table-striped" id="equipos">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>email</th>
                        <th>fecha</th>
                                               
                    </tr>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td> {{$cliente->id}} </td>
                        <td> {{$cliente->nombre}} </td>
                        <td> {{$cliente->email}} </td>
                        <td> {{$cliente->fecha}} </td>
                        <td>
                            <a href="{{route('edit.cliente',['cliente'=> $cliente])}}">edit</a>
                        </td>
                        <td>
                            <form action="{{route('delete.cliente',['cliente'=> $cliente])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Borrar</button>
                            </form>
                        </td>

                    </tr>
                        
                    @endforeach
                </thead>
                <tbody class="w-50">
                    
                </tbody>
            </table>
        </div>

    </div>

  </div>
    <div style="border:3px solid black; padding: 4px; margin: 10px;" class="m-3">


        <h2>Crear un nuevo cliente</h2>
        <form action="/create-post" method="post">
        @csrf
              <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" name="nombre" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nombre">
                </div>
              </div>
              <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control" id="colFormLabel" placeholder="email">
                </div>
              </div>
              <div class="row">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">fecha</label>
                <div class="col-sm-10">
                  <input type="date" name="fecha" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                </div>
              </div>
            <button type="submit" class="btn btn-success m-3 text-center">Success</button>
        </form>

    </div>
  
  
  @else    
  <div class="m-5">
    <h2>Register</h2>
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input name="name" type="name" class="form-control" id="examplename" placeholder="Nombre">
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
    <div class="m-5">
        <h2>Log in</h2>
            <form action="/login" method="POST">
            @csrf
                <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="loginname" type="name" class="form-control" id="examplename" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input name="loginpassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
        
        
        <button type="submit" class="btn btn-primary">Log in</button>
        </form>
    </div>

  @endauth
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>