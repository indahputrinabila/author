<!DOCTYPE html>
<html>
<head>
	<title>Halaman About</title>
</head>
<body>
 @foreach($ortu as $data)<hr>
 Nama Ayah : {{$data->nama_ayah}}<br>
 Nama Ibu : {{$data->nama_ibu}}<br>
 Umur Ayah : {{$data->umur_ayah}}<br>
 Umur Ibu : {{$data->umur_ibu}}<br>

 Nama Anak :
 @foreach($data->anaks as $key)
 <li> {{$key->nama}}</li>
 @endforeach
 <hr>
 @endforeach
</body>
</html>