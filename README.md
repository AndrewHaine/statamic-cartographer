# Statamic Cartographer

> WIP drag and drop map editor for Statamic.


## Development

### Installation
To install this addon for local development create a directory at `addons/andrewhaine/statamic-cartographer` and clone the repository.

You will also need to tell composer to use the local copy of the addon rather than fetching it from packagist, to do this add the following entry to the `repositories` value in `composer.json` and run `composer update`.

```
{
    "type": "path",
    "url": "addons/andrewhaine/statamic-cartographer"
}
```

### CP assets
The CP assets for this addon (i.e. the vue files which power the custom fieldtypes) are built using ViteJS with additional type checking from Typescript. 

All frontend dependencies are installed via yarn so you should run `yarn install` inside the addon directory after cloning the repository.

In order to build these for local development you can use `yarn build` which will automatically run the typescript command against the project files.

#### Node version
The node version for this addon is managed via nvm, the current version being used is stored in the `.nvmrc` file.

#### Publishing the vendor files
I'm using docker so am unable to use the symlinking functionality suggested in the Statamic docs, however the following command will manually publish the cartographer js file to the public vendor directory where it can be accessed by the CP.

```
yarn build && cp -r  resources/dist/ ../../../public/vendor/statamic-cartographer
```
