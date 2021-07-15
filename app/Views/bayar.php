<div class="container" style="margin-top: 100px;">
    <div class="card">
        <div class="card-body p-4">
            <div class="bg-success p-5 mb-5">
                <p class="fs-4 text-light lh-base"><?= $hadist ?></p>
            </div>
            <h5 class="card-title">
                Ayo Mulai <?= $title ?>
            </h5>
            <p class="card-text">Nominal <?= $title ?></p>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Rp</span>
                <input type="number" class="form-control" placeholder="10.000" aria-label="nominal"
                    aria-describedby="basic-addon1">
            </div>

            <a href="#" class="btn btn-success">Bayar <?= $title ?></a>
        </div>
    </div>
</div>