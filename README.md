# average_reading_time

Dieses Modul berechnet die durchschnittliche Lesezeit für eine Seite und gibt sie aus.
Das Modul kann über einen Embed-Code in eine Seite oder mit folgendem PHP-Code in ein Template eingefügt werden.
Das Modul ist kompatibel mit UliCMS ab Version 2018.3

Die Zahl der Wörter je Minute kann konfiguriert werden, wobei die Standardeinstellung auf **300 Wörter pro Minute** eingestellt ist.

```php
<?php 
echo replaceShortcodesWithModules('[module="average_reading_time"]')
?>
```