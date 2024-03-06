<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="form-bg">
        <div class="container mt-1">
            <div class="row">
                <div class="col"></div>
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 mt-3">
                    <div class="form-container">
                        <form action="{{ url('/employee/' . $employee->id) }}" method="post" class="form-horizontal">
                            @csrf
                            {{ method_field('PATCH') }}

                            <h3 class="text-success">Modifica al empleado</h3>

                            @include('employee.form', ['modo' => 'Editar'])
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
