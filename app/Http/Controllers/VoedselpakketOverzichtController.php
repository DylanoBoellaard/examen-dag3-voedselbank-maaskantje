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
    // method to show the index view
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

    // method to show the show view
    public function show($id)
    {
        // search for gezin with a specific id
        $gezin = Gezin::find($id);
        // search for voedselpakket with a specific gezinId
        $voedselpakket = Voedselpakket::where('gezinId', $id)->with('voedselpakketpereenheid')->get();
        // returns the view with the gezin and voedselpakket
        return view('voedselpakketten.overzichtvoedsel', [
            'gezin' => $gezin, 'voedselpakket' => $voedselpakket
        ]);
    }

    // method to show the edit view
    public function edit($id)
    {
        // search for voedselpakket with a specific id
        $voedselpakket = Voedselpakket::find($id);
        
        return view('voedselpakketten.edit', [
            'voedselpakket' => $voedselpakket
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'status' => 'required',
        ]);
        // search for voedselpakket with a specific id
        $voedselpakket = Voedselpakket::findOrFail($id);
        // update the voedselpakket with the new data
        $voedselpakket->update([
            'status' => $validate['status']
        ]);

        // returns the view with the updated voedselpakket
        return redirect('/gezin/' . $voedselpakket->id . '/edit')->with('status', 'De wijziging is doorgevoerd');
    }
}
