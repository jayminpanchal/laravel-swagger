# Laravel Swagger UI Demo

A demo of swagger API exlorer with laravel. Reference from: https://www.marcoraddatz.com/en/2015/07/21/integrate-swagger-into-laravel/

To run this Project

1. Clone or download this repository
2. Then install dependecies by compposer install
3. Add your api in Api package and extends it by ApiController class.

After modifying any file you have to genrate the API JSON so that swagger can understand it

Run this from your project directory

./vendor/bin/swagger app/Http --output public/api/

