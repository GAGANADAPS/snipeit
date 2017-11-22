<?php

return [

    'does_not_exist' => 'Cette catégorie n\'existe pas.',
    'user_does_not_exist' => 'L\'utilisateur n\'existe pas.',
    'asset_does_not_exist'    => 'L\'actif que vous essayez d\'associer avec cette licence n\'existe pas.',
    'owner_doesnt_match_asset' => 'L\'actif que vous essayez d\'associer avec cette licence est détenu par une autre personne que celle sélectionnée dans la liste déroulante.',
    'assoc_users'     => 'Cette catégorie est associée au moins à un modèle et ne peut être supprimée. Veuillez actualiser vos modèles pour ne plus référencer cette catégorie et réessayer.',
    'select_asset_or_person' => 'Vous devez sélectionner un actif ou un utilisateur, mais pas les deux.',

    'create' => [
        'error'   => 'Cette catégorie n\'a pas été créée, veuillez réessayer.',
        'success' => 'Catégorie créée correctement.',
    ],

    'deletefile' => [
        'error'   => 'Le fichier n\'a pas pu être supprimé. Merci de réessayer.',
        'success' => 'Le fichier a bien été supprimé.',
    ],

    'upload' => [
        'error'   => 'Le(s) fichier(s) n\'a pas pu être uploadé. Merci de réessayer.',
        'success' => 'Le(s) fichier(s) a bien été uploadé.',
        'nofiles' => 'Vous n\'avez pas sélectionné de fichier pour le téléchargement ou le fichier que vous essayez de télécharger est trop gros',
        'invalidfiles' => 'Un ou plusieurs de vos fichiers est trop grand ou le type de fichier n\'est pas autorisé. Les différents types de fichiers autorisés sont png, gif, jpg, doc, docx, pdf, txt, zip, rar et rtf.',
    ],

    'update' => [
        'error'   => 'Cette catégorie n\'a pas été actualisée, veuillez réessayer.',
        'success' => 'Catégorie actualisée correctement.',
    ],

    'delete' => [
        'confirm'   => 'Etes-vous sûr de vouloir supprimer cette catégorie?',
        'error'   => 'Il y a eu un problème en supprimant cette catégorie. Veuillez réessayer.',
        'success' => 'Cette catégorie a été supprimée correctement.',
    ],

    'checkout' => [
        'error'   => 'Un problème a eu lieu pendant l\'association de la licence. Veuillez essayer à nouveau.',
        'success' => 'La licence a été associée avec succès',
    ],

    'checkin' => [
        'error'   => 'Un problème a eu lieu pendant la dissociation de la licence. Veuillez essayer à nouveau.',
        'success' => 'La licence a été dissociée avec succès',
    ],

];
