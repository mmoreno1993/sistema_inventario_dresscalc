<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Models\User;
use App\Http\Models\TypeClothe;
use App\Http\Models\Stock;
use App\Http\Models\Clothe;
use Illuminate\Http\Request;
class MainController extends Controller
{
    function index()
    {
        return view('main');
    }
    function balance()
    {
        return view('balance', ['type_clothe' => TypeClothe::where('enabled', 1)->get()]);
    }
    function save(Request $request)
    {
        if($request['txtPrecio'] == '')
        {
            echo json_encode(['error' => true, 'message' => 'Debe llenar los datos para realizar esta operación']);
            return;
        }
        $categoria = $request['cbCategoria'];
        $check = TypeClothe::where('id', $categoria)
            ->where('enabled', 1)->first();
        if($check == null)
        {
            echo json_encode(['error' => true, 'message' => 'No existe la categoría solicitada']);
            return;
        }
        $clothe = Clothe::create([
            'type_clothe_id' => $categoria,
            'description' => $request['txtPrenda'],
            'cliente' => $request['txtCliente'],
            'proveedor' => $request['txtProveedor'],
            'created_at' => date('Y-m-d H:i:s'),
            'enabled' => 1,
        ]);
        Stock::create([
            'clothes_id' => $clothe['id'],
            'user_id' => $request->session()->get('user_token'),
            'entry' => $request['entry'],
            'value' => $request['txtPrecio'],
            'created_at' => date('Y-m-d H:i:s'),
            'enabled' => 1,
        ]);
        echo json_encode(['error' => false, 'message' => 'Se guardo los datos correctamente']);
    }
    function earn()
    {
        return view('earn');
    }
    function calc()
    {
        return view('calc');
    }
    function inventory(Request $request)
    {
        $stock = Stock::where('user_id', $request->session()->get('user_token'))
            ->join('clothes', function ($join) {
                $join->on('stock.clothes_id', '=', 'clothes.id');
            })
            ->join('types_clothes', function ($join) {
                $join->on('types_clothes.id', '=', 'clothes.type_clothe_id');
            })
            ->select('types_clothes.id', 'types_clothes.description', DB::raw("SUM(CASE WHEN stock.entry = 1 THEN stock.value ELSE stock.value * -1 END) as value"))
            ->groupBy('types_clothes.id', 'types_clothes.description')
            ->get();
        return view('inventory', ['stock' => $stock]);
    }
    function contact()
    {
        return view('contact');
    }
    function ventas(Request $request)
    {
        $stock = Stock::where('user_id', $request->session()->get('user_token'))
            ->join('clothes', function ($join) {
                $join->on('stock.clothes_id', '=', 'clothes.id');
            })
            ->join('types_clothes', function ($join) {
                $join->on('types_clothes.id', '=', 'clothes.type_clothe_id');
            })
            ->select('clothes.id', 'types_clothes.description as tipo', 'clothes.description as prenda', 'stock.value', 'clothes.cliente', 'stock.created_at')
            ->where('stock.entry', 0)
            ->get();
        return view('ventas', ['ventas' => $stock]);
    }
    function gastos(Request $request)
    {
        $stock = Stock::where('user_id', $request->session()->get('user_token'))
            ->join('clothes', function ($join) {
                $join->on('stock.clothes_id', '=', 'clothes.id');
            })
            ->join('types_clothes', function ($join) {
                $join->on('types_clothes.id', '=', 'clothes.type_clothe_id');
            })
            ->select('clothes.id', 'types_clothes.description as tipo', 'clothes.description as prenda', 'stock.value', 'clothes.proveedor', 'stock.created_at')
            ->where('stock.entry', 1)
            ->get();
        return view('gastos', ['gastos' => $stock]);
    }
}
