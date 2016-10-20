<?php
/**
 * Created by PhpStorm.
 * User: Jaymin
 * Date: 10/20/2016
 * Time: 11:09 PM
 */

namespace App\Http\Controllers;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="localhost/laravel-swagger/public",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Sample API",
 *         @SWG\Contact(name="Jaymin Panchal", email="jayminpanchal10@gmail.com"),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */
class ApiController extends Controller
{
}