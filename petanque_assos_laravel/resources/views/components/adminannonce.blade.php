<div class="col-md-4 card shadow">
    <div class="card-body">
        <h5 class="card-title">Annonces</h5>
        <p class="card-text">Actuel : </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <br>
        <!-- make a form to modify $site_annonces, change the link in button and the text and to enable it or disabled it -->
        <form action="{{ route('admin.annonces') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="site_annonces">Modifier les annonces</label>
                <textarea class="form-control" id="site_annonces" name="site_annonces" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
    
    

</div>