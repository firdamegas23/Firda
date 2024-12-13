<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor_Rebate extends Model
{
    //tetapkan nama tabel sesuai database
    protected $table = 'Vendor_Rebate'; 

    protected $fillable = [
        'BL_Name', 
        'Brand', 
        'Category', 
        'Item_Code',
        'Program_Type',
        'Program_Code',
        'Program_Name',
        'Start_Date',
        'End_Date',
        'Qty',
        'Currency',
        'Incentive',
        'Notes',
        'Record_DateTime'
    ];

    public $timestamps = false; // untuk nonaktifkan waktu create dan update otomatis
}
