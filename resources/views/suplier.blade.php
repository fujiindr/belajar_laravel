<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Tampilkan Data Suplier</h2>

    @foreach ($query as $data)
    <p>Id Suplier : {{ $data -> id_suplier}}</p>
    <p>Nama : {{ $data -> nama}}</p>
    <p>Alamat : {{ $data -> alamat}}</p>
    <p>Kode Pos : {{ $data -> kode_pos}}</p>
    <p>Kota : {{ $data -> kota}}</p>
    <hr>
    @endforeach

</body>
</html>
