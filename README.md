# Wordpress Theme for bretterwelten.de

This is a wordpress theme for the website bretterwelten.de - a website about board games, gaming nights and board game rules. The focus is to write some articles about board games and gaming in general without aiming at any targets. The website is supposed to be lightweight, secure and respect the data privacy of the user. I spent a lot of efforts reading and configuring Wordpress and the webserver, to remove cookie setting and lots of unwanted stuff that is being loaded and displayed by default.

I develop this website as I go because I wanted to start writing right along. If you're interested in a (German language) board game site, have a look: https://bretterwelten.de/

## Roadmap

The website is *very* basic currently, only using the very rudimentary Wordpress functions. However, I will extend the features and the templates step-by-step.

* Implement commenting function again (currently offline)
* Implement tagging and tag display
* Draw/sketch a logo for the site and display it
* Archive page
* Category page
* Activate search and implement search result page
* Implement tracking via Piwik - probably needs cookie consent
* Extend the homepage display to contain the article image next to the excerpt

If you want to, you can fork this project or just copy from the code.

## What makes it special?

* I spent extended time for the Wordpress setup function in ```functions.php``` to shut down all the unnecessary and unwanted stuff Wordpress fires up by default
* I also took some time to prepare an exhausting lot of configuration in ```assets/htaccess```. Please note, that this is tailored to the options of my provider - it may not work at your site. However, it contains a lot of performance, security and data privacy-relevant configurations.

## Changelog

The first week went by with a lot of changes, but from now on (10/20/2016) I will keep a changelog of the things I will add or extend.

### 2016-10-20

* Simplified the open graph function ```bw_open_graph``` in ```src/functions.php```
* Introduced single page and overview page navigation (simple: forward, backward)
