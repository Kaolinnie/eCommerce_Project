type nul > messages.po
ren index.php index.bak
find.bat . -iname "*.php" -exec xgettext.bat -j {} ;

ren index.bak index.php
ren messages.po messages.pot