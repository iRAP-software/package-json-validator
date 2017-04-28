<?php

/* 
 * Interface for all validators.
 */

namespace iRAP\JsonValidator;

interface ValidatorInterface
{
    /**
     * Evaluate the rule.
     */
    public function validate($input) : bool;
    
    /**
     * Get the error message to display if the rule fails.
     */
    public function getErrorMessage() : string; 
}
