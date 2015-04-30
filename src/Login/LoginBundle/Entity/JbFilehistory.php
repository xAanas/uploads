<?php

namespace Login\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JbFilehistory
 */
class JbFilehistory
{
    /**
     * @var string
     */
    private $originalName;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $userid;

    /**
     * @var string
     */
    private $fileName;


    /**
     * Set originalName
     *
     * @param string $originalName
     * @return JbFilehistory
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * Get originalName
     *
     * @return string 
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return JbFilehistory
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return JbFilehistory
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }
}
