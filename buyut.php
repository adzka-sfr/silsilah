<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <!-- Basic Bootstrap Table -->
            <div class="card mb-2">
                <h5 class="card-header">Buyut H.Shomad/Hj.Marsinah</h5>
            </div>
            <div class="card">
                <div class="card-body">

                    <table id="example" class="table">
                        <thead>
                            <th style="text-align: center;">No</th>
                            <th>Nama</th>
                            <th style="text-align: center;">Info</th>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            $sql = mysqli_query($connect, "SELECT * FROM buyut ORDER BY kodepernikahan");
                            while ($data = mysqli_fetch_array($sql)) {
                                $no++;
                            ?>
                                <tr>
                                    <td style="text-align: center;"><?= $no ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td style="text-align: center;">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#mdl<?= $no ?>"><i class='bx bx-search'></i></button>
                                        <!-- Modal -->
                                        <div style="text-align: left;" class="modal fade" id="mdl<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Informasi tentang <?= $data['nama'] ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
                                                        $anak = $data['nama'];
                                                        $urutan = $data['urutan'];
                                                        $kode = $data['kodepernikahan'];

                                                        // get ibu bapak
                                                        $sql1 = mysqli_query($connect, "SELECT pn.nama as ibu, ptr.nama as bapak FROM putu_nikah pn JOIN putu ptr ON pn.kodepasangan = ptr.id WHERE pn.kodepernikahan = '$kode'");
                                                        $data1 = mysqli_fetch_array($sql1);
                                                        $ibu = $data1['ibu'];
                                                        $bapak = $data1['bapak'];
                                                        ?>
                                                        <?= $anak ?> merupakan putra ke-<?= $urutan ?> dari pernikahan <?= $bapak ?> dengan <?= $ibu ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
</div>