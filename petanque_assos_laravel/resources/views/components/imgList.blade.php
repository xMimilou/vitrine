@if($Images->isEmpty())
    <p>Aucune image trouvée.</p>
@else
    @foreach ($Images as $image)
    <x-imgCard :imgAlbum="$albumId" imgName="{{ $image['name'] }}" date="{{ date('Y-m-d H:i:s', $image['creation_date']) }}"/>
    @endforeach
@endif