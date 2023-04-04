<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Putra H.Shomad/Hj.Marsinah</h5>

            </div>
            <div id="accordionIcon" class="accordion mt-3 accordion-without-arrow">
                <!-- item1 -->
                <div class="accordion-item card active">
                    <h2 class="accordion-header text-body d-flex justify-content-between" id="accordionIconOne">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak1" aria-controls="anak1">
                            Putra 1 - Moh. Arif
                        </button>
                    </h2>

                    <div id="anak1" class="accordion-collapse collapse show" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Moh. Arif menikah dengan Khodriyah dan dikaruniai 3 anak: <br>
                            <ol>
                                <li>Atok</li>
                                <li>Nilam</li>
                                <li>Inun</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra1'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra1'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>
                        </div>
                    </div>
                </div>

                <!-- item2 -->
                <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak2" aria-controls="anak2">
                            Putra 2 - Zamzuri
                        </button>
                    </h2>
                    <div id="anak2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Zamzuri menikah dengan Mutik dan dikaruniai 3 anak: <br>
                            <ol>
                                <li>Wildan</li>
                                <li>Vina</li>
                                <li>Oni</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra2'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra2'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>
                            <br>
                            Zamzuri wafat pada tanggal 00-00-0000 dan dimakamkan di daerah Waung.
                        </div>
                    </div>
                </div>

                <!-- item3 -->
                <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak3" aria-controls="anak3">
                            Putra 3 - Umi Hanik
                        </button>
                    </h2>
                    <div id="anak3" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Umi Hanik menikah dengan Munir dan dkaruniai 2 anak: <br>
                            <ol>
                                <li>Miftah</li>
                                <li>Ulfa</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra3'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra3'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>

                        </div>
                    </div>
                </div>

                <!-- item4 -->
                <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak4" aria-controls="anak4">
                            Putra 4 - Sholikah
                        </button>
                    </h2>
                    <div id="anak4" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Sholikah menikah dengan Sofwan dan dkaruniai 3 anak: <br>
                            <ol>
                                <li>Sulton</li>
                                <li>Wahib</li>
                                <li>Ela</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra4'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra4'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>

                        </div>
                    </div>
                </div>

                <!-- item5 -->
                <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak5" aria-controls="anak5">
                            Putra 5 - Tamyiz
                        </button>
                    </h2>
                    <div id="anak5" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Tamyiz menikah dengan Rohmah dan dkaruniai 2 anak: <br>
                            <ol>
                                <li>Fadil</li>
                                <li>Dila</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra5'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra5'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>
                            <br>
                            Tamyiz wafat pada tanggal 00-00-0000 dan dimakamkan di Pengkol.
                        </div>
                    </div>
                </div>

                <!-- item6 -->
                <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak6" aria-controls="anak6">
                            Putra 6 - Maskub
                        </button>
                    </h2>
                    <div id="anak6" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Maskub menikah dengan Latifah dan dkaruniai 3 anak: <br>
                            <ol>
                                <li>Albab</li>
                                <li>Hisan</li>
                                <li>Nilna</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra6'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra6'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>

                        </div>
                    </div>
                </div>

                <!-- item7 -->
                <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak7" aria-controls="anak7">
                            Putra 7 - Indasah
                        </button>
                    </h2>
                    <div id="anak7" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Indasah menikah dengan Mutamim dan dkaruniai 2 anak: <br>
                            <ol>
                                <li>Luluk</li>
                                <li>Kikik</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra7'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra7'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>

                        </div>
                    </div>
                </div>

                <!-- item8 -->
                <div class="accordion-item card">
                    <h2 class="accordion-header text-body d-flex justify-content-between">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#anak8" aria-controls="anak8">
                            Putra 8 - Isnaniyah
                        </button>
                    </h2>
                    <div id="anak8" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
                        <div class="accordion-body">
                            Isnaniyah menikah dengan Moh. Ridwan dan dkaruniai 2 anak: <br>
                            <ol>
                                <li>Fahmi</li>
                                <li>Zaha</li>
                            </ol>
                            <?php
                            // umur putra
                            $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra8'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $putra = $data['nama'];

                            // get umur putra
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_putra = floor($diff / (365 * 60 * 60 * 24));
                            $months_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_putra = floor(($diff - $years_putra * 365 * 60 * 60 * 24 - $months_putra * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // umur bojo
                            $sql = mysqli_query($connect, "SELECT * FROM putra_nikah WHERE kodepasangan = 'putra8'");
                            $data = mysqli_fetch_array($sql);
                            $ttl = $data['tanggallahir'];
                            $bojo = $data['nama'];

                            // get umur bojo
                            $diff = abs(strtotime($now) - strtotime($ttl));
                            $years_bojo = floor($diff / (365 * 60 * 60 * 24));
                            $months_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                            $days_bojo = floor(($diff - $years_bojo * 365 * 60 * 60 * 24 - $months_bojo * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            ?>
                            Umur <?= $putra ?> sekarang adalah <?= $years_putra . " tahun " . $months_putra . " bulan " . $days_putra . " hari " ?>
                            <br>
                            Umur <?= $bojo ?> sekarang adalah <?= $years_bojo . " tahun " . $months_bojo . " bulan " . $days_bojo . " hari " ?>

                        </div>
                    </div>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
</div>