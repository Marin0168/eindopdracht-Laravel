<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oefening;

class OefeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oefeningen = Oefening::all();
        return view('oefening', compact('oefeningen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valideer de invoergegevens
        $validatedData = $request->validate([
            'oefening' => 'required|string|max:255',
            'aantal_keren' => 'required|integer|min:1',
        ]);

        // Maak een nieuwe oefening aan
        $oefening = new Oefening();

        // Verander de data van de oefening naar de ingegeven data
        $oefening->naam = $validatedData['oefening'];
        $oefening->aantal_keren = $validatedData['aantal_keren'];

        // sla de oefening op
        $oefening->save();

        // stuur terug naar homepage
        return redirect()->route('oefening.index')->with('success', 'Oefening aangemaakt successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oefening = oefening::find($id); 

        // stuur naar de pagina en stuur de oefening en id mee
        return view('show', compact('oefening'))->with('id',$id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // zoek de oefening
        $oefening = oefening::find($id);
        
        // Stuur naar de edit pagina geef de oefening en id mee
        return view('edit', compact('oefening'))->with('id',$id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Valideer de invoergegevens
        $validatedData = $request->validate([
            'oefening' => 'required|string|max:255',
            'aantal_keren' => 'required|integer|min:1',
        ]);
    
        // Zoek de oefening op basis van de ID
        $oefening = Oefening::findOrFail($id);
    
        // Werk de eigenschappen van de oefening bij met de gevalideerde gegevens
        $oefening->naam = $validatedData['oefening'];
        $oefening->aantal_keren = $validatedData['aantal_keren'];
    
        // Sla de bijgewerkte oefening op
        $oefening->save();
    
        // Stuur terug naar de homepage met een succesmelding
        return redirect()->route('oefening.index')->with('success', 'Oefening bijgewerkt!');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $oefening = Oefening::find($id);

        if (!$oefening) {
            // Oefening met het opgegeven ID kon niet worden gevonden
            // Voer hier een passende actie uit (bijvoorbeeld terugsturen met een foutmelding)
            return redirect()->route('oefening.index')->with('error', 'Oefening not found.');
        }
        
        // Als de oefening is gevonden, voer dan de delete-operatie uit
        $oefening->delete();
        
        // Stuur terug naar de homepage of een andere route
        return redirect()->route('oefening.index')->with('success', 'Oefening deleted successfully.');
        
    }
}
