{{-- $folders count  == 0 --}}
@if($folders->count() == 0)
    <p>Aucune galerie trouvée.</p>
@else
    @foreach ($folders as $folder)
        <x-galeries-card 
            galerieName="{{ $folder['name'] }}" 
            image="{{ $folder['main_image'] }}" 
            location="{{ $folder['location'] }}" 
            date="{{ date('Y-m-d H:i:s', $folder['creation_date']) }}"/>
    @endforeach
@endif