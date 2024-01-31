<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $user = model('User');
        $role = model('Role');
        $fedata = $user->getDisplayData()->getResultArray();
        $roleId = $role->findAll();

        return view('home', ['fedata' => $fedata, 'role' => $roleId]);
    }
}
