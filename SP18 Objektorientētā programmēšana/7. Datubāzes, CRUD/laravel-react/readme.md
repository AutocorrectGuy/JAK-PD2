
## Nepieciešamās lejupielādes
`php`: https://www.php.net/downloads.php
`mysql`: https://dev.mysql.com/downloads/installer/
`Composer`: https://getcomposer.org/download/
`nodejs`: https://nodejs.org/en/download/

## Bekenda uzstādīšana

### 1. Instalēt `Laravel installer` izmantojot `Composer`
Laravel instalācija (globāli): 
```batch
composer global require laravel/installer
```
Pārbaudi, vai, `Laravel installer` ir sekmīgi instalējies:
```batch
laravel --version
```
*Pamācība: https://laravel.com/docs/9.x* 

---
<br/>

### 2. Konfigurēt `php.ini` failu
Ja tāda nav php instalācijas mapē, tad nokopēt `php.ini-production` un pārdēvēt par `php.ini`. Tad šajā failā noņemt komentārus (jeb `;`) no:
```
extension=zip
extension=fileinfo
extension=mysqli
extension=pdo_mysql
```

---
<br/>

### 3. Izveidot jaunu `Laravel` projektu
```batch
laravel new example-app
cd example-app
composer dump-autoload
composer install --no-scripts
composer update
```
Pārbaudi, vai serveris darbojas (piemēram, 3001. portā):
```batch
php artisan serve --port=3001
```
*Pamācība: https://laravel.com/docs/9.x*

---
<br/>


## Frontenda uzstādīšana
### Ievads 
Pirms lasi tālāk, atceries, ka, ja klonē projektu not `github`, tad visas pakotnes var instalēt ar vienu komandu `yarn install`. Turpinājumā parādīšu kā šajā projektā izmantotās pakotnes instalēt pilnīgi no nulles. Neaizmirsti, ka tev jāatrodas projekta mapītē (kurā atrodas public, src u.c. mapes), lai to šī komanda būtu veiksmīga.

---
<br/> 

### 1. Izveidot `React` aplikāciju.<br/>
Izmantošu: 
`yarn` paku menedžeri `npm` vietā.
`typescript`, valodu `javscript` vietā.
```batch
yarn create react-app my-app --template typescript
```
*Pamācība: https://create-react-app.dev/docs/getting-started/* <br/>

---
<br/>

### 2. `Tailwindcss` uzstādīšana un konfigurācija
Instalēt `tailwindcss` pakotni:
```batch
yarn add tailwindcss
```
Izveidot `input.css` failu, no kura tiks ģenerētas klases. Piemēram, `"./src/services/tailwindcss/input.css"`. Piezīme: šim failam obligāti jābūt `"./src"` mapītē. <br/><br/>
`input.css` failā pievienot kodu. Šos kods norāda, kurus `tailwind tokens` mēs varēsim izmantot. Pēc noklusējuma, parasti izmanto šādas klases:
```css
@tailwind base;
@tailwind components;
@tailwind utilities;
```

Uzģenerēt un konfigurēt `tailwind.config.js` <br/>
Vispirms uzģenerējam failu:
```batch
yarn tailwindcss init
```
Pēc tam konfigurējam. Šeit pierakstām failus, kuros meklēsim `tailwindcss` ierakstus, piemēram, `"bg-green-500"`. Balstoties uz atrastajiem ierakstiem tiks uzģenerēts `index.css` fails.
```ts
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{ts,tsx}"],
  theme: {
    extend: {},
  },
  plugins: [],
}
```
`Package.json` failā pievienot jaunu skriptu (pie `"scripts"`). Pierakstīt, kur ir iepriekš izveidotais `input.css` fails un tiks ģenerēts output fails. Parasti output failu nosaucu par `index.css`:
```json
"scripts": {
  ...
  "tailwindcss": "npx tailwindcss -i ./src/services/tailwindcss/input.css -o ./src/services/tailwindcss/index.css --watch"
}
```
*Pamācība: https://tailwindcss.com/docs/installation* <br/>

---
<br/>

### 4. Pievienot pārējās pakotnes (`packages`)
Pēc brīvas izvēles. Jau no paša sākuma zinu, ka man vajadzēs:
  - React routeri:
```batch
yarn react-router-dom @types/react-router-dom
``` 
  - Ikonas:
```batch
yarn add @fortawesome/fontawesome-svg-core
yarn add @fortawesome/free-solid-svg-icons
yarn add @fortawesome/free-regular-svg-icons
yarn add @fortawesome/react-fontawesome@latest
```
*Pamācība: https://fontawesome.com/docs/web/use-with/react/* <br/>

---
<br/>

Piezīmes/dienasgrāmata

## 17.12.2022
---
Lai iegūtu pašreizējās lapas nosaukumu - `pathname`, reactā vajag izmantot `react-router-dom` pakotnes piedāvāto `useLocation`. Rezultātā aktīvās lapas nosaukumu iegūst:
```ts
import { useLocation } from 'react-router-dom'

const location = useLocation()
console.log(location.pathname)

```
To svarīgi zināt, jo ierastais `window.location.href` te nedarbojas kā plānots, ja darbojos ar `<Link />` (arī no `react-router-dom`), nevis ar standarta`<a></a>`. Kāpēc tā ir? Tādēļ, ka atsvaidzinoties lapai, piemēram, nospiežot F5, pārzīmējas pilnīgi visa lapa. Bet izmantojot `<Link />` tikai komponenti. 

---

## 18.12.2022
Veidojot `Laravel` bekendu novēroju, ka ļoti daudzas lietas JAU ir izstrādātas un sakonfigurētas, tikai nedaudz jāpārzin, kuras, kas atrodas un kādi ir noklusējuma konfigurācijas iestatījumi. Piemēram, ir izveidots atsevišķs `routeris` - `/api`. Un viņā `CRSF` nav iestatīts, lai arī parastajos routous tas ir iestatīts, kas rezultājejas `status code - 419`. Šajā aplikācijā, tā kā `Laravel` galvenokārt tiek izmantots kā `API` un viss routings ir iekš `React`, pietiek ar to, ka darbošos zem `/api` routera failā `/routes/api.php` (un, protams, kontrollerus un visu pārējo dala citos failos).

