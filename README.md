[![built-in-HTML](https://img.shields.io/badge/Built%20in-HTML-green)](https://docs.microsoft.com/en-us/powershell/scripting/install/installing-powershell?view=powershell-7.2) ![PHP](https://img.shields.io/badge/Powered%20by-PHP-blue) ![Bash](https://img.shields.io/badge/Powered%20by-Bash-purple) ![Arch](https://img.shields.io/badge/Arch-x86%20|%20AMD64-blue) ![OS](https://img.shields.io/badge/OS-Debian-green)

## Manage on LAN 1.3.0
###### Copyright (c) Charlie Howard 2022 All rights reserved.

HMTL front end system that can send wake on LAN (magic packets) requests to local machines in order to wake them up and also SSH into local Linux machines to send a shutdown request (working on Windows equivalent).

Shows which machines are online and offline when the page is loaded.

## Configure the app

To configure the app you need to change the local IP's in home.php to the relevant IP's.
You also need to change the MAC Address's in the relevant .sh files in /scripts and the shutdown command if you are using that. If not you can just comment out the shutdown button in home.php

### Changelog

** Update 1.3.0 **

Changed paths and IP's to a more generic name for easier use.

** Update 1.2.0 **

Changed to dark mode.
Added loading animation and simplified loading screen.

** Update 1.1.0 **

Added loading page while the inital page loads.