# Use case #
**Description**: Book air tickets via VisitME on one's profile page in Facebook.

**Actors**: Facebook user A, B.

**Preconditions**: A, B are Facebook users. A has VisitMe, while B doesn't

**Success Guarantee(or Postconditions)**: not applicable

**Main Success Scenario(or Basic Flow)**:
  1. User A logs in Facebook.
  1. User A visits B's profile.
  1. Facebook does not display VisitME information on B's profile.
  1. User A goes to VisitME application.
  1. User A enters B's name in search bar and hits enter.
  1. VisitME returns the lowest cost flight for B to visit A.

**Extensions(or Alternative Flows)**:
> 5a. A goes to "invite friends" link
> 6a. Facebook-based invite box shows up
> 7a. A invites B to VisitME
> 8a. A notification is sent to B

**Exception**:

> 4. If user A is not interested at the price and doesn't click on VisitME button, the use case ends.

**Special Requirements**: not applicable

**Technology and Data Variations List**:
> 3. When user A visits own profile, VisitME will connect to kayak.com to retrieve latest flight quotes and display them.

**Frequency of Occurence**: Normal.