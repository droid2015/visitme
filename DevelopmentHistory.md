# Introduction #

We began the project in October 2009 with nobody on the team having developed a Facebook application before, and with only two people having PHP experience. None of the APIs used on VisitME have been used by team members on previous projects. All code (minus listed APIs) was written from scratch.



# October #
The month of October was all about defining VisitME and figuring out how we were going to implement it.

  * Spent many hours creating documentation on what to do, which APIs to use and how to divide the work.
  * It was decided that we were going to create a canvas page and a profile box.
  * Created mockups.
  * Created software architecture.
  * Risk analysis.
  * Short stories and use cases.
  * Negotiating hosting plans.

# November #

## Early ##
Some issues popped up right before we began working on code:
  * In the beginning of November Facebook announced that profile boxes would be deprecated.
  * Kayak requested we change our design to use their RSS feeds instead of their search API, limiting our search flexibility but increasing our performance.

## Coding Marathon, November 7 - 8, 2009 ##
In order to get a lot of work done in a short time, 3 team members camped at UMB overnight for a 15 hour marathon:

  * Early on we decided to go with an Application Tab, as suggested by Facebook, to replace the now deprecated Profile Box functionality.
  * Had to obtain a database of airports. Found an airports.txt file on Kayak with over 9000 airports. Not sufficient for every location, but enough for a prototype.
  * Converted text file into a mysql database.
  * Had to find a good RSS parser. Found MagpieRSS after going through 3 other APIs.
  * Dealt with Facebook API access issues, inconsistent privileges between the different connection points (Canvas, Application Tab, Profile Box), lots of research.

## Presentation, November 12, 2009 ##
In preparing for the mock venture capitalist presentation we spent a lot of time preparing a snazzy presentation. We even got matching VisitME t-shirts!

  * Had to fix a swarm of bugs for the presentation.
  * Prep for the event took away time from coding.
  * We got the most funny-money!
  * Launched the [beta](PublicBeta.md)!

## Social features ##
  * Got invites working.
  * Found out invites API is getting deprecated.
  * Decided to stick with current invite code until new API is finalized.

## Research ##
We solved all of these questions before the following coding marathon:
  * How do we solve getting people from neighborhoods with no airports to the nearest one?
  * How do we deploy VisitME to as many Facebook users as possible?
  * What do we need to get analytics on Facebook working?

## Coding Marathon, November 25 - 26, 2009 ##
  * Got "nearest airport" functionality working by performing some magic on Google.
    * Required parsing a dynamic Google page
    * Found out that fopen() doesn't work, used curl instead
    * Coordinate lookup table
    * Some MySQL queries
    * Finding a suitable search radius
  * Happy Thanksgiving @ UMass Boston!