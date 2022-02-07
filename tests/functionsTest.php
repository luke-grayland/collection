<?php

use PHPUnit\Framework\TestCase;
require_once '../functions.php';



class functionsTest extends TestCase
{
    public function testSuccessReadResults() {

        $testArray = [
            ['album_name' => 'testAlbum'],
            ['artist_name' => 'testArtist'],
            ['year' => '1997'],
            ['rating' => '9'],
            ['cover' => 'test.com']
        ];

        $expected = "<div>
            <h2>testAlbum</h2>
            <h3>testArtist</h3>
            <p>Year of Release: 1997</p>
            <p>Rating: 9</p>
            <img src='test.com' alt='album cover' width='250px' height='250px'>
            </div>";

        $case = readResults($testArray);
        $this->assertEquals($expected, $case);
    }

}

