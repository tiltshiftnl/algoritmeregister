# Algoritmeregister

AlgoritmeRegister (*Algorithm Registry*) is a Proof of Concept application that stores information on uses of algorithms in public organisations.

## Development environment using Docker

See https://www.shiphp.com/blog/2017/phpunit-docker

To get phpunit:

`docker run --rm -v $(pwd):/app composer/composer:latest require --dev phpunit/phpunit ^6.0`

To run phpunit:

`docker run -v $(pwd):/app --rm phpunit/phpunit:latest tests .`

## Contributing

The development state of this project is *concept*. Because of this, we do not accept pull requests nor issues yet.

## Public Code

This code base will be structured in line with the [Standard for Public Code](https://standard.publiccode.net/).
