<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Bill;
use App\BillDetail;

class BillController extends Controller
{
    public function getList()
    {
        $bill = Bill::all();
        return view("admin.bill.list",['bill'=>$bill]);
    }

    public function getEdit($id)
    {
        $bill = Bill::find($id);
        $detail = BillDetail::where('id_bill','=',$bill->id)->get();
        return view('admin.bill.edit',['bill'=>$bill,'detail'=>$detail]);
    }

    public function getDel($id)
    {
    	$hoadon = Bill::find($id);
        $sanpham = BillDetail::where('id_bill','=',$id);
        $sanpham->delete();
        $hoadon->delete();
        return redirect('admin/bill/list')->with('thongbao','Bạn đã xóa đơn hàng thành công');
    }

    public function delProduct($id_bill, $id_product)
    {
        $pro_del = BillDetail::find($id_product);
        $donhang = Bill::find($id_bill);
        $total = ($donhang->total) - ($pro_del->unit_price);
        $donhang->total = $total;
        $donhang->save();
        $pro_del->delete();
        return redirect('admin/bill/edit/'.$id_bill)->with('thongbao','Bạn đã xóa sản phẩm trong đơn hàng');
    }
}
