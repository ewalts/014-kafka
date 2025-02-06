# New deployment playbook 014-kafka

This deployment currently has a seperate initial step to create the key pair for AWS instance access. The new_key_pair.yml play needs to be executed prior to creating  instances. There is also a remove_key play to start from scratch.

- docker
- bintami/kafka

