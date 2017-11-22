<?php

/**
 * Including classes
 * @param string $className
 */
function load($className) {
    $filePath = 'library/'.$className . '.php';
    if (file_exists($filePath)) {
        include_once $filePath;
    }
}

/**
 * Automatic class loading
 */
spl_autoload_register(load);

/**
 * Example of task implementation. Price of all lessones in array
 */
$lessons = new LessonsList();
$lessons->addLesson(new Speaking(9, 'hours'));
$lessons->addLesson(new Speaking(10, 'lessons'));
$lessons->addLesson(new Grammar(1, 'hours'));
$lessons->addLesson(new Grammar(1, 'lessons'));
echo $lessons->getPriceOfAllLesons().'<br>';

/**
 * Example. Price of one lesson. Can be Grammar or Speaking
 */
$lesson = new Grammar(10, 'hours');
echo $lesson->getPrice();