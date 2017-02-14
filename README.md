# dnsmasq-qpkg release v0.1g 

This qpkg is a new release / fork of the original dnsmasq-qpkg repository (v0.1f) by Eric Hiller [erichiller/dnsmasq-qpkg]( https://github.com/erichiller/dnsmasq-qpkg)
and includes the updates for log table coloring and add interface type bond by Ryan Blakeslee [rblakeslee/dnsmasq-qpkg](https://github.com/rblakeslee/dnsmasq-qpkg).

### BugFix
Fixed some issues of the v0.1f release:
* Error 404 ... The requested URL /postdat.php was not found on this server.  
* Correct the references to installation path in postdat.php
* setting the right ownership of all the .conf files
 
### Changes / Additions

* The archive function is changed to write a temporary zip file to avoid filling the folder with old zip files. The downloaded zip file still has the timestamp-filename.
* Added feature to set/change two upstream DNS servers in the config tab.
* Added feature to configure DNS alias names (cname records) via a new tab in the webui.

The dnsmasq binary files are not updated, as I'm not into cross compiling.

The package is only tested on TS239 Pro II (x86) with firmware 4.2.2

Currently it does not run on NAS with Container Station enabled!

[Download](https://github.com/joachimw68/dnsmasq-qpkg/releases)

Tests and comments are welcome.



