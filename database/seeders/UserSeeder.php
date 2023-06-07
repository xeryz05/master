<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;
use App\Models\Company;
use App\Models\Departement;
use App\Models\Period;
use App\Models\Admin\TypeJob;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'staff',
        ]);
        Role::create([
            'name' => 'manager',
        ]);
        Role::create([
            'name' => 'dirut',
        ]);

        Company::create([
            'name' => 'Verdanco Engineering',
        ]);
        Company::create([
            'name' => 'Verdanco Indonesia'
        ]);

        Departement::create([
            'name' => 'PDCA',
        ]);
        Departement::create([
            'name' => 'CPP',
        ]);
        Departement::create([
            'name' => 'Legal',
        ]);
        Departement::create([
            'name' => 'Marketing'
        ]);

        Period::create([
            'month' => 'Januari',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Februari',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Maret',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'April',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Mei',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Juni',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Juli',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Agustus',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'September',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Oktober',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'November',
            'year' => '2023'
        ]);
        Period::create([
            'month' => 'Desember',
            'year' => '2023'
        ]);

        // TypeJob::create([
        //     'name' => 'Genset'
        // ]);
        // TypeJob::create([
        //     'name' => 'Towerlight'
        // ]);
        // TypeJob::create([
        //     'name' => 'Solahart'
        // ]);

        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$YZ70nxzGmWi.MSo1PlZi3uEDQcbzHAo99/aLLED85W9gG4Icb9Wzy', // password
            'remember_token' => Str::random(10),
        ];
        $admin = User::create(array_merge([
                'name' => 'daffaadmin',
                'email' => 'admin@gmail.com',
                'position' => 'staff',
                'role_id' => 1,
                'company_id' => 2,
                'departement_id' => 1,
            ],$default_user_value));

            $staff = User::create(array_merge([
                'name' => 'dapsurstaff',
                'email' => 'staff@gmail.com',
                'position' => 'staff',
                'role_id' => 2,
                'company_id' => 1,
                'departement_id' => 2,
            ],$default_user_value));

            $manager = User::create(array_merge([
                'name' => 'dappmanager',
                'email' => 'manager@gmail.com',
                'position' => 'manager',
                'role_id' => 3,
                'company_id' => 2,
                'departement_id' => 3,
            ],$default_user_value));

            $dirut = User::create(array_merge([
                'name' => 'daaaaapdirut',
                'email' => 'dirut@gmail.com',
                'position' => 'direktur utama',
                'role_id' => 4,
                'company_id' => 2,
                'departement_id' => 4,
            ],$default_user_value));

            
    }
}
