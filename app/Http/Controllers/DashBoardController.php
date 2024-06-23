<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\DashBoard;
use App\Models\Desemprego;
use Illuminate\Support\Facades\DB;
class DashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $user;

	public function __construct(DashBoard $user)
	{
		$this->user = $user;
    }


    public function searchByAge()
    {

    }
    public function searchByRegion()
    {

    }
    public function searchByKind()
    {

    }
    public function index()
    {
        $entries = DB::table('desemprego')
            ->selectRaw('YEAR(now())-YEAR(birthdate)-IF(MONTH(now())*32+DAY(birthdate)<MONTH(birthdate)*32+DAY(birthdate),1,0) as idade, COUNT(YEAR(now())-YEAR(birthdate)-IF(MONTH(now())*32+DAY(birthdate)<MONTH(birthdate)*32+DAY(birthdate),1,0)) as count')
            ->groupBy([
                'idade'
            ]) 
            ->get()
            ;

       
        $dataset = [];

        if($entries->count() > 0 ){
            foreach($entries as $entry){
            $dataset['idade'][] = $entry->idade;
            $dataset['count'][] = $entry->count;
            }

            $labels = [
                1 => '15 Anos', '16 Anos', '17 Anos', '18 Anos', '19 Anos', '20 Anos', '21 Anos',
                '22 Anos', '23 Anos', '24 Anos', '25 Anos', '26 Anos', '27 Anos', '28 Anos', '29 Anos'
            ];   

            return Inertia::render('Dashboard', [
                'labels'=> array_values($labels),
                'dataset'=>  array_values($dataset['count']),
            ]); 
        }

        return Inertia::render('Dashboard'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
