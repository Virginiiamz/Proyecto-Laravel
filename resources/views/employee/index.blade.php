<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- messages alert -->
    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissable text-center">
            <p>{{ Session::get('mensaje') }}</p>
        </div>
    @endif
    <!-- list -->

    <div class="form-bg">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="form">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3" style="max-width: 18rem;">
                                    <div class="mt-3 btn" style="width: 18rem; padding: 2rem; background-color:#619e81">
                                        <h5 class="card-title text-white">Listado de Empleados</h5>
                                    </div>
                                    <hr style="color: #619e81">
                                </div>
                            </div>
                            <div class="col-6 mt-5">
                                <a class="btn text-white fw-bold" style="background-color:#619e81; width: 10rem"
                                    href="{{ url('/employee/create') }}">Añadir</a>
                                <hr style="color: #619e81">
                                <a class="btn text-white fw-bold" style="background-color:#619e81; width: 10rem"
                                    href="{{ url('/account') }}">Cerrar sesion</a>
                            </div>
                        </div>
                        <table class="table mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Sueldo</th>
                                    <th scope="col">Antigüedad</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listEmployees as $employee)
                                    <tr>
                                        <td scope="row">{{ $employee->doc }}</td>
                                        <td>{{ $employee->fullName }}</td>
                                        <td>{{ $employee->username }}</td>
                                        <td>{{ $employee->salary }}€</td>
                                        <td>{{ $employee->plus_seniority }}%</td>
                                        <td class="d-flex justify-content-center gap-3">
                                            <a class="btn fw-medium text-white" style="background-color: #619e81"
                                                href="{{ url('/employee/' . $employee->id . '/edit') }}">EDITAR</a>
                                            <form action="{{ url('/employee/' . $employee->id) }}" method="POST">
                                                @csrf
                                                {{-- Convertimos el metodo del formulario en delete, para borrar --}}
                                                {{ method_field('DELETE') }}
                                                <input class="btn fw-medium text-white" style="background-color:#619e81"
                                                    type="submit"
                                                    onclick="return confirm('¿Estas seguro que quieres borrar a este empleado?')"
                                                    value="BORRAR">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
