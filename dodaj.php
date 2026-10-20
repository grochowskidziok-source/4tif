<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: black;
    }
    a{
      color: rgb(47, 40, 31);  
      outline: none;
      text-decoration: none;
    }
    #glowa{
        width: 25%;
        height: 35px;
        font-weight: 600;
        text-align: center;
        color: rgb(47, 40, 31);
        background-color: tan;
        float: left;
        font-size: 22.5px;
    }
    #wazny{
        width: 100%;
        height: 1050px;
        text-align: center;
        color: white;
    }
    #wazny1{
        width: 100%;
        height: 50px;
        text-align: center;
        color: tan;
    }
</style>
<body>
    <div id="glowa"><a href="index.html">POWRÓT DO STRONY</a></div>
    <div id="glowa">
        Wybierz Zdjęcia/Filmiki ->
    </div>
    <div id="glowa">
        <form id="formularz">
        <select name="os">
            <option value="1">Sygnar</option>
            <option value="2">Młoda Maciora</option>
            <option value="3">Kluseczka</option>
            <option value="4">Banek</option>
            <option value="5">Krzystof</option>
            <option value="6">Noga</option>
            <option value="7">Maciora</option>
            <option value="8">Szymelek</option>
            <option value="9">Adaś</option>
        </select>
    <input type="submit" value="POKAŻ"></form>
    </div>
    <div id="glowa"></div>
    <div id="wazny">
    <script>
        document.getElementById('formularz').addEventListener('submit', function(e) {
            e.preventDefault();
            
            var osoba = document.getElementById('os').value;
            
            if (osoba == "1") {
                document.write("1. <img src='syg.png'>");
            } else if (osoba == "2") {
                document.write("2. <img src='dawid.jpg'>");
            }
        });
    </script>

    </div>
    <div id="wazny1">
        <form method="POST">
            

        </form>
    </div>
</body>
</html>
