<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form from Bootsnipp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color:#C2D9FF;
        }
        form {
            width: 50%;
            margin: auto;
        }
        legend {
          font-size: 50px;
          justify-content: center;
        }
    </style>
</head>
<body>

<form class="form-horizontal" method="POST" action="p_form.php">
    <fieldset>

        <!-- Form Name -->
        <legend>Form Registration</legend>

        <!-- Text input-->
        <h5>Nama</h5>
        <input id="nama" name="nama" type="text" placeholder="Masukkan Nama" class="form-control input-md"><br>

        <!-- Text input-->
        <h5>Umur</h5>
        <input id="umur" name="umur" type="text" placeholder="Masukkan Umur" class="form-control input-md"><br>

        <!-- Multiple Radios (inline) -->
        <?php
                $gender = [
                    1 => "  Laki-laki  ",  "  Perempuan",
                ];
                ?>
                <h5>Gender : </h5>    
                <?php
                foreach ($gender as $key => $val) {
                    echo '<input type="radio" name="gender" value="'. $val . '">' . $val;
                }
                ?><br><br>
                

        <!-- Select Basic -->
        <?php
                $pendidikan = [
                    "Silahkan Pilih Pendidikan Anda" => "-",
                    "SD" => "SD",
                    "SMP" => "SMP",
                    "SMA" => "SMA",
                    "DI" => "DI",
                    "DII" => "DII",
                    "DIII" => "DIII",
                    "S1" => "S1",
                    "S2" => "S2",
                    "S3" => "S3"
                ];
                ?>
                
                <h5>Pendidikan :</h5>
                <select name="sekolah" placeholder="Pendidikan Anda">
                    <?php
                    foreach ($pendidikan as $key => $val) {
                        echo '<option value="' . $val . '">' . $key . '</option>';
                    }
                    ?>
                </select><br><br>

        <!-- Multiple Checkboxes -->
        <?php
        $hobbies = [
            "Baca Buku", "Travelling", "Olah Raga", "Nonton", "Naik Gunung", "Mancing"
        ];
        ?>
          <h5>Hobi : </h5>
                    <?php
                    foreach ($hobbies as $key => $val) {
                        echo '<input type="checkbox" name="hobi[]" value="' . $val . '">' . $val . '<br>';
                    }
                    ?><br>

        <!-- Button -->
        <button id="singlebutton" name="singlebutton" class="btn btn-success">Button</button>

    </fieldset>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
