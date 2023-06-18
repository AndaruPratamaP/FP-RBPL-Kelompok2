<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;


class SnmergeController extends Controller
{
    public function index()
    {
        return view('snmerge');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'filenames' => 'required',
        //     'filenames.*' => 'mimes:pdf'
        // ]);

        if ($request->hasFile('filenames')) {
            $pdf = PDFMerger::init();

            foreach ($request->file('filenames') as $key => $value) {
                $pdf->addPDF($value->getPathName(), 'all');
            }
            // Ganti time() kalo kalian mau custom nama filenya
            $fileName = time() . '.pdf';
            $pdf->merge();
            $pdf->save(public_path($fileName));
        }

        return response()->download(public_path($fileName));
    }
}
