<?php

namespace App\Http\Controllers\api;

use App\Models\Role;
use App\Models\Penjab;
use App\Models\Posisi;
use App\Models\Pemasukan;
use App\Models\Distributor;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ApiAdminController extends Controller
{

    public function dashboard()
    {
        
    }
}
