May 19.

Final comments. Yes, your work was awesome. Congratulations.

I was surprised to find this page deprecated.

April 5.

I haven't been here in a while.
Several things to schedule for the last sprint:

On page
http://code.google.com/p/visitme/wiki/Instructions

there's a promise to provide a clean downloadable package of code when development is complete. When will that happen?

Provide dates and responsibilities for the April presentation and for the poster for May.

March 11

Good work on the first sprint. That's the good news.

The bad news is that I don't see a good enough plan for the second sprint. In particular, who will do the team-switch work (both preparing your instructions and working on other teams')? Where is your schedule entry for dealing with [Issue 26](https://code.google.com/p/visitme/issues/detail?id=26), which I have explicitly made part of my specifications for this sprint? I don't really like "find 10 bugs" on your schedule.

I suspect that, as usual, you will do excellent work without properly documenting the process. I don't want to interfere with your smooth functioning, but do want to see more visible indications of how the work gets done. If necessary, add to the schedule some  retrospective entries - when a particular task is completed, put it on the schedule with the completion date and programmer. (If you do that, please flag those entries as after-the-fact.)

February 16

No specs yet for the second deliverable - your schedule promises them this week, so you're not late. But I am curious.

No minutes from your last (important) meeting with Joelle. If the specs you're writing will contain the important information from that meeting, so you shouldn't spend time going back to fill in the minutes.

I see bug fixes and code improvements checked into svn. That's good.


---


February 11

I enjoyed hearing in class about the ideas for your second application. I expect specs on the wiki soon. Your schedule promises that and other things for tomorrow. (I won't be able to look until Sunday at the earliest, but of course you will meet your deadline anyway.)


---


February 4

Excellent start on first sprint. I look forward to new requirements from Joelle. I note that you're fixing bugs even though that's not on your first sprint schedule.


---


December 22

The schedule says the RequirementsSpecification would be done by December 15, a week ago. Has it been rescheduled?


---


December 12.

Browsing the code, I found the location of the VisitMe server and database and the database username and password hard coded in the php config file. That feels wrong to me. It should be easy to keep this information external, private, and supplied at installation time - i.e. when you move the php to the server. The readme file for deployment can explain it all.

I've entered this an an issue, too.


---


November 22.

OK I've responded to Henrik's invitation and joined facebook. What I've seen so far confirms my impression that this is not a place where I want to spend any time. But as long as I have a presence there I might as well try VisitMe. But I have no clue how to set it up. I can't find any help on this wiki.

Nor do I see the one step build (check out and deploy to the VisitMe server(s)) yet.

---


November 12.

Nice job on the beta release!

The page at
http://code.google.com/p/visitme/wiki/PublicBeta
has good bullets about what needs to be done before going public to a wider audience. I'd like to see these items scheduled.

I think it's time for a little more long range planning for the spring. The Future category on the schedule goes only as far as the end of November.

I don't see a one step build or a deployment description anywhere on the wiki (perhaps I haven't looked carefully enough). If the project were to stop suddenly right now (perhaps because the entire gopandas team got a team job offer they couldn't refuse) then Paul or anyone else ought to be able to come to this google code site and see immediately how to get and install the latest stable version of VisitMe. That should probably be a single file on the Downloads tab, created by a script if possible, or by easy to follow instructions if not, containing the latest version automatically checked out from svn and a readme with instructions, also checked out of svn. And of course the script itself should be from svn. (It could be on the wiki, since the wiki is backed up by the same svn as the code.)


---


November 9.

I've corresponded with Paul about Kayak branding and the IP questions. Here's the resolution:

```
i've always been very clear that the code can and should be
published -- so the students can take this code and do anything they
want with it, including creating a competing site if they want. they
can name their version anything they want. but the version which goes
on our facebook page should be named a KAYAK app. don't you think that
sounds fair?
```

So make sure the UI you design for Kayak meets Kayak's spec - but design the interface between the UI and the code so that it's easy to rebrand (whether or not you ever get around to doing that). Your smarty architecture should make that easy.

You'll want to keep at least "powered by Kayak" in any version.


---


November 2.

I see lots of new functionality requested at the October 30 client meeting. Do those all go into your first release? Consider maintaining a list of requested features in a single place so that you can prioritize and schedule them.


---


October 27.

The use case for Story6 doesn't seem to me to match the sample UI. The former calls for much more information than the latter has fields for.

Use cases should be separate from short stories (since one use case may be part of several stories, and a story may need more than one use case). You should also use a more traditional template, in which the user's actions and the system's responses are clearly separate.


---


October 22. I like the CodingGuidelines. You acknowledge that they're a customization of some you got from PHPBB. You should link to the original, and perhaps write a few words about the changes you made, and why.

Do you have a plan to enforce these guidelines?


---


October 20. Why have dates in Hello World on the schedule been changed to WOC (waiting on client)? I can see why you might need that for the Kayak API, but for a simple facebook app hello world?

You should probably have dates even for the items that depend on things beyond your control (like client input) so you can record when you need or expect them by. That way you can track their effects on the rest of your schedule.


---

October 2. You are awesome.

October 2. I think your schedule should distinguish between major milestones and the intermediate milestones along the way. Perhaps color or font could do that without too much trouble. And you should schedule a few more of the major milestones so the schedule reaches out more than just a week or two.