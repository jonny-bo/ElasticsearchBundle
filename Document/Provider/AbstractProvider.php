<?php

namespace Sineflow\ElasticsearchBundle\Document\Provider;

/**
 * Base document provider
 */
abstract class AbstractProvider implements ProviderInterface
{

    /**
     * @var string The type the provider is for
     */
    private $documentClass;

    /**
     * @param string $documentClass The type the provider is for
     */
    public function __construct($documentClass)
    {
        $this->documentClass = $documentClass;
    }

    /**
     * @return string
     */
    protected function getDocumentClass()
    {
        return $this->documentClass;
    }

    /**
     * Returns a PHP Generator for iterating over the full dataset of source data that is to be inserted in ES
     * The returned data can be either a document entity or an array ready for direct sending to ES
     *
     * @return \Generator<DocumentInterface|array>
     */
    abstract public function getDocuments();

    /**
     * Build and return a document entity from the data source
     * The returned data can be either a document entity or an array ready for direct sending to ES
     *
     * @param int|string $id
     * @return DocumentInterface|array
     */
    abstract public function getDocument($id);
}
