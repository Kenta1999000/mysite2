<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corporation;
use Illuminate\Http\Support\Facades\DB;
class CorporationController extends Controller
{
    public function index()
    {   $corporation = new Corporation;
        $columns = $corporation->getConnection()->getSchemaBuilder()->getColumnListing($table);
        $contents = file_get_contents(storage_path("/app/public/corporation.xml"));
        $xmlObject = simplexml_load_string($contents);
        $xmlArray = json_decode( json_encode( $xmlObject ), TRUE );
       # $xmlArray = $xmlArray['corporation'];
       foreach($xmlArray as $array){
        foreach($array as $values){
            $corporation->id=$values["sequenceNumber"];
            $corporation->corporate_number=$values[""];
            $corporation->process=$values[""];
            $corporation->correction=$values[""];
            $corporation->update_date=$values[""];
            $corporation->change_date=$values[""];
            $corporation->corporate_image=$values[""];
            $corporation->corporate_kind=$values[""];
            $corporation->prifecture=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
            $corporation->=$values[""];
        }
    }

        }


