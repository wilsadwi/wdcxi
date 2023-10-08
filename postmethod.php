<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nilai</label>
            <input type="number" name="nilai">
            <button type="submit" name="simpan">Submit</button>


        <?php
        // $_GET = mengambil jika form berisi method get
        // $_POST = mengambil jika form berisi method post
            if (isset($_POST['simpan'])) {
                $nilai = $_POST['nilai'];
                if ($nilai >= 90) {
                    echo "Grade A";
                }elseif($nilai >= 80) {
                    echo "Grade B";
                }elseif($nilai >= 70) {
                    echo "Grade C";
                }else{
                    echo "Grade E";
                }
            }
        ?>
    </form>
</body>
</html>