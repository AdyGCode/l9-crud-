<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                "company" => "Blacksmith Ltd.",
            ],
        ];

        foreach ($seedProducts as $product) {

            $company = Company::whereName($product['company'])->first();

            if (is_null($company)) {
                // The company is missing, let's create it in the companies table
                $newCompany = [
                    'name' => $product['company'],
                    'email' => Str::slug($product['company'], "-") . '@example.com',
                    'address' => 'UNKNOWN',
                    'country_code' => '---',
                ];
                $company = Company::create($newCompany);
            }
            // Now we can add the product with the company id!
            Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'company_id' => $company['id'],
            ]);

        }
    }
}
