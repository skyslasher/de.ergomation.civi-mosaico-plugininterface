# CiviCRM Mosaico Plugin Interface

This is a plugin for plugin developers. It empowers them to create plugins for the Mosaico
e-mail editor for CiviCRM.
A new hook `hook_civicrm_mosaicoPlugins` is introduced to insert/modify Mosaico configuration and/or Mosaico plugins.

The hook function receives an array with the following structure (with sample payload):
```php
[ 'plugin-name' => [
    'plugin' => 'function( vm ) { window.viewModel = vm; }',
    'scripts' => [ 'some_absolute_path/some_script.js', 'some_other_absolute_path/some_other_script.js' ],
    'styles' => [ 'some_absolute_path/some_style.css', 'some_other_absolute_path/some_other_style.css' ],
    'config' => [ 'tinymceConfigFull' ][ 'toolbar1' ] = 'numlist'
  ],
  'other-plugin-name' => [ ... ],
  ...
]
```
| Key | Description |
|---|---|
| `plugin-name` | Name to index the plugin/configuration block in the array |
| `plugin` | The Mosaico JavaScript plugin object itself |
| `scripts` | Array of script files to be included on Mosaico boot, usually contains your JS plugin |
| `styles` | Array of styles to be included |
| `config` | Mosaico configuration parameters |

See a sample usage of the hook function at the bottom of the source of `civi_mosaico_plugininterface.php`.
For a guide to Mosaico plugins, see https://github.com/voidlabs/mosaico/wiki/Mosaico-Plugins.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.2+
* CiviCRM 5.17+
* CiviCRM FlexMailer plugin (included in CiviCRM 5.28+, older versions need to download the extension)
* CiviCRM Mosaico plugin

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl de.ergomation.civi-mosaico-plugininterface@https://github.com/skyslasher/de.ergomation.civi-mosaico-plugininterface/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/skyslasher/de.ergomation.civi-mosaico-plugininterface.git
cv en civi_mosaico_plugininterface
```

## Getting Started

Use the hook in a plugin

## Known Issues

Currently there are no known issues.
