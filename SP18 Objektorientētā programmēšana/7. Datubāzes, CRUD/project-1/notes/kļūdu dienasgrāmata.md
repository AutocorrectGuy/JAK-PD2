# Kļūdu dienasgrāmata
---
## 13.12.2022 - mysqli kļūda

Pakāsu kādas 2 stundas meklējot iemeslu, kādēļ nevaru izmantot php `mysqli`.
  1. Izveidoju jaunu `php.ini` failu balstoties uz `php.ini-production` kopijas *(jo dokumentācija ieteica izmantot šo failu, nevis -development versiju)*.
  2. Failā `php.ini` atkomentēju `extension=mysqli`.
  3. Pārvietoju pārdēvēju pašu `php` mapi par `php`. Noņēmu versijas numuru. To darīju, jo uzmetoties kļūdai `PHP Fatal error: Uncaught Error: Class 'mysqli' not found in` kā avots tika uzrādīts `C:\php\ext\`.
  4. Pārmainīju vides mainīgos (environment variables) uz attiecīgi jaunajai php atrašanās vietai. 

## 14.12.2022 - composer

1. Komanda `composer init` izveido `vendor/composer` mapi ar visu, kas nepieciešams `composer` pluginā. Bet ar to nepietiek.
2. Modificēju `composer.json` failu, lai atvieglotu `namespace` pierakstu. Tagad tas ir `"App\\": "./"` (visam priekšā būs `App`).
3. Pēc tam, kad ir modificēts `composer.json` vajag palaist komandu `composer update` un tad var `index.php` importēt `autoload.php` failu no `./vendor/autoload.php`. 
4. Kādēļ `autoload.php` neieliekas `composer` mapītē? Joprojām nezinu, bet tas daudz nesarežģī dzīvi. 

## 14.12.2022 - javascript onsubmit

1. Izrādās, parastajos html failos js sintakse var būtiski atšķirties. `form` tegā `onsubmit` izrādās, ka nepieciešams `atgriezt` vērtību, nevis tikai padot funkciju, kā tas ir `react`.
2. Nepareizi ```onsubmit="handleSubmit(event)"```; pareizi ```onsubmit="return handleSubmit(event)"```;