# Minimit Update

**Simple plugin to have a fullscreen browser and javascript detection.**

Just put the php settings and the php include as shown in the source code, you can set the language and the browser's versions you want to check.

It has a fixed design where you can change the logo and the colors from the settings. The warning text is translated to English, Spagnish, German, French and Italian.

My website [minimit.com](http://www.minimit.com) and my [twitter](http://twitter.com/beaver82minimit).

Usage
-------

``` php
/* general */
$muLang = "en"; // en it es fr de
/* required browser version */
$muIeVersion = 8;
$muFfVersion = 3.6;
$muSafVersion = 4;
$muOprVersion = 11;
/* graphic settings */
$muImage = "logo.png";
$muTextColor = "#484848";
$muInnerColor = "#ffffff";
$muOuterColor = "#e5e7e9";
include(realpath(dirname(__FILE__)) . "/minimit-update.php");
```

Acknowledgements
-------
Copyright © 2013 Riccardo Caroli. Licensed under [MIT license](http://www.opensource.org/licenses/mit-license.php).
