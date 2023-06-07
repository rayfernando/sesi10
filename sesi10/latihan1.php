<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name ="latihan1" method="POST"  onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" id="txNIM" name="NIM">
        </div>
        <div>
            NAMA
            <input type="text" id="txNAMA" name="NAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" id="txJKEL" name="JKEL" value="L">Laki-Laki
            <input type="radio" id="txJKEL" name="JKEL" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="JURUSAN" id="txJUR">
               <option value= "MTI">MTI</option>
               <option value= "SK">SK</option>
               <option value= "KAB">KAB</option>
               <option value= "DKV">DKV</option>
               <option value= "TIPAR">TIPAR</option>
            </select>
        </div>
        <div>
            Hobi 
            <input type="checkbox" name="hobi_1">Menghayal
            <input type="checkbox" name="hobi_2">Baca Buku
            <input type="checkbox" name="hobi_3">Futsal
            <input type="checkbox" name="hobi_4">Terbang
        </div>
        <div>
            <button type="submit"> Kirim Data </button> 
        </div>
            </form>
            <script>
                function checkform(frm){
                    let F = frm.elements;
                    let nim = F.namedItem("NIM").value;
                    let nama = F.namedItem("NAMA").value;
                    let jkel = F.namedItem("JKEL").value;
                    let jur = F.namedItem("JURUSAN").value;
                    let h1 = F.namedItem("hobi_1").checked;
                    let h2 = F.namedItem("hobi_2").checked;
                    let h3 = F.namedItem("hobi_3").checked;
                    let h4 = F.namedItem("hobi_4").checked;
        console.log("NIM: "+nim);
        console.log("NAMA: "+nama);
        console.log("JKEL: "+jkel);
        console.log("JUR: "+jur);
        console.log("Menghayal: "+h1);
        console.log("Baca Buku: "+h2);
        console.log("Futsal: "+h3);
        console.log("Terbang: "+h4);
        return false;
    }
            </script>
    </body>
</html>