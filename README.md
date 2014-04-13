grongor/adminer-custom
======================

This repository contains untouched **Adminer** (http://www.adminer.org) and my wrapper.

This wrapper adds auto-update function (downloads latest **adminer-mysql-en.php** file from **adminer.org**) based on Adminer's **verifyVersion cookie** and actual version stored in **version** file.

Also there are some plugins initialized, including my own plugin **my-dump-date** which makes sure that name of exported file is always database name (or alternatively domain name stripped of dashes and dots) with appended date and time.

There is also a custom **adminer.css** stylesheet downloaded from **adminer.org**.

You are welcome to download, modify and distribute this code as long as you will follow all licences of Adminer itself.
