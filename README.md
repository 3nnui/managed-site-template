
# Managed Site Template 🏗️
```
                                             _ 
  _ __ ___   __ _ _ __   __ _  __ _  ___  __| |
 | '_ ` _ \ / _` | '_ \ / _` |/ _` |/ _ \/ _` |
 | | | | | | (_| | | | | (_| | (_| |  __| (_| |
 |_| |_|_|_|\__,_|_| |_|\__,_|\__, |\___|\__,_|
     (_| |                     __/ |           
  ___ _| |_ ___               |___/            
 / __| | __/ _ \                               
 \__ | | ||  __/                               
 |___|_|\__\___|          _       _            
 | |                     | |     | |           
 | |_ ___ _ __ ___  _ __ | | __ _| |_ ___      
 | __/ _ | '_ ` _ \| '_ \| |/ _` | __/ _ \     
 | ||  __| | | | | | |_) | | (_| | ||  __/     
  \__\___|_| |_| |_| .__/|_|\__,_|\__\___|     
                   | |                         
                   |_|

Web stack focussed on accessibility and security without sacrificing any dev workflow
```

## Goals

*This Project is still in development and as of yet not all of those goals are reached. So this is also like a semi roadmap indicated by the checkmarks.*

This Template is designed with the following goals:

Accessibility:

- good development workflow ✅
- easily self-hostable ✅
- conform to "WAI-ARIA" Standards 
- small footprint ✅
- SEO ✅
- Dockerized Production Preview ✅

Security:

- Content Security Policy headers ✅
- functional in JavaScript disabled browsers ✅
- hardened .htaccess ❌
- 2fa and strict password guidelines ❌
- dockerized deployment behind hardened reverse proxy ❌

## Installation

Clone this repository and run:

```
composer install
```

```
npm install
```

## Development

Start vite's dev server and a simple php dev server by running:

```
npm run dev
```

Visit `localhost:8888` in the browser. Vite's dev server (`localhost:3000`) is only used for serving js, css and assets.

## Preview

Get a local production preview by running:

```
npm run preview
```


### Docker

This Repo provides a full dockerized production preview based on ubuntu running an apache webserver. It requires a rebuild everytime the apache configuration or the image spec is changed.

Build and run the preview container:

```
npm run docker:rebuild
```

Run the container:

```
npm run docker:preview
```

### Podman

Podman is supported. Simply replace docker with podman:

```
npm run podman:rebuild
npm run podman:preview
```

## Production

Build your optimized frontend assets to `public/dist`:

```
npm run build
```

## Deployment

### Manually

Upload the repository to your web server and point your web server to the repository's `public` folder.


## Acknowledgements

 - [getkirby](https://githethub.com/getkirby)
 - [kirby vite multipage kit](https://github.com/arnoson/kirby-vite-multi-page-kit)
 - [tailwindcss](https://github.com/tailwindlabs/tailwindcss)

### Kirby Plugins

- [kirby vite](https://github.com/arnoson/kirby-vite)
- [kirby markdown field](https://github.com/fabianmichael/kirby-markdown-field)
- [kirby column block](https://github.com/youngcut/kirby-column-blocks)
- [kirby fields block](https://github.com/jongacnik/kirby-fields-block)
- [kirby link field](https://github.com/OblikStudio/kirby-link-field)
- [kirby meta knight](https://github.com/diesdasdigital/kirby-meta-knight)
- [kirby security headers](https://github.com/bnomei/kirby3-security-headers)
- [kirby form block suite](https://github.com/youngcut/kirby-form-block-suite)



## License

[MIT](https://choosealicense.com/licenses/mit/)


## Authors

- [@3nnui](https://www.github.com/3nnui)

