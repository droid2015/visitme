# Use case #

**Description**: Book air ticket via VisitME on one friend's profile page in Facebook.


**Actor**: Facebook users A and B.


**Preconditions**: A and B are both Facebook users with connection; and B has installed VisitME application.


**Success Guarantee(or Postconditions)**: not applicable


**Main Success Scenario(or Basic Flow)**:
  1. User A logs in Facebook.
  1. User A visits user B's profile page.
  1. User A clicks on VisitME tab.
  1. VisitME displays the lowest fare for flying from A's city to B's city.
  1. User A clicks on VisitME's airfare link.
  1. VisitME redirects to the search for the appropriate flight at Kayak.com.


**Extensions(or Alternative Flows)**:
> none


**Exception**:
> 5. If user A is not interested at the price and doesn't click on VisitME button, the use case ends.<br></li></ul>


<b>Special Requirements</b>: not applicable<br>
<br>
<br>
<b>Technology and Data Variations List</b>:<br>
<blockquote>4. When user A visits user B's VisitME tab, VisitME will connect to kayak.com to retrieve latest flight quotes and display them.


**Frequency of Occurence**: Very frequent.