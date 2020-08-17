# SPH - PHP exercise solution #

## Prerequisites

* [Docker](https://docs.docker.com/install/) ^18.09.2
* [Docker Compose](https://docs.docker.com/compose/install/) ^1.23.2

## Getting started

1. Initialize the environment, you should create your own `.env` environemnt or copy from `.env.example`:
    ```
     cp .env.example .env
    ```
2. Start all services with docker:
    ```
    docker-compose up
    ```
3. That's it!
  
All migrations will run automatically.

The application runs as an HTTP server at port 8081 (config in `.env` file with variable `NGINX_PORT`). You can go to your `http://localhost:8081` for frontend UI. 
For the backend API

```http
GET /api/environment HTTP/1.1
Host: localhost:8081
```

Backend Staging UI & API endpoint:

http://ec2-54-169-215-76.ap-southeast-1.compute.amazonaws.com

```http
GET /api/environment HTTP/1.1
Host: http://ec2-54-169-215-76.ap-southeast-1.compute.amazonaws.com
```

