<?php
$this->load->view("layouts/partners.header.php")
?>
<div class="container">
    <div class="row justify-content-center min-height-80 py-5">
        <div class="col-6">
            <div class="text-right">
                <from method="post" action="<? base_url() ?>ustomers/auth/login">
                    <div class="mb-3">
                        <label for="name" class="form-label">Upload Perijinan/Dokumen Usaha</label>
                        <input class="form-control" type="file" id="fileupload">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="date" name="start_date">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="date" name="end_date">
                    </div>
                    <div>
                        <div class="d-grid gap-2 col-6 mx-right">
                            <button type="submit" class="btn btn-primary btn-block">Submit & Verifikasi</button>
                        </div>
                    </div>
                </from>
            </div>

        </div>
        <div class="col-6">
            <img src="<?= base_url() ?>assets/images/resource/usephone.png" alt="" width="600px">
        </div>

    </div>
</div>
<?php
$this->load->view("layouts/partners.footer.php")
?>