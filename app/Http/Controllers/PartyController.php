<?php

namespace App\Http\Controllers;

use App\Models\Party;
use App\Http\Requests\StorePartyRequest;
use App\Http\Requests\UpdatePartyRequest;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePartyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Party $party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Party $party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartyRequest $request, Party $party)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Party $party)
    {
        //
    }

    public function getPoliticalParties()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://members-api.parliament.uk/api/Parties/GetActive/1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cf_bm=eDkqrOIbN1yJ4X8JLXDvJkLNSaHVpdAfA9xL2lwsjTo-1695826826-0-AVUcrvaxNjk/9iUIRAVYYLjj+woTeejETkSkmol301HHyyAQVh7FBsOyXkRZYR9I1O0qLhX1kY5PPdp3ojjHMP0='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return ($response);
    }

    public function getPoliticalParty($id){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://members-api.parliament.uk/api/Parties/4',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Cookie: __cf_bm=eDkqrOIbN1yJ4X8JLXDvJkLNSaHVpdAfA9xL2lwsjTo-1695826826-0-AVUcrvaxNjk/9iUIRAVYYLjj+woTeejETkSkmol301HHyyAQVh7FBsOyXkRZYR9I1O0qLhX1kY5PPdp3ojjHMP0='
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return ($response);
        //TODO write to datatable
    }

    public function getMembers($skip, $take){



        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://members-api.parliament.uk/api/Members/Search?skip='.$skip.'&take='.$take,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: __cf_bm=p_0v_0NN84OmsPaoaLosQKyw3TeugX3bnbYJTXlCWOo-1695827916-0-AaUvg3phTk6kCoR4Fwak7AmAy9hZKU+DP/gTpiWL1AcST5fE1uVau1EXrHATn4fV4qpBANfoND+ny/EKGN8hnJM='
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }

}
