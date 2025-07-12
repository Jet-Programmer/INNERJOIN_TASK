<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require dirname(__DIR__). '/INTERNSHIP FOLDER/innerjoin.php/';

final class assocArrayTests extends TestCase {
    public function testAssocArray() {
        $table3 = new array(
            array("customerID"=> 15, "customerName"=> "Francis", "Country"=> "Germany"),
        )
        
    }
}

?>