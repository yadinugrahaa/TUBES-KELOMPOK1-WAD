@extends('layouts.mainadmin')

@section('content')
@if(session()->has('loginAdmin'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('loginAdmin') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (count($orders) === 0)
<!-- ======= Counts Section ======= -->
<!-- <section id="counts" class="counts">
      <div class="container pt-5 pb-9">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Pengguna</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Pemesanan selesai</p>
            </div>
          </div>
        </div>
      </div>
</section><!-- End Counts Section -->


<section>
    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="text-center mb-3">
                    <h4 class="pb-3" id="welcome">Welcome, Admin</h4>
                    <p id="ordersaya-desc">Belum Ada Pesanan Masuk</p>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<!-- ======= Counts Section ======= -->
<!--<section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
</section><!-- End Counts Section -->
<section>
    
    <div class="container pt-5 pb-5">
        <h4 class="pb-3" id="welcome">Welcome, Admin</h4>
        <div class="row justify-content-around">
            <div class="col">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" id="table-head">Jenis Layanan</th>
                            <th scope="col" id="table-head">Nama Pelanggan</th>
                            <th scope="col" id="table-head">Tanggal Pickup</th>
                            <th scope="col" id="table-head">Status Pesanan</th>
                            <th class="text-center" scope="col" id="table-head">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $index => $order)
                        <tr>
                            <td class="pt-3 pb-3 align-middle" id="table-item">{{ $order->nama_produk }}</td>
                            <td class="align-middle" id="table-item">{{ $order->nama_pemesan }}</td>
                            <td class="align-middle" id="table-item">
                                {{ date('d-M-Y', strtotime($order->created_at)) }}
                            </td>
                            <td class="align-middle" id="table-item">{{ $order->status_cucian }}</td>
                            <td class="align-middle text-center">
                                <div class="row justify-content-center">
                                    <div class="col-10">
                                        <form action="/OrderDetail" method="get">
                                            <input type="hidden" name="id" value="{{ $order->id }}">
                                            <button type="submit" class="btn btn-warning">Edit</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endif
@endsection