# Christian Union (Melbourne Uni) Website

## Overview
The writer of this README is Harry Zhang. Here is a list of who I know has managed this website.

Jonathan Milford (-2015)
Matthew Habibi (2015-2016)
Harry Zhang (2016-)

This is a static website. This means it doesn't connect to any database and provides the same content always.
The homepage contents is in `index.php`
I implemented templating for this website. This means that there is a common header for each website (`head.php`).

## Technologies
We use PHP to create the HTML. The website was PHP when it was handed to me. I could have changed it to just raw HTML but I wanted to have a common header so I kept it.

We also use templating, the logic of templating is in the `ti.php` file

It uses SASS for CSS (check sass folder)

## Developing
### Running the server
To run the PHP server, I used XAMPP.

### Modifying SASS
To modify the CSS

```
npm run start
```




### Rendering in the browser locally
When you run the XAMPP server, you can go to a browser and view the website using the URL

```
localhost/cuwebsite
```

### Committing
git add *
git commit -m "commit message"
git push origin master

### Putting into production
You can log into my godaddy server through Putty using

```
IP: 148.66.136.120
Port: 22
username : harryzhang
The password is 1P....
```

Be careful when you update that the links to the home and other sites still work
