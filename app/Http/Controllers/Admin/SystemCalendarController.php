<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use App\GeneralSettings;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemCalendarController extends Controller
{

    public function index()
    {
        $events = [];

        $appointments = Appointment::with(['client', 'employee'])->get();

        foreach ($appointments as $appointment) {
            if (!$appointment->start_time) {
                continue;
            }

            $events[] = [
                'title' => $appointment->client->name . ' ('.$appointment->employee->name.')',
                'start' => $appointment->start_time,
                'url'   => route('admin.appointments.edit', $appointment->id),
            ];
        }

        return view('admin.calendar.calendar', compact('events'));
    }
    public function settings(){
        $gs = GeneralSettings::find(1);
        return view('admin.settings', compact('gs'));
    }
    public function settingStore(Request $request){
        $gs = GeneralSettings::find(1);
        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'logo' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'logo/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'logo/' . $name;
        }
        if ($request->hasfile('image')) {
            $image2 = $request->file('image');
            $name2 = time() . 'image' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'image/';
            $image2->move($destinationPath, $name2);
            $gs->image = 'image/' . $name2;
        }
        $gs->h1 = $request->h1;
        $gs->h2 = $request->h2;
        $gs->save();
        return redirect()->back();
    }
}
