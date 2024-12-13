<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Vendor_Rebate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    public function index_input()
    {
        //ambil semua data 
        $Vendor_Rebate=Vendor_Rebate::all();

        //kirim data ke view (nama file)
        return view('index_input', ['Vendor_Rebate' => $Vendor_Rebate]);
    }

    public function add_input()
    {
        // Ambil semua data dari tabel Merk melalui model Brand
        $merks = Brand::select('Merk')->distinct()->get();

        return view('add_input', compact('merks'));
        //$Category = DB::connection('sqlsrv_corps')
        //            ->table('vw_Item') // nama tabel 
        //            ->select("Gen_ Prod_ Posting Group") //nama kolom
        //            ->get();
    }
    
    // Mengambil daftar 'Nama' berdasarkan Merk yang dipilih
    public function getNama(Request $request)
    {
        $merk = $request->merk;
        $names = Brand::where('Merk', $merk)->pluck('Nama');
        
        return response()->json($names);
    }


    // Tambah data baru
    public function insert_input(Request $request)
    {
        
                    
        // Debugging, periksa semua data yang dikirim dari form
        //dd($request->all());


        $Start_Date = $request->input('Start_Date');
        $End_Date = $request->input('End_Date');

        $Vendor_Rebate = new Vendor_Rebate();
        #$Vendor_Rebate->User_Login = auth()->user()->username;
        $Vendor_Rebate->BL_Name = $request->BL_Name;
        $Vendor_Rebate->Brand = $request->Brand;
        $Vendor_Rebate->Category = $request->Category;
        $Vendor_Rebate->Item_Code = $request->Item_Code;
        $Vendor_Rebate->Program_Type = $request->Program_Type;
        $Vendor_Rebate->Program_Code = $request->Program_Code;
        $Vendor_Rebate->Program_Name = $request->Program_Name;
        $Vendor_Rebate->Start_Date = $Start_Date;
        $Vendor_Rebate->End_Date = $End_Date;
        $Vendor_Rebate->Qty = $request->Qty;
        $Vendor_Rebate->Currency = $request->Currency;
        $Vendor_Rebate->Incentive = $request->Incentive;
        $Vendor_Rebate->Notes = $request->Notes;
        $Vendor_Rebate->Record_DateTime = DB::raw("FORMAT(GETDATE(), 'yyyy-MM-dd HH:mm:ss')");
        $Vendor_Rebate->save();

        return redirect('/index_input')->with('Success', 'Data berhasil di Tambah.');
    }

    # edit data 
    public function edit_input($Program_Code)
    {
        // mengambil data berdasarkan program_code yang dipilih
	    $Vendor_Rebate = DB::table('Vendor_Rebate')->where('Program_Code',$Program_Code)->get();

	    // menampilkan data program_code yang didapat ke view edit_input.blade.php
	    return view('edit_input',['Vendor_Rebate' => $Vendor_Rebate]);
    }

    #update data 
    public function update_input(Request $request)
    {
        $Start_Date = $request->input('Start_Date');
        $End_Date = $request->input('End_Date');
        #$User_Login = auth()->user()->username;

        // update data
	    DB::table('Vendor_Rebate')->where('Program_Code',$request->Program_Code)->update([
            'BL_Name' => $request->BL_Name,
            'Brand' => $request->Brand,
            'Category' => $request->Category,
            'Item_Code' => $request->Item_Code,
            'Program_Type' => $request->Program_Type,
            'Program_Code' => $request->Program_Code,
            'Program_Name' => $request->Program_Name,
            'Start_Date' => $Start_Date,
            'End_Date' => $End_Date,
            'Qty' => $request->Qty,
            'Currency' => $request->Currency,
            'Incentive' => $request->Incentive,
            'Notes' => $request->Notes,
            'Record_DateTime' => DB::raw("FORMAT(GETDATE(), 'yyyy-MM-dd HH:mm:ss')"),
            #'User_Login' => $User_Login
	    ]);
	// alihkan halaman ke halaman currency
	return redirect('/index_input')->with('Success', 'Data Berhasil di Update.');
    }

    # untuk hapus data 
    public function delete_input($Program_Code)
    {
        //hapus data berdasarkan id yang dipilih 
        DB::table('Vendor_Rebate')->where('Program_Code',$Program_Code)->delete();

        //alihkan ke halaman index
        return redirect('index_input')->with('Success', 'Data Berhasil di Hapus.');
    }


    public function showForm()
    {
        /*
        $brand = DB::table('Corps.dbo.vw_Item')
                    ->select('`Gen_ Prod_ Posting Group`')
                    ->distinct() // hanya ambil 1 nilai (tidak double)
                    ->orderBy('`Gen_ Prod_ Posting Group`', 'asc')
                    ->get();
        
        return view('add_input', ['brand'=>$brand]);
        */
    }

    
}
