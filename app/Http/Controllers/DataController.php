<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Str;

class DataController extends Controller
{
    //


    public function store(Request $request){
        $request->validate([
            'imie_nazwisko' => 'required',
            'email' => 'required',
            'ulicanr' => 'required',
            'miasto' => 'required',
            'kodpocztowy' => 'required',
            'model' => 'required',
           // 'ilosc' => 'required',
           //  'wprowadzanie' => 'required',
            'suma' => 'required',
            'sposob' => 'required',
            'date' => 'required',
            'podpis' => 'required',
            
        ]);
  
        $data = [
            'imie_nazwisko' => $request->imie_nazwisko,
            'ulicanr' => $request->ulicanr,
            'miasto' => $request->miasto,
            'kodpocztowy' => $request->kodpocztowy,
            'date' => $request->date,
            'model' => $request->model,
            'suma' => $request->suma,
            'podpis' => $request->podpis,

        ];
        view()->share('pdf',$data);
        $pdf = PDF::loadView('pdf',$data);
        // Generate a unique filename for the PDF
        $uniqueFilename = 'pdf_' . Str::uuid() . time() . '.pdf';

        // Define the file path within the public/pdf folder
        $filePath = public_path('pdf/' . $uniqueFilename);

        // Ensure the directory exists before writing the file
        if (!is_dir(dirname($filePath))) {
            mkdir(dirname($filePath), 0755, true);
        }

        // Save the PDF content directly to the public folder with the unique filename
        file_put_contents($filePath, $pdf->output());
        // download PDF file with download method

        FormData::create([
            'imie_nazwisko' =>$request->imie_nazwisko,
            'email' => $request->email,
            'ulicanr' => $request->ulicanr,
            'miasto' => $request->miasto,
            'kodpocztowy' => $request->kodpocztowy,
            'date' => $request->date,
            'model' => $request->model,
            'suma' => $request->suma,
            'sposob' => $request->sposob,
            'pdf' => '/pdf/' . $uniqueFilename,
        ]);

        return response()->json(['pdf' => '/pdf/' . $uniqueFilename],200);
    }


    public function formdata(){
        $data = FormData::all();

        return view('fromdata',compact('data'));
    }


    public function createpdf(){
        // share data to view
        //return view('pdf');
        $podpis = "data:image/png;base64,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AmODrrFR18erJ1VPXVJB0QQIECBA4AwEBP8zwHMqAQKHInCT6s3V5avnVQ+v3ncod3YTAgQIECCwRwKC/x51plII7KHAmOLzxuoWc53+75ibdu1hqUoiQIAAAQJnV0DwP7u+rk6AwJkJPKP6geqiaizj+awzu5yzCRAgQIDAugKC/7p9r3IC2y5w1+rP5hSfF1X3nht2bXu7tY8AAQIECGylgOC/ld2iUQSWF7jmXLrzxtXbq1tVH1peBQABAgQIEDgDAcH/DPCcSoDAWRP4xer7q49V31k956zdyYUJECBAgMAiAoL/Ih2tTAI7JHDPauzKO47fnKv4fHKH2q+pBAgQIEBgKwUE/63sFo0isKzAFeeuvDet3lbdqfrAshoKJ0CAAAECBygg+B8gpksRIHDGAr9QPbr6YPXgarzU6yBAgAABAgQOQEDwPwBElyBA4EAExlr9F1Tj+9LYqOtBc6feA7m4ixAgQIAAgdUFBP/VR4D6CWyHwNWr11djFZ/3VLeu3rkdTdMKAgQIECCwHwKC/370oyoI7LrAsSk+n6oeZaOuXe9O7SdAgACBbRQQ/LexV7SJwFoCN6reUl1hzun/psoqPmuNAdUSIECAwCEICP6HgOwWBAhcrMD4HvTa6rbzE2MVn9fwIkCAAAECBA5eQPA/eFNXJEDg1AUeWz2t+nT15OpJp36qTxIgQIAAAQKbCAj+m2j5LAECBylwk+r86hrzKf+dq4sO8gauRYAAAQIECPy/gOBvNBAgcFQC51YvrN5fPbR6wVE1xH0JECBAgMAKAoL/Cr2sRgLbKTB26X1K9dbqvO1solYRIECAAIH9ERD896cvVUKAAAECBAgQIEDgYgUEf4ODAAECBAgQIECAwAICgv8CnaxEAgQIECBAgAABAoK/MUCAAAECBAgQIEBgAQHBf4FOViIBAgQIECBAgAABwd8YIECAAAECBAgQILCAgOC/QCcrkQABAgQIECBAgIDgbwwQIECAAAECBAgQWEBA8F+gk5VIgAABAgQIECBAQPA3BggQIECAAAECBAgsICD4L9DJSiRAgAABAgQIECAg+BsDBAgQIECAAAECBBYQEPwX6GQlEiBAgAABAgQIEBD8jQECBAgQIECAAAECCwgI/gt0shIJECBAgAABAgQICP7GAAECBAgQIECAAIEFBAT/BTpZiQQIECBAgAABAgQEf2OAAAECBAgQIECAwAICgv8CnaxEAgQIECBAgAABAoK/MUCAAAECBAgQIEBgAQHBf4FOViIBAgQIECBAgAABwd8YIECAAAECBAgQILCAgOC/QCcrkQABAgQIECBAgIDgbwwQIECAAAECBAgQWEBA8F+gk5VIgAABAgQIECBAQPA3BggQIECAAAECBAgsICD4L9DJSiRAgAABAgQIECAg+BsDBAgQIECAAAECBBYQEPwX6GQlEiBAgAABAgQIEBD8jQECBAgQIECAAAECCwgI/gt0shIJECBAgAABAgQICP7GAAECBAgQIECAAIEFBAT/BTpZiQQIECBAgAABAgQEf2OAAAECBAgQIECAwAICgv8CnaxEAgQIECBAgAABAv8HAHKSppd/etQAAAAASUVORK5CYII=";
        $data = [
            'imie_nazwisko' => 'hamza',
            'ulicanr' =>"abdelali",
            'miasto' => "teto uck",
            'kodpocztowy' => "dude",
            'date' => "2023-5-4",
            'model' => "gpt-4",
            'suma' => "50",
            'podpis' => $podpis,

        ];
        view()->share('pdf',$data);
        $pdf = PDF::loadView('pdf',$data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }



    
}
