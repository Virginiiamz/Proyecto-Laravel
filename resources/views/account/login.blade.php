<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <!--messages alert-->
    @if (isset($mensaje))
    <div class="alert alert-danger alert-dismissable text-center">
        <p>{{ $mensaje }}</p>
    </div>
    @endif

    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 mt-5">
                    <div class="form-container">
                        <form action="{{ url('/account/create') }}" method="get" class="form-horizontal">
                            <h3 class="title" style="color: #619e81">Login</h3>
                            <div class="input-group flex-nowrap my-3">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill"
                                        style="color: #619e81"></i></span>
                                <input class="form-control" aria-describedby="addon-wrapping" type="text"
                                    placeholder="Usuario" name="username" min="3" required>
                            </div>
                            <div class="input-group flex-nowrap my-3">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-lock-fill"
                                        style="color: #619e81"></i></span>
                                <input class="form-control" aria-describedby="addon-wrapping" type="password"
                                    placeholder="Contraseña" name="password" id="password" min="5" max="5" required>
                            </div>
                            <button class="btn text-white fw-medium" style="background-color: #619e81">Entrar</button>
                        </form>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
