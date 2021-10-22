<?php
$this->load->view("layouts/partners.header.php")
?>
<div class="container">
    <div class="row">
        <div class="col-xl-12 py-5">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="col">
                            <label for="name" class="form-label"></label>
                            <div class="row  justify-content-end small">
                                <div class="col">
                                    <label for="name" class="form-label">Upload Foto</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="col">
                                    <div class="d-grid gap-2 col-4 mx-auto">
                                        <button class="btn btn-primary me-md-2" type="button">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="name" class="form-label"></label>
                        <div class="row  justify-content-end small">
                            <div class="col">
                                <label for="name" class="form-label">Upload Video</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col">
                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <button class="btn btn-primary me-md-2" type="button">Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <label for="name" class="form-label">Gallery</label>
                        <div class="row  justify-content-end small">
                            <div class="col">
                                <img class="h-100 d-inline-block" src="<?= base_url() ?>assets/images/depot/abdulqua.png.jpg" alt="" width="400px">
                            </div>
                            <div class="col">
                                <img class="h-100 d-inline-block" src="<?= base_url() ?>assets/images/depot/depot-air-minum-isi-ulang.jpg" alt="" width="400px">
                            </div>
                            <div class="col">
                                <img class="h-100 d-inline-block" src="<?= base_url() ?>assets/images/depot/etalase_depot_air_minum_isi_ulang.jpg" alt="" width="400px">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row  justify-content-end small">
                            <div class="col">
                                <div class="text-center">
                                    <i class="fas fa-trash-alt"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <i class="fas fa-trash-alt"></i>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-center">
                                    <i class="fas fa-trash-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-grid gap-2 col-4 mx-2">
                            <button type="submit" class="btn btn-primary btn-block">Save Changed</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
$this->load->view("layouts/partners.footer.php")
?>