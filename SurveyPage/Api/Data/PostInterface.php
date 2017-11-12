<?php

namespace Survey\SurveyPage\Api\Data;

interface PostInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                    = 'id';
    const SENDER                = 'sender';
    const RATING                = 'rating';
    const ANSWER                = 'answer';
    const CREATED_AT            = 'created_at';
    /**#@-*/


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getSender();

    /**
     * Get Content
     *
     * @return string|null:
     */
    public function getAnswer();


    public function getRating();
    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setSender($sender);


    public function setRating($rating);
    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setAnswer($answer);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}
