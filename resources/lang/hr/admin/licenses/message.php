<?php

return [

    'does_not_exist' => 'Licenca ne postoji.',
    'user_does_not_exist' => 'Korisnik ne postoji.',
    'asset_does_not_exist'    => 'Imovina koju pokušavate povezati s ovom licencom ne postoji.',
    'owner_doesnt_match_asset' => 'Imovina koju pokušavate povezati s ovom licencom u vlasništvu je nekog drugog osim osobe koja je odabrana u odjeljku za padajući izbornik.',
    'assoc_users'     => 'Ova je licenca trenutno provjerena korisniku i ne može se izbrisati. Najprije provjerite licencu, a zatim pokušajte ponovno brisati.',
    'select_asset_or_person' => 'Morate odabrati neku vrstu imovine ili korisnika, ali ne oboje.',

    'create' => [
        'error'   => 'Licenca nije izrađena, pokušajte ponovo.',
        'success' => 'Licenca je uspješno stvorena.',
    ],

    'deletefile' => [
        'error'   => 'Datoteka nije izbrisana. Molim te pokušaj ponovno.',
        'success' => 'Datoteka je uspješno obrisana.',
    ],

    'upload' => [
        'error'   => 'Datoteke nisu prenesene. Molim te pokušaj ponovno.',
        'success' => 'Datoteke su uspješno učitane.',
        'nofiles' => 'Niste odabrali nijednu datoteku za prijenos ili je datoteka koju pokušavate prenijeti prevelika',
        'invalidfiles' => 'Jedna ili više datoteka je prevelika ili je vrsta datoteke koja nije dopuštena. Dopuštene vrste datoteka su png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, rar, rtf, xml i lic.',
    ],

    'update' => [
        'error'   => 'Licenca nije ažurirana, pokušajte ponovo',
        'success' => 'Licenca je uspješno ažurirana.',
    ],

    'delete' => [
        'confirm'   => 'Jeste li sigurni da želite izbrisati ovu licencu?',
        'error'   => 'Došlo je do problema s brisanjem licence. Molim te pokušaj ponovno.',
        'success' => 'Licenca je uspješno obrisana.',
    ],

    'checkout' => [
        'error'   => 'Došlo je do problema prilikom provjere licence. Molim te pokušaj ponovno.',
        'success' => 'Licenca je uspješno provjerena',
    ],

    'checkin' => [
        'error'   => 'U licenci se provjeravala problem. Molim te pokušaj ponovno.',
        'success' => 'Licenca je uspješno provjerena',
    ],

];
