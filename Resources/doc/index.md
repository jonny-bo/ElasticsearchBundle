## What is it?

The ElasticsearchBundle uses the [official PHP client for Elasticsearch](https://www.elastic.co/guide/en/elasticsearch/client/php-api/current/index.html) to allow for easy integration of Elasticsearch into Symfony2 applications. 

#### Getting started
* [Setup](setup.md)

#### Usage
* [Mapping explained](mapping.md)
* *[Configuration](configuration.md)
* *[Console commands](commands.md)
* *[How to do a simple CRUD actions](crud.md)
* *[Quick find functions](find_functions.md)
* *[How to search the index](search.md)
* *[Scan through the index](scan.md)
* *[Parsing the results](results_parsing.md)

#### More advanced stuff
* *[How to overwrite some parts of the bundle?](overwriting_bundle.md)

#### NOTICE
The bundle was originally a fork of the excellent [bundle by ONGR.io](https://github.com/ongr-io/ElasticsearchBundle), however I had a bit different vision about certain things and some additional requirements. Eventually, the codebase was largely refactored to become a separate project, but still sharing a lot of similarities with the original. 