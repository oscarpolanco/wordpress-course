# This is a Wordpress example site.

This code is power by:
[Wordpress](https://wordpress.com/)
[Local by Flywheel](https://localbyflywheel.com/)

## Section 1: Getting started

On this section we will install all the things we need to work on our example project.

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
Wordpress have a set of functions that help us to build our site.

- `bloginfo` => Is a Wordpress function that returns us general theme information depending the parameter that you send. This information can be update going to the admin on the setting section; click on general.