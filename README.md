# Getting started

## How to run this

1) Checkout

2) Build the docker image
```bash
./dockerBuild.sh
```

3) Run the docker image
```bash
docker run --rm -p 80:80 -ti pokerwebsite:latest
```

TODO:
* Create Postgres Container
* figure out a way to get data into postgres container
* create docker-compose.yaml file