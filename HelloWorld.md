**<font color='red'>This page is deprecated as it does not represent our current deployment strategy, which has rapidly advanced beyond the scope of the application described on this page.</font>**

# Introduction #
Before implementing our actual VisitME we need to get a basic application running to verify all the hardware and software we will be using can and does work together.

To do this, we will need to set up all the required items in the following order, which are all detailed further below:

  1. Register a new application with Facebook
  1. Webserver
  1. Facebook sample application
  1. Kayak API

Because this is a sample application we do not need to model it in great detail, nor use proper backend/frontend separation. This program only serves the purpose of verifying our setup.

# Registering the Facebook application #
This step is completed after getting VisitME as a registered application on Facebook.

# Webserver #
The webserver being used for this test application will be the same server used for the final application. See the specifications on the [deployment](Deployment.md) page.

# Facebook sample application #
Facebook provides sample code for people to get started. We can use this as a test to see if we have set up our server and configurations properly.

# Kayak API #
Because we are working with the Kayak API to create VisitME, it only makes sense to verify we can get it working in our sample application. Because Kayak returns XML data through its API, we can simply print out that information in a raw format without parsing it.