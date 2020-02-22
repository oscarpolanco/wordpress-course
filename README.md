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

### Section 3: Wordpress Specific PHP

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

### Header and footer

With `Wordpress` you can have a `header` and `footer` that you can reuse on all your templates you just need to create 2 files called `header.php` and `footer.php` on the root of your theme then you just need to add `get_header()` and `wp_footer()` on your templates. Adding `wp_footer()` on your template will add the `Wordpress` header menu that is shown when you are logged on the admin.

### Add style on your theme

You can add your `style` using your `function.php` (the file that you can add the functions that will interact with the `Wordpress core`). First, need to create a function that will add your `style` file like this example:
```php
function my_function_name() {
        wp_enqueue_style('my_style_name', get_stylesheet_uri());
}
```

Inside of the function, you will call the `wp_enqueue_style` that will receive a name and a path of a file. In this example, we are using the `get_stylesheet_uri` function that gives us the path of the stylesheet that is on the root.

Them to add the style we add use the `add_action` function that recive the name of a `hook` (specific moment) and the name of a function that will run on a specific moment. Following the previews example we will have this:

```php
add_action('wp_enqueue_scripts', 'my_function_name');
```

This hook will run when `Wordpress` add the code on the header.

### Add scripts on your theme
You can add your custom `scripts` on your theme using `wp_enqueue_script` function that will receive a couple of parameters:

- Name of the file
- The current path of the file
- Name of the script dependency
- The version of the file
- Boolean that allow you to load your script on the footer or header (`true` for the footer)

```php
function university_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'university_files');
```

The `get_theme_file_uri` is a function that retrieves a path of a file receiving a string that represents the path of our custom file.

### Avoid cache locally
You can use the `microtime` function on your custom scripts and stylesheet to avoid the cache of the browser just need to put the function on the place of the version of the file like the following example (DO NOT USE IT ON PRODUCTION)

```php
function university_files()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'university_files');

```
## Section 4: Pages

On this section we will handle different `pages` using Wordpress.

### Add page title with Wordpress
To add the `title` tag information of your page you can use `Wordpress` functions that will know witch `title` they should put on every page. We use the `add_theme_support` function that receives the option that you need. In this case we use the `title-tag` option that represent the `title` of the page.

```php
function university_feature()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_feature');
```
