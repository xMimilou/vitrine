<?php 
namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class ImgList extends Component
{
    public $Images;
    private $albumId; // Déclaration de la variable $albumId

    public function __construct($albumId)
    {
        $this->albumId = $albumId; // Initialisation de $albumId

        // Récupérer la liste des images dans le dossier spécifique
        $images = Storage::files('public/album/'.$albumId);
        
        // Trier les images par date de dernière modification
        usort($images, function($a, $b) {
            return Storage::lastModified($b) - Storage::lastModified($a);
        });

        //remove from list the _info.data file
        $images = array_filter($images, function($image) {
            return basename($image) != '_info.data';
        });
        
        // Initialiser $images avec les données traitées
        $this->Images = collect($images)->map(function ($image) {
            // print_r($image); // Suppression ou commentez cette ligne si vous ne voulez pas d'affichage de débogage
            return [
                'image' => $image,
                'name' => basename($image),
                'creation_date' => Storage::lastModified($image)
            ];
        });
    }

    public function render()
    {
        // Ajouter $albumId au tableau de données passées à la vue
        return view('components.imgList', [
            'Images' => $this->Images,
            'albumId' => $this->albumId // Ajout de $albumId
        ]); 
    }
}
?>
