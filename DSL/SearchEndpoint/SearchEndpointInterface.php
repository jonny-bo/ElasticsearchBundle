<?php

namespace Sineflow\ElasticsearchBundle\DSL\SearchEndpoint;

use Sineflow\ElasticsearchBundle\DSL\BuilderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;

/**
 * Interface used to define search endpoint.
 */
interface SearchEndpointInterface extends NormalizableInterface
{
    /**
     * Adds builder to search endpoint.
     *
     * @param BuilderInterface $builder    Builder to add.
     * @param array            $parameters Additional parameters relevant to builder.
     *
     * @return SearchEndpointInterface
     */
    public function addBuilder(BuilderInterface $builder, $parameters = []);

    /**
     * Returns contained builder.
     *
     * @return BuilderInterface|BuilderInterface[]
     */
    public function getBuilder();
}
