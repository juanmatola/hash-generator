<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Juan Manuel Tola">
    <meta name="description" content="md5 and SHA hash generator develop by athomic.com.ar">
    <title>Hash Generator | Athomic</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        body{
            background-color: rgb(199, 199, 199);
        }
        input{
            margin: 20px;
        }
        main{
            box-sizing:border-box;
            padding: 0px 200px;
        }
    </style>
</head>
<body>
    <main>
        <h1>Encryption generator</h1>
        <h4>by<a href="http://athomic.com.ar"> Athomic</a></h4>
        <form action="./" method="POST" id="form">

            <label for="toConvert">To encrypt:</label>
            <input type="text" name="toConvert">

            <label for="selectMethod">Method:  </label>
            <select name="selectMethod" form="form">
                <option value="md5">md5</option>
                <option value="SHA1">SHA1</option>
                <option value="SHA256">SHA256</option>
                <option value="SHA512">SHA512</option>
            </select>

            <input type="submit" value="Generate">
        </form>
        <?php
            if (isset($_POST['toConvert']) && isset($_POST['selectMethod'])) {
                
                $toConvert = $_POST['toConvert'];
                $method = $_POST['selectMethod'];
        
                $toShow = hash($method, $toConvert);
        
                echo "<strong>Generated hash ({$method}):</strong> <code>".$toShow.'</code>';
            }
        ?>
    </main>
</body>
</html>
