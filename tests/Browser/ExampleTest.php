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
    public function testLoginFail()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'wrongEmail@gallery.com')
                    ->value('#password', 'wrongpassword')
                    ->click('button[type="submit"]')
                    ->assertSee('credentials do not match');
        });
    }

    public function testLoginSuccess()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('arts/create')
                    ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
                    ->visit('/logout');
        });
    }

    public function testArtAddfailure(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/arts/create')
                    ->value('#title', 'test')
                    ->select('#artist', 'ARTIST 1')
                    ->value('#price', '1')
                    ->value('#dimensions', '10')
                    ->select('#medium', 'painting')
                    ->value('#description', 'test')
                    ->click('input[type="submit"]')
                    ->assertSee('The image field is required')
                    ->visit('/logout');
        });
    }




    // public function testL4asw3hoginFail()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLogh5s4einSuccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testArtAh5sw4ddfailure(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
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
    //                 ->assertSee('The image field is required')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testLogy54winFail()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLoginSs4zt5uccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testArtAddfersytailure(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
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
    //                 ->assertSee('The image field is required')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testLogiuytdnFail()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLoafgginSuccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testArtAdfsdgdfailure(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
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
    //                 ->assertSee('The image field is required')
    //                 ->visit('/logout');
    //     });
    // }

    // public function tessdfgtLoginFafdshil()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLoginhgdsSuccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testArtAddsergfailure(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
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
    //                 ->assertSee('The image field is required')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testLoshdfgginFail()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLogidrtjnSuccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testArtAddfardtjilure(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
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
    //                 ->assertSee('The image field is required')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testLojdginFail()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLodghfginSuccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testArtAddfagzfilure(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
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
    //                 ->assertSee('The image field is required')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testLergoginFail()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'wrongEmail@gallery.com')
    //                 ->value('#password', 'wrongpassword')
    //                 ->click('button[type="submit"]')
    //                 ->assertSee('credentials do not match');
    //     });
    // }

    // public function testLogiasdnSuccess()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
    //                 ->value('#email', 'staff@gallery.com')
    //                 ->value('#password', 'password')
    //                 ->click('button[type="submit"]')
    //                 ->visit('arts/create')
    //                 ->assertUrlIs('http://gallery.dev.harpreet/arts/create')
    //                 ->visit('/logout');
    //     });
    // }

    // public function testArtAddfaiadsflure(){
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/login')
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
    //                 ->assertSee('The image field is required')
    //                 ->visit('/logout');
    //     });
    // }



























    public function testArtAddSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/arts/create')
                    ->value('#title', 'test art 11')
                    ->select('#artist', 'ARTIST 1')
                    ->value('#price', '1')
                    ->value('#dimensions', '10')
                    ->value('#date', '2018-04-10')
                    ->select('#medium', 'painting')
                    ->value('#description', 'test')
                    ->click('input[type="submit"]')
                    ->assertSee('test art 11')
                    ->visit('/logout');
        });
    }

    public function testArtViewArt(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/art_view/id=11')
                    ->assertSee('test art 11')
                    ->visit('/logout');
        });
    }

    public function testArtEditSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/arts/11/edit')
                    ->value('#title', 'test update')
                    ->click('input[type="submit"]')
                    ->assertSee('test update')
                    ->visit('/logout');
        });
    }

    public function testArtDelete(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/art/page=3')
                    ->script('$(".btn-danger:nth-child(1)").click();')
                    ->assertDontSee('test update')
                    ->visit('/logout');
        });
    }

    public function testArtistAddSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/artists/create')
                    ->value('#name', 'test')
                    ->attach('image', storage_path('test\test_art_1.png'))
                    ->value('#bio', 'test')
                    ->click('input[type="submit"]')
                    ->assertSee('success')
                    ->visit('/logout');
        });
    }

    public function testArtistAddFailure(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/artists/create')
                    ->value('#name', 'test')
                    ->value('#bio', 'test')
                    ->click('input[type="submit"]')
                    ->assertSee('The image field is required')
                    ->visit('/logout');
        });
    }

    public function testArtViewArtist(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/artists/id=1/page=1')
                    ->assertSee('ARTIST 1')
                    ->visit('/logout');
        });
    }

    public function testArtistEdit(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/artists/1/edit')
                    ->value('#name', 'Name is now TEST')
                    ->value('#bio', 'test')
                    ->click('input[type="submit"]')
                    ->visit('/artists/page=1')
                    ->assertSee('Name is now TEST')
                    ->visit('/logout');
        });
    }

    public function testArtistDelete(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/artists/page=2')
                    ->script('$(".btn-danger:nth-child(2)").click();')
                    ->assertDontSee('test')
                    ->visit('/logout');
        });
    }

    public function testAppointmentAddFailEmail(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/art_view/id=28')
                    ->value('#name', 'TEST 123')
                    ->value('#email', 'bademail.net')
                    ->click('input[type="submit"]')
                    ->assertSee('email must be a valid email')
                    ->visit('/logout');
        });
    }

    public function testAppointmentAddSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/art_view/id=28')
                    ->value('#name', 'TEST 123')
                    ->value('#email', 'test@test.com')
                    ->click('input[type="submit"]')
                    ->visit('/appointments/page=1')
                    ->assertSee('TEST 123')
                    ->visit('/logout');
        });
    }

    public function testAppointmentView(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/appointments/page=1')
                    ->assertSee('Test 1')
                    ->visit('/logout');
        });
    }

    public function testAppointmentDelete(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/appointments/page=1')
                    ->script('$(".btn-danger:nth-child(3)").click();')
                    ->assertDontSee('TEST 123')
                    ->visit('/logout');
        });
    }

    public function testBannerEditSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/banner/edit')
                    ->value('#title', 'test title')
                    ->attach('image', storage_path('test\test_art_1.png'))
                    ->value('#text', 'test')
                    ->click('input[type="submit"]')
                    ->assertSee('test title')
                    ->visit('/logout');
        });
    }

    public function testBannerEditFailure(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/banner/edit')
                    ->value('#title', 'test title')
                    ->value('#text', 'test')
                    ->click('input[type="submit"]')
                    ->assertSee('The image field is required')
                    ->visit('/logout');
        });
    }

    public function testEventAddFail(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/events/create')
                    ->value('#title', 'test event 1')
                    ->value('#price', '10')
                    ->value('#description', 'test description')
                    ->click('button[type="submit"]')
                    ->assertSee('date field is required')
                    ->visit('/logout');
        });
    }

    public function testEventAddSuccess(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/events/create')
                    ->value('#title', 'test event 1')
                    ->value('#price', '10')
                    ->value('#description', 'test description')
                    ->value('#date', '2018-04-30')
                    ->click('button[type="submit"]')
                    ->assertSee('Event added successfully')
                    ->visit('/logout');
        });
    }

    public function testEventView(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/events/page=1')
                    ->assertSee('test event 1')
                    ->visit('/logout');
        });
    }

    public function testEventEdit(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/events/1/edit')
                    ->value('#description', 'test description update')
                    ->click('button[type="submit"]')
                    ->visit('/events/page=1')
                    ->assertSee('test description update')
                    ->visit('/logout');
        });
    }

    public function testEventDelete(){
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->value('#email', 'staff@gallery.com')
                    ->value('#password', 'password')
                    ->click('button[type="submit"]')
                    ->visit('/events/page=1')
                    ->script('$(".btn-danger:nth-child(2)").click();')
                    ->assertDontSee('test event 2')
                    ->visit('/logout');
        });
    }
}
