<?php

/* 
 * 
 */

namespace iRAP\JsonValidator\Testing\Tests;

class Test2
{
    public function run()
    {
        $myObj = array(
            "hello" => "world",
            "excess" => "this is an excess attribute"
        );

        $jsonString = json_encode($myObj);

        $requiredAttributes = array(
            new \iRAP\JsonValidator\Attribute("hello", new \iRAP\JsonValidator\RegExpValidator("/world/"))
        );

        $objectValidator = new \iRAP\JsonValidator\ObjectValidator(
            $requiredAttributes, 
            $optionalAttributes = array()
        );

        $jsonValidator = new \iRAP\JsonValidator\JsonValidator($objectValidator);
        $result = $jsonValidator->validate($jsonString);

        print "result: " . print_r($result, true) . PHP_EOL;
        print "message: " . $jsonValidator->getErrorMessage() . PHP_EOL;
    }
}

