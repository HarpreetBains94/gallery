<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    // public function testLoginFail()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/staff')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLoginSuccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/staff')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create');
    //     });
    // }

    // public function testNoImageArtAdd(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/staff')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('/arts/create')
    //                 ->value('#title', 'test')
    //                 ->select('#artist', 'ARTIST 1')
    //                 ->value('#price', '1')
    //                 ->value('#dimensions', '10')
    //                 ->select('#medium', 'painting')
    //                 ->value('#description', 'test')
    //                 ->click('input[type="submit"]')
    //                 ->assertSee('The image field is required');
    //     });

    // public function testArtistAddSuccess(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/staff')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('/artists/create')
    //                 ->value('#name', 'test')
    //                 ->attach('image', storage_path('test\test_art_1.png'))
    //                 ->value('#bio', 'test')
    //                 ->click('input[type="submit"]')
    //                 ->assertSee('success');
    //     });
    // }

    //     public function testNoImageArtistAdd(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/staff')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('/artists/create')
    //                 ->value('#name', 'test')
    //                 ->value('#bio', 'test')
    //                 ->click('input[type="submit"]')
    //                 ->assertSee('The image field is required');
    //     });
    // }

    //     public function testArtistEdit(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/staff')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('/artists/1/edit')
    //                 ->value('#name', 'Name is now TEST')
    //                 ->attach('image', storage_path('test\test_art_1.png'))
    //                 ->value('#bio', 'test')
    //                 ->click('input[type="submit"]')
    //                 ->visit('/artists/page=1')
    //                 ->assertSee('Name is now TEST');
    //     });
    // }
}
