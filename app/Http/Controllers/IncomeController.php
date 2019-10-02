<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

/**
 * @group Income management
 *
 * APIs for managing incomes
 */
class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @bodyParam title string required The title of the post.
     * @bodyParam body string required The title of the post.
     * @bodyParam type string The type of post to create. Defaults to 'textophonious'.
     * @bodyParam author_id int the ID of the author
     * @bodyParam thumbnail image This is required if the post type is 'imagelicious'.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes = [];

        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $income = new \stdClass();
            $income->id = $i;
            $income->name = $faker->name;
            $income->summ = $faker->numberBetween($min = 1000, $max = 9000);

            $incomes[] = $income;
        }

        return response()->json($incomes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
