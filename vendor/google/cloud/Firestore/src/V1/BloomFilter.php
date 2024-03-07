<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/bloom_filter.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bloom filter (https://en.wikipedia.org/wiki/Bloom_filter).
 * The bloom filter hashes the entries with MD5 and treats the resulting 128-bit
 * hash as 2 distinct 64-bit hash values, interpreted as unsigned integers
 * using 2's complement encoding.
 * These two hash values, named `h1` and `h2`, are then used to compute the
 * `hash_count` hash values using the formula, starting at `i=0`:
 *     h(i) = h1 + (i * h2)
 * These resulting values are then taken modulo the number of bits in the bloom
 * filter to get the bits of the bloom filter to test for the given entry.
 *
 * Generated from protobuf message <code>google.firestore.v1.BloomFilter</code>
 */
class BloomFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The bloom filter data.
     *
     * Generated from protobuf field <code>.google.firestore.v1.BitSequence bits = 1;</code>
     */
    private $bits = null;
    /**
     * The number of hashes used by the algorithm.
     *
     * Generated from protobuf field <code>int32 hash_count = 2;</code>
     */
    private $hash_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1\BitSequence $bits
     *           The bloom filter data.
     *     @type int $hash_count
     *           The number of hashes used by the algorithm.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\BloomFilter::initOnce();
        parent::__construct($data);
    }

    /**
     * The bloom filter data.
     *
     * Generated from protobuf field <code>.google.firestore.v1.BitSequence bits = 1;</code>
     * @return \Google\Cloud\Firestore\V1\BitSequence|null
     */
    public function getBits()
    {
        return $this->bits;
    }

    public function hasBits()
    {
        return isset($this->bits);
    }

    public function clearBits()
    {
        unset($this->bits);
    }

    /**
     * The bloom filter data.
     *
     * Generated from protobuf field <code>.google.firestore.v1.BitSequence bits = 1;</code>
     * @param \Google\Cloud\Firestore\V1\BitSequence $var
     * @return $this
     */
    public function setBits($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\BitSequence::class);
        $this->bits = $var;

        return $this;
    }

    /**
     * The number of hashes used by the algorithm.
     *
     * Generated from protobuf field <code>int32 hash_count = 2;</code>
     * @return int
     */
    public function getHashCount()
    {
        return $this->hash_count;
    }

    /**
     * The number of hashes used by the algorithm.
     *
     * Generated from protobuf field <code>int32 hash_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHashCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->hash_count = $var;

        return $this;
    }

}
