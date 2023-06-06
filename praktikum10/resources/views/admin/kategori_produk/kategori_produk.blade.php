@extends('admin.layout.appadmin')
@section('content')
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <a target="_blank" href="https://datatables.net/">official DataTables</a>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($kategori_produk as $kp)
                        <tr>
                            <td>{{ $kp->id }}</td>
                            <td>{{ $kp->nama }}</td>
                        </tr>
                        @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection