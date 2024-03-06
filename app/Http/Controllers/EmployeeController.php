<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datas['listEmployees'] = Employee::paginate(10);
        return view('employee.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dataEmployee = request()->except('_token'); //coge todos los campos menos el del token
        $usernameEmployee = $request->username;
        $nameEmployee = $request->fullName;
        $docEmployee = $request->doc;

        $password = EmployeeController::passwordGenerator($nameEmployee, $docEmployee);

        Employee::insert($dataEmployee);
        Account::insert(['username' => $usernameEmployee, 'password' => $password, 'role' => 'user']);

        return redirect('employee')->with('mensaje', 'Empleado creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Busca los datos del empleado pasado por id
        $employee = Employee::findOrFail($id);
        return view("employee.edit", compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $dataEmployee = request()->except(['_token', '_method']);
        Employee::where('id', '=', $id)->update($dataEmployee);
        $employee = Employee::findOrFail($id);
        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $listEmployees = Employee::get();
        $listAccounts = Account::get();

        foreach ($listEmployees as $employee) {
            if ($id == $employee->id) {
                $usernameEmployee = $employee->username;
            }
        }

        foreach ($listAccounts as $account) {
            if ($account->username == $usernameEmployee) {
                $idAccount = $account->id;
            }
        }

        Employee::destroy($id);
        Account::destroy($idAccount);
        return redirect("employee")->with('mensaje', 'Empleado eliminado correctamente');
    }

    public static function passwordGenerator($name, $doc)
    {
        $nameInitial = substr($name, 0, 1);
        $docNumber = substr($doc, 0, 4);
        return $nameInitial . $docNumber;
    }
}
