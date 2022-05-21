# Fibonacci REST API

This API contains and endpoint that can receive an index "n" and returns the Fibonacci value that corresponds to the given index.

## Built With

* [Laravel](https://laravel.com/) - The PHP Framework For Web Artisans

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

* [Docker Desktop](https://www.docker.com/products/docker-desktop/)
* Copy of the project in your local computer

### Installation

Navigate to the application directory and run:
```docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs 
```

Then execute the following command:
```./vendor/bin/sail up```

The first time you run the command could take several minutes. Subsequent attempts to start will be much faster.

## Usage

Call the endpoint GET `{host}/v1/fibonacci_number?n=6`

`n` is the index of the fibonacci number

## Roadmap
- [x] Limit requests per minute
- [ ] Validate input
- [ ] Document endpoint with Postman
- [ ] Implement tests and enable repository in Travis CI
- [ ] Reduce time complexity of the algorithm to calculate the fibonacci value
- [ ] Remove unnecessary code
- [ ] Remove unused service providers


## Technical Decisions
- PHP 8 was selected because it works really well for web applications, there is great community support and this version contains performance upgrades and new features.
- I chose Laravel framework due to provides many modules to work with an API like limit requests per minute, validate information, maintenance mode, authentication, errors and logging, events, caching, etc.

## Author

**Roberto Carrillo** - [rcovar00](https://github.com/rcovar00)
