<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.protobuf.ServiceOptions</code>
 */
class ServiceOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Is this service deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the service, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating services.
     * </pre>
     *
     * <code>optional bool deprecated = 33 [default = false];</code>
     */
    private $deprecated = false;
    private $has_deprecated = false;
    /**
     * <pre>
     * The parser stores options it doesn't recognize here. See above.
     * </pre>
     *
     * <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    private $uninterpreted_option;
    private $has_uninterpreted_option = false;

    public function __construct() {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Is this service deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the service, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating services.
     * </pre>
     *
     * <code>optional bool deprecated = 33 [default = false];</code>
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * <pre>
     * Is this service deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the service, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating services.
     * </pre>
     *
     * <code>optional bool deprecated = 33 [default = false];</code>
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;
        $this->has_deprecated = true;
    }

    public function hasDeprecated()
    {
        return $this->has_deprecated;
    }

    /**
     * <pre>
     * The parser stores options it doesn't recognize here. See above.
     * </pre>
     *
     * <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    public function getUninterpretedOption()
    {
        return $this->uninterpreted_option;
    }

    /**
     * <pre>
     * The parser stores options it doesn't recognize here. See above.
     * </pre>
     *
     * <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    public function setUninterpretedOption(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\UninterpretedOption::class);
        $this->uninterpreted_option = $var;
        $this->has_uninterpreted_option = true;
    }

    public function hasUninterpretedOption()
    {
        return $this->has_uninterpreted_option;
    }

}
