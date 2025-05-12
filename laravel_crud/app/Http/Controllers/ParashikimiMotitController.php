<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\ParashikimiMotit;

class ParashikimiMotitController
 extends Controller
{
   public function index()
    {
        $parashikimetemotit = ParashikimiMotit::all();
        return view ('parashikimetemotit.index')->with('parashikimetemotit', $parashikimetemotit);
    }


    public function create()
    {
        return view('parashikimetemotit.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        ParashikimiMotit::create($input);
        return redirect('parashikimiMotit')->with('flash_message', 'Te dhenat e parashikimit te motit u shtuan!');
    }


    public function show($id)
    {
        $parashikimiMotit = ParashikimiMotit::find($id);
        return view('parashikimetemotit.show')->with('parashikimetemotit', $parashikimiMotit);
    }


    public function edit($id)
    {
        $parashikimiMotit = ParashikimiMotit::find($id);
        return view('parashikimetemotit.edit')->with('parashikimetemotit', $parashikimiMotit);
    }


    public function update(Request $request, $id)
    {
        $parashikimiMotit = ParashikimiMotit::find($id);
        $input = $request->all();
        $parashikimiMotit->update($input);
        return redirect('parashikimiMotit')->with('flash_message', 'Te dhenat e parashikimit te motit u modifikuan!');
    }


    public function destroy($id)
    {
        ParashikimiMotit::destroy($id);
        return redirect('parashikimiMotit')->with('flash_message', 'Te dhenat e parashikimit te motit u fshine!');
    }
}
