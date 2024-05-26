<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'     => $row['name'],
            'nip'    => $row['nip'], 
            'pangkat'    => $row['pangkat'], 
            'gol'    => $row['gol'], 
            'jabatan'    => $row['jabatan'], 
            'password' => Hash::make($row['nip']),
        ]);
    }
}
