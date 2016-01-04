

# Introduction #

Because this is an open source project with multiple contributors, we need to have certain coding guidelines in place to keep things consistent and organized. Originally the guidelines were going to be near carbon copies of the [PHPBB guidelines](http://area51.phpbb.com/docs/coding-guidelines.html), but it is better to have something custom to our project.

Key differences are:
  * ~~The use of mixed case variable and function names instead of using lowercase names with underscores, to be more in line with what most of the team is used to.~~ <font color='red'><b>Upon review, we have decided to change our guidelines to use lower case names with underscores in order to be more consistent with the various 3rd party APIs we are using.</b></font>
  * Specific tab length
  * No rules that are more beneficial to coding for PHPBB than anything else.

# Names #
## Variables ##
In general, use mixed case for variable names, with no underscores. Variable names should be meaningful, but not too long.

Right:
```
$max_iterations
$zebra
$is_available
$is_awesome
$eating_cool_whip
```

Wrong:
```
$mItr
$ZeBrA
$isAvailable
$iuwehdfiuahfikuaskdjsnkajd
$eating_CoolWhip
```

## Functions ##
Functions follow the same convention as variables.

Right:
```
function compute_something()
{
	echo "something";
}
```

Wrong:
```
function computeSomething()
{
	echo "something";
}
```

## Classes ##
Classes should be named with the first character in uppercase as always.

Right:
```
class Panda
{

}
```

Wrong:
```
class panda
{

}
```

# Whitespace #

## Comments ##
Right:
```
// This is a well formatted comment

/* This is a well formatted
 * multi-line comment 
 */

/* This is a well formatted
 * multi-line comment for a
 * function or class */
function do_something()
{
	echo "Hi!"
} 
```

Wrong:
```
//This is a poorly formatted comment

/*This is a poorly formatted
multi-line comment */

/*This is another poorly formatted
multi-line comment
*/
```

## Tabbing ##
Anyone editing code should set their environment to use 4 spaces per tab.

### Indentation ###
Always indent code properly.

Right:
```
$k = 1;
for ($i = 0; $i < $j; $i++)
{
	if ($i > $k)
	{
		echo "loop".$i."<br/>";
	}
}
```

Wrong:
```
$k = 1;
for ($i = 0; $i < $j; $i++)
{
if ($i > $k)
	{
echo "loop".$i."<br/>";
		}
}
```

### Multiple variables ###

When handling multiple variables it makes more sense to use some tabs as follows:

Right:
```

$i		= 0;		// This
$orange		= "orange";	// is
$pineapple	= "pineapple";	// nice
$max		= 1728368;	// commenting

```

Not so right:
```

$i= 0;	// This
$orange	= "orange";		// is
$pineapple	= "pineapple";	// not nice
$max  = 1728368;// commenting

```

### Spacing ###

The following are all the right way of doing things:

```
switch ($type)
{
	default: echo "unknown";
}

function ($apple, $banana, $cake)
{
	echo "omnom";
}
```

And this is how not to code:

```
switch($type)
{
	default: echo "unknown";
}

function($apple,$banana, $cake)
{
	echo "omnom";
}
```

## Newlines ##

### Brackets ###

The Java coding convention for brackets is like this:

```
if ($someBoolean) {
	if ($someOtherBoolean) {
		echo "Hello, world!";
	}
}
```

However it's much more legible to line up the opening brackets with their level of indentation:

```
if ($some_boolean)
{
	if ($some_other_boolean)
	{
		echo "Hello, world!";
	}
}
```

Note that there is no need to sacrifice code legibility to cut down the line count.

### Between variables and functions ###

This one is common sense...

Right:
```
$foobar		= 1;
$barfoo		= 2;
$teletubbies	= 3;

// Commenting on a function
function compute()
{
	echo "done.";
}

/* Commenting on another function
   multiple lines */
function execute()
{
	echo "ding!";
}
```

Wrong:
```
$foobar		= 1;
$barfoo		= 2;
$teletubbies	= 3;
// Commenting on a function
function compute()
{
	echo "done.";
}
/* Commenting on another function
   multiple lines */
function execute()
{
	echo "ding!";
}
```