<?php
/**
 * Created by PhpStorm.
 * User: Reshma
 * Date: 10/20/2016
 * Time: 11:10 PM
 */

namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\ApiController;
/**
 * Class DashboardController
 *
 * @package App\Http\Controllers\Api
 */
class DashboardController extends ApiController {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="/api/demo",
     *     description="Returns dashboard overview.",
     *     operationId="api.dashboard.index",
     *     produces={"application/json"},
     *     tags={"dashboard"},
     *     @SWG\Response(
     *         response=200,
     *         description="Dashboard overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function index()
    {
        return response()->json([
            'result'    => [
                'statistics' => [
                    'users' => [
                        'name'  => 'Jaymin',
                        'email' => 'jayminpanchal10@gmail.com'
                    ]
                ],
            ],
            'message'   => '',
            'type'      => 'success',
            'status'    => 0
        ]);
    }
}