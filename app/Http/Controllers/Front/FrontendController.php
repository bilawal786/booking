<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Client;
use App\Appointment;
use Illuminate\Support\Facades\DB;
use Session;
class FrontendController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('front.index', compact('services'));
    }
    public function form(Request $request){
        $client = new Client();
        $client->name = $request->first_name . ' ' .  $request->last_name;
        $client->email = $request->email;
        $client->phone = $request->telephone;
        $client->save();

        $appoin = new Appointment();
        $appoin->start_time = $request->dates . ' ' . $request->time;
        $appoin->finish_time = $request->dates . ' ' . $request->time;
        $appoin->comments = $request->comments;
        $appoin->client_id = $client->id;
        $appoin->employee_id = 1;
        $appoin->save();

        DB::table('appointment_service')->insert([
            'appointment_id' => $appoin->id,
            'service_id' => $request->service_id
        ]);
        Session::flash('message', 'Vos coordonnées pour la réservation sont soumises. Nous vous contacterons bientôt.!');
        Session::flash('alert-class', 'alert-success');

        return redirect()->back();
    }
}
