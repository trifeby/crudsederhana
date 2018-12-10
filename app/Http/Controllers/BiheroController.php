<?php

namespace App\Http\Controllers;

use \App\Bihero;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiheroController extends Controller
{
    public function index()
    {
    	$data['bihero'] = \App\Bihero::All();
    	return view('bihero.index', $data);
    }

     public function review($id)
    {
        $data['bihero'] = Bihero::where('_id', '=', $id)->get();
        return view('bihero.review', $data);
    }

    public function create()
    {
    	$data['bihero'] = \App\Bihero::All();
    	return view('bihero.create');
    }

     public function table()
    {
        $data['bihero'] = \App\Bihero::All();
        return view('bihero.table')->with($data);
    }

    public function save(Request $r)
    {
        $file = $r->file('image');
        $gambar = $file->getClientOriginalName();
        $r->file('image')->move(public_path('upload'), $gambar);
        $bihero = new Bihero;
        $bihero->image = $gambar;
    	$bihero->nama = $r->input('nama');
    	$bihero->asal = $r->input('asal');
    	$bihero->lahirwafat = $r->input('lahirwafat');
    	$bihero->penetapan = $r->input('penetapan');
    	$bihero->ringkasan = $r->input('ringkasan');
    	$bihero->penjelasan = $r->input('penjelasan');

    	$bihero->save();

    	return redirect(url('bihero'));
    }

    public function edit($id)
    {
        $data['bihero'] = \App\Bihero::find($id);
        return view('bihero.edit')->with($data);
    }

    public function update(Request $r)
    {
        $edit = Bihero::find($r->input('id'));

        $edit->nama = $r->input('nama');
        $edit->asal = $r->input('asal');
        $edit->lahirwafat = $r->input('lahirwafat');
        $edit->penetapan = $r->input('penetapan');
        $edit->ringkasan = $r->input('ringkasan');
        $edit->penjelasan = $r->input('penjelasan');

        $edit->save();

        return redirect(url('bihero'));
    }

    public function delete(Request $r)
    {
        $delete = Bihero::where('_id', $r->iditem)->delete();
        
        return redirect(url('bihero'));
    }

        public function readpdf()
    {

        $bihero['bihero'] = \App\Bihero::All();
        $pdf = PDF::loadview('bihero.report',$bihero);
        return $pdf->stream();
    }

}
