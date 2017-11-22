<?php

class LessonsList {

    /**
     * All lesons
     * @var array 
     */
    protected $lessons = array();

    /**
     * Adding lesson to array of lessons
     * @param object $lesson
     */
    public function addLesson(Lesson $lesson) {
        $this->lessons[] = $lesson;
    }

    /**
     * Getting price for all lessons
     * @return int
     */
    public function getPriceOfAllLesons() {
        $res = 0;
        foreach ($this->lessons as $lesson) {
            $res += $lesson->getPrice();
        }
        return $res;
    }

}
