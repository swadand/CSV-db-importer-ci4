<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\IncomingRequest;

use App\Models\Role;
use App\Models\User;
use CodeIgniter\Database\Database;
use CodeIgniter\Database\MySQLi\Connection;
use CodeIgniter\Entity\Cast\IntegerCast;

class Csv extends BaseController
{
    //testing
    public function test()
    {
        return view('home');
    }

    public function handlecsv()
    {
        $user = new User();
        $role = new Role();

        $file = $this->request->getFile('csv');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('../public/csvfile', $newName);
            $file = fopen("../public/csvfile/" . $newName, "r");
            $i = 0;
            $numberOfFields = 4;
            $csvArr = array();

            while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                $num = count($filedata);
                if ($i > 0 && $num == $numberOfFields) {
                    $csvArr[$i]['name'] = $filedata[1];
                    $csvArr[$i]['email'] = $filedata[2];
                    $csvArr[$i]['role'] = $filedata[3];
                }
                $i++;
            }
            fclose($file);
            $index = 1;
            foreach ($csvArr as $userdata) {
                $role = new Role();
                $findRecord = $role->where('role', $userdata['role'])->findAll();
                if ($findRecord) {
                    foreach ($findRecord as $row) {
                        $index = (int)$row['id'];
                    }
                }
                else {
                    $data = [ "role" => $userdata['role'] ];
                    //echo '<pre>' . var_export($data) . '</pre>';
                    $role->insert($data);
                    $findRecord = $role->where('role', $userdata['role'])->findAll();
                    foreach ($findRecord as $row) {
                        $index = (int)$row['id'];
                    }
                }
                //echo '<pre>' . var_export($index) . '</pre>';

                $userdata['role'] = $index;
                $user->insert($userdata);
            }
        }
        unset($csvArr);

        $data = $user->getDisplayData()->getResultArray();
        foreach ($data as $row) {
            $fedata[] = $row; 
        }
        //echo '<pre>' . var_export($fedata) . '</pre>';
        return redirect()->route('/');
    }

    public function delete()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $id = $this->request->getGetPost("delete");
        $builder->delete(['id' => $id]);

        return redirect('/');
    }

    public function edit()
    {
        $user = model('User');

        $id = $this->request->getGetPost("id");
        $name = $this->request->getGetPost("name");
        $email = $this->request->getGetPost("email");
        $role = $this->request->getGetPost("role");

        $data = [
            'name' => $name, 
            'email' => $email,
            'role' => $role
        ];
        $user->update($id, $data);
        return redirect('/');
    }
}
