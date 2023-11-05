<?php
namespace App\Http\Controllers;
use App\Models\SanPham;
use Illuminate\Http\Request;

class APISanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function laydanhsach()
    {
        $dsSanPham=SanPham::all();
        return response()->json([
            'success'=>true,
            'data'=>$dsSanPham
        ]);
    }

    public function chitietsanpham($id)
    {
        $sanpham=SanPham::find($id);
        if(empty($sanpham)){
            return response()->json([
                'success'=>false,
                'message'=>"san pham ID ($id) khong ton tai"
            ]);
        }

        return response()->json([
            'success'=>true,
            'data'=>$sanpham
        ]);
    }
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if(empty($rq->ten)){
            return response()->json([
                'succes' => false,
                'message' => "chưa nhập tên loại"
            ]);
        }
        $Loai=loai::where('Ten',$rq->ten)->first();
        if(!empty($sanPham))
        {
            return response()->json([
            'succes'=>false,
            'message'=>"SanPham {$rq -> ten} da ton tai"
            ]);
        }
        $sanPham =new SanPham;
        $sanPham->ten=$request->ten;
        $sanPham->save;

            return response()->json([
                'succes'=>true,
                'message'=>"them moi thanh cong"
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
