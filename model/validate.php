<?php
/*
 * 328/model/validate.php
 * Validate data for the diner app
 */

class Validate
{
// Return true if food is valid
    static function validFood($food)
    {
        return (trim($food) == "");
    }

    static function validMeal($meal)
    {
        return in_array($meal, DataLayer::getMeals());
    }
}