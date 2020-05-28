<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPdf;
use App\Pdf;



class PdfController extends Controller
{
    public function index () {

       $pdfs = Pdf::paginate(20);

        return view('index', compact('pdfs'));

    }

    public function store (RequestPdf $request, Pdf $pdf) {

        $fileName = time().'.'.$request->file->extension();
        $fileImage = time();

        $pdf->create([
            'pdf_file' => $fileName,
            'pdf_image' => $fileImage
        ])->save();

        $path = $request->file->move(public_path('storage/documents'), $fileName);

        $image = new \Spatie\PdfToImage\Pdf($path);
        $image->saveImage(public_path('storage/images/'.time()));


        return redirect(route('pdf.index'))->with('success', 'PDF file uploaded!');

    }


}
