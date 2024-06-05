# Quick (& dirty) reproduction scenario of high CPU usage when running `SELECT ... FOR UPDATE` queries on Percona

You can start the stack using Docker Compose with `docker compose up`.
2 DB servers running the [same workload](./repro.php) will be started:
* one is using the `percona` image and consumes more resources than expected
* the other is using the `mysql` image
