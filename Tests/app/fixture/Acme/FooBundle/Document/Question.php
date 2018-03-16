<?php

namespace Sineflow\ElasticsearchBundle\Tests\app\fixture\Acme\FooBundle\Document;

use Sineflow\ElasticsearchBundle\Annotation as ES;
use Sineflow\ElasticsearchBundle\Document\AbstractDocument;

/**
 * @ES\Document(type="questions");
 */
class Question extends AbstractDocument
{
    /**
     * @var string
     *
     * @ES\Property(name="text", type="text")
     */
    public $text;
}
