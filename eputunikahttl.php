<!doctype html>
<html lang="en">
<?php
include 'config/connect.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit tanggal putu nikah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cari').select2();
        });
    </script>
</head>

<body>
    <?php

    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Edit tanggal suami/istri putu</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <select class="cari" name="id" style="width: 100%;">
                            <option value="" selected disabled></option>
                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM putu_nikah order by id");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="ttl">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    mysqli_query($connect, "UPDATE putu_nikah SET tanggallahir = '$_POST[ttl]' WHERE id = '$_POST[id]'");
                }
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.cari').select2();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>