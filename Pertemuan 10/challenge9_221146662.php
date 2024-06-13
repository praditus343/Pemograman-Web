<!DOCTYPE html>
<html>
<head>
  <title>Perhitungan Aritmatika</title>
</head>
<body>
  <h1>Perhitungan Aritmatika</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="angka1">Angka 1:</label>
    <input type="number" id="angka1" name="angka1" required><br><br>

    <label for="angka2">Angka 2:</label>
    <input type="number" id="angka2" name="angka2" required><br><br>

    <label for="operasi">Operasi:</label>
    <select id="operasi" name="operasi" required>
      <option value="">Pilih Operasi</option>
      <option value="+">Penjumlahan (+)</option>
      <option value="-">Pengurangan (-)</option>
      <option value="*">Perkalian (*)</option>
      <option value="/">Pembagian (/)</option>
    </select><br><br>

    <input type="submit" name="submit" value="Hitung">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $operasi = $_POST["operasi"];

    switch ($operasi) {
      case "+":
        $hasil = $angka1 + $angka2;
        break;
      case "-":
        $hasil = $angka1 - $angka2;
        break;
      case "*":
        $hasil = $angka1 * $angka2;
        break;
      case "/":
        $hasil = $angka1 / $angka2;
        break;
      default:
        $hasil = "Pilih operasi yang valid.";
    }

    echo "<h2>Hasil untuk $nama adalah: $hasil</h2>";
  }
  ?>
</body>
</html>