# Algoritmeregister

AlgoritmeRegister (*Algorithm Registry*) is a Proof of Concept application that stores information on uses of algorithms in public organisations.

## Development environment using Docker

Switched to docker-compose: https://thephp.website/en/issue/php-docker-quick-setup/

To install:

`docker-compose run composer require --dev phpunit/phpunit slim/slim "^3.0"`

To run phpunit:

`docker-compose run phpunit`

To run slim:

`docker-compose up slim`

This will run the API at http://localhost:8080.

To browse the API using HAL browser please check out:

http://haltalk.herokuapp.com/explorer/browser.html#http://localhost:8080

## Contributing

The development state of this project is *concept*. Because of this, we do not accept pull requests nor issues yet.

## Roadmap

Please check out [Issues on Github](https://github.com/tiltshiftnl/algoritmeregister/issues) for the roadmap.

## Public Code

This code base will be structured in line with the [Standard for Public Code](https://standard.publiccode.net/).
