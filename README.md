# Lab7web

Nama : Muhammad Azwa Dipani

NIM  : 312210417

Kelas : TI.22.A1

## DAFTAR ISI <br>
| No | Description | Link |
|-----|------|-----|
|1|Instruksi Praktikum|[Click Here](#instruksi-praktikum)|
|2|Langkah-langkah Praktikum|[Click Here](#langkah-langkah-praktikum)|
|3|Pertanyaan dan Tugas|[Click Here](#pertanyaan-dan-tugas)|


## Instruksi Praktikum
1. Persiapkan text editor misalnya VSCode.
2. Buat folder baru dengan nama lab7_php_dasar pada docroot webserver (htdocs)
3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.


## Langkah-langkah Praktikum
1. Install XAMPP Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi portable untuk memudahkan proses installasi. Kemudian extract file tersebut, seusikan direktorinya (misal: d:\xampp)

2. Memulai PHP Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

3. PHP Dasar Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat kode seperti berikut :

```
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h1>Belajar PHP Dasar</h1>
            <?php
            echo "Hello World";
            ?>
        </body>
    </html>
```

![img](pictures/Screenshot%20(189).png)


4. Variable PHP :
```
    <?php
    $nim = "0411500400";
    $nama = 'Abdullah';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
```

![img](pictures/Screenshot%20(190).png)


5. Predefine Variable $_GET :
```
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
```


![img](pictures/Screenshot%20(191).png)


6. Membuat Form :
```
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>PHP Dasar</title>
        </head>
        <body>
            <h2>Form Input</h2>
            <form method="post">
                <label>Nama: </label>
                <input type="text" name="nama">
                <input type="submit" value="Kirim">
            </form>
            <?php
            echo 'Selamat Datang ' . $_POST['nama'];
            ?>
        </body>
    </html>
```


![img](pictures/Screenshot%20(192).png)



7. Operator :
```
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
```


![img](pictures/Screenshot%20(193).png)


8. Kondisi IF :
```
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
        echo "Minggu";
    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
```


![img](pictures/Screenshot%20(194).png)



9. Kondisi Switch :
```
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
    case "Sunday":
        echo "Minggu";
        break;
    case "Monday":
        echo "Senin";
        break;
    case "Tuesday":
        echo "Selasa";
        break;
    default:
        echo "Sabtu";
    }
    ?>
```


![img](pictures/Screenshot%20(195).png)



10. Perulangan for :
```
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';
    }
    ?>
```


![img](pictures/Screenshot%20(196).png)


11. Perulangan while :
```
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    }
    ?>
```


![img](pictures/Screenshot%20(197).png)



12. Perulangan dowhile :
```
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo "Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
    ?>
```


![img](pictures/Screenshot%20(198).png)



## Pertanyaan dan Tugas 
> Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .form-container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        
        .output-label {
            text-align: center;
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Input</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Nama: <input type="text" name="nama" required><br>
            Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br>
            Pekerjaan:
            <select name="pekerjaan">
                <option value="Programmer">Programmer</option>
                <option value="Designer">Designer</option>
                <option value="Analyst">Analyst</option>
            </select><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    
    <div class="output-label">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            $tgl_lahir = new DateTime($tanggal_lahir);
            $today = new DateTime('today');
            $umur = $today->diff($tgl_lahir)->y;

            $gaji = '';
            switch ($pekerjaan) {
                case 'Programmer':
                    $gaji = 12000000;
                    break;
                case 'Designer':
                    $gaji = 8000000;
                    break;
                case 'Analyst':
                    $gaji = 9000000;
                    break;
                default:
                    $gaji = 'Tidak Tersedia';
            }

        echo "<h3>Output:</h3>";
        echo "Nama: $nama <br>";
        echo "Tanggal Lahir: $tanggal_lahir <br>";
        echo "Umur: $umur tahun <br>";
        echo "Pekerjaan: $pekerjaan <br>";
        echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.') . "<br>";
        }
        ?>
    </div>
</body>
</html>
```

https://github.com/AzwaDipani/Lab7Web/assets/115677539/eab95798-26f3-482e-8f8d-0f29a2ee1089


## Sekian, Terima Kasih 
