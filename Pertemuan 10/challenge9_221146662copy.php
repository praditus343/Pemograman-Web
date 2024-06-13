<!DOCTYPE html>
<html>
<head>
  <title>Perhitungan Aritmatika</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }
    form {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 5px;
      width: 400px;
      margin: 0 auto;
    }
    input, select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    button:hover {
      background-color: #45a049;
    }
    #hasil {
      font-weight: bold;
      font-size: 18px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <h1>Perhitungan Aritmatika</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="nama">Masukkan nama anda:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="angka_pertama">Masukkan angka pertama (1-10):</label>
    <input type="number" id="angka_pertama" name="angka_pertama" min="1" max="10" required>

    <label for="angka_kedua">Masukkan angka kedua (1-10):</label>
    <input type="number" id="angka_kedua" name="angka_kedua" min="1" max="10" required>

    <button type="submit" name="submit">Hitung</button>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $angka_pertama = $_POST["angka_pertama"];
    $angka_kedua = $_POST["angka_kedua"];
  
    $penjumlahan = $angka_pertama + $angka_kedua;
    $pengurangan = $angka_pertama - $angka_kedua;
    $perkalian = $angka_pertama * $angka_kedua;
    $pembagian = $angka_pertama / $angka_kedua;
  
    echo "<div id='hasil'>Hasil untuk $nama adalah:</div>";
    echo "<div id='hasil'>$angka_pertama + $angka_kedua = $penjumlahan</div>";
    echo "<div id='hasil'>$angka_pertama - $angka_kedua = $pengurangan</div>";
    echo "<div id='hasil'>$angka_pertama * $angka_kedua = $perkalian</div>";
    echo "<div id='hasil'>$angka_pertama / $angka_kedua = $pembagian</div>";
    }
    ?>
  </form>
</body>
</html>