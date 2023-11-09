<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showalert(){
            alert("Selamat ! Anda mendapatkan motor yamaha R1 !");
        }
        function changeText() {
        //var tulisanllama = document.getElementById("");
        var span = document.getElementById("output");
        var textBox = document.getElementById("textbox");
        textbox.style.color = "red";
        //span.innerHTML = textBox.value ;
        console.log("Horee sudah disini");
        console.log("isinya text box adalah " + textBox.value);

        }
        </script>
        <script src="operasi.js"></script>

</head>
<body>
<div class="container">
    <center><button class="btn btn-primary" onclick="showalert();">Klik disini !</button></center>
    <br>
    <button onclick="changeText();" class="btn btn-success">Click me!</button>
    <span id="output">replace me</span>
    <input id="textbox" type="text" class="form-control"/>
    <br>
    <div class="form-group">
        <label for="bil1">Bilangan 1</label>
        <input type="number" id="bil1" placeholder="Masukkan Bilangan pertama" class="form-control">
    </div>
    <div class="form-group">
        <label for="bil2">Bilangan 2</label>
        <input type="number" id="bil2" placeholder="Masukkan Bilangan kedua" class="form-control">
        </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary" onclick="tambah();">Tambah</button>
        <button type="button" class="btn btn-primary" onclick="kali();">Perkalian</button>
    </div>
    <h3>Hasil Operasi : <div id="hasil"></div></h3>
    </body>
</html>
