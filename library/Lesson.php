<?php

abstract class Lesson {

    /**
     * Duration of lesson
     * @var int
     */
    protected $duration;

    /**
     * Rate per hour
     * @var int 
     */
    protected $rate_hour;

    /**
     * Rate per lesson
     * @var int
     */
    protected $rate_lesson;

    /**
     * Rate type. Default 'hours'
     * @var string 
     */
    protected $type = 'hours';

    /**
     * Possible types of rates.
     */
    const TYPES = array('hours', 'lessons');

    /**
     * Connecting to a file in read / write mode
     * @param int $duration
     * @param sting $type
     */
    public function __construct($duration, $type) {
        $this->setRates();
        $this->duration = $duration;
        if (in_array($type, self::TYPES)) {
            $this->type = $type;
        }
    }

    /**
     * Setting of rates.
     */
    protected function setRates() {
        $this->rate_hour = 100;
        $this->rate_lesson = 200;
    }

    /**
     * Price for lessons.
     * @return int
     */
    public function getPrice() {
        if ($this->type === 'hours') {
            $rate = $this->rate_hour;
        } else {
            $rate = $this->rate_lesson;
        }
        return $this->duration * $rate;
    }

    /**
     * EXAMPLE. IF THE NUMBER OF HOURS OR LESSONS ARE FROM 10 AND MORE, THEN 50% DISCOUNT
     * @return int
     */
//    public function getPrice() {
//        $res = 0;
//        if ($this->type === 'hours') {
//            $rate = $this->rate_hour;
//        } else {
//            $rate = $this->rate_lesson;
//        }
//        if ($this->duration > 9) {
//            $res = $this->duration * $rate * 0.5;
//        } else {
//            $res = $this->duration * $rate;
//        }
//        return $res;
//    }
}
