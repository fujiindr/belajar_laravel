<html>
<head>
    <title>array</title>
</head>
<body>
    <h2>Tampilkan Data Pembeli</h2>

    @foreach ($query as $data)
    <p>Id Pembeli : {{ $data -> id_pembeli}}</p>
    <p>Nama : {{ $data -> nama}}</p>
    <p>Jenis Kelamin : {{ $data -> jk}}</p>
    <p>Alamat : {{ $data -> alamat}}</p>
    <p>Kode Pos : {{ $data -> kode_pos}}</p>
    <p>Kota : {{ $data -> kota}}</p>
    <p>Tanggal Lahir : {{ $data -> tgl_lahir}}</p>
    <hr>
    @endforeach

</body>
</html>
