minimit-update
==============

Fullscreen overlay on deactivated javascript or obsolete browser

My website [minimit.com](http://www.minimit.com) and my [twitter](http://twitter.com/beaver82minimit)

Description
-------
Simple plugin to have a fullscreen browser and javascript detection.

Just put the php settings and the php include as shown in the source code, you can set the language and the browser's versions you want to check.
It has a fixed design where you can change the logo and the colors from the settings. The warning text is translated to English, Spagnish, German, French and Italian.

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
include("minimit-update.php");
```

License
-------
Licensed under MIT licenses.

© 2013 Minimit
