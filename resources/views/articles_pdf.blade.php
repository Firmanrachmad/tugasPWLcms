<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
        font-size: 9pt;
    }
    </style>
<center>
    <h5>Laporan Artikel</h4>
</center>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
        </tr>
    </thead>
<tbody>
    @php $i=1 @endphp
    @foreach($article as $a)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{$a->title}}</td>
        <td>{{$a->content}}</td>
        <td><img class="card-img-top" width="150px" src="{{ public_path('storage/'.$a->featured_image) }}" alt="Card image cap"></td>
    </tr>
    @endforeach
</tbody>
</table>
</body>
</html>