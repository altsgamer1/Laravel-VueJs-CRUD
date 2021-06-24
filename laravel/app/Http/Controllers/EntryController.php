<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Entry;

class EntryController extends Controller
{
    public function index()
    {
        $entries = Entry::all()->toArray();
        return array_reverse($entries);      
    }

    public function store(Request $request)
    {
        $entry = new Entry([
            'title' => $request->input('title'),
            'text' => $request->input('text')
        ]);
        $entry->save();

        return response()->json('Entry created!');
    }

    public function show($id)
    {
        $entry = Entry::find($id);
        return response()->json($entry);
    }

    public function update($id, Request $request)
    {
        $entry = Entry::find($id);
        $entry->update($request->all());

        return response()->json('Entry updated!');
    }

    public function destroy($id)
    {
        $entry = Entry::find($id);
        $entry->delete();

        return response()->json('Entry deleted!');
    }
}