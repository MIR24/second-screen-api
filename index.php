<?php
/**
 * Second Screen App
 * @version 1.0.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * GET getCategories
 * Summary: Получить список доступных телеканалов
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->GET('/second-screen-app/v1/category', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getCategories as a GET method ?');
            return $response;
            });


/**
 * GET findSessionByCategory
 * Summary: Получить телепрограмму для выбранного канала.
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->GET('/second-screen-app/v1/category/{categoryId}/session', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing findSessionByCategory as a GET method ?');
            return $response;
            });


/**
 * GET findShowById
 * Summary: Получить телепрограмму для выбранного канала.
 * Notes: 
 * Output-Formats: [application/json, application/xml]
 */
$app->GET('/second-screen-app/v1/category/{categoryId}/show/{showId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing findShowById as a GET method ?');
            return $response;
            });



$app->run();
