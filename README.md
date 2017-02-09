# My updates

* Added some error handling to zipconfig.php
* Changed achive function to only write a temporary zip file to not fill up the folder. Downloaded zip still has timestamp.
* Changed file permissions in package_routines to give write access for httpdusr (g+w)
* Removed fixed installation path "/share/CACHEDEV1_DATA..." now using $installPath (fix for my old TS239)

