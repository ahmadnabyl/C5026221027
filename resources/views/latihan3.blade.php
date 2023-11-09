<html>
    <head>
<title>LatihanCSS</title>
<link rel="stylesheet" href="mystyle.css">
<style>
    body{
        font-family:sans-serif;
        color:aliceblue;
        text-shadow: 2px 2px 5px rgb(0, 0, 0);
    }
    p {
        text-align: center;
    }
    .salam {
        font-size: larger ;
        text-align:center;
        font-weight: bold;
        text-transform: uppercase;
    }

    .garisbawah {
        text-decoration: underline;
        color:black
    }
</style>
    </head>

    <body>
        <!-- InLine CSS, digunakan jika hanya 1 bagian di 1 halaman yang berbeda -->
        Hallo <b style="color:blueviolet;
        text-decoration: underline;
        text-shadow: 2px 2px 5px rgb(0, 0, 0);
        ">Apa</b> kabar?
        <!-- Inpage CSS, digunakan jika yg berbeda hanya di 1 halaman -->
        <div class="garisbawah salam">Hallo apa kabar?</div>
        <!-- External File, digunakan untuk global 1 situs -->
        <span>Hallo apa kabar?</span>
        <p>ini foto Nabil dan Olid</p>
        <p><img src="olid.jpg" alt="Gambar_Olid" width="600px" title="Ini adalah foto nabil dan olid"></p>

    </body>

</html>
