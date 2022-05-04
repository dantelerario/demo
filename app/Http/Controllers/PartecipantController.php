<?php

namespace App\Http\Controllers;

use App\Models\Partecipant;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PartecipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $age = Carbon::parse($request['birth_date'])->age;
        
        if ($age < 18) {
            return redirect()->route('page.create')
                             ->with('warning','Devi essere maggiorenne per partecipare');
        }
        $mobile = $request['mobile'];

        $check = $this->checkMobile($mobile);

        if ($check == $request['mobile']) {
            return redirect()->route('page.create')
                             ->with('warning','Numero mobile già presente');
        }

        $request->validate([
            'birth_date' => 'required',
            'country',
            'title',
            'mobile' => 'required',
            'organization' => 'required',
            'position', 
            'first_name' => 'required',
            'last_name'  => 'required',
        ]);
    
        Partecipant::create($request->all());
     
        return redirect()->route('page.create')
                         ->with('success','Partecipante aggiunto con successo.');
                         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partecipant  $partecipant
     * @return \Illuminate\Http\Response
     */
    public function show(Partecipant $partecipant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partecipant  $partecipant
     * @return \Illuminate\Http\Response
     */
    public function edit(Partecipant $partecipant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partecipant  $partecipant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partecipant $partecipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partecipant  $partecipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partecipant $partecipant)
    {
        //
    }

    public function checkMobile($mobile) 
    {
        $check = Partecipant::where('mobile', $mobile)->first();

        if ($check === NULL) {
            return $check;
        } else {
            return $check['mobile'];
        }
    }
}
