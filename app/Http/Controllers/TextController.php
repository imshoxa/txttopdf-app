<?php

namespace App\Http\Controllers;
use App\Models\Text;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class TextController extends Controller
{
    public function index()
    {
        $texts = Text::all();
        return view('texts.index', compact('texts'));
    }

    public function store(Request $request)
    {
        $request->validate(['content' => 'required']);
        Text::create($request->all());
        return redirect()->route('texts.index');
    }

    public function exportPdf($id)
    {
        $text = Text::findOrFail($id);
        $pdf = Pdf::loadView('texts.pdf', compact('text'));
        return $pdf->download('text.pdf');
    }
}
