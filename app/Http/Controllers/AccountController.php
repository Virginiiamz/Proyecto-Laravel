<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('account.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dataUser = request()->all();

        $listAccounts = Account::get();
        $listEmployees = Employee::get();

        $exists = false;
        $isAdmin = false;

        foreach ($listAccounts as $account) {
            if ($dataUser['username'] == $account->username) {
                if ($dataUser['password'] == $account->password) {
                    $exists = true;
                    if ($account->role == "admin") {
                        $isAdmin = true;
                    }
                    $accountId = $account->id;
                }
            }
        }

        if ($exists == true) {

            if ($isAdmin == true) {
                return redirect('employee');
            }
            return view('employee.indexUser', ['accountId' => $accountId, 'dataUser' => $dataUser, 'listEmployees' => $listEmployees]);
        }

        return view('account.login', ['mensaje' => "Usuario o contraseña incorrecta"]);
    }
}
