<?php

namespace Sineflow\ElasticsearchBundle\DSL\Query;

use Sineflow\ElasticsearchBundle\DSL\BuilderInterface;
use Sineflow\ElasticsearchBundle\DSL\ParametersTrait;

/**
 * Elasticsearch wildcard query class.
 */
class WildcardQuery implements BuilderInterface
{
    use ParametersTrait;

    /**
     * @var string
     */
    private $field;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $field
     * @param string $value
     * @param array  $parameters
     */
    public function __construct($field, $value, array $parameters = [])
    {
        $this->field = $field;
        $this->value = $value;
        $this->setParameters($parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'wildcard';
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $query = [
            'value' => $this->value,
        ];

        $output = [
            $this->field => $this->processArray($query),
        ];

        return $output;
    }
}
