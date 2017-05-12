<?php

return array(

    'accepted'                  => 'Sie haben diesen Gegenstand erfolgreich angenommen.',
    'declined'                  => 'Sie haben diesen Gegenstand abgelehnt.',
    'bulk_manager_warn'	        => 'Ihre Benutzer wurden erfolgreich aktualisiert, aber der Manager-Eintrag wurde nicht gespeichert, da der ausgewählte Manager auch in der Liste der zu bearbeitenden Benutzer war. Benutzer können nicht ihr eigener Manager sein. Bitte wählen Sie die Benutzer ohne den Manager erneut aus.',
    'user_exists'               => 'Benutzer existiert bereits!',
    'user_not_found'            => 'Benutzer [:id] existiert nicht.',
    'user_login_required'       => 'Das Loginfeld ist erforderlich',
    'user_password_required'    => 'Das Passswortfeld ist erforderlich.',
    'insufficient_permissions'  => 'Unzureichende Berechtigungen.',
    'user_deleted_warning'      => 'Dieser Benutzer wurde gelöscht. Sie müssen ihn wiederherstellen, um ihn zu bearbeiten oder neue Assets zuzuweisen.',
    'ldap_not_configured'        => 'LDAP-Integration wurde für diese Installation nicht konfiguriert.',


    'success' => array(
        'create'    => 'Benutzer wurde erfolgreich erstellt.',
        'update'    => 'Benutzer wurde erfolgreich bearbeitet.',
        'update_bulk'    => 'Benutzer wurden erfolgreich bearbeitet!',
        'delete'    => 'Benutzer wurde erfolgreich gelöscht.',
        'ban'       => 'Benutzer wurde erfolgreich ausgeschlossen.',
        'unban'     => 'Benutzer wurde erfolgreich wieder eingeschlossen.',
        'suspend'   => 'Der Benutzer wurde erfolgreich deaktiviert.',
        'unsuspend' => 'Der Benutzer wurde erfolgreich reaktiviert.',
        'restored'  => 'Benutzer wurde erfolgreich wiederhergestellt.',
        'import'    => 'Benutzer erfolgreich importiert.',
    ),

    'error' => array(
        'create' => 'Beim Erstellen des Benutzers ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',
        'update' => 'Beim Aktualisieren des Benutzers ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',
        'delete' => 'Beim Entfernen des Benutzers ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.',
        'unsuspend' => 'Es gab ein Problem beim Reaktivieren des Benutzers. Bitte versuchen Sie es erneut.',
        'import'    => 'Es gab ein Problem beim Importieren der Benutzer. Bitte versuchen Sie es erneut.',
        'asset_already_accepted' => 'Dieses Asset wurde bereits akzeptiert.',
        'accept_or_decline' => 'Sie müssen diesen Gegenstand entweder annehmen oder ablehnen.',
        'incorrect_user_accepted' => 'Das Asset, welches Sie versuchen zu aktivieren, wurde nicht für Sie ausgebucht.',
        'ldap_could_not_connect' => 'Konnte keine Verbindung zum LDAP Server herstellen. Bitte LDAP Einstellungen in der LDAP Konfigurationsdatei prüfen. <br>Fehler vom LDAP Server:',
        'ldap_could_not_bind' => 'Konnte keine Verbindung zum LDAP Server herstellen. Bitte LDAP Einstellungen in der LDAP Konfigurationsdatei prüfen. <br>Fehler vom LDAP Server: ',
        'ldap_could_not_search' => 'Konnte LDAP Server nicht suchen. Bitte LDAP Einstellungen in der LDAP Konfigurationsdatei prüfen. <br>Fehler vom LDAP Server:',
        'ldap_could_not_get_entries' => 'Konnte keine Einträge vom LDAP Server abrufen. Bitte LDAP Einstellungen in der LDAP Konfigurationsdatei prüfen. <br>Fehler vom LDAP Server:',
    ),

    'deletefile' => array(
        'error'   => 'Datei nicht gelöscht. Bitte versuchen Sie es nochmals.',
        'success' => 'Datei erfolgreich gelöscht.',
    ),

    'upload' => array(
        'error'   => 'Datei(en) wurden nicht erfolgreich hochgeladen. Bitte versuchen Sie es nochmals.',
        'success' => 'Datei(en) wurden erfolgreich hochgeladen.',
        'nofiles' => 'Sie haben keine Dateien zum Hochladen ausgewählt.',
        'invalidfiles' => 'Eine oder mehrere Ihrer Dateien ist zu groß oder deren Dateityp ist nicht zugelassen. Zugelassene Dateitypen sind png, gif, jpg, doc, docx, pdf, und txt.',
    ),

);
