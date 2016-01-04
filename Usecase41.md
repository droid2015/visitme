# Use case #
**Description**: Book air tickets via VisitME on one's profile page in Facebook.

**Primary Actor**: Facebook user A.

**Secondary Actors**: Facebook users, B, C, and D.

**Preconditions**: A, B, C, and D are Facebook users. B, C, and D are on A's friend list. A has installed VisitME application. A has selected B, C, and D from A's friend list as well as A has chosen the flight directions from B's, C's, and D's cities to A's city at VisitME's preferences.

**Success Guarantee(or Postconditions)**: not applicable

**Main Success Scenario(or Basic Flow)**:
  1. User A logs in Facebook.
  1. User A visits own profile page.
  1. User A clicks on VisitME tab.
  1. VisitME displays the lowest fares for flying from B's, C's, and D's cities to A's city.
  1. User A clicks on VisitME's airfare link.
  1. VisitME redirects to the search for the appropriate flight at Kayak.com.

**Extensions(or Alternative Flows)**:
none

**Exception**:

> 5. If user A is not interested at the price and doesn't click on VisitME button, the use case ends.

**Special Requirements**: not applicable

**Technology and Data Variations List**:
> 4. When user A visits own VisitME tab, VisitME will connect to kayak.com to retrieve latest flight quotes and display them. The number of secondary actors may vary from one to the maximum number of people on A's friend list.

**Frequency of Occurence**: Normal.