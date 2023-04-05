<!doctype html>
<html lang="en">
<?php
include 'config/connect.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit tanggal putu</title>
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
                <h4>Edit sejarah</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php
                $sql = mysqli_query($connect, "SELECT * FROM sejarah ORDER BY paragraf");
                while ($data = mysqli_fetch_array($sql)) {
                ?>
                    <div class="row">
                        <div class="col-12">
                            <h5>Paragraf : <?= $data['paragraf'] ?></h5>
                            <p><?= $data['cerita'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <select class="cari" name="paragraf" style="width: 100%;">
                            <option value="" selected disabled></option>
                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM sejarah order by paragraf");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['paragraf'] ?>">Paragraf <?= $data['paragraf'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Cerita</label>
                        <textarea class="form-control" rows="3" name="cerita"></textarea>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" name="submit">Edit</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    mysqli_query($connect, "UPDATE sejarah SET cerita = '$_POST[cerita]' WHERE paragraf = '$_POST[paragraf]'");
                }
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Paragraf</label>
                        <input required type="text" class="form-control" name="paragrafadd">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Cerita</label>
                        <textarea required class="form-control" rows="3" name="ceritaadd"></textarea>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-success" type="submit" name="add">Add</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['add'])) {
                    mysqli_query($connect, "INSERT INTO sejarah SET cerita = '$_POST[ceritaadd]', paragraf = '$_POST[paragrafadd]'");
                }
                ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <h4>Hapus Sejarah</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post">
                    <div class="mb-3">
                        <select class="cari" name="paragrafdel" style="width: 100%;">
                            <option value="" selected disabled></option>
                            <?php
                            $sql = mysqli_query($connect, "SELECT * FROM sejarah order by paragraf");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?= $data['paragraf'] ?>">Paragraf <?= $data['paragraf'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Yakin</label>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger" type="submit" name="hapus">Hapus</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['hapus'])) {
                    mysqli_query($connect, "DELETE FROM sejarah WHERE paragraf = '$_POST[paragrafdel]'");
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