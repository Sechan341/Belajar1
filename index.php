<!DOCTYPE html>
    <head>
        <title>Belajar1</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="text1">
            <input type="text" name="text2">
            <input type="submit" name="hitung" value="hitung">
            <input type="submit" name="logout" value="logout">
            <?php
            if(isset($_POST['hitung'])){
            $angka1 = $_POST['text1'];
            $angka2 = $_POST['text2'];
            $hasil = $angka1 + $angka2;
            echo $hasil;
            }
            if (isset($_POST['logout'])) {
                session_unset();
                session_destroy();
                echo"<script>document.location.href='Login.php'</script>";
            }
            ?>
        </form>
    </body>
</html>