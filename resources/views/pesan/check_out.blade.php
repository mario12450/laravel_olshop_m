@extends('layouts.app')
@section('content')
    <div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check Out</li>                        
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
               
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <h3><i class="fa fa-cart-plus">Check Out</i></h3>
                        <table class="table table-bordered table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Total Harga </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- {{$pesanan_details}} -->
                                <?php $no=1 ;?>
                                @foreach($pesanan_details as $pesanan_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td> {{ $pesanan_detail->barang->nama_barang }} </td>
                                    <td>{{ $pesanan_detail->jumlah }} Kain</td>
                                    <td align="left">Rp. {{number_format($pesanan_detail->barang->harga) }}</td>
                                    <td align="left">Rp.{{number_format($pesanan_detail->jumlah_harga) }}</td>
                                    <td>
                                        <form action="{{ url('check-out')}}/{{ $pesanan_detail->id }}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4" align="right"><strong>Total Harga :</strong> </td>
                                    <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                                    <td>
                                        <a href="{{ url('konfirmasi-check-out')}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-cart-plus"></i>    
                                        Checkout
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
@endsection
<!-- <script type="text/javascript">
    alert('test');
</script> -->

