# RPI
A custom WordPress website theme for RPI

# :metal: Getting started

1. [Pages](#page_with_curl-pages)
2. [Styles](#dancer-styles)
3. [Navigation](#rocket-navigation)
4. [Footer](#shoe-footer)
5. [Homepage](#house-homepage)
6. [Colors](#art-colors)

# :open_file_folder: Basic File Structure

## :page_with_curl: Pages

Each individual page is titled page - page title ex. about = page-about.php

## :dancer: Styles

Do not make style changes in the css directory. The styles for the website are all in the \_scss directory. Each individual page has had its own style sheet setup for styles unique to that page, and then there are sheets setup for general styling like the footer or typography. The \_variables.scss sheet has site wide variables that can be used in your scss sheets.

## \_scss folder

### Variables

Variables folder contains our sites variables, mostly color variables for styles throughout the sites

### Breakpoints

This file contains my breakpoints for mobile styling

### Layout

Contains all the styles used for layouts, columns, images, text blocks etc...

### Header

Styling for the sites header/navigation

### Footer

Styling for the sites Footer

### Typography

Typography settings for headers paragraphs etc ...

### Buttons

Styling for our sites buttons and links

### General

Holds any styles that are general or consistent with all pages throughout the site

### Icons

Styling for any icons the site might use

### Individual Pages

Each individual pages custom styles are held in the scss file with the corresponding page name ex. home = home.scss

## :milky_way: JavaScript

The js folder holds all your JavaScript files

## :computer: Functions

Functions.php contains any custom funtions for the site

# :eyes: Usage

## :rocket: Navigation

This theme has three registered menus. Main menu for the primary navigation, footer menu for the footer menu and mobile menu, for customizing separate menus for each of these locations if needed.

To edit the main navigation use the header.php file

## :shoe: Footer

Edit the sites footer find footer.php

## :house: Homepage

The homepage uses the front-page.php file

## :art: Colors

To add new colors, colors get added to the lightboxes using the custom fields for the color pages.

Colors were also added as posts with the color image as the featured image. This was mostly just an experiment to build the colors into search and also build a related colors feature to guide people to similar colors of the same category.    
