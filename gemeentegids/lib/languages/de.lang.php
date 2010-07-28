<?php // jEdit :folding=indent: :collapseFolds=1: :noTabs=true:
$LANG_TRANSLATION = array
(
//////////////////////////////////////////
// THE ADRESS BOOK RELOADED TRANSLATION
//////////////////////////////////////////

// ERRORS
'Not saved. An input value is missing:'=>'Nicht gespeichert. Ein Feld ist nicht ausgefüllt:',
'Administrative Lock Active'=>'Administrative Sperre',
'This application is currently locked by an administrator because of database maintainance. You may not edit or delete any entries. Please retry later.'=>'Diese Applikation is derzeit vom Administrator aufgund einer Datenbankwartung gesperrt. Bitte versuchen Sie es später wieder.',
'Image is too wide or high. Please reduce its dimensions and try again.'=>'Bild ist zu breit oder hoch. Bitte reduzieren Sie die Dimensionen des Bildes.',

// login.php
'Login Screen'=>'Anmeldung',
'Password'=>'Passwort',
'Please log in to access the Address Book Reloaded'=>'Bitte einloggen um die Applikation zu benutzen',
'login'=>'Anmelden',
'lost password'=>'Passwort vergessen',
'reset password'=>'Neues Passwort anfordern',
'register'=>'Als neuer Benutzer registrieren',
'log out'=>'Abmelden',
'logout'=>'Abmelden',
'Please enter your email address, and we will send you a new password.'=>'Bitte geben Sie Ihre Email ein und wir senden Ihnen ein neues Passwort.',
'Please enter an email address'=>'Bitte eine Emailadresse angeben',
'Please enter a password'=>'Bitte ein Passwort eingeben',
'Incorrect password. Login denied.'=>'Falsches Passwort. Anmeldung verweigert.',
'Too many failed login attempts. Login denied. Please '=>'Zu viele fehlgeschlagene Anmeldungsversuche. Anmeldung verweigert. Bitte ',
'request a new password'=>'fordern Sie ein neues Passwort an',
'Cookies must be enabled to login.'=>'Zum Anmelden muss Ihr Browser Cookies annehmen.',
'Too many incorrect logins. Access denied. Delete your cookies (restart your browser or use a different computer).'=>'Zu viele falsche Anmeldungsversuche. Anmeldung verweigert. Bitte Cookies löschen (Browser neu starten oder anderen Computer verwenden).',

// list.php => es wird die Übersetzung ignoriert, wenn ein Kontakt aufgeklappt wird
'List entries'=>'Listeneinträge',
'You are currently logged in as:'=>'Sie sind derzeit angemeldet als:',
'You have administrator access.'=>'Sie haben Administratorrechte.',
'Upcoming dates (Next 21 days)'=>'Baldige Termine (nächsten 21 Tage)',
'Nothing upcoming'=>'Keine baldigen Termine',
'search'=>'Suche',
'add new entry'=>'Neuer Kontakt',
'personal settings'=>'Optionen',
'admin panel'=>'Administration',
'go to'=>'Suche',
'E-Mail addresses'=>'E-Mails',
'Websites'=>'Websites',
'Messaging'=>'Chat',
'Addresses'=>'Adressen',
'Phonenumbers'=>'Telefonnummern',
'Occupation'=>'Beruf',
'Function'=>'Funktion',
'Product'=>'Produkt',
'Project'=>'Projekt',
'select group'=>'Gruppe wählen',
'(all entries)'=>'(Alle Einträge)',
'(hidden entries)'=>'(Versteckte Einträge)',
'(ungrouped entries)'=>'(Nicht gruppierte Einträge)',
'[all]'=>'[Alle]',
'expand'=>'Aufklappen',
'collapse'=>'Schließen',
'All Entries'=>'Alle Einträge',
'admin'=>'Admin',
'manager'=>'Manager',
'user'=>'Benutzer',
'guest'=>'Gast',
'This entry was last updated on'=>'Dieser Eintrag wurde zuletzt aktualisiert um',
'return'=>'Zurück',
'edit'=>'Bearbeiten',
'print'=>'Drucken',
'incorrect'=>'Falsch',
'This is you'=>'Das sind Sie',
'show/change my settings'=>'Zeige/Ändere meine Einstellungen',
'show/change settings'=>'Zeige/Ändere Einstellungen',
'User type'=>'Benutzertyp',
'Other Phone Numbers'=>'Andere Telefonnummern',
'Webs, News and Media'=>'Websites &amp; Medien',
'website'=>'Webseite',
'This is a user'=>'Das ist ein Benutzer',

// searchlist.php
'Search List'=>'Suchliste',
'Search'=>'Suche',
'mail to selected'=>'E-Mail senden',
'No Entries.'=>'Keine Einträge.',
'Go'=>'Los', //ist noch ein <input type="submit" => ändern in <button>Go</button>

// adminPanel.php 
'Admin Panel'=>'Administratorbereich',
'Administration Options'=>'Administratoroptionen',
'User list'=>'Benutzerliste',
' Send email to: '=>' Sende E-Mail an: ',
'administrators'=>'Administratoren', // wird nicht übersetzt
'managers'=>'Manager', // wird nicht übersetzt
'users'=>'Benutzer', // wird nicht übersetzt
'users and managers'=>'Benutzer und Manager', // wird nicht übersetzt
'all'=>'Alle', // wird nicht übersetzt
'Help'=>'Hilfe',
'deactivated'=>'deaktiviert',
'activate'=>'aktivieren',
'activated'=>'aktiviert',
'not installed'=>'nicht installiert',
'install'=>'installieren',
'uninstall'=>'deinstallieren',
//'Export'=>'Exportieren', Plugin Name 
//'Import'=>'Importieren', Plugin Name 
//'Mailto'=>'E-Mail an', Plugin Name 
'help'=>'Hilfe',
'Backup Database'=>'Datenbanksicherung',
'This creates a backup of the whole database (not only the part TAB is using) of TAB. This needs safe mode to be turned off or a link to the mysqldump binary placed in the safe_mode_exec_dir (currently not set on this server).'=>'Dieser Button erstellt eine Sicherung der gesamten Datenkbank von TAB (nicht nur den Teil den TAB verwendet). Dazu muss der safe mode ausgeschaltet sein oder ein Link zum MySQLDump Ordner in safe_mode_exec_dir (zurzeit nicht aktiv auf diesem Server) gesetzt sein.', //wird nicht übersetzt!!!
'Change Global Options'=>'Globale Optionen ändern',
'User interface: CSS style'=>'Benutzeroberfläche: CSS Stil',
'Login: require login to access contacts'=>'Anmeldung: benötigt Anmeldung um auf Kontakt zuzugreifen',
'Login: login message'=>'Anmeldung: Anmeldungsnachricht',
'Login: allow self registration'=>'Anmeldung: Selbstregistrierung erlauben',
'allow for everyone'=>'Für jeden zulassen',
'only allow for contacts'=>'Nur für Kontakte zulassen',
'only allow for contacts, no confirmation'=>'Nur für Kontakte zulassen, ohne Bestätigung',
'Main list: welcome message'=>'Hauptliste: Willkommensnachricht',
'Main list: maximum number of autocomplete search results'=>'Hauptliste: Maximalanzahl von autovervollständigten Suchergebnissen',
'Main list: display recently changed contacts'=>'Hauptliste: Kürzlich geänderte Kontakte anzeigen',
'Main list: maximum number for recently changed contacts and dates'=>'Hauptliste: Maximalanzahl für kürzlich geänderte Kontakte und Termine',
'Main list: display dates/recently changed contacts n days forward/backward'=>'Hauptliste: Termine anzeigen/Kürzlich geänderte Kontakte n Tage vor/zurück',
'Main list: default group'=>'Hauptliste: voreingestellte Gruppe',
'Contact: always display picture'=>'Kontakt: Bild immer anzeigen',
'Contact: picture width'=>'Kontakt: Bildbreite',
'Contact: picture height'=>'Kontakt: Bildhöhe',
'Edit: trash mode (only admin deletes contacts permanently)'=>'Bearbeiten: Löschmodus (nur der Administrator löscht Kontakte)',
'Edit: allow picture upload'=>'Bearbeiten: Bildupload erlauben',
'Edit: picture clip mode'=>'Bearbeiten: Bilderstellungsmodus',
'Resize'=>'Anpassen',
'Resize and Crop'=>'Anpassen und abscheiden',
'Resize and Fit'=>'Günstig anpassen',
'Edit: default country'=>'Bearbeiten: voreingestelltes Land',
'Login: BCC email to all admins upon self registration (admin can confirm)'=>'Anmeldung: BCC E-Mail an alle Administratoren nach Selbstregistrierung (Administrator kann bestätigen)',
'ADMIN: email subject'=>'Admin: E-Mail Betreff',
'ADMIN: email signature'=>'Admin: E-Mail Signatur',
'ADMIN: lock modifications (edit and delete)'=>'Admin: Applikation sperren (Bearbeiten und Löschen)',
'Users can send email with a web interface from the server (feature will be dropped if not in demand - post to discussion forums if you need this)'=>'Benutzer können ein E-Mail mit einer Webseitenoberfläche vom Server versenden (Eigenschaft wird gelöscht wenn keine Nachfrage bestehet - posten Sie einen Eintrag ins Diskussionsforum falls Sie diese Eigenschaft benötigen!)',
'Change Group Names'=>'Gruppennamen ändern',
'Change the group names and press save on the bottom. A group starting with #h# is hidden from the main list selector, but the individual contacts of a hidden group are listed in the list and can be reached by direct links (unless the contacts themselves are hidden).'=>'Ändern Sie den Gruppennamen und drücken Sie speichern am Ende der Seite. Eine Gruppe, die mit #h# beginnt wird in der Hauptliste versteckt, aber die einzelnen Kontakte dieser Gruppe werden in der Hauptliste angezeigt und können über Direktlinks erreicht werden (solange die Kontakte selber versteckt sind).',
'Group Name'=>'Gruppenname',
'Acronym'=>'Kurzwort',
'Logo URL (future use)'=>'URL für das Logo (erst zukünftig)',

// options.php
'Options'=>'Optionen',
'Edit your options'=>'Einstellungen ändern',
'Change password'=>'Passwort ändern',
'Old password'=>'Altes Passwort',
'New password'=>'Neues Passwort',
'New passwords do not match.'=>'Neue Passworte stimmen nicht überein.',
'Password successfully changed.'=>'Passwort wurde geändert.',
'Incorrect old password.'=>'Altes Passwort ist falsch.',
'Repeat'=>'Wiederholen',
'change password'=>'Passwort ändern',
'Change e-mail address'=>'E-Mail Adresse ändern',
'New e-mail address'=>'Neue E-Mail Adresse',
'change email'=>'E-Mail ändern',
'Change your options'=>'Ändern Sie Ihre Optionen',
'Main list: limit entries per page'=>'Hauptliste: Einträge pro Seite beschränken',
'Main list: display dates'=>'Hauptliste: Termine anzeigen',
'default'=>'Voreinstellung',
'yes'=>'Ja',
'no'=>'Nein',
'Main list: display dates and recently changed contacts n days back'=>'Hauptliste: Termine und kürzlich geänderte Kontakte n Tage zurück anzeigen',
'URI: Replace tel: (e.g. skype:$?call)'=>'URI: Wechseln Sie Tel: (z.B. skype:$?call)',
'URI: Replace fax: (e.g. sip:$@sip.com:5060)'=>'URI: Wechseln Sie Fax: (z.B. sip:$@sip.com:5060)',
'User interface language'=>'Benutzeroberflächensprache',
'autodetect'=>'Automatisch erkennen',
'english'=>'Englisch',

'The contact of this user does not have this e-mail.'=>'Die Karteikarte diese Benutzers enthält diese Email nicht.',

// contact.php
'[create user]'=>'[Benutzer anlegen]',
'[change view]'=>'[Darstellung ändern]',
'[adminsave]'=>'[Adminspeichern]',
'cancel'=>'Abbrechen',
'trash'=>'Löschen',
'Names'=>'Namen',
'A Last Name/Company Name is required for an entry to exist. If you need an additional company name for a contact use the groups on the bottom of the page. A contact can be assigned to multiple groups.'=>'Ein Nachname/Firmenname ist erforderlich, damit ein Eintrag bestehen kann. Falls Sie einen weiteren Firmennamen für eine Kontaktkarte brauchen, verwenden Sie die Gruppen am Ende der Seite. Ein Kontakt kann mehreren Gruppen zugewiesen werden.',
'Last name or company'=>'Nachname oder Firmenname',
'First name'=>'Vorname',
'Other name(s)'=>'Andere(r) Name(n)',
'Prefixes'=>'Vorgestellte Titel',
'Suffixes'=>'Nachgestellte Titel',
'Other (nickname, company)'=>'Andere (Nicknamen, Firma)',
'Sex'=>'Geschlecht',
'N/A'=>'Nicht verfügbar',
'female'=>'Weiblich',
'male'=>'Männlich',
'All fields are optional. An address will be saved if either of the following are provided: type, address lines, city, state, zip code, or a phone number. If Primary Address is selected, the address will be displayed in the contact list. To obtain more than 2 additional blank address sections, save this entry and edit it again.'=>'Alle Felder sind optional. Eine Adresse wird gespeichert, wenn eine der folgenden Daten vorhanden ist: Benutzertyp, Adresszeilen, Stadt, Staat, Postleitzahl oder eine Telefonnummer. Wenn eine primäre Adresse ausgewählt wurde, wird sie in der Kontaktliste angezeigt. Um mehr als 2 zusätzliche leere Adresssektionen zu erhalten, speichern Sie diesen Eintrag und editieren Sie ihn erneut.',
'Address type'=>'Adresstyp',
'Set as primary address'=>'Hauptadresse',
'Delete this address'=>'Diese Adresse löschen',
'Address (Line 1)'=>'Adresse (Zeile 1)',
'Address (Line 2)'=>'Adresse (Zeile 2)',
'City'=>'Stadt',
'Zip-code'=>'Postleitzahl',
'Phone 1'=>'Telefon 1',
'Phone 2'=>'Telefon 2',
'Country'=>'Land',

'url'=>'URL',
'add address'=>'Adresse hinzufügen',
'Communications'=>'Kommunikation',
'Mandatory Information'=>'Pflichtfelder',
'Each entry is of the form: group, label, value, and view permissions. The group selects where information is placed on the output. For example all emails are placed together. Select the label to qualify an entry. For example for phonenumbers you could use fax or cell. Viewing permissions can be public (everyone can see the item, users and managers can modify it), private (only the user and admin can see and modify the item), admin (user can view but only an admin can modify an item).'=>'Jeder Eintrag hat das Schema: Gruppe, Beschriftung, Wert und Berechtigungen anschauen. Die Gruppe wählt aus, wo die Informationen bei der Ausgabe platziert werden. Zum Beispiel alle E-Mails werden zusammen platziert. Wählen Sie die Beschriftung um einen Eintrag zu befähigen. Zum Beispiel für Telefonnummern können Sie Fax oder Handy verwenden. Berechtigungen einsehen kann öffentlich (jeder kann sie einsehen, Benutzer und Manager können sie ändern), privat (nur der Benutzer und Admin können sie einsehen und ändern) oder admin (Benutzer können sie einsehen, ändern kann sie aber nur der Admin) sein.',
'email'=>'E-Mail',
'phone'=>'Telefon',
'chat'=>'Chat',
'public'=>'Öffentlich',
'private'=>'Privat',
'other'=>'Andere',
'Dates'=>'Termine',
'Each entry is of the form: repeat, label, start date, end date, and view permissions. REPEAT selects how a date entry repeats. Weekly, mothly and yearly only is meaningful with one day events. Autoremove means the event will be automatically removed from the database after the end date. Then enter an arbitrary string as LABEL. START DATE equal to ? means already ongoing. An END DATE equal to ? is ongoing forever after the start date, a ONE DAY EVENT has a blank end date. Dates are entered in the format YYYY-MM-DD: 2007-04-31. Viewing permissions can be public (everyone can see the item, users and managers can modify it), private (only the user and admin can see and modify the item), admin (user can view but only an admin can modify an item).'=>'Jeder Eintrag hat das Schema: Wiederholen, Beschriftung, Startdatum, Enddatum und Berechtigungen einsehen. Wiederholen legt fest, wie ein Termineintrag wiederholt wird. Wöchentlich, monatlich und jährlich sind die einzigen aussagekräftigen Intervalle für eintägige Events. Automatisch löschen bedeutet dass der Termineintrag automatisch nach Ablauf des Endtermins aus der Datenbank gelöscht wird. Geben Sie dann eine individuelle Beschriftung ein. Startdatum = ? bedeutet dass der Termin aktuell ist. Und Enddatum = ? bedeutet der Termin ist unendlich. Ein eintägiges Event hat ein leeres Enddatum. Daten werden im Format YYYY-MM-DD: z.B. 2007-04-31 eingegeben. Berechtigungen einsehen kann öffentlich (jeder kann sie einsehen, Benutzer und Manager können sie ändern), privat (nur der Benutzer und Admin können sie einsehen und ändern) oder admin (Benutzer können sie einsehen, ändern kann sie aber nur der Admin) sein.',
'yearly'=>'Jährlich',
'monthly'=>'Monatlich',
'weekly'=>'Wöchentlich',
'once'=>'Einmalig',
'autoremove'=>'Automatisch löschen',
'Mugshot'=>'Portraitfoto',
'If an URL to the mugshot is set this overrides any uploaded picture! If you upload a picture to the DB make sure that the "URL to mugshot" field is empty and has no space in it. If the admin does not allow uploads the upload button will not show and you can only set an URL. In case of URLs you can omit the protocol and server name if the image is stored on the same server as this application runs. Then you could use /gallery/people/small/me.jpg to locate the image. PHP restrictions may prevent uploads.'=>'Falls eine URL zum Portraitfoto angegeben wird, wird jedes upgeloadete Bild überschrieben! Wenn Sie ein Bild in die Datenbank uploaden, stellen Sie sicher dass das Feld "URL zum Portraitfoto" leer und keinen Leerraum hat. Wenn der Admin keinen Bildupload erlaubt, wird auch kein Uploadbutton angezeigt und Sie können nur eine URL angeben. Falls Sie die URL-Variante wählen, beachten Sie, dass Sie das "http://"-Protokoll und den Servernamen weglassen können, insofern das Bild am selben Server wie die Anwendung liegt. Dann können Sie z.B. /galerie/leute/klein/ich.jpg angeben. PHP Einschränkungen verhindern eventuell den Bildupload.',
'URL to mugshot'=>'URL zum Portraitfoto',
'Upload mugshot'=>'Portraitfoto uploaden',
'Notes'=>'Notizen',
'Text in the Notes box will be displayed exactly as you type it. The area will grow after saving whenever you add more lines of text.'=>'Text in der Notizbox wird genauso angezeigt, wie Sie ihn eintippen. Der Bereich wird größer wenn Sie speichern drücken und neue Zeilen hinzufügen.',
'Groups'=>'Gruppen',
'Add new group'=>'Neue Gruppe hinzufügen',
'Hide this entry'=>'Diesen Eintrag verstecken',
'cancel'=>'Abbrechen',
'trash'=>'Papierkorb',
'adminsave'=>'',

// Error Page
'If you still need help, or you believe this to be a bug, copy the calling URL from the browser '=>'Falls Sie dennoch Hilfe brauchen oder glauben, dass Sie einen Fehler gefunden haben, kopieren Sie die URL von Ihrem Browser ',
' and then please notify '=>' und benachrichtigen Sie dann bitte ',
'NOW'=>'JETZT',
'If necessary, please press the BACK button on your browser to return to the previous screen and correct any possible mistakes. You can also try the following actions that might solve your problem:'=>'Wenn nötig, benutzen Sie bitte den ZURÜCK-Knopf im Browser und korrigieren allfällige Eingabefehler. Sonst können Sie auch folgendes versuchen:',
'An error with your login occured:'=>'Der folgende Loginfehler ist aufgetreten:',
'You are currently not logged in. Please login with appropriate privileges to perform this action.'=>'Sie sind nicht eingeloggt. Bitte melden Sie sich an um diese Seite aufzurufen.',
'You are not allowed to perform this action.'=>'Sie sind nicht authorisiert diese Seite aufzurufen.',
'Please log in: '=>'Bitte einloggen: ',
'Email sending failed: '=>'E-Mail Versand fehlgeschlagen: ',
'Error'=>'Fehler',
'The file type is not valid!'=>'Dieser Datentyp ist nicht erlaubt!',
'Please only select the following:'=>'Bitten wählen Sie nur die folgenden aus:',
'The following error occurred:'=>'Der folgende Fehler ist aufgetreten:',
'default page'=>'Hauptseite',
'destroy session (force logout)'=>'Session zerstören (führt zur Abmeldung)',
'advanced'=>'Weitere Optionen',
'[upgrade database]'=>'[Datenbank updaten]',
'[install database]'=>'[Datenbank installieren]',
'[php info]'=>'[PHP Info Seite]',

// General/Multiple Pages
'added'=>'Neu',
'changed'=>'Geändert',
'deleted'=>'Gelöscht',
'delete'=>'Löschen',
'save'=>'Speichern',

'Name'=>'Name',
'Address'=>'Adresse',
'Zip code'=>'Postleitzahl',
'Location (city)'=>'Ort',
'State'=>'Bundesland',
'Coutry'=>'Land',
'(blank)'=>'(leer)',
'Phone'=>'Telefon',
'Email'=>'Email',
'login page'=>'Loginseite',

'Cowardly refusing to edit empty table.'=>'Keine Einträge gefunden. Tabelle kann nicht editiert werden.',

// General Footer Information
'Page creation time:'=>'Erstellungszeit der Seite:',
'seconds.'=>'Sekunden.',
'This application may use '=>'Diese Applikation verwendet eventuell ',

// register.php?mode=lostpassword
'Go to the '=>'Gehen Sie zur ',
' to use it.'=>' um es zu benutzen.',

// Help Text -- see en.lang.php for english text
'Page-ContextHelp-name' => 'Ein Name oder Firmenname muss angegebenwerden um einen neuen Kontakt anzulegen. Zusätzliche Firmennamen können als Gruppen, oder als Nachgestellter Titel angegeben werden.',
'Page-ContextHelp-address' => 'Alle Felder sind optional. Eine Adresse wird nur dann gespeichert wenn mindestens eines der Felder ausgefüllt ist. Zewi weitere leere Adressen werden nach dem Speichern angefügt.',
'Page-ContextHelp-date' => 'Jeder Eintrag hat das Format: Wiederholung, Name, Start-, Enddatum und Sichtbarkeitsregel. Automatisch löschen entfernt das Datum nach dem Enddatum automatisch aus der Datenbank. Titel ist ein beliebiger Text, z.B: "Geburtstag". Startdatum: ? heisst dass das Event schon abläuft. Enddatum: ? heisst, dass das Ereignis unbegrenzt ist. Leer bedeutet ein eintägiges Datum. Das Datumsformat ist immer: YYYY-MM-DD: 2007-04-31. Sichtbarkeitsregel: Öffentlich (jeder sieht es, Änderungen: selbst, Administrator), Privat (Sichtbarkeit & Änderungen: selbst, Administrator), Admin (Sichtbarkeit: selbst, Administrator, Änderungen: Administrator).',
'Page-ContextHelp-mugshot' => 'Hinaufgeladenes Bild oder Link zu einem Bild. Wenn der Link gesetzt ist wird ein hinaufgeladenes Bild nicht angezeigt. Man muss sich entscheiden welches System man benutzt. Wenn vom Administrator keine Bilderuploads erlaubt sind, kann man nur einen Link benutzen. PHP restrictions may prevent uploads.',
'Page-ContextHelp-property' => 'Jeder Eintrag hat die Felder: Gruppe, Titel, Wert, Sichtbarkeit, Zuordnung. Gruppe selektiert zu welcher Informationsgruppe der Eintrag gehört und wo er bei der Ausgabe erscheint. Zum Beispiel werden alle Emails zusammen angezeigt. Der Titel kann als Suchkriterium verwendet werden, wenn alle Kontakte einheitliche Titel verwenden (z.B: Beruf). Der Wert is beliebiger Text (z.B: Bäcker). Sichtbarkeitsregel: Öffentlich (jeder sieht es, Änderungen: selbst, Administrator), Privat (Sichtbarkeit & Änderungen: selbst, Administrator), Admin (Sichtbarkeit: selbst, Administrator, Änderungen: Administrator). Zuordnung: Wählen sie eine Adresse der diese Information zugeordnet werden soll.',
'Page-ContextHelp-notes' => 'Text wird wie eingegeben angezeigt. HTML kann (wenn erlaubt) verwendet werden.',
'Page-ContextHelp-mandatory' => 'Pflichtfelder müssen ausgefüllt werden sonst kann der Kontakt nicht gespeichert werden.',
'Page-ContextHelp-admin-groups' => 'Diese Liste erlaubt es Gruppennamen zu ändern. Eine Gruppe die mit #h# anfängt wird ausgeblendet. Löschen von Gruppen ist nur direkt über die Datenbank möglich.',
'Page-ContextHelp-admin-db' => 'Der Datenbankbackup erzeugt ein Backup der gesamten Datenbank in der TABR sitzt (nicht nur TABR Tabellen). Dazu muss safe_mode abgeschaltet sein oder ein Link auf mysqldump im safe_mode_exec_dir gemacht werden.',
''=>''
);

// run checkcountries.php in this directory to verify that all are aligned to the master language list
// order the sourrounding/affected countries of the language area to the top, otherwise alphabetic order
global $country;
$country = array(
'--'=>"",
'de'=>"Deutschland",
'at'=>"Österreich",
'ch'=>"Schweiz",
'af'=>"Afghanistan",
'ax'=>"Aland Inseln",
'al'=>"Albanien",
'dz'=>"Algerien",
'as'=>"Amerikanisch Samoa",
'ad'=>"Andorra",
'ao'=>"Angola",
'ai'=>"Anguilla",
'aq'=>"Antarktis",
'ag'=>"Antigua",
'ar'=>"Argentinien",
'am'=>"Armenien",
'aw'=>"Aruba",
'az'=>"Aserbaidschan",
'au'=>"Australien",
'bs'=>"Bahamas",
'bh'=>"Bahrain",
'bd'=>"Bangladesh",
'bb'=>"Barbados",
'be'=>"Belgien",
'bz'=>"Belize",
'bj'=>"Benin",
'bm'=>"Bermuda",
'bt'=>"Bhutan",
'bo'=>"Bolivien",
'ba'=>"Bosnien-Herzegowina",
'bw'=>"Botswana",
'bv'=>"Bouvet-Insel (Norwegen)",
'br'=>"Brasilien",
'io'=>"Britisches Indischer Ozean Teritorium",
'bn'=>"Brunei",
'gw'=>"Buinea-Bissau",
'bg'=>"Bulgarien",
'bf'=>"Burkina Faso",
'bi'=>"Burundi",
'ky'=>"Cayman-Inseln",
'cl'=>"Chile",
'cn'=>"China",
'cx'=>"Christmas-Insel",
'ck'=>"Cook-Inseln",
'cr'=>"Costa Rica",
'ci'=>"Cote d'Ivoire",
'dm'=>"Dominica",
'do'=>"Dominikanische Republik",
'dj'=>"Dschibuti",
'dk'=>"Dänemark",
'ec'=>"Ecuador",
'sv'=>"El Salvador",
'er'=>"Eritrea",
'ee'=>"Estland",
'fk'=>"Falkland Inseln",
'fo'=>"Faroe (Dänemark)",
'fj'=>"Fiji",
'fi'=>"Finnland",
'fr'=>"Frankreich",
'gf'=>"Französisch Guiana",
'pf'=>"Französisch Polynesien",
'tf'=>"Französische Süd- und Antarktisgebiete",
'ga'=>"Gabun",
'gm'=>"Gambia",
'ge'=>"Georgien",
'gh'=>"Ghana",
'gi'=>"Gibraltar",
'gd'=>"Grenada",
'gr'=>"Griechenland",
'gb'=>"Großbritannien",
'gl'=>"Grönland",
'gp'=>"Guadeloupe",
'gu'=>"Guam",
'gt'=>"Guatemala",
'gg'=>"Guernsey",
'gn'=>"Guinea",
'gy'=>"Guyana",
'ht'=>"Haiti",
'hm'=>"Heard- und MacDonald-Inseln",
'hn'=>"Honduras",
'hk'=>"Hongkong",
'in'=>"Indien",
'id'=>"Indonesien",
'iq'=>"Irak",
'ir'=>"Iran",
'ie'=>"Irland",
'is'=>"Island",
'im'=>"Isle of Men",
'il'=>"Israel",
'it'=>"Italien",
'jm'=>"Jamaika",
'jp'=>"Japan",
'ye'=>"Jemen",
'je'=>"Jersey",
'jo'=>"Jordanien",
'vi'=>"Jungferninseln (US)",
'vg'=>"Jungferninseln (britisch)",
'kh'=>"Kambodscha",
'cm'=>"Kamerun",
'ca'=>"Kanada",
'cv'=>"Kap Verde",
'kz'=>"Kasachstan",
'qa'=>"Katar",
'ke'=>"Kenia",
'kg'=>"Kirgisien",
'ki'=>"Kiribati",
'cc'=>"Kokos (Keeling) Inseln",
'co'=>"Kolumbien",
'km'=>"Komoren",
'cg'=>"Kongo",
'hr'=>"Kroatien",
'cu'=>"Kuba",
'kw'=>"Kuwait",
'la'=>"Laos",
'ls'=>"Lesotho",
'lv'=>"Lettland",
'lb'=>"Libanon",
'lr'=>"Liberia",
'ly'=>"Libyen",
'li'=>"Liechtenstein",
'lt'=>"Litauen",
'lu'=>"Luxemburg",
'mo'=>"Macao",
'mg'=>"Madagaskar",
'mw'=>"Malawi",
'my'=>"Malaysia",
'mv'=>"Malediven",
'ml'=>"Mali",
'mt'=>"Malta",
'ma'=>"Marokko",
'mh'=>"Marshall-Inseln",
'mq'=>"Martinique",
'mr'=>"Mauritanien",
'mu'=>"Mauritius",
'yt'=>"Mayotte (Frankreich)",
'mk'=>"Mazedonien",
'mx'=>"Mexiko",
'fm'=>"Mikronesien",
'md'=>"Moldavien",
'mc'=>"Monaco",
'mn'=>"Mongolei",
'me'=>"Montenegro",
'ms'=>"Montserrat",
'mz'=>"Mosambik",
'mm'=>"Myanmar",
'na'=>"Namibia",
'nr'=>"Nauru",
'np'=>"Nepal",
'nc'=>"Neukaledonien",
'nz'=>"Neuseeland",
'ni'=>"Nicaragua",
'nl'=>"Niederlande",
'ne'=>"Niger",
'ng'=>"Nigeria",
'nu'=>"Niue",
'kp'=>"Nordkorea",
'nf'=>"Norfolk-Inseln",
'no'=>"Norwegen",
'mp'=>"Nördliche Mariannen Inseln",
'om'=>"Oman",
'tl'=>"Ost-Timor",
'pk'=>"Pakistan",
'pw'=>"Palau-Inseln",
'pa'=>"Panama",
'pg'=>"Papua-Neuguinea",
'py'=>"Paraguay",
'pe'=>"Peru",
'ph'=>"Philippinen",
'pn'=>"Pitcairn Inseln",
'pl'=>"Polen",
'pt'=>"Portugal",
'pr'=>"Puerto Rico",
're'=>"Reunion",
'rw'=>"Ruanda",
'ro'=>"Rumänien",
'ru'=>"Rußland",
'kn'=>"Saint Kitts und Nevis",
'lc'=>"Saint Lucia",
'ws'=>"Samoa",
'sm'=>"San Marino",
'bl'=>"Sankt Bartholomäus",
'mf'=>"Sankt Martin",
'st'=>"Sao Rome und Prinvipe",
'sa'=>"Saudi Arabien",
'se'=>"Schweden",
'sn'=>"Senegal",
'rs'=>"Serbien",
'sc'=>"Seychellen",
'sl'=>"Sierra Leone",
'sg'=>"Singapur",
'si'=>"Slovenien",
'sk'=>"Slowakische Republik",
'sb'=>"Solomon Inseln",
'so'=>"Somalia",
'es'=>"Spanien",
'lk'=>"Sri Lanka",
'sh'=>"St. Helena",
'pm'=>"St. Pierre und Miquelon",
'vc'=>"St.Vincent und Grenadines",
'sd'=>"Sudan",
'sr'=>"Surinam",
'sj'=>"Svalbard und Jan Mayen Inseln (Norwegen)",
'sz'=>"Swaziland",
'sy'=>"Syrien",
'za'=>"Südafrika",
'gs'=>"Südgeorgien und Südliche Sandwich-Inseln",
'kr'=>"Südkorea",
'tj'=>"Tadschikistan",
'tw'=>"Taiwan",
'tz'=>"Tansania",
'th'=>"Thailand",
'tg'=>"Togo",
'tk'=>"Tokelau-Inseln",
'to'=>"Tonga",
'tt'=>"Trinidad und Tobago",
'td'=>"Tschad",
'cz'=>"Tschechien",
'tn'=>"Tunesien",
'tm'=>"Turkmenistan",
'tc'=>"Turks und Caicos Inseln",
'tv'=>"Tuvalu",
'tr'=>"Türkei",
'ug'=>"Uganda",
'ua'=>"Ukraine",
'hu'=>"Ungarn",
'uy'=>"Uruguay",
'uz'=>"Usbekistan",
'vu'=>"Vanuatu",
'va'=>"Vatikanstaat",
've'=>"Venezuela",
'us'=>"Vereinigte Staaten von Amerika",
'um'=>"Vereinigte Staaten von Amerika (Minor Outlying Islands)",
'ae'=>"Verinigte Arabische Emirate",
'vn'=>"Vietnam",
'wf'=>"Wallis und Futuna Inseln",
'by'=>"Weißrußland",
'eh'=>"West-Sahara",
'an'=>"Westindien",
'zm'=>"Zambia",
'cf'=>"Zentralafrika",
'zw'=>"Zimbabwe",
'cy'=>"Zypern",
'eg'=>"Ägypten",
'gq'=>"Äquatorial-Guinea",
'et'=>"Äthiopien"
);

?>
