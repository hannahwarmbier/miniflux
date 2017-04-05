<?php

return array(
    'plural' => function($n) { return (($n%10==1 && $n%100!=11) ? 0 : (($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20)) ? 1 : 2)); },
    'attachment' => 'priložena datoteka',
    'When there is nothing to read, redirect me to this page' => 'Kada nema ničeg za čitanje, prosledi me na stranicu',
    'There is nothing new to read, enjoy your favorites articles!' => 'Nema ničeg novog za čitanje, uživajte u omiljenim člancima !',
    'There is nothing new to read, enjoy your previous readings!' => 'Nema ničeg novog za čitanje, uživajte u prethodnim tekstovima!',
    'Immediately' => 'Odmah',
    'The feed id is required' => 'Potreban je identifikacioni kod feed-a',
    'The title is required' => 'Potreban je naslov',
    'The site url is required' => 'Potreban je URL sajta',
    'The feed url is required' => 'Potreban je feed URL-a',
    'or' => 'ili',
    'edit' => 'uredi',
    'cancel' => 'poništi',
    'Feed URL' => 'URL feed-a',
    'Website URL' => 'URL sajta',
    'Title' => 'Naslov',
    'Edit subscription' => 'Uredi pretplatu',
    'Unable to edit your subscription.' => 'Neuspešno uređivanje pretplate.',
    'Your subscription has been updated.' => 'Vaša pretplata je ažurirana.',
    'Older items first' => 'Prvo najstarije',
    'Most recent first' => 'Prvo najnovije',
    'Default sorting order for items' => 'Podrazumevani red proređivanja',
    'This subscription is empty, %sgo back to unread items%s' => 'Ova pretplata je prazna, %svratite se na nepročitane članke%s',
    'sort by date %s(%s)%s' => 'proredi po datumu %s(%s)%s',
    'most recent first' => 'prvo novije',
    'older first' => 'prvo starije',
    'Show only this subscription' => 'Pokaži samo ovu pretplatu',
    'Go to unread' => 'Vidi nepročitane',
    'Go to bookmarks' => 'Vidi omiljene',
    'Go to history' => 'Vidi istoriju',
    'Go to subscriptions' => 'Vidi pretplate',
    'Go to preferences' => 'Vidi opcije',
    'Bookmarklet' => 'Bukmarklet',
    'Subscribe with Miniflux' => 'Pretplati se Minifluxom',
    'Drag and drop this link to your bookmarks' => 'Prevucite ovu vezu omiljene sajtove vašeg internet pregledača',
    'Download full content' => 'Skini pun sadržaj',
    'Downloading full content is slower because Miniflux grab the content from the original website. You should use that for subscriptions that display only a summary. This feature doesn\'t work with all websites.' => 'Skidanje punog sadržaja je sporije zato što Miniflux mora da preuzme sadržaj sa samog sajta. Ovu opciju biste trebali koristiti za sajtove koji prikazuju samo sižea. Opcija ne radi na svim sajtovima',
    'API endpoint:' => 'URL API-ja : ',
    'API username:' => 'Korisničko ime za API: ',
    'API token:' => 'Ključ za API : ',
    'Generate new tokens' => 'Generiši nove ključeve',
    'Bookmark RSS Feed' => 'RSS feed omiljenih članaka',
    'updated just now' => 'ažurirano upravo sada',
    'checked at' => 'provereno',
    'never updated after creation' => 'nikad ažurirano posle stvaranja',
    'Subscription disabled' => 'Pretplata isključena',
    'content downloaded' => 'sadržaj skinut',
    'in progress...' => 'u toku...',
    'unable to fetch content' => 'neuspešno skidanje članka',
    'Download content' => 'Skini sadržaj',
    'download content' => 'skini sadržaj',
    'Help' => 'Pomoć',
    'Theme' => 'Tema',
    'Items per page' => 'Broj stavki po stranici',
    'Previous page' => 'Prethodna strana',
    'Next page' => 'Sledeća strana',
    'Do not fetch the content of articles' => 'Ne skidaj sadržaje članaka',
    'Remove automatically read items' => 'Automatski ukloni pročitane stavke',
    'Never' => 'Nikad',
    'After %d day' => array('Posle %d dan', 'Posle %d dana', 'Posle %d dana'),
    'unread' => 'nepročitani',
    'Unread' => 'Nepročitani',
    'bookmark' => 'dodaj u omiljene',
    'remove bookmark' => 'obriši iz omiljenih',
    'bookmarks' => 'omiljeni',
    'Bookmarks' => 'Omiljeni',
    'Bookmark item' => 'Dodaj stavku u omiljene',
    'No bookmark' => 'Nema omiljenih',
    'history' => 'istorija',
    'subscriptions' => 'pretplate',
    'Subscriptions' => 'Pretplate',
    'preferences' => 'opcije',
    'Preferences' => 'Opcije',
    'logout' => 'ispiši se',
    'Username' => 'Korisničko ime',
    'Password' => 'Lozinka',
    'Confirmation' => 'Potvrda lozinke',
    'Language' => 'Jezik',
    'Save' => 'Sačuvaj',
    'Database size:' => 'Veličina baze podataka :',
    'Optimize the database' => 'Optimiziraj bazu podataka',
    '(VACUUM command)' => '(komanda SQL VACUUM)',
    'Download the entire database' => 'Preuzmi celu bazu podataka',
    '(Gzip compressed Sqlite file)' => '(Datoteka Sqlite kompresovana u Gzip formatu)',
    'Keyboard shortcuts' => 'Prečice na tastaturi',
    'Previous item' => 'Prethodna stavka',
    'Next item' => 'Sledeća stavka',
    'Mark as read or unread' => 'Označi pročitanim ili nepročitanim',
    'Open original link' => 'Otvori originalni link',
    'Open item' => 'Otvori stavku',
    'About' => 'O programu',
    'Miniflux version:' => 'Verzija Minifluxa :',
    'Nothing to read' => 'Nema ničeg za čitanje',
    'mark all as read' => 'obeleži sve pročitanim',
    'original link' => 'originalni link',
    'mark as read' => 'obeleži pročitanim',
    'No history' => 'Nema istorije',
    'mark as unread' => 'obeleži nepročitanim',
    'History' => 'Istorija',
    'flush all items' => 'obriši sve stavke',
    'Item not found' => 'Stavka nije nađena',
    'Next' => 'Sledeća',
    'Previous' => 'Prethodna',
    'Sign in' => 'Upiši se',
    'feeds' => 'pretplate',
    'add' => 'dodaj',
    'import' => 'uvezi',
    'export' => 'izvezi',
    'OPML Import' => 'Uvezi OPML',
    'OPML file' => 'OPML datoteka',
    'Import' => 'Uvezi',
    'refresh all' => 'osveži sve',
    'No subscription' => 'Nema pretplate',
    'remove' => 'ukloni',
    'Remove' => 'Ukloni',
    'refresh' => 'osveži',
    'New subscription' => 'Nova pretplata',
    'Website or Feed URL' => 'URL sajta ili feed-a',
    'Add' => 'Dodaj',
    'http://website/' => 'http://veb-sajt/',
    'Official website:' => 'Zvanični sajt:',
    'Bad username or password' => 'Pogrešno korisničko ime ili lozinka',
    'Unable to update your preferences.' => 'Neuspešno ažuriranje opcija.',
    'Your preferences are updated.' => 'Opcije su ažurirane.',
    'Unable to import your OPML file.' => 'Neuspešno uvoženje OPML datoteke',
    'Your feeds have been imported.' => 'Vaše pretplate su uvežene.',
    'Unable to find a subscription.' => 'Neuspešno nalaženje pretplate.',
    'Subscription added successfully.' => 'Pretplata je uspešno dodata.',
    'Your subscriptions are updated' => 'Vaše pretplate su ažurirane',
    'Unable to remove this subscription.' => 'Ne mogu ukloniti pretplatu.',
    'This subscription has been removed successfully.' => 'Pretplata je uspešno uklonjena.',
    'The user name is required' => 'Korisničko ime je obavezno',
    'The maximum length is 50 characters' => 'Maksimalna dužina je 50 simbola',
    'The password is required' => 'Lozinka je obavezna',
    'The minimum length is 6 characters' => 'Minimalna dužina je 6 simbola',
    'The confirmation is required' => 'Potvrda je obavezna',
    'Passwords don\'t match' => 'Lozinke nisu iste',
    'Do you really want to remove these items from your history?' => 'Da li stvarno želite da uklonite ove stavke iz vaše istorije ?',
    'Do you really want to remove this subscription: "%s"?' => 'Da li stvarno želite da uklonite ovu pretplatu : « %s » ?',
    'Nothing to read, do you want to %supdate your subscriptions%s?' => 'Nema ničeg za čitanje, želite li da %sažurirate vaše pretplate%s?',
    'Show help' => 'Pokaži pomoć',
    'Close help' => 'Zatvori pomoć',
    '%d second ago' => array('Pre %d sekundu', 'Pre %d sekunde', 'Pre %d sekundi'),
    '%d minute ago' => array('Pre %d minut', 'Pre %d minuta', 'Pre %d minuta'),
    '%d hour ago' => array('Pre %d sat', 'Pre %d sata', 'Pre %d sati'),
    '%d day ago' => array('Pre %d dan', 'Pre %d dana', 'Pre %d dana'),
    '%d week ago' => array('Pre %d sedmicu', 'Pre %d sedmice', 'Pre %d sedmica'),
    '%d month ago' => array('Pre %d mesec', 'Pre %d meseca', 'Pre %d meseci'),
    'Timezone' => 'Vremenska zona',
    'Update all subscriptions' => 'Ažuriraj sve pretplate',
    'Remember Me' => 'Zapamti me',
    'Display items on lists' => 'Prikaži članke kao spisak',
    'Summaries' => 'Sižea',
    'Full contents' => 'Punih sadržaja',
    'Force RTL mode (Right-to-left language)' => 'Forsiraj čitanje s desnog na levo',
    'Activated' => 'Uključena',
    'Remove this feed' => 'Ukloni ovu pretplatu',
    'Miniflux' => 'Miniflux',
    'mini%sflux%s' => 'mini%sflux%s',
    'Advanced' => 'Napredne opcije',
    'Documentation' => 'Dokumentacija',
    'Installation instructions' => 'Uputstvo za instalaciju',
    'Upgrade to a new version' => 'Ažuriraj na novu verziju',
    'Cronjob' => 'Ažuriraj pretplate automatski koristeći cron',
    'Advanced configuration' => 'Napredna podešavanja',
    'Full article download' => 'Skidanje punog sadržaja članaka',
    'Themes' => 'Teme',
    'Json-RPC API' => 'API Json-RPC',
    'Fever API' => 'Fever',
    'Translations' => 'Prevodi',
    'Run Miniflux with Docker' => 'Koristi Miniflux kroz Docker',
    'FAQ' => 'ČPP (Često postavljana pitanja)',
    'help' => 'pomoć',
    'api' => 'api',
    'about' => 'o programu',
    'database' => 'baza podataka',
    'Miniflux API' => 'API Minifluxa',
    'menu' => 'meni',
    'Default' => 'Osnovna',
    'Value required' => 'Zahteva se unos vrednosti',
    'Must be an integer' => 'Mora biti celi broj',
    'Remove automatically unread items' => 'Automatski ukloni nepročitane stavke',
    'Toggle RTL mode' => 'Uključi/isključi mod s-desna-na-levo',
    'external services' => 'spoljni servisi',
    'Send bookmarks to Pinboard' => 'Pošalji omiljene stavke na Pinboard',
    'Pinboard API token' => 'Žeton za pristup Pinboard-u',
    'Pinboard tags' => 'Oznake Pinboard-a',
    'Instapaper username' => 'Korisničko ime na Instapaper-u',
    'Instapaper password' => 'Lozinka na Instapaper-u',
    'Instapaper' => 'Instapaper',
    'Pinboard' => 'Pinboard',
    'Send bookmarks to Instapaper' => 'Pošalji omiljene stavke na Instapaper',
    'Authentication' => 'Prijavljivanje',
    'Reading' => 'Čitanje',
    'Application' => 'Aplikacija',
    'Enable image proxy' => 'Aktiviraj proksi za slike',
    'Avoid mixed content warnings with HTTPS' => 'Izbegavaj upozorenja o pomešanom sadržaju kada se koristi HTTPS',
    'Download favicons' => 'Skidaj ikonice veb sajtova',
    'general' => 'opšte',
    'Refresh interval in minutes for unread counter' => 'Broj minuta posle kojih se osvežava brojač nepročitanih stavki',
    'Original link marks article as read' => 'Klik na originalnu vezu obeležava članak pročitanim',
    'Cloak the image referrer' => 'Prikrivaj referatora slika',
    'This subscription already exists.' => 'Ova pretplata već postoji.',
    'Connection timeout.' => 'Uspostavljanje veze predugo traje.',
    'Feed is malformed.' => 'Feed nije pravilno formiran.',
    'Invalid SSL certificate.' => 'Nepravilan SSL sertifikat',
    'Maximum number of HTTP redirection exceeded.' => 'Maksimalan broj HTTP preusmerivanja je dostignut',
    'The content size exceeds to maximum allowed size.' => 'Veličina sadržaja prevazilazi dozvoljenu.',
    'Unable to detect the feed format.' => 'Format feed-a se ne može detektovati',
    'add a new group' => 'dodaj novu grupu',
    'Groups' => 'Grupe',
    'Back to the group' => 'Nazad u grupu',
    'view' => 'pogledaj',
    'Item title links to' => 'Naslov stavke vodi do',
    'Original' => 'Originala',
    'Last Login' => 'Poslednje prijavljivanje',
    'Search' => 'Pretraga',
    'There are no results for your search' => 'Nema rezultata vaše pretrage',
    'Send bookmarks to Wallabag' => 'Pošalji omiljene u Wallabag',
    'Wallabag username' => 'Korisničko ime u Wallabag-u',
    'Wallabag password' => 'Lozinka Wallabag-a',
    'An error occurred during the last check: "%s".' => 'Došlo je do greške tokom poslednje promene: "%s".',
    'User Profile' => 'Korisnički profil',
    'Users' => 'Korisnici/ce',
    'New User' => 'Novi korisnik/ca',
    'New user created successfully.' => 'Uspešno kreiran/a korisnik/ca',
    'Unable to create this user.' => 'Kreiranje korisnika/ce nije uspelo',
    'Edit User' => 'Uredi korisnika-cu',
    'User modified successfully.' => 'Korisnik/ca uspešno modifikovan/a',
    'Unable to edit this user.' => 'Uređivanje korisnika/ce nije uspelo',
    'Remove User' => 'Ukloni korisnika/cu',
    'Not allowed to fetch feed.' => 'Skidanje feed-a nije dozvoljeno.',
    'Unable to save this subscription in the database.' => 'Čuvanje pretplate u bazi podataka nije uspelo.',
    'Titles' => 'Naslova',
    'profile' => 'profil',
    'users' => 'korisnici/ce',
    'Cronjob URL' => 'URL Cron posla',
    'Do you really want to remove this user: "%s"?' => 'Da li stvarno želite da uklonite korisnika/cu: "%s"?',
    'Administrator' => 'Administrator',
    '%e %B %Y %k:%M' => '',
    'Wallabag' => '',
    'Wallabag URL' => 'URL Wallabag-a',
    'Wallabag Client ID' => 'ID Wallabag klijenta',
    'Wallabag Client Secret' => 'Tajna Wallabag klijenta',
    'Action' => '',
    'Yes' => 'Da',
    'No' => 'Ne',
    'Edit' => 'Uredi',
    'The user id required' => 'Potreban je korisnički ID',
    'The username must be unique' => 'Morate koristiti jedinstveno korisničko ime',
    'Current Password' => 'Trenutna lozinka',
    'New Password' => 'Nova lozinka',
    'Wrong password' => 'Pogrešna lozinka',
    'Duplicated feed' => 'Duplikat feed-a',
    // 'This group has been removed successfully.' => '',
    // 'Unable to remove this group.' => '',
    // 'Edit group' => '',
    // 'Group updated successfully.' => '',
    // 'Unable to edit this group.' => '',
    // 'groups' => '',
    // 'There is no group.' => '',
    // 'Do you really want to remove this group: "%s"?' => '',
    // 'This field is required' => '',
    // 'This value must be an integer' => '',
    // 'This text is too long (max. %d)' => '',
    // 'Mark all unread items as read' => '',
    // 'Do not redirect me' => '',
    // 'Last checked: ' => '',
    // 'Last modified: ' => '',
    // 'Expiration date: ' => '',
    // 'ETag: ' => '',
    // 'None' => '',
    // 'Last parsing error: ' => '',
    // 'Ignore expiration date' => '',
);
