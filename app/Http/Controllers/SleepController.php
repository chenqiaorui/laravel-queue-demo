<?php

namespace App\Http\Controllers;

use App\Jobs\SleepJob;

class SleepController extends Controller {
    public function test(){
        $this->dispatch(new SleepJob());
    }

}
