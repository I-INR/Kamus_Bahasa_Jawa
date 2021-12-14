<!doctype html>
<Html lang="en">
    <head>
        <title>Kamus Bahasa Jawa</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <h1>Kamus Bahasa Jawa</h1>
        <table style="border: none; background-color: inherit;">
            <tr style="border: none; background-color: inherit;">
                <td style="border: none; background-color: inherit;">
                    <form action = 'search.php' method='post'>
                        <h3 >Cari Kata</h3>
                        <input type='text' name ='cari'>
                        <input type='submit' name='search' value='cari'>
                    </form>
                </td>
                <td style="border: none; background-color: inherit;"></td>
                <td style="border: none; background-color: inherit;"><button><a href='index.php'> Tampilkan Semua</a></button></td>
            </tr>
        </table><br>

        <?php
            include './koneksi.php';

            $cari = $_POST['cari'];

            $sql = "SELECT * from data_kamus_sheet1
            WHERE bahasa_indonesia LIKE '%$cari%' or bahasa_jawa_ngoko LIKE '%$cari%' or bahasa_krama_inggil LIKE '%$cari%'";
            $result = $conn->query($sql);
            
                echo "<table>
                <tr >
                    <th  >Indonesia</th>
                    <th  >Ngoko</th>
                    <th  >Krama Inggil</th>
                </tr>";
                while($baris = mysqli_fetch_array($result)){
                    echo"
                <tr >
                    <td >$baris[1]</td>
                    <td >$baris[2]</td>
                    <td >$baris[3]</td>
                </tr>";}


            $conn->close();
        ?>

    </body>
</Html>