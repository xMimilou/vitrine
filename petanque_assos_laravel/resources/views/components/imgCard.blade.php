<div class="col-md-6 col-lg-4 col-sm-12 ">
    <div class="card shadow-sm">
        <div class="card-img-top bg-img-card"
            style="background-image: url({{ url('img/album/' . $imgAlbum . '/' . $imgName) }});width:100%;height: 225px;display: block;">
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#pictureModal"
                        class="btn btn-sm btn-outline-secondary">View</button>
                    <label class="text-body-secondary img-name-text">{{ $imgName }}</label>
                </div>
                <small class="text-body-secondary">{{ $lastModifiedTime }}</small>
            </div>
        </div>
    </div>
</div>