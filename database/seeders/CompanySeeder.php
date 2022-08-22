<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedCompanies = [
            [
              'name'=>'North Metro TAFE',
              'email'=>'nmtafe@example.com',
              'address'=>'Northbridge Campus, Perth',
              'country_code'=>'AUS',
            ],
            [
              'name'=>'Google Inc.',
              'email'=>'google@example.com',
              'address'=>'Some Large Number Road, New York',
              'country_code'=>'USA',
            ],
        ];
        foreach($seedCompanies as $company){
            Company::create($company);
        }
    }
}
