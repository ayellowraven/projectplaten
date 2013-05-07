# Project Platen – An open-source platform for creating digital books

- Project Platen Version: 1.0 Beta
- Symphony Version: 2.3.3 Beta 2
- Date: 2013.04.30
- Github Repository: <http://github.com/ayellowraven/projectplaten>

## Contents

* [Overview](#overview)
* [Server requirements](#server-requirements)
* [Installing](#installing)
	* [Via Git](#via-git)
	* [Via the old-fashioned way](#via-the-old-fashioned-way)
	* [File permissions](#file-permissions)
* [Updating from an older version](#updating-from-an-older-version)
	* [Version-specific notes](#version-specific-notes)
	* [Updating via Git](#updating-via-git)
	* [Updating via the old-fashioned way](#updating-via-the-old-fashioned-way)

## Overview

Project Platen is an open-source framework for publishing digital books as websites. It includes page templates for book content, a powerful search engine (via Elasticsearch), and the basics for creating public APIs, for other applications to interact with the book contents, its metadata, and any other content you wish to include (such as datasets for those who wish to publish their data openly).

The design includes styles for easy reading, basic bookmarking, linking to specific headings and paragraphs, and day/night reading modes.

Symphony is a `PHP` & `MySQL` based CMS that utilises `XML` and `XSLT` as its core technologies. This repository represents version `2.3.3 Beta 2` and is considered unstable.

Visit [the Symphony website](http://getsymphony.com/), [the forum](http://getsymphony.com/discuss/) or learn how you can [contribute to Symphony](https://github.com/symphonycms/symphony-2/wiki/Contributing-to-Symphony).

## Server requirements

- PHP 5.2 or above (PHP 5.3 recommended)
- PHP’s LibXML module, with the XSLT extension enabled (`--with-xsl`)
- MySQL 5.0 or above
- A webserver (known to be used with Apache, Litespeed, Nginx and Hiawatha)
- Apache’s `mod_rewrite` module or equivalent
- PHP’s built in `json` functions, which are enabled by default in PHP 5.2 and above; if they are missing, ensure PHP wasn’t compiled with `--disable-json`
- Elasticsearch (follow install instructions from: https://github.com/nickdunn/elasticsearch)

## Installing

Before installation, see the [notes on file permissions](#file-permissions).

### Via Git

1. Clone the git repository to the location you desire using:

		git clone git@github.com:ayellowraven/projectplaten.git

1. Run the following command to ensure the submodules are cloned:

		git submodule update --init --recursive

1. Point your web browser at <http://example.com/install/> and provide
details for establishing a database connection and about your server environment. (It may tell you the `static_section` extension was not enabled, do not worry.)

1. Remove installer files:

	`rm -rf install/ workspace/install.sql`
	
### Settings

After completing the install process, point your browser at <http://example.com/symphony> and log in. I have added documentation to much of the admin section to help you set up your book. First, go to the preferences (System → Preferences)

1. ElasticSearch: Project Platen uses ElasticSearch for its search functions. If you have not set up ElasticSearch before, you can follow the instructions at <https://github.com/nickdunn/elasticsearch>. *You will not be able to use the ElasticSearch tab until you have finished setting this up.* However, you do not have to set it up immediately, all the other parts of the site will still function.

1. Project Platen Cookies: You need to provide a prefix for cookies unique to this book (this is so you can host multiple books on a single domain). The name should be in the form of a handle (without spaces).

1. Useragent Details: In order to use auto day/night reading mode, you need to check Utilize Geoplugin.

### Code Updates

1. `workspace/js/script.js`: Replace all instances of `[book]` with the value of Project Platen Cookies on: `/symphony/system/preferences/`
		
1. `workspace/utilities/page-title.xsl`: Replace all instances of `[Author]` with the name of the author.

1. `workspace/utilities/master.xsl`: Remember to set your google analytics ID. (Comment)

### Importing your book

You can create new chapters through the admin panel through Book → Chapters. By default it accepts the text in Markdown, also allows html (be sure to close all your tags).

If your content is already in XML form, you can use the XML importer at `/symphony/extension/xmlimporter/importers/`. (From the Symphony admin panel Blueprints → XML Importers.) More on how to use the XML Importer is available at: [http://symphonyextensions.com/extensions/xmlimporter/]

If your book is in CSV format, you can also use the CSV importer at `/symphony/extension/importcsv/`, however this is often the most difficult since the importer can be finicky with the formatting.

### Building the API

Most of the API is ready for your content, you only need to add some text in the files that start with `api` in `workspace/pages`.

### File permissions

1. Symphony’s installer will inform you if it needs write access to files that it doesn’t already have, but you can ensure it has the access it needs by temporarily setting files to world-writeable.

	`cd /your/site/root`  
	`chmod -R 777 .`

1. Once Symphony is successfully installed, you should change file permissions to something tighter for security reasons. Symphony recommends `755` for directories and `644` for files as a good default, but this may need to be changed depending on your server’s users and groups configuration. For example, you may need to change directories and files that Symphony needs to subsequently write to to `775` and `664` respectively.

#### Useful commands

You may find these commands useful when adjusting file and directory permissions.

To recursively chmod directories only:

	find /your/site/root -type d -exec chmod 755 {} \;

To recursively chmod files only:

	find /your/site/root -type f -exec chmod 644 {} \;