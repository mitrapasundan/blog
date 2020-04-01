<h1>Data Siswa</h1>
<table>
    <thead>
        <tr>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_siswa as $data)
        <tr>
            <td>{{$data->nama_depan}}</td>
            <td>{{$data->nama_belakang}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->agama}}</td>
            <td>{{$data->alamat}}</td>
        </tr>
        @endforeach
    </tbody>
</table>