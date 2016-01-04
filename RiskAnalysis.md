

# **Human** #

## Client ##
### _Client unavailable (sick)_ ###
|		|Probability	|Severity	|Possible solution|
|:-|:-----------|:--------|:----------------|
|Two weeks	|5/10		      |0/10		   |Postphone client meetings.|
|Until May	|0/10		      |4/10		   |We can communicate with the client remotely, or if they really can't communicate we will contact other people at Kayak that know what we are doing.|

### _Client unavailable (leaves Kayak)_ ###
  * Probability: 0/10
  * Severity: 8/10
  * Possible solution: We will be left without a client, but we can continue the project independently, since Kayak API is open.

### _Client doesn't want VisitME_ ###
  * Probability: 2/10
  * Severity: 2/10
  * Possible solution
    * Default: Client will give us another project to do.
    * No more projects: We will be left without a client, but we can continue the project independently, since Kayak API is open.

## Team ##
### _Team (sick)_ ###
|			|Probability	|Severity	|Possible solution|
|:--|:-----------|:--------|:----------------|
|1 person	|10/10			    |1/10		   |Reassign tasks to other team members or reschedule.	|
|1 role	|4/10			     |6/10		   |Reschedule tasks until at least one person on the role is available.	|
|Whole Team|1/10			     |10/10		  |Reschedule until each role has one person to do it.	|

### _Team (can't continue at UMB)_ ###
|			|Probability	|Severity	|Possible solution|
|:--|:-----------|:--------|:----------------|
|1 person	|1/10			     |3/10		   |Reassign tasks to other team members or reschedule.	|
|1 role	|0/10			     |7/10		   |Other people on the team have to cover the role.		|
|Whole Team|0/10			     |10/10		  |None, project is dead.|

<br />
# **Servers** #

## Servers go down ##
### _One day to one week_ ###
|			|Probability	|Severity 	|Possible solution|
|:--|:-----------|:---------|:----------------|
|Google	|1/10			     |2/10		    |No big deal. Code freezes are at least a week before final presentations. We have backups of all documentation on local machines.|
|Facebook	|4/10			     |2/10		    |In the middle of project, reschedule test tasks; after published, wait until Facebook available.|
|Kayak		|5/10			     |4/10		    |In the middle of project, reschedule coding tasks; after published, stop service temporarily.|
|Internet	|1/10			     |2/10		    |Meet physically or communicate via telephone instead of internet among team members and client; backup all documentation and synchronize code on local machines temporarily.|

### _Longer than one week_ ###
|			|Probability	|Severity	|Possible solution|
|:--|:-----------|:--------|:----------------|
|Google	|1/10			     |5/10		   |Have to set up another SVN repository, possibly on the unix system at UMB.|
|Facebook	|2/10			     |4/10		   |In the middle of coding/testing stage, have to reschedule tasks; otherwise, no big deal.|
|Kayak		|3/10			     |4/10		   |In the middle of coding/testing stage, set up a server on unix system at UMB; after published, stop VisitME service on Facebook temporarily.|
|Internet	|0/10			     |8/10		   |In the middle of project, can meet physically or via phone and backup documentations and synchronize code on local machines, but have to wait for testing.|

<br />
# **Technology** #

## API Upgrade ##
### _Sudden API upgrade (Facebook)_ ###
  * Probability: 4/10
  * Severity: 3/10
  * Possible solution
    * Downward compatibility(likely): Nothing need to fix
    * Otherwise: Retest the whole project and rewrite necessary part.

### _Sudden API upgrade (Kayak)_ ###
  * Probability: 4/10
  * Severity: 4/10
  * Possible solution
    * Default: Client would inform us at least one month before they release new API, so we have enough time for adjustment.
    * Otherwise: If it is downward compatible, we can choose optimize our code or do nothing; if not, retest the whole project and rewrite necessary part.

# **Other** #
### _Natural disaster = combination of people and server problems_ ###
  * Probability: 1/10
  * Severity: 10/10
  * Possible solution: Nothing we can do.

### _VisitME kind of application already exists_ ###
  * Probability: 5/10
  * Severity: 4/10
  * Possible solution: Extend functionality, and improve UI design and query efficiency.