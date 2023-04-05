<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Putra H.Shomad/Hj.Marsinah</h5>

            </div>
            <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
                <?php
                $no = 0;
                $sql = mysqli_query($connect, "SELECT * FROM putra ORDER BY id");
                while ($data = mysqli_fetch_array($sql)) {
                    $no++;
                    // data putra
                    $id = $data['id'];
                    $putra = $data['nama'];
                    $ttl = $data['tanggallahir'];

                    // get umur putra
                    $originalTime = new DateTimeImmutable($now);
                    $targedTime = new DateTimeImmutable($ttl);
                    $interval = $originalTime->diff($targedTime);
                    $yearputra = $interval->format("%y");
                    $monthputra = $interval->format("%m");
                    $dayputra = $interval->format("%d");

                    // data bojo
                    $sql1 = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = '$id'");
                    $data1 = mysqli_fetch_array($sql1);
                    $bojo = $data1['nama'];
                    $ttlbojo = $data1['tanggallahir'];
                    $kodepernikahan = $data1['kodepernikahan'];

                    // get umur putra
                    $originalTime = new DateTimeImmutable($now);
                    $targedTime = new DateTimeImmutable($ttlbojo);
                    $interval = $originalTime->diff($targedTime);
                    $yearbojo = $interval->format("%y");
                    $monthbojo = $interval->format("%m");
                    $daybojo = $interval->format("%d");

                    // get anak
                    $ca = 0;
                    $anak = array();
                    $sql2 = mysqli_query($connect, "SELECT * FROM putu WHERE kodepernikahan = '$kodepernikahan'");
                    while ($data2 = mysqli_fetch_array($sql2)) {
                        $anak[$ca] = $data2['nama'];
                        $ca++;
                    }
                    $jumlahanak = count($anak);
                ?>
                    <!-- item-item -->
                    <div class="accordion-item card <?php if ($no == 1) {
                                                        echo "active";
                                                    } ?>">
                        <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#<?= $id ?>" aria-controls="<?= $id ?>">
                                Putra <?= $no ?> - <?= $putra ?>
                            </button>
                        </h2>

                        <div id="<?= $id ?>" class="accordion-collapse collapse <?php if ($no == 1) {
                                                                                    echo "show";
                                                                                } ?>" data-bs-parent="#accordionIcon">
                            <div class="accordion-body">
                                <?= $putra ?> menikah dengan <?= $bojo ?> dan dikaruniai <?= $jumlahanak ?> anak: <br>
                                <ol>
                                    <?php
                                    for ($a = 0; $a < $jumlahanak; $a++) {
                                    ?>
                                        <li><?= $anak[$a] ?></li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                                <?= $putra ?> sekarang memasuki usia <br> <?= $yearputra ?> tahun <?= $monthputra ?> bulan <?= $dayputra ?> hari
                                <br>
                                <?= $bojo ?> sekarang memasuki usia <br> <?= $yearbojo ?> tahun <?= $monthbojo ?> bulan <?= $daybojo ?> hari
                            </div>
                        </div>
                    </div>
                    <!-- item-item -->
                <?php
                }
                ?>

            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
</div>