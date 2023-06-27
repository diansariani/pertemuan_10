<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 01</title>
    <script>
        function hitungLuas() {
            var panjang = parseFloat(document.getElementById("panjang").value);
            var lebar = parseFloat(document.getElementById("lebar").value);
            var tinggi = parseFloat(document.getElementById("tinggi").value);

            var luasPermukaan = 2 * ((panjang * lebar) + (panjang * tinggi) + (lebar * tinggi));

            document.getElementById("hasil").innerHTML = "Luas permukaan balok adalah: " + luasPermukaan;
        }
    </script>
</head>
<body>
    <h3>Hitung Luas Bangun Ruang</h3>
    <div>Luas Permukaan Balok</div>
    <form>
        <label for="panjang">Panjang:</label>
        <input type="number" id="panjang"><br><br>
        
        <label for="lebar">Lebar:</label>
        <input type="number" id="lebar"><br><br>
        
        <label for="tinggi">Tinggi:</label>
        <input type="number" id="tinggi"><br><br>
        
        <button type="button" onclick="hitungLuas()">Hitung</button>
    </form>

    <div id="hasil"></div>
</body>
</html>
