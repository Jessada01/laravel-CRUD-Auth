<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\models\OrderDetail;
use Pdf;

class PDFController extends Controller
{
    public function pdfde(Request $request)
    {
        $order_details = OrderDetail::latest()->paginate(15);
        if($request->has('download'))
        {
            $pdf = Pdf::loadView('report_detail',compact('order_details'))->setOptions(['defaultFont'=>'san-serif']);
           //$pdf = Pdf::loadView('pdfdetail',compact('orderde'))->setOptions(['defaultFont'=>'san-serif']);
            return $pdf->download('reciept.pdf');
        }
        return view('report_detail',compact('order_details'));
    }
}
