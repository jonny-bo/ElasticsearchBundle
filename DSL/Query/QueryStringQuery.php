<?php

namespace Sineflow\ElasticsearchBundle\DSL\Query;

use Sineflow\ElasticsearchBundle\DSL\BuilderInterface;
use Sineflow\ElasticsearchBundle\DSL\ParametersTrait;

/**
 * Elasticsearch query_string query class.
 */
class QueryStringQuery implements BuilderInterface
{
    use ParametersTrait;

    /**
     * @var string The actual query to be parsed.
     */
    private $query;

    /**
     * @param string $query
     * @param array  $parameters
     */
    public function __construct($query, array $parameters = [])
    {
        $this->query = $query;
        $this->setParameters($parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'query_string';
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $query = [
            'query' => $this->query,
        ];

        $output = $this->processArray($query);

        return $output;
    }
}
