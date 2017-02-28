<?php

abstract class HiringManager {

    /**
     * @return mixed
     */
    abstract public function makeInterviewer();

    /**
     * @return string
     */
    public function takeInterview() {
        $interviewer = $this->makeInterviewer();
        return $interviewer->askQuestions();
    }
}