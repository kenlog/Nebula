[![Latest release](https://img.shields.io/github/release/kenlog/Nebula.svg)](https://github.com/kenlog/Nebula/releases)
[![GitHub license](https://img.shields.io/github/license/Naereen/StrapDown.js.svg)](https://github.com/kenlog/Nebula/blob/master/LICENSE)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/kenlog/Nebula/graphs/contributors)
[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?v=103)]()
[![Downloads](https://img.shields.io/github/downloads/kenlog/Nebula/total.svg)](https://github.com/kenlog/Nebula/releases)

# Nebula plugin (modern theme for kanboard)

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![board](https://user-images.githubusercontent.com/11728231/48299849-78c1cf80-e4d3-11e8-8d3a-83b25f86f6f9.jpg)
![task1](https://user-images.githubusercontent.com/11728231/48299850-78c1cf80-e4d3-11e8-89c4-03cc85af8345.jpg)
![task2](https://user-images.githubusercontent.com/11728231/48299851-78c1cf80-e4d3-11e8-800a-9325cff01ade.jpg)
![task3](https://user-images.githubusercontent.com/11728231/48299852-78c1cf80-e4d3-11e8-8861-9582a17dacb1.jpg)
![chart](https://user-images.githubusercontent.com/11728231/43127800-9fc1e370-8f30-11e8-92d8-f4129b642349.jpg)



Author
------------
- Valentino Pesce
- License MIT

Requirements
------------
Kanboard >= v1.0.48  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)

Installation
------------
You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/Nebula`
3. Clone this repository into the folder `plugins/Nebula`

Note: Plugin folder is case-sensitive.  
**Important: remove all unused themes**

Add options for the theme
------------
- Replace the KB logo with your own logo  
For more information have a look in the config.php  
### Supports the [Customizer](https://github.com/creecros/Customizer) plugin

Syntax highlighting for Markdown code
------------
151 languages currently supported by Prism, with their corresponding alias, to use in place of xxxx
 
```diff
-```xxxx
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
-```
+```php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}
+```

```
### :star: If you like it, do not forget to give a star on GitHub! 

:construction_worker: Any contribution will be highly appreciated
------------
Clone the repository: 
```console 
git clone https://github.com/kenlog/Nebula.git
```
:bug: Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/Nebula/issues) for any bugs you've found.
