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