<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedProducts = [
            [
                "name" => "Blacksmith Men's Shorts N",
                "description" => "Blacksmith Men's Cargo Work Shorts - Navy",
                "price" => 28.00,
                "company" => "Blacksmith",
            ],
        ];
        foreach($seedProducts as $product){
            $company = Company::whereName($product->company)->first();
            if ($company!==null) {
                Product::create([
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'company_id' => $company->id,
                ]);
            }
        }
    }
}
