<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Gezin;
use App\Models\Persoon;
use App\Models\Eetwenspergezin;
use App\Models\Eetwens;

class VoedselpakketOverzichtController extends Controller
{
    public function index(Request $request)
    {
        $gezinnen = DB::select("SELECT * FROM gezin
        JOIN eetwenspergezin ON gezin.id = eetwenspergezin.gezinId
        JOIN eetwens ON eetwenspergezin.eetwensId = eetwens.id
        JOIN persoon ON gezin.id = persoon.gezin_id
        WHERE persoon.isvertegenwoordiger = 1");

        $selected_eetwens = $request->input('eetwens_id', null);
        $result = DB::select("SELECT id, naam FROM eetwens WHERE id");
        $vergelijking = DB::select("SELECT * FROM eetwenspergezin");

        

        if ($selected_eetwens) {
            $vergelijking = DB::select("SELECT eetwensId FROM eetwenspergezin WHERE eetwensId = $selected_eetwens");
        }
        
       


        return view('voedselpakketten.overzicht', [
            'gezinnen' => $gezinnen, 'result' => $result, 'vergelijking' => $vergelijking
        ]);
    }
}
