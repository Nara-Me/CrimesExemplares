# CrimesExemplares — README

<img width="1920" height="931" alt="imagem" src="https://github.com/user-attachments/assets/e1db26f0-58af-4b9e-a98b-2e304d56916d" />

**Project Context**
- **What:** This repository contains a small website for the CrimesExemplares book in the context of a university project (all in portuguese). It uses server-side PHP files (for routing/templates) and compiled front-end assets (CSS/JS).

**Quick Local Usage**
- **Serve locally with PHP installed:** from the project root run:

  `php -S 127.0.0.1:8000`

  then open `http://127.0.0.1:8000/start.php` in your browser.

**Building/Updating Front-end Assets**
- The audio player code lives in the `audio/` folder and uses Gulp. To rebuild assets:

  ```bash
  cd audio
  npm install
  npm start   # runs gulp (per package.json)
  ```

  If you have `gulp` installed globally you can also run `gulp` directly in the `audio` folder.

**Files of interest**
- `start.php`, `index.php` — entry points for the site
- `css.css`, `js.js` — compiled front-end assets
- `audio/package.json` — build scripts for audio/player (uses Gulp)
