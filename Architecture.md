

# Languages and APIs #

Many different technologies go into the creation of a web application. For VisitME, the following diagram represents the underlying interaction between client and server technologies:

<img src='http://img13.imageshack.us/img13/2327/architecturet.png' />

## HTML ##
HTML 4 is the dominant version of the popular markup language being used today to describe how elements of webpages are layed out. Because HTML 5 is still in its infancy, we will not take advantage of any new features it provides.

[HTML tutorial](http://www.w3schools.com/html/default.asp)

## CSS ##
CSS provides a way of customizing how each element on a webpage is represented in the users browser. Because different browsers interpret CSS slightly differently, care attention is required when writing such files.

[CSS tutorial](http://www.w3schools.com/css/default.asp)

## Javascript ##
While Javascript used to be a big taboo on the internet ten years ago, the popularization of AJAX has made it into one of the most fundamental technologies in building dynamic websites.

[Javascript tutorial](http://www.w3schools.com/js/default.asp)

## PHP ##
On the back end we will be using PHP, as the Facebook API natively uses the language and is the easiest to deploy out of any pre-processing language (PHP, JSP, ASP, etc.).

[PHP tutorial](http://www.w3schools.com/php/php_intro.asp)

## Smarty ##
Because the separation of logic and UI is important in maintaining good code, the Smarty templating engine will provide us with an easy way to do so. Smarty is written in PHP and runs server side as an include for all PHP files used in the application.

[Smarty manual](http://smarty.net/manual/en/)

## MySQL ##
Any application that needs to keep track of its users will need some database for it. MySQL is free and easy to get working with PHP.

[MySQL tutorial](http://www.w3schools.com/sql/sql_intro.asp)

## Google Maps ##
To get the longtitude and latitudes of many locations on earth we use Google's geolocation API. For our maps we use the Google Maps API, of course.

[Google Maps Developer's Guide](http://code.google.com/apis/maps/documentation/index.html)