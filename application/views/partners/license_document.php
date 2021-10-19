<?php
	$this->load->view("layouts/partners.header.php")
?>


<div class="container">
    <div class="row py-5">
        <form method="post">
            <div class="mb-3 col-4">
                <label for="fileupload" class="form-label">Choose scan/photo of document</label>
                <input class="form-control" type="file" id="fileupload">
            </div>
            <div class="mb-3 col-4">
                <label for="startdate" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="mb-3 col-4">
                <label for="enddate" class="form-label">End Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="d-grid gap-2 mt-5 mb-3 col-4">
                <button type="submit" class="btn btn-primary btn-block">
                    Submit & Verification
                </button>
            </div>
        </form>
    </div>
</div>

<?php
	$this->load->view("layouts/partners.footer.php")
?>