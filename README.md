# Christian Union (Melbourne Uni) Website

## Overview

Website URL `http://melbourne.cu.org.au/`\
The writer of this README is Harry Zhang. Here is a list of who I know has managed this website.

Jonathan Milford (-2015)\
Matthew Habibi (2015-2016)\
Harry Zhang (2016-)\

This is a static website. This means it doesn't connect to any database and provides the same content always.\
The homepage contents is in `index.php`\
I implemented templating for this website. This means that there is a common header for each website (`head.php`).\

## Technologies
We use PHP to create the HTML. The website was PHP when it was handed to me. I could have changed it to just raw HTML but I wanted to have a common header so I kept it.

We also use templating, the logic of templating is in the `ti.php` file

It uses SASS for CSS (check sass folder)

The Node Package Manager is used to compile the SASS into CSS.

We use Bootstrap for the carousel on the connect page (and some Javascript)

I've been hosting the website on GoDaddy using my personal account which I'm happy to do. My customer ID there is 162677176


## Developing

### Rendering in the browser locally
First download XAMPP. I forgot the setup, but I put all my files the in `D:\xampp\htdocs\cuwebsite`.

I can then open up XAMPP and press a START button to start the server. Then I can go to my browser eg Chrome or Safari and use the URL `localhost/cuwebsite` to access it.

### SCSS Background
Don't modify the CSS files, you can but I already implemented a nice structure using SASS. In essence, SASS allows you to write CSS in different files (which makes it super easy to organize) and then it compiles all of it into one CSS file in the end.

We use SCSS which is a popular flavor or form of SASS. You can use your favourite text editor to modify anything in the `sass/` folder. 

I learnt SASS and CSS from this course, it was well worth the money.
https://www.udemy.com/advanced-css-and-sass/

I followed the conventions from that course, including the way my folders and files are structured. In essence, `main.scss` takes in all the other SCSS files. 

`/sass/abstract/_mixin.scss` is for mixins acrross all SCSS.
`/sass/abstract/_variables.scss` contains the colors and other constant accross all SCSS
`/sass/base/_base.scss` is extremely important. 
`/sass/base/_typography.scss` is for different kinds of text
`/sass/components` is the directory containing specific SCSS for each section or element in the website.

You can find the compiled CSS in `/css` folder. Then in `/head.php` you can see `/css/style.css` is being imported.
### Modifying SCSS
Run
```
npm run start
```
Then just modify your files in your favourite text editor, save, and then it should compile your SASS files into new CSS files. 

### Committing
```
git add *
git commit -m "commit message"
git push origin master
```

### Putting into production
To pull those changes from Github to Godaddy, we use Putty. PuTTY allows you to 'log in' into your machine on GoDaddy so you can modify the server. 

Use the following settings on PuTTY
```
IP: 148.66.136.120
Port: 22
```

Then click 'open'\
A window will pop up asking for username and password
```
username : harryzhang
The password is 1P....
```

That's not the actual password obviously.

Then naviate to `/public_html` and run `git pull`.\
This should take all those changes you made and put them on the server. You're done! 
## Final Notes
Be careful when you update that the links to the home and other sites still work

If you have any questions email me at harryzhanga@gmail.com
