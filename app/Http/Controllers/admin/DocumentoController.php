<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');

    }

    public function index()
    {
        //dd('sss');
        $userId = Auth::id();
        $documentos = Documento::whereUserId($userId)->orderBy('id', 'desc')->get();
        return view('frontend.documentos.list', compact('documentos'));
    }


    public function create(Request $request)
    {
        $userId = Auth::id();

        $entidad = User::getEntidadUser($userId);
        return view('frontend.documentos.create', compact('entidad'));
    }


    public function show(Documento $documento)
    {

        //return view('frontend.documentos.show', compact('entidad'));
    }
}
