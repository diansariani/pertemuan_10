<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" name="txNIM" id="txNIM">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L" id="txJK">Laki-Laki
             <input type="radio" name="txJK" value="P" id="txJK">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN" id="txJURUSAN">
                <option value="MTI">MTI</option>
                <option value="KAB">KAB</option>
                <option value="DSN">Desain</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" name="txhobibola" id="txhobi" value="1">Sepak Bola
            <input type="checkbox" name="txhobibulutangkis" id="txhobi" value="2">Bulu Tangkis
            <input type="checkbox" name="txhobivoly" id="txhobi" value="3">Bola Voly
            <input type="checkbox" name="txhobirenang" id="txhobi" value="4">Renang
            <input type="checkbox" name="txhobitidur" id="txhobi" value="5">Tidur
        </div>
        <div>
            <button type="submit"> Kirim Data </button>
        </div>

    </form>

    <script type="text/javascript">
        function checkform(){
            let frm = dosument.getElementById("Latihan02").elements;
            let NIM = frm.txhobi;
            let hobi1 = frm.txhobi[0].checked
            let hobi2 = frm.txhobi[1].checked
            let hobi3 = frm.txhobi[2].checked
            let hobi4 = frm.txhobi[3].checked
            let hobi5 = frm.txhobi[4].checked

            return false;
        }
    </script>
</body>
</html>