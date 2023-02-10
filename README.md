# webDemo
Demo website for CS class

## Logging in to popu server:

Use a terminal window or Putty if on a Windows machine:
```bash
> ssh username@popu.local
```
You may have to use the server's ip address instead of 'popu.local' if this gives you trouble.

## Navigating to the website folder

All of the project directories are in the folder /var/www/html/projects. You should have created a link to this folder in your home directory so you can get ther by using:
```bash
> cd projects
```

## Cloning your github repository
Clone your project's repo. You will probably have to use sudo. For example, to clone this project you'd use:
```bash
> sudo git clone https://github.com/lurbano/webDemo.git
```

## Accessing your website through the browser
Use your browser to access webpages: The test.php file in this repository can be gotten to with the url:
```
http://popu.local/projects/webDemo/test.php
```

## General Procedures
It is highly recommended that you edit your website's repository on your computer, sync it to github, then pull it down to the server using the git pull command while you're in your directory on the server:
```bash
> cd /var/www/html/projects/webDemo
> git pull
```

