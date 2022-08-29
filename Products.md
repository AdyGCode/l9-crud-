# Products TODO list

## Model, Migration, Controller |

Create the products Model, Controller etc

```shell
sail artisan make:model Product -ars 
```

## Add the Migration defintion for products

Add the fields to the migration:

- name
- description
- price

Run the Migration
```shell
sail artisan migrate --step
```

## Update Company seeder

Add the following companies to the seeder:

| id | name          | email                    | address                            | country code |
| 10 | Blacksmith    | blacksmith@example       | 33 Smithy Lane, Ballarat, VIC      | AUS          |
| 11 | Lego          | lego@example.com         | 876 Brick Block, Oslo              | NOR          |
| 13 | Denim         | denim@example.com        | 501 Blue Avenue, San Francisco, CA | USA          |
| 15 | Thrustmaster  | thrustmaster@example.com | 777 Control Drive, Sydney, NSW     | AUS          |
| 20 | iRobot        | iRobot@example.com       | 88 Vacuum Bend, Dublin             | IRE          |

## Create a new migration 

```shell
sail artisan make:migration update_products_table
```

Use this migration to add a new field:

- company_id, unsigned big integer, default 0

Run the migration using:
```shell
sail artisan migrate --step
```

## Add seed data

Update the products seeder to add the following data...

| Name                       | Description                                                   | Price   | Company      |
|----------------------------|---------------------------------------------------------------|---------|--------------|
| Classic 10696              | LEGO Classic Medium Creative Brick Box                        | $39.00  | Lego         |
| Denim Women's Jacket       | The 1964 Denim Company Women's Organic Crop Jacket - Bay Wash | $30.00  | Denim        |
| Blacksmith Men's Boots W   | Blacksmith Men's Steel Cap Work Boots - Sparky Wheat          | $59.00  | Blacksmith   |
| Disney 76832               | LEGO Disney and Pixar's Lightyear XL-15 Spaceship             | $69.00  | Lego         |
| Blacksmith Men's Shorts N  | Blacksmith Men's Cargo Work Shorts - Navy                     | $28.00  | Blacksmith   |
| Roomba R670000             | iRobot Roomba 670 Robot Vacuum Black                          | $399.00 | iRobot       |
| Philips EP2231/40          | Philips LatteGo Fully Automatic Coffee Machine                | $899.00 | Philips      |
| Thrustmaster PS4 T80       | Thrustmaster PS4 T80 Ferrari GTB Racing Wheel                 | $179.00 | Thrustmaster |
| Blacksmith Men's Shorts K  | Blacksmith Men's Cargo Work Shorts - Khaki                    | $28.00  | Blacksmith   |
| Blacksmith Women's Boots W | Blacksmith Women's Steel Cap Boots - Wheat                    | $49.00  | Blacksmith   |


## Add Products seeder to Database Seeder

Add the Product Seeder to the Database Seeder

## Perform a migration and seed from scratch

``` shell

```

