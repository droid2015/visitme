This page contains feedback from Henrik in response to the code review done by the professor.

# index.php #
http://code.google.com/p/visitme/source/browse/trunk/index.php

### File should know its own name (in this case, index.php) ###
Files are not sapient. They can not be self-aware. Also, if you don't know what file you are looking at, you either sleep deprived or use a horrible editor that does not make it clear what file you are editing. Even _Emacs_, an ancient editor, does this. Along with every IDE that's any good.

### It looks as if the values for the variable arguments on lines 36-38 come from the required common.php . It'd be nice to say so, for newbies like me. ###
Where the variables come from are pretty obvious to PHP coders with _minimal_ experience. Commenting it would be redundant unless our code is to become a tutorial of some sort.

### Lines 45-49. Is there any chance that this loop is infinite? What if Facebook is uncooperative?	Same at lines 80-83. ###
The loop continues until Facebook cooperates. If Facebook does not cooperate, the page will time out. Regardless of the technical choice made, we result in an error should the API call fail **multiple** times.

### Comments at lines 97-102 should be visible on all lines. ###
This point may have had some validity 20 years ago. Comments are clearly marked green or brown in any modern editor (Eclipse, Visual Studio, Notepad++, many lesser known editors) that supports syntax highlighting. If you are still using an editor without syntax highlighting, please upgrade to something made more recently.

### Lines 226-227. Why does code inside if ($debug) need to be commented out? ###
Because we got to the point where printing out a whole RSS feed in debug mode became a nuisance. The code is still there in comments incase we ever need to re-enable it.

### else logic on lines 290-293 is easy to lose after long if block. Reverse the logic. ###
No. Putting the less common branch later is better for performance.

### Nice prettyprinting seems to stop at line 297. ###
What prettyprinting?

# canvas.tpl #
### What does this file do? (.tpl extension is new to me) ###
tpl stands for _template_. In our case it's HTML with some added markup that gets processed by Smarty.

## Variables seem to be supported ( $host\_url on line 33) so I think they could (and thus should) be used for the constants specifying various widths and heights. ##
Just because we can does not mean we should. Widths and heights are a front-end thing, not to be touched in the back-end (php files). Not to mention it would make no sense to us to pass those values into our templates as variables. (Really, nobody who does good web development does this.)

### Internationalizing this code/page would be difficult. ###
No, it wouldn't. It's simply a matter of passing in a locale variable to the template, transferring all the static text to an english locale file and loading the text that way. If we really needed to do this, we could support internationalization with about 30 minutes of work, plus 30 minutes to test it in a different language.

### Line 159. Should "charged" be "charge"? If this wording comes from Kayak then acknowledge source so it can be checked periodically (by hand) for updating. Or get it at runtime. ###
We have updated our template file. There is no point in checking the wording periodically when the wording hardly, if ever, changes. Also, the suggestion to check a wording at runtime is asking for a disaster to happen. To extrapolate - imagine Visit Me gets 1 million hits per day. It would be a complete waste of processing power and bandwidth to run a check for the disclaimer each time.

The proper solution: Kayak writes a script, when they take over the application, that pushes a new disclaimer as needed to all their apps when they have one.

# Additional Comments #
Certain parts of the feedback given regarding index.php seem to have been provided by someone other than the professor from the distant past (1980's) who traveled to the future (2010) by going over 88 miles per hour in the DeLorean. While I congratulate that person on successfully engaging in time travel, here are some things, whomever it may concern, that may be of use:

**[Google](http://www.google.com/search?hl=en&q=smarty+tpl+tutorial)**

**[A good free editor with syntax highlighting](http://notepad-plus.sourceforge.net/uk/site.htm)**

**[An amazing free IDE with syntax highlighting, code autocomplete, drag and drop gui editing and much more](http://www.microsoft.com/Express/)**

## P.S. ##

|<a href='http://img98.imageshack.us/img98/6766/vieditor1.png'><img src='http://img98.imageshack.us/img98/6766/vieditor1.png' height='300' /></a>|<a href='http://img443.imageshack.us/img443/6136/0224visualstudio.jpg'><img src='http://img443.imageshack.us/img443/6136/0224visualstudio.jpg' height='300' /></a>|<a href='http://img119.imageshack.us/img119/3489/notepadplus3d4255bat7.png'><img src='http://img119.imageshack.us/img119/3489/notepadplus3d4255bat7.png' height='300' /></a>|
|:-----------------------------------------------------------------------------------------------------------------------------------------------|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
|<p align='center'>Crappy 1976 editor.</p>                                                                                                       |<p align='center'>Awesome 2010 IDE</p>                                                                                                                            |<p align='center'>What most of us use for Visit Me and other web development.</p>                                                                                           |