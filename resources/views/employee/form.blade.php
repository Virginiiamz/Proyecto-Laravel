<div class="input-group flex-nowrap my-3">
    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-vcard" style="color: #619e81"></i></span>
    <input class="form-control" type="text" pattern="[0-9]{8}[A-Z]{1}" aria-describedby="addon-wrapping" name="doc"
        id="doc" placeholder="DNI" minlength="9" maxlength="9"
        value="{{ isset($employee->doc) ? $employee->doc : '' }}" required>
</div>

<div class="input-group flex-nowrap my-3">
    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-file-person-fill"
            style="color: #619e81"></i></span>
    <input class="form-control" type="text" name="fullName" id="fullName" aria-describedby="addon-wrapping"
        placeholder="Nombre completo" value="{{ isset($employee->fullName) ? $employee->fullName : '' }}" required>
</div>

<div class="input-group flex-nowrap my-3">
    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-fill" style="color: #619e81"></i></span>
    <input class="form-control" type="text" name="username" id="idUser" aria-describedby="addon-wrapping"
        placeholder="Usuario" minlength="5" maxlength="16" value="{{ isset($employee->username) ? $employee->username : '' }}" 
         required>
</div>

<div class="input-group flex-nowrap my-3">
    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-currency-euro" style="color: #619e81"></i></span>
    <input class="form-control" type="number" name="salary" id="salary" aria-describedby="addon-wrapping"
        placeholder="Sueldo" value="{{ isset($employee->salary) ? $employee->salary : '' }}" min="1200" required>
</div>

<div class="input-group flex-nowrap my-3">
    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-plus" style="color: #619e81"></i></span>
    <input class="form-control" type="number" name="plus_seniority" aria-describedby="addon-wrapping"
        id="plusSeniority" value="{{ isset($employee->plus_seniority) ? $employee->plus_seniority : '' }}"
        placeholder="Plus de antigüedad" min="0" required>
</div>

<div class="d-flex justify-content-around">
    <input type="submit" class="btn text-white fw-medium" style="background-color: #619e81"
        value="{{ $modo }} Empleado">
    <a class="btn text-white fw-medium" style="background-color: #619e81" href="{{ url('/employee') }}">Volver</a>
</div>
