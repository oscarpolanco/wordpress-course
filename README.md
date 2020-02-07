# This is a Wordpress example site.

This code is power by:
[Wordpress](https://wordpress.com/)
[Local by Flywheel](https://localbyflywheel.com/)

## Section 1: Getting started

In this section, we will install all the things we need to work on our example project.

### Install Local by Flywheel
- Download and Install [Local by Flywheel](https://localbyflywheel.com/)
- Press create site
- Give your site a name
- Add your user info
- Click `view site` and you should see an example site
- To add this repo to your site just in the path bellow your site name in the `Local by Flywheel` admin
- Initiate a `git` repository
- Add this repository as it `origin`
- Download all files

## Section 2 First Coding steps: PHP

### Creating a New theme
- First, create a folder on inside of the [theme directory](https://github.com/oscarpolanco/wordpress-course/tree/master/wp-content/themes) with the name of your theme
- You need to create 2 files inside of the directory that you just created (With these exact names):
    - `index.php`
    - `style.css`
- Inside of your `style.css` add your `theme` information as a comment on the top like the following example
```css
/*
 Theme Name: Theme Name
 Author: Author Name
 Version: 1.0
*/
```
- If you  want an image for your theme you just need to add an image on your theme directory with the name `screenshot.png` ideally you want the image to be `200px` wide by `900px` tall
- Your theme should be available on the `theme` section of your admin

### Functions
Wordpress has a set of functions that help us to build our site.

- `bloginfo` => Is a Wordpress function that returns us general theme information depending on the parameter that you send. This information can update going to the admin on the setting section; click on general.

## Section 3: Wordpress Specific PHP
In this section, we will handle the `Wordpress loop` to handle post and pages.

### Wordpress loop
On `Wordpress` we loop over `post` using some build functions that will know witch information they need to render.

Here is an example:
```php
<?php

    while(have_posts()) {
        the_post(); 
?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
<?php }
```
On the example `have_post` will have the number of post that you will render so you will render the correct number of post that you need. `the_post` will have the current post but to add more detail information using pre-build functions to get more information such as:

`the_title` => Returns the title of a post
`the_permalink` => Returns the url of a post
`the_content` => Returns the content of the editor of a post

### Wordpress template hierarchy

Here a [url](https://developer.wordpress.org/themes/basics/template-hierarchy/) of the official `Wordpress` documentation
