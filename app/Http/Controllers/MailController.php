<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

use App\Http\Requests;

class MailController extends Controller
{
   public function lidWorden($name, $email)
   {

   		$beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('emails.inschrijving', [], function($message) use ($name, $email)
        {
            $message
                ->from('info@hmvactis.nl', 'HMV Actis')
                ->to($email, $name)
                ->subject('Bedankt voor je inschrijving op HMV Actis!');
        });
   }
}
