![GitHub release](https://img.shields.io/github/release/texnixe/kirby3-codepen.svg?maxAge=1800) ![License](https://img.shields.io/github/license/mashape/apistatus.svg) ![Kirby 3 Pluginkit](https://img.shields.io/badge/Pluginkit-YES-cca000.svg)

# Kirby 3 CodePen embed

This plugin provides a shortcode (KirbyTag) for embedding CodePens in your text.

## Commercial Usage

This plugin is free but if you use it in a commercial project please consider

- [making a donation](https://www.paypal.me/texnixe/10) or
- [buying a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/38380?link=1170)

## Installation


### Download

[Download the files](https://github.com/texnixe/kirby3-codepen/archive/master.zip) and place them inside `site/plugins/kirby-similar`.

### Git Submodule
You can add the plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/texnixe/kirby3-codepen.git site/plugins/kirby-similar
    $ git submodule update --init --recursive
    $ git commit -am "Add Kirby CodePen plugin"

Run these commands to update the plugin:

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

### Composer

```
composer require texnixe/kirby3-codepen
```

## Usage

The CodePen Id is required.

```
(codepen: jwGBh)
```

## Options

### Config options

You can set the following default options in your `config.php`:

```
'texnixe.codepen.preview'    => true;
'texnixe.codepen.height'     => 300;
'texnixe.codepen.themeId'    => 1
'texnixe.codepen.defaultTab' => 'js,result'
```

### Tag options

You can overwrite the config options in the KirbyTag, e.g.

```
(codepen: jwGBh height: 250)
```

In addition to the above settings, the following options are available:

- `user` : default ''
- `title`: default ''

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you encounter any problem, please [create an issue](https://github.com/texnixe/kirby3-codepen/issues/new).

License

[MIT](https://opensource.org/licenses/MIT)


It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.


