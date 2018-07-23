# Nebula plugin for Kanboard

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![screencapture-localhost-php-kanboard-dashboard-2018-07-22-20_36_07](https://user-images.githubusercontent.com/11728231/43059362-5f599c0e-8e4c-11e8-8989-8bc623914a49.png)
![screencapture-localhost-php-kanboard-board-1-2018-07-22-20_36_43](https://user-images.githubusercontent.com/11728231/43059361-5f3314da-8e4c-11e8-85a4-04d28c71f027.png)
![screencapture-localhost-php-kanboard-project-1-task-2-2018-07-22-20_39_22](https://user-images.githubusercontent.com/11728231/43059363-5f7c974a-8e4c-11e8-9f00-1f5864e18a96.png)
![screencapture-localhost-php-kanboard-board-1-2018-07-22-20_14_17](https://user-images.githubusercontent.com/11728231/43059360-5f0f1f80-8e4c-11e8-87d1-7a3b41ea26c4.png)

Author
------------
- Valentino Pesce
- License MIT

Requirements
------------
Kanboard >= v1.2.5  
Kanboard installed at a web server.
You can find the download at [kanboard.org](https://kanboard.org/)

Installation
------------
You have the choice between 3 methods:

1. Install the plugin from the Kanboard plugin manager in one click
2. Download the zip file and decompress everything under the directory `plugins/Nebula`
3. Clone this repository into the folder `plugins/Nebula`

Note: Plugin folder is case-sensitive.

Add options for the theme
------------
- Replace the KB logo with your own logo  
For more information have a look in the config.php

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
Contributing or modifying the theme
------------
Clone the repository: 
```console 
git clone https://github.com/kenlog/Nebula.git
```
Reporting Issues
------------
Please [create an issue](https://github.com/kenlog/Nebula/issues) for any bugs you've found.
