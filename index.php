<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid" >
        <h1 class="text-center">- FORM BIODATA -</h1>
        <hr>
       <div class="container" style="margin: 2rem auto;">
        <form action="prosesdata.php" method="post">
        <div class="row" style="justify-content:center;">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nama</label>
                     <input type="text" name="nama" class="form-control" placeholder="Masukan data...">
                     <label>Nama Depan</label>
                     <input type="text" name="nd" class="form-control" placeholder="Masukan data...">
                     <label>Nama Belakang</label>
                     <input type="text" name="nb" class="form-control" placeholder="Masukan data...">
                 </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" placeholder="Pilih" class="form-control">
                        <option>Pilih</option>
                        <option value="Perempuan">Perempuan</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Walmart-bag">Walmart-bag</option>
                    </select>
                    <label>Tanggal Lahir</label></br>
                    <input type="date" style=" height:35px; border-radius:5px;" name="tl" class="form-control">
                    <label>Hobby</label>
                    <input type="text" name="hobby" class="form-control" placeholder="Masukan data...">
                 </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Cita-cita</label>
                    <input type="text" name="cita-cita" class="form-control" placeholder="Masukan data...">
                    <label>Alamat</label>
                    <textarea name="alamat" cols="30" rows="3" class="form-control" placeholder="Masukan data..."></textarea>
                 </div>
            </div>
            <div class="d-grid gap-" style="margin-top: 20px">
                <button class="btn btn-primary" name="submit" type="submit" style="width:30rem; margin:0px auto;">simpan data</button>
            </div>
        </div>
        </form>
        </div>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>