# algoritmeregister

## development environment using Docker

See https://www.shiphp.com/blog/2017/phpunit-docker

To get phpunit:

`docker run --rm -v $(pwd):/app composer/composer:latest require --dev phpunit/phpunit ^6.0`

To run phpunit:

`docker run -v $(pwd):/app --rm phpunit/phpunit:latest tests .`

