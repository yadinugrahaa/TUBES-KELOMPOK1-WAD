<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // FOR USER
    public function index()
    {
        return view('pages.home', ['pages' => 'Home']);
    }

    public function service()
    {
        return view('pages.user.service', ['pages' => 'Service']);
    }

    public function order(Request $request)
    {
        $user = Auth::user();

        $service = $request->get('service');
        if ($service === 'Standart Clean') {
            $count = $request->get('jumlah');
            $total = $count * 30000;
        } elseif ($service === 'Deep Clean') {
            $count = $request->get('jumlah');
            $total = $count * 40000;
        } elseif ($service === 'Premium Clean') {
            $count = $request->get('jumlah');
            $total = $count * 45000;
        } elseif ($service === 'Weekend Clean') {
            $count = $request->get('jumlah');
            $total = $count * 50000;
        }
        
        return view('pages.user.order', ['data' => $user], ['price' => $total, 'pages' => 'Checkouts']);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'user_id' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'nama_pemesan' => 'required',
            'no_hp' => 'required',
            'tanggal_pickup' => 'required',
            'alamat_penjemputan' => 'required',
            'alamat_pengiriman' => 'required',
            'alamat_pengiriman' => 'required',
            'pembayaran' => 'required|in:LinkAja,OVO,Gopay,COD',
            'harga' => 'required',
            'catatan' => 'nullable'
        ]);

        Order::create($validatedData);
        return redirect('/OrderSaya')->with('success', 'Order Berhasil!');
    }

    public function orderSaya()
    {
        $user = Auth::user();
        $id = $user->id;
        $orders = DB::table('orders')->where('user_id', '=', $id)->orderBy('created_at', 'asc')->get();

        return view('pages.user.ordersaya', ['pages' => 'Order Saya'], compact('orders'));
    }

    public function invoice(Request $request)
    {
        $id = $request->get('id');
        $orders = Order::find($id);

        $product = $request->get('product');

        if ($product === 'Standart Clean') {
            $satuan = 30000;
        } elseif ($product === 'Deep Clean') {
            $satuan = 40000;
        } elseif ($product === 'Premium Clean') {
            $satuan = 45000;
        }elseif ($product === 'Weekend Clean') {
            $satuan = 50000;
        }

        return view('pages.user.invoice', ['pages' => 'Invoice', 'satuan' => $satuan], compact('orders'));
    }

    public function profile()
    {
        return view('pages.user.profile', ['pages' => 'Profile']);
    }


    public function indexAdmin()
    {
        $orders = DB::table('orders')->where('status_cucian', '!=', 'Selesai')->orderBy('created_at', 'asc')->get();

        return view('pages.admin.home', ['pages' => 'Home'], compact('orders'));
    }
    
    public function orderDetail(Request $request)
    {
        $id = $request->get('id');
        $orders = Order::find($id);

        return view('pages.admin.orderdetail', ['pages' => 'Order Detail'], compact('orders'));
    }

    public function updateOrder(Request $request, $id)
    {
        $data = Order::find($id);
        $data->status_cucian = $request->status_cucian;
        $data->save();

        return redirect('/HomeAdmin')->with('success', 'Data Order Berhasil Diupdate!');
    }

    public function selesai()
    {
        $orders = DB::table('orders')->where('status_cucian', '=', 'Selesai')->orderBy('created_at', 'asc')->get();

        return view('pages.admin.finish', ['pages' => 'Pesanan Selesai'], compact('orders'));
    }

    public function finishDetail(Request $request)
    {
        $id = $request->get('id');
        $orders = Order::find($id);

        return view('pages.admin.finishdetail', ['pages' => 'Finish Order Detail'], compact('orders'));
    }

    public function profileAdmin()
    {
        return view('pages.admin.profile', ['pages' => 'Profile']);
    }
}