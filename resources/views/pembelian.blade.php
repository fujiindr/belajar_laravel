<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Tampilkan Data Pembelian</h2>

    @foreach ($query as $data)
    <p>Id Pembelian : {{ $data -> id_pembelian}}</p>
    <p>Nama Barang : {{ $data -> nama_barang}}</p>
    <p>Nama Suplier : {{ $data -> nama_suplier}}</p>
    <p>Jumlah : {{ $data -> jumlah}}</p>
    <p>Tanggal : {{ $data -> tanggal}}</p>
    <hr>
    @endforeach

</body>
</html>
