<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Tampilkan Data Barang</h2>

    @foreach ($barang as $data)
    <p>Id Barang : {{ $data -> id_barang}}</p>
    <p>Nama : {{ $data -> nama}}</p>
    <p>Varian : {{ $data -> varian}}</p>
    <p>Harga Beli : {{ $data -> harga_beli}}</p>
    <p>Harga Jual : {{ $data -> harga_jual}}</p>
    <hr>
    @endforeach

</body>
</html>
