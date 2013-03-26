<?php

    /**
     * @package utils.net.SMTP.Message
     * @filesource \utils\net\SMTP\Message\AbstractHeader.php
     * @author Andrey Knupp Vital <andreykvital@gmail.com>
     */
    namespace utils\net\SMTP\Message;
    use utils\net\SMTP\Message\Header;

    abstract class AbstractHeader implements Header, Encodable
    {
        
        /**
         * Header encoding
         * @var string
         */
        private $encoding;
        
        /**
         * Header name
         * @var string
         */
        protected $name;
        
        /**
         * Header value
         * @var string
         */
        protected $value;
        
        /**
         * Constructs the header representation
         * @param string $name the header name
         * @param string $value the header value
         */
        public function __construct($name, $value)
        {
            $this->name = $name;
            $this->value = $value;
        }
        
        /**
         * Retrieves the header name
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * Retrieves the header value
         * @return string
         */
        public function getValue()
        {
            return $this->value;
        }
        
        /**
         * Retrieves the header encoding
         * @return string
         */
        public function getEncoding()
        {
            return $this->encoding;
        }

        /**
         * Sets the header encoding
         * @param string $encoding the encoding
         */
        public function setEncoding($encoding)
        {
            $this->encoding = is_null($encoding) ? "ASCII" : $encoding;
        }
        
        /**
         * Converts the header to string representation.
         * @return string
         */
        public function __toString()
        {
            return sprintf("%s: %s", $this->getName(), $this->getValue());
        }

    }