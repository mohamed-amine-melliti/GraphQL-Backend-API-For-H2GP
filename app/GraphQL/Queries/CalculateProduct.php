<?php

namespace App\GraphQL\Queries;

class CalculateProduct
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {	
    	$var1 = $args['var1'];
    	$var2 = $args['var2'];

        return [
        	'total' => ($var1 * $var2)
        ];
    }
}
