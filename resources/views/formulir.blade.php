<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel – www.malasngoding.com</title>
</head>
<body>

<form action="/formulir/proses" method="post">
    {{ csrf_field() }}
      
    Nama :
    <input type="text" name="nama"> <br/>
    Alamat :
    <input type="text" name="alamat"> <br/>
    <input type="submit" value="Simpan">
</form>

</body>
</html>
