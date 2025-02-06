#Issue tracking
 - KEY PAIR exists, or does not exist.  Experienced the issue again with missing key pair. Follow-up steps to include a check for existing locally and in AWS, then create as needed.  This was an issue previously when it created new certificates, and either wrote over the needed cert or failed when it was needed.  Both problems, this is why I pulled that task out.  It should exist with a verification condition.



