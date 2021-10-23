<?php
$this->load->view("layouts/partners.header.php")
?>
<div class="container">
    <div class="row justify-content-center min-height-80 py-5">
        <div class="col">
            <div class="text-right">
                <from method="post" action="<? base_url() ?>ustomers/auth/login">
                    <div class="mb-3">
                        <label for="name" class="form-label">Refill Depot Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="highlight" class="form-label">Highlight</label>
                        <input type="highlight" class="form-control" id="highlight" name="highlight">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description / Branding</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                </from>
                <div class="col">
                    <label for="name" class="form-label">Refill Service</label>
                    <div class="row  justify-content-end small">
                        <div class="col">
                            <img src="<?= base_url() ?>assets/images/icon-refill/mineral-water.svg" alt="" width="100px">
                        </div>
                        <div class="col">
                            <img src="<?= base_url() ?>assets/images/icon-refill/gas.svg" alt="" width="100px">
                        </div>
                        <div class="col">
                            <img src="<?= base_url() ?>assets/images/icon-refill/parfume.svg" alt="" width="100px">
                        </div>
                        <div class="col">
                            <img src="<?= base_url() ?>assets/images/icon-refill/fire-extinguisher.svg" alt="" width="100px">
                        </div>
                        <div class="col">
                            <img src="<?= base_url() ?>assets/images/icon-refill/oxsygen.svg" alt="" width="100px">

                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="name" class="form-label">Contact Info</label>
                    <div class="row  justify-content-end small">
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Phone Number</option>
                                <option value="1">Telephone</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="phone_number" name="phone_number">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="name" class="form-label"></label>
                    <div class="row  justify-content-end small">
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Whatsapp</option>
                                <option value="1">Telegram</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="phone_number" name="phone_number">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="name" class="form-label"></label>
                    <div class="row  justify-content-end small">
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Email</option>
                                <option value="1">Other</option>
                            </select>
                        </div>
                        <div class="col-8">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <label for="name" class="form-label">Loca</label>
                    <div class="row justify-content-end small">
                        <img src="<?= base_url() ?>assets/images/testimoni/p1.jpg" alt="" width="100px">
                    </div>
                </div>
                <div class="col-auto">
                    <label for="name" class="form-label">Detail Address</label>
                    <input type="address" class="form-control" id="address" name="address">
                    <div class="d-grid gap-2 col-6 mx-right">
                        <button type="submit" class="btn btn-primary btn-block">Save Changed</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-auto">
            <img src="<?= base_url() ?>assets/images/resource/retail-icon.png" alt="" width="300px">
            <div class="d-grid gap-2 mt-5">
                <button type="submit" class="btn btn-primary btn-block">Change Avatar</button>
            </div>

        </div>

    </div>
</div>
<?php
$this->load->view("layouts/partners.footer.php")
?>