<table class="table table-borderd">
    <tr>
        <th id="">Nama</th>
        <td>{{ $item->name }}</td>
    </tr>

    <tr>
        <th id="">Email</th>
        <td>{{ $item->email }}</td>
    </tr>

    <tr>
        <th id="">Nomor</th>
        <td>{{ $item->number }}</td>
    </tr>

    <tr>
        <th id="">Alamat</th>
        <td>{{ $item->address }}</td>
    </tr>

    <tr>
        <th id="">Total Transaksi</th>
        <td>{{ $item->transaction_total }}</td>
    </tr>

    <tr>
        <th id="">Status Transaksi</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>

    <tr>
        <th id=""> Pembelin Produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th id="">Nama</th>
                    <th id="">Tipe</th>
                    <th id="">Harga</th>
                </tr>
                {{-- @foreach ($item->details as $id)
                    <tr>
                        <td id="">{{ $id->product->name }}</td>
                        <td id="">{{ $id->product->type }}</td>
                        <td id="">{{ $id->product->price }}</td>
                    </tr>
                @endforeach --}}
            </table>
        </td>
    </tr>
</table>

{{-- <div class="row">
    <div class="col-4">
        <a href="{{ route('transaction-status',$item->id) }}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check">Set Sukses</i>
        </a>
    </div>

    <div class="col-4">
        <a href="{{ route('transaction-status',$item->id) }}?status=FAILED" class="btn btn-warning btn-block">
            <i class="fa fa-times">Set Gagal</i>
        </a>
    </div>

    <div class="col-4">
        <a href="{{ route('transaction-status',$item->id) }}?status=PENDING" class="btn btn-info btn-block">
            <i class="fa fa-spinner">Set Pending</i>
        </a>
    </div>
</div> --}}