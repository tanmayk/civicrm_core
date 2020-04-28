<?php

/**
 * Handler for escaped string
 */
class xKerman_Restricted_EscapedStringHandler implements xKerman_Restricted_HandlerInterface
{
    /** @var integer */
    const CLOSE_STRING_LENGTH = 2;
    /**
     * parse given `$source` as escaped string
     *
     * @param Source      $source parser input
     * @param string|null $args   string length
     * @return array
     * @throws UnserializeFailedException
     */
    public function handle(xKerman_Restricted_Source $source, $args)
    {
        $length = intval($args, 10);
        $result = array();
        for ($i = 0; $i < $length; ++$i) {
            $char = $source->read(1);
            if ($char !== '\\') {
                $result[] = $char;
                continue;
            }
            $hex = $source->match('/\\G([0-9a-fA-F]{2})/');
            $result[] = chr(intval($hex[0], 16));
        }
        $source->consume('";', self::CLOSE_STRING_LENGTH);
        return array(implode('', $result), $source);
    }
}