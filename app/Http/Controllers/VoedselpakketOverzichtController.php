<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Gezin;
use App\Models\Productpervoedselpakket;
use App\Models\Voedselpakket;
use App\Models\Eetwens;

class VoedselpakketOverzichtController extends Controller
{
    public function index(Request $request)
    {
        // search for gezinnen with a vertegenwoordiger
        $gezinnen = Gezin::whereHas('personen', function ($query) {
            $query->where('isvertegenwoordiger', 1);
        })->with('personen')->get();

        // search for gezinnen with a vertegenwoordiger and a specific eetwens
        $eetwens = DB::select("SELECT id, naam FROM eetwens WHERE id");
        $selected_eetwens = $request->input('selector', null);

        // searches for gezinnen with a vertegenwoordiger and a specific eetwens
        if ($selected_eetwens) {
            $gezinnen = Gezin::whereHas('eetwenspergezin', function ($query) use ($selected_eetwens) {
                $query->where('eetwensId', $selected_eetwens);
            })
            ->whereHas('personen', function ($query) {
                $query->where('isvertegenwoordiger', 1);
            })
            ->get();
        }

        // returns the view with the gezinnen and eetwens
        return view('voedselpakketten.overzicht', [
            'gezinnen' => $gezinnen, 'eetwens' => $eetwens
        ]);
    }

    public function show($id)
    {
        $gezin = Gezin::find($id);
        $voedselpakket = Voedselpakket::where('gezinId', $id)->with('voedselpakketpereenheid')->get();

        // dd($voedselpakket);

        return view('voedselpakketten.overzichtvoedsel', [
            'gezin' => $gezin, 'voedselpakket' => $voedselpakket
        ]);
    }
}
