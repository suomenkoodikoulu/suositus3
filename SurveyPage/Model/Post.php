<?php

namespace Survey\SurveyPage\Model\ResourceModel;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Survey\SurveyPage\Api\Data\PostInterface;

class Post extends AbstractModel implements PostInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'koodikoulu_survey';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\ResourceModel\Post');
    }


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getSender()
    {
        return $this->getData(self::SENDER);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getAnswer()
    {
        return $this->getData(self::ANSWER);
    }

    public function getRating()
    {
        return $this->getData(self::RATING);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Return identities
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setSender($sender)
    {
        return $this->setData(self::SENDER, $sender);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setAnswer($answer)
    {
        return $this->setData(self::ANSWER, $answer);
    }

    public function setRating($rating)
    {
        return $this->setData(self::RATING, $rating);
    }

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
}

/*
use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('koodikoulu_survey', 'id');
    }
}
*/