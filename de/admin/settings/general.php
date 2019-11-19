<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory Domäne',
    'ad_domain_help'			=> 'Dies ist manchmal dasselbe wie Ihre E-Mail-Domain, aber nicht immer.',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'Wenn Sie eine Kopie der Rücknahme- / Herausgabe-E-Mails, die an Benutzer gehen auch an zusätzliche E-Mail-Empfänger versenden möchten, geben Sie sie hier ein. Ansonsten lassen Sie dieses Feld leer.',
    'is_ad'				        => 'Dies ist ein Active Directory Server',
    'alert_email'				=> 'Alarme senden an',
    'alerts_enabled'			=> 'E-Mail-Benachrichtigungen aktiviert',
    'alert_interval'			=> 'Ablauf Alarmschwelle (in Tagen)',
    'alert_inv_threshold'		=> 'Inventar Alarmschwelle',
    'asset_ids'					=> 'Asset IDs',
    'audit_interval'            => 'Auditintervall',
    'audit_interval_help'       => 'Wenn Sie Ihre Assets regelmäßig physisch überprüfen müssen, geben Sie das Intervall in Monaten ein.',
    'audit_warning_days'        => 'Audit-Warnschwelle',
    'audit_warning_days_help'   => 'Wie viele Tage im Voraus sollten wir Sie warnen, wenn Assets zur Prüfung fällig werden?',
    'auto_increment_assets'		=> 'Erzeugen von fortlaufenden Asset IDs',
    'auto_increment_prefix'		=> 'Präfix (optional)',
    'auto_incrementing_help'    => 'Aktiviere zuerst fortlaufende Asset IDs um dies zu setzen',
    'backups'					=> 'Sicherungen',
    'barcode_settings'			=> 'Barcode Einstellungen',
    'confirm_purge'			    => 'Bereinigung bestätigen',
    'confirm_purge_help'		=> 'Geben Sie das Wort "DELETE" in das untere Feld ein um die gelöschten Einträge zu bereinigen. Dies kann nicht rückgängig gemacht werden.',
    'custom_css'				=> 'Benutzerdefiniertes CSS',
    'custom_css_help'			=> 'Füge eigenes CSS hinzu. Benutze keine &lt;style&gt;&lt;/style&gt; tags.',
    'custom_forgot_pass_url'	=> 'Eigene Passwort-Zurücksetzungs-URL',
    'custom_forgot_pass_url_help'	=> 'Dadurch wird die integrierte URL für vergessene Passwörter auf dem Anmeldebildschirm ersetzt. Dies ist nützlich, um Benutzer zur internen oder gehosteten Funktion zum Zurücksetzen von LDAP-Passwörtern zu leiten. Dementsprechend wird die Funktion zur Zurücksetzung des lokalen Passwortes deaktiviert.',
    'dashboard_message'			=> 'Dashboard-Nachricht',
    'dashboard_message_help'	=> 'Dieser Text wird für jeden sichtbar sein, der Berechtigungen hat das Dashboard zu sehen.',
    'default_currency'  		=> 'Standardwährung',
    'default_eula_text'			=> 'Standard EULA',
    'default_language'			=> 'Standardsprache',
    'default_eula_help_text'	=> 'Sie können ebenfalls eigene EULA\'s mit spezifischen Asset Kategorien verknüpfen.',
    'display_asset_name'        => 'Zeige Assetname an',
    'display_checkout_date'     => 'Zeige Herausgabedatum',
    'display_eol'               => 'Zeige EOL in der Tabellenansicht',
    'display_qr'                => 'Zeige QR-Codes',
    'display_alt_barcode'		=> 'Zeige 1D Barcode an',
    'email_logo'                => 'E-Mail-Logo',
    'barcode_type'				=> '2D Barcode Typ',
    'alt_barcode_type'			=> '1D Barcode Typ',
    'email_logo_size'       => 'Quadratische Logos in E-Mails sehen am besten aus.',
    'eula_settings'				=> 'EULA Einstellungen',
    'eula_markdown'				=> 'Diese EULA erlaubt <a href="https://help.github.com/articles/github-flavored-markdown/">Github Flavored Markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Akzeptierte Dateitypen sind ico, png und gif. Andere Bildformate funktionieren möglicherweise nicht in allen Browsern.',
    'favicon_size'          => 'Favicons sollten quadratische Bilder sein, 16x16 Pixel.',
    'footer_text'               => 'Zusätzlicher Fußzeilentext ',
    'footer_text_help'          => 'Dieser Text wird in der rechten Fußzeile angezeigt. Links sind erlaubt mit <a href="https://help.github.com/articles/github-flavored-markdown/">Github Flavored Markdown</a>. Zeilenumbrüche, Kopfzeilen, Bilder usw. können zu unvorhersehbaren Ergnissen führen.',
    'general_settings'			=> 'Allgemeine Einstellungen',
    'generate_backup'			=> 'Backup erstellen',
    'header_color'              => 'Kopfzeilenfarbe',
    'info'                      => 'Mit diesen Einstellungen können Sie verschiedene Aspekte Ihrer Installation anpassen.',
    'label_logo'                => 'Label-Logo',
    'label_logo_size'           => 'Quadratische Logos sehen am besten aus - werden oben rechts auf jedem Asset-Label angezeigt. ',
    'laravel'                   => 'Laravel Version',
    'ldap_enabled'              => 'LDAP aktiviert',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Einstellungen',
    'ldap_login_test_help'      => 'Geben Sie einen gültigen LDAP-Benutzernamen und ein Passwort von der oben angegebenen Basis-DN ein, um zu testen, ob Ihre LDAP-Anmeldung korrekt konfiguriert ist. SIE MÜSSEN IHRE AKTUALISIERTEN LDAP-EINSTELLUNGEN ZUERST SPEICHERN.',
    'ldap_login_sync_help'      => 'Dies testet nur, ob LDAP korrekt synchronisiert werden kann. Wenn Ihre LDAP-Authentifizierungsabfrage nicht korrekt ist, können sich Benutzer möglicherweise nicht anmelden. SIE MÜSSEN IHRE AKTUALISIERTEN LDAP-EINSTELLUNGEN ZUERST SPEICHERN.',
    'ldap_server'               => 'LDAP-Server',
    'ldap_server_help'          => 'Dies sollte mit ldap:// (für unverschlüsselt oder TLS) oder ldaps:// (für SSL) beginnen',
    'ldap_server_cert'			=> 'LDAP-SSL-Zertifikatsüberprüfung',
    'ldap_server_cert_ignore'	=> 'Erlaube ungültige SSL Zertifikate',
    'ldap_server_cert_help'		=> 'Aktivieren Sie dieses Kontrollkästchen, wenn Sie ein selbst signiertes SSL-Zertifikat verwenden und ein ungültiges SSL-Zertifikat akzeptieren möchten.',
    'ldap_tls'                  => 'TLS verwenden',
    'ldap_tls_help'             => 'Diese Option sollte nur aktiviert werden, wenn STARTTLS auf Ihrem LDAP-Server ausgeführt wird. ',
    'ldap_uname'                => 'LDAP Bind Benutzername',
    'ldap_pword'                => 'LDAP Bind Passwort',
    'ldap_basedn'               => 'Basis Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP-Passwort-Sync',
    'ldap_pw_sync_help'         => 'Deaktivieren Sie diese Option, wenn Sie nicht möchten, dass LDAP-Passwörter mit lokalen Passwörtern synchronisiert werden. Wenn Sie dies deaktivieren, kann es sein, dass Benutzer sich möglicherweise nicht anmelden können falls der LDAP-Server aus irgendeinem Grund nicht erreichbar ist.',
    'ldap_username_field'       => 'Benutzernamen Feld',
    'ldap_lname_field'          => 'Nachname',
    'ldap_fname_field'          => 'LDAP Vorname',
    'ldap_auth_filter_query'    => 'LDAP-Authentifizierungsabfrage',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Aktiv-Markierung',
    'ldap_emp_num'              => 'LDAP Mitarbeiternummer',
    'ldap_email'                => 'LDAP E-Mail',
    'license'                  => 'Softwarelizenz',
    'load_remote_text'          => 'Remote-Skripte',
    'load_remote_help_text'		=> 'Diese Installation von Snipe-IT kann Skripte von außerhalb laden.',
    'login_note'                => 'Anmeldenotiz',
    'login_note_help'           => 'Fügen Sie optional ein paar Sätze zu Ihrem Anmeldebildschirm hinzu, beispielsweise um Personen zu helfen, welche ein verlorenes oder gestohlenes Gerät gefunden haben. Dieses Feld akzeptiert <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Remote Benutzer Login Optionen',
    'login_remote_user_enabled_text' => 'Login mit Remote-Benutzer-Header aktivieren',
    'login_remote_user_enabled_help' => 'Diese Option aktiviert die Authentifizierung über den REMOTE_USER Header gemäß dem "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Deaktiviere andere Authentifizierungsmethoden',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Restricting users (including admins) assigned to companies to their company\'s assets.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'show_in_model_list'   => 'In Modell-Dropdown-Liste anzeigen',
    'optional'					=> 'Optional',
    'per_page'                  => 'Ergebnisse pro Seite',
    'php'                       => 'PHP Version',
    'php_gd_info'               => 'Um QR-Codes anzeigen zu können muss php-gd installiert sein, siehe Installationsanweisungen.',
    'php_gd_warning'            => 'PHP Image Processing and GD Plugin ist NICHT installiert.',
    'pwd_secure_complexity'     => 'Passwortkomplexität',
    'pwd_secure_complexity_help' => 'Wählen Sie aus, welche Komplexitätsregeln Sie für Passwörter erzwingen möchten.',
    'pwd_secure_min'            => 'Minimale Passwortlänge',
    'pwd_secure_min_help'       => 'Minimal zulässiger Wert ist 5',
    'pwd_secure_uncommon'       => 'Gewöhnliche Passwörter verhindern',
    'pwd_secure_uncommon_help'  => 'Verhindert die Verwendung der 10.000 häufigsten Passwörter aus im Internet geleakten Quellen.',
    'qr_help'                   => 'Schalte zuerst QR Codes an um dies zu setzen',
    'qr_text'                   => 'QR Code Text',
    'setting'                   => 'Einstellung',
    'settings'                  => 'Einstellungen',
    'show_alerts_in_menu'       => 'Alarme im Hauptmenü anzeigen',
    'show_archived_in_list'     => 'Archivierte Assets',
    'show_archived_in_list_text'     => 'Archivierte Assets in der Liste "Alle Assets" anzeigen',
    'show_images_in_email'     => 'Bilder in E-Mails anzeigen',
    'show_images_in_email_help'   => 'Deaktivieren Sie dieses Kontrollkästchen, wenn sich Ihre Snipe-IT-Installation hinter einem VPN oder einem geschlossenen Netzwerk befindet und Benutzer außerhalb des Netzwerks keine Bilder von dieser Installation in ihre E-Mails laden können.',
    'site_name'                 => 'Name der Webseite',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Kanal',
    'slack_endpoint'            => 'Slack Endpunkt',
    'slack_integration'         => 'Slack Einstellungen',
    'slack_integration_help'    => 'Die Slackintegration ist optional. Der Endpunkt und kanal werden benötigt, wenn man Slack benutzen will. Um Slack zu konfigurieren muss zuerst <a href=":slack_link" target="_new" rel="noopener"> einen eingehenden Webhook</a> in seinem Slackkonto einrichten.',
    'slack_integration_help_button'    => 'Sobald Sie Ihre Slack-Informationen gespeichert haben, erscheint eine Test-Schaltfläche.',
    'slack_test_help'           => 'Testen Sie, ob die Slack-Integration korrekt konfiguriert ist. ZUERST MÜSSEN DIE AKTUALISIERTEN SLACK EINSTELLUNGEN GESPEICHERT WERDEN.',
    'snipe_version'  			=> 'Snipe-IT Version',
    'support_footer'            => 'Support-Link in der Fußzeile',
    'support_footer_help'       => 'Geben Sie an, wer die Links zum Snipe-IT Support-Info und Benutzerhandbuch sieht',
    'version_footer'            => 'Version in in der Fußzeile ',
    'version_footer_help'       => 'Spezifiert, wer die Version und Build-Nummer von Snipe-IT angezeigt bekommt.',
    'system'                    => 'Systeminformationen',
    'update'                    => 'Einstellungen aktualisieren',
    'value'                     => 'Wert',
    'brand'                     => 'Branding',
    'about_settings_title'      => 'Über Einstellungen',
    'about_settings_text'       => 'Mit diesen Einstellungen können Sie verschiedene Aspekte Ihrer Installation anpassen.',
    'labels_per_page'           => 'Etiketten pro Seite',
    'label_dimensions'          => 'Etikettengröße (Zoll)',
    'next_auto_tag_base'        => 'Nächster Auto-Inkrement',
    'page_padding'              => 'Seiten Ränder (Zoll)',
    'privacy_policy_link'       => 'Link zur Datenschutzrichtlinie',
    'privacy_policy'            => 'Datenschutzrichtlinie',
    'privacy_policy_link_help'  => 'Wenn hier ein Link zu Ihrer Datenschutzerklärung enthalten ist, wird dieser in der Fußzeile der App und in allen E-Mails, die das System in Übereinstimmung mit der DSGVO versendet, hinzugefügt. ',
    'purge'                     => 'Gelöschte Einträge bereinigen',
    'labels_display_bgutter'    => 'Ettiketten Spaltenzwischenraum unterhalb',
    'labels_display_sgutter'    => 'Ettiketten Spaltenzwischenraum seitlich',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link to Snipe-IT in Emails',
    'show_url_in_emails_help_text'      => 'Uncheck this box if you do not wish to link back to your Snipe-IT installation in your email footers. Useful if most of your users never login. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Max thumbnail height',
    'thumbnail_max_h_help'   => 'Maximum height in pixels that thumbnails may display in the listing view. Min 25, max 500.',
    'two_factor'        => 'Two Factor Authentication',
    'two_factor_secret'        => 'Two-Factor Code',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Enable Two Factor',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Selective (Users can enable or disable if permitted)',
    'two_factor_required'        => 'Required for all users',
    'two_factor_disabled'        => 'Disabled',
    'two_factor_enter_code'	=> 'Enter Two-Factor Code',
    'two_factor_config_complete'	=> 'Submit Code',
    'two_factor_enabled_edit_not_allowed' => 'Your administrator does not permit you to edit this setting.',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'require_accept_signature'      => 'Require Signature',
    'require_accept_signature_help_text'      => 'Enabling this feature will require users to physically sign off on accepting an asset.',
    'left'        => 'left',
    'right'        => 'right',
    'top'        => 'top',
    'bottom'        => 'bottom',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Length of asset tags, including zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
