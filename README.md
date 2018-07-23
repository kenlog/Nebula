# Nebula plugin for Kanboard

This theme allows you to add special features like replacing the logo and adds syntax highlighting for Markdown code.

# Screenshot
![screencapture-kanban-iltuobrand-it-board-72-2018-07-23-13_03_15](https://user-images.githubusercontent.com/11728231/43073285-4855c4ce-8e79-11e8-849f-d2f7b4a60f88.jpg)
![screencapture-kanban-iltuobrand-it-project-72-task-426-2018-07-23-13_04_19](https://user-images.githubusercontent.com/11728231/43073283-4668ca76-8e79-11e8-8c33-c8d2dc464d86.jpg)
![screencapture-kanban-iltuobrand-it-project-72-task-431-2018-07-23-13_03_36](https://user-images.githubusercontent.com/11728231/43073278-40e6ab54-8e79-11e8-8094-2d41edb38bd7.jpg)
![screencapture-kanban-iltuobrand-it-project-72-task-426-2018-07-23-13_04_53](https://user-images.githubusercontent.com/11728231/43073258-2bea27c6-8e79-11e8-9e55-538c1fbc2dc1.jpg)
![screencapture-kanban-iltuobrand-it-project-72-task-427-2018-07-23-13_03_56](https://user-images.githubusercontent.com/11728231/43073280-44f6f172-8e79-11e8-998c-75955baf8c31.jpg)

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
**Important: remove all unused themes**

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
