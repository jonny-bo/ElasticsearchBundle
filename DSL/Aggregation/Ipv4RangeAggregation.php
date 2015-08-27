<?php

namespace Sineflow\ElasticsearchBundle\DSL\Aggregation;

use Sineflow\ElasticsearchBundle\DSL\Aggregation\Type\BucketingTrait;

/**
 * Class representing ip range aggregation.
 */
class Ipv4RangeAggregation extends AbstractAggregation
{
    use BucketingTrait;

    /**
     * @var array
     */
    private $ranges = [];

    /**
     * Add range to aggregation.
     *
     * @param string|null $from
     * @param string|null $to
     *
     * @return Ipv4RangeAggregation
     */
    public function addRange($from = null, $to = null)
    {
        $range = array_filter(
            [
                'from' => $from,
                'to' => $to,
            ]
        );

        $this->ranges[] = $range;

        return $this;
    }

    /**
     * Add ip mask to aggregation.
     *
     * @param string $mask
     *
     * @return Ipv4RangeAggregation
     */
    public function addMask($mask)
    {
        $this->ranges[] = ['mask' => $mask];

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'ip_range';
    }

    /**
     * {@inheritdoc}
     */
    public function getArray()
    {
        if ($this->getField() && !empty($this->ranges)) {
            return [
                'field' => $this->getField(),
                'ranges' => array_values($this->ranges),
            ];
        }
        throw new \LogicException('Ip range aggregation must have field set and range added.');
    }
}
