<?php

use PHPUnit\Framework\TestCase;
require_once '../functions.php';

class functionsTest extends TestCase
{
    public function testSuccessCreateAlbumMarkup()
    {
        $testArray = [
            ['album_name' => 'testAlbum',
                'artist_name' => 'testArtist',
                'year' => '1997',
                'rating' => '3',
                'cover' => 'test.com']
        ];

        $expected = "<div class='albumBox'>
                <img src='test.com' alt='album cover' class='albumArt'>
                <h2>testAlbum</h2>
                <h3>testArtist</h3>
                <p>Year of Release: 1997</p>
                <p><img src='star.png' alt='star' class='star'><img src='star.png' alt='star' class='star'><img src='star.png' alt='star' class='star'></p>
                </div>";
        $case = createAlbumMarkup($testArray);
        $this->assertEquals($expected, $case);
    }

    public function testFailCreateAlbumMarkup()
    {
        $testArray = [
            ['album_name' => 'testAlbum',
                'artist_name' => 'testArtist',
                'year' => '1997',
                'rating' => '12',
                'cover' => 'test.com']
        ];

        $expected = '';
        $case = createAlbumMarkup($testArray);
        $this->assertEquals($expected, $case);
    }

    public function testMalformCreateAlbumMarkup() {
        $testArray = 'string';

        $this->expectException(TypeError::class);
        createAlbumMarkup($testArray);
    }

    public function testSuccessCheckAlbumDataExists()
    {
        $testArray = [
            'albumName' => 'testAlbum',
                'artistName' => 'testArtist',
                'yearOfRelease' => '1997',
                'albumArtworkURL' => 'test.com',
                'rating' => '3'
        ];

        $expected = true;
        $case = checkAlbumDataExists($testArray);
        $this->assertEquals($expected, $case);
    }

    public function testFailCheckAlbumDataExists()
    {
        $testArray = [
            'albumName' => null,
                'artistName' => 'testArtist',
                'yearOfRelease' => '1997',
                'albumArtworkURL' => 'test.com',
                'rating' => '3'
        ];

        $expected = false;
        $case = checkAlbumDataExists($testArray);
        $this->assertEquals($expected, $case);
    }
    public function testMalformCheckAlbumDataExists()
    {
        $testArray = 'I am a string';

        $this->expectException(TypeError::class);
        checkAlbumDataExists($testArray);
    }

    public function testSuccessValidateNewAlbumData()
    {
        $testAlbum = 'album';
        $testArtist = 'artist';
        $testYear = '1996';
        $testURL = 'test.com';
        $testRating = '9';

        $expected = true;
        $case = validateNewAlbumData($testAlbum, $testArtist, $testYear, $testURL, $testRating);
        $this->assertEquals($expected, $case);
    }
}

