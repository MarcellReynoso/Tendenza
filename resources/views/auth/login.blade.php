<!doctype html>
<html lang="en">

<head>
  <title>Inicio de sesión</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    
    <section class="h-100 gradient-form gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="card-body p-md-5 mx-md-4">
                
                                    <div class="text-center">
                                        <img src="{{asset('img/logo_tendenza.png')}}"
                                        style="width: 185px;" alt="logo">
                                    </div>
                   
                                    <form action="{{route('login')}}" method="POST">
                                        @csrf
                                        <div class="form-outline mb-4">
                                        <input type="email" name="email" id="form2Example11" class="form-control"
                                            placeholder="Correo electrónico" />
                                        </div>
                    
                                        <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Contraseña" />
                                        </div>
                    
                                        <div class="text-center pt-1 mb-5 pb-1">
                                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar sesión</button>
                                        </div>
                                    </form>
                                    </div>

                                    
                                </div>
                            
                            <div class="col-md-6 text-center">
                                <img src="{{asset('img/zapatos6.jpeg')}}"
                                style="width:90%">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>