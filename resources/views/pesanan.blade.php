<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Tampilkan Data Pesanan</h2>

    @foreach ($query as $data)
    <p>Id Pesanan : {{ $data -> id_pesanan}}</p>
    <p>Nama Pelanggan : {{ $data -> nama_pelanggan}}</p>
    <p>Nama Barang : {{ $data -> nama_barang}}</p>
    <p>Jumlah : {{ $data -> jumlah}}</p>
    <p>Tanggal Pesan : {{ $data -> tgl_pesan}}</p>
    <hr>
    @endforeach

</body>
</html>
