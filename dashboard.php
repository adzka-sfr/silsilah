<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Silsilah Bani Shomad 🎉</h5>
                            <p class="mb-4">
                                H. Shomad lahir pada tanggal 00-00-0000 di Ponorogo. Beliau mempunyai seorang istri yang bernama Hj. Marsinah, istri H. Shomad lahir pada tanggal 00-00-0000. Kedua insan ini menikah pada tanggal 00-00-0000 dan dikaruniai 8 anak.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-8 col-lg-6 col-xl-8 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-2 pb-3">
                        <h5 class="m-0 me-2">8 putra H. Shomad dan Hj. Marsinah</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-male"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Moh. Arif</h6>
                                    <small class="text-muted">Kodriyah</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra1'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-male"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Zamzuri</h6>
                                    <small class="text-muted">Mutik</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra2'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-female"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Umi Hanik</h6>
                                    <small class="text-muted">Munir</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra3'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-female"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Sholikah</h6>
                                    <small class="text-muted">Sofwan</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra4'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-male"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Tamyiz</h6>
                                    <small class="text-muted">Rohmah</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra5'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-male"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Maskub</h6>
                                    <small class="text-muted">Latifah</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra6'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-female"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Indasah</h6>
                                    <small class="text-muted">Mutamim</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra7'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-female"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Isnaniyah</h6>
                                    <small class="text-muted">Moh. Ridwan</small>
                                </div>
                                <div class="user-progress">
                                    <?php
                                    $sql = mysqli_query($connect, "SELECT * FROM putra WHERE id = 'putra8'");
                                    $data = mysqli_fetch_array($sql);
                                    $ttl = $data['tanggallahir'];

                                    // get umur
                                    $diff = abs(strtotime($now) - strtotime($ttl));
                                    $years = floor($diff / (365 * 60 * 60 * 24));
                                    $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
                                    $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                                    ?>
                                    <small class="fw-semibold"><?= $years ?>th</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-info"><i class='bx bx-male-female'></i></span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Putra</span>
                            <h3 class="card-title mb-2">
                                <?php
                                $sql = mysqli_query($connect, "SELECT COUNT(id) as jumlahputra FROM putra");
                                $data = mysqli_fetch_array($sql);
                                echo $data['jumlahputra'];
                                ?>
                            </h3>
                            <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> 2 Wafat</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-success"><i class='bx bx-body'></i></span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Putu</span>
                            <h3 class="card-title mb-2">
                                <?php
                                $sql = mysqli_query($connect, "SELECT COUNT(id) as jumlahputu FROM putu");
                                $data = mysqli_fetch_array($sql);
                                echo $data['jumlahputu'];
                                ?>
                            </h3>
                            <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> 20 Sehat</small> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-body'></i></span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Buyut</span>
                            <h3 class="card-title mb-2">
                                <?php
                                $sql = mysqli_query($connect, "SELECT COUNT(id) as jumlahbuyut FROM buyut");
                                $data = mysqli_fetch_array($sql);
                                echo $data['jumlahbuyut'];
                                ?>
                            </h3>
                            <!-- <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> 2 Wafat</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-body'></i></span>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Canggah</span>
                            <h3 class="card-title mb-2">
                                <?php
                                $sql = mysqli_query($connect, "SELECT COUNT(id) as jumlahcanggah FROM canggah");
                                $data = mysqli_fetch_array($sql);
                                echo $data['jumlahcanggah'];
                                ?>
                            </h3>
                            <!-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> 20 Sehat</small> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->
    </div>
</div>