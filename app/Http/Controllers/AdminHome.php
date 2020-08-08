<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminHome extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $info = DB::table('user_info')->where('user_id', $user->id)->get();
        $user = $info[0];
        return view('admin.home', compact('user'));
    }
    public function calender()
    {
        $bookings = DB::table('booked_appointments')->get();
        return view('admin.calender', compact('bookings'));
    }
    public function clients()
    {
        $clients = DB::table('user_info')->get();
        return view('admin.clients', compact('clients'));
    }
    public function newuser()
    {
        return view('admin.newuser');
    }
    public function booknow()
    {
        return view('admin.booknow');
    }
    public function settings()
    {
        return view('admin.settings');
    }
    public function bookings()
    {
        // dd(DB::table('weekdays')->where('day', 'monday')->value('status'));
        $weekdays = array(
            'monday' => DB::table('weekdays')->where('day', 'monday')->value('status'),
            'tuesday' => DB::table('weekdays')->where('day', 'tuesday')->value('status'),
            'wednesday' => DB::table('weekdays')->where('day', 'wednesday')->value('status'),
            'thursday' => DB::table('weekdays')->where('day', 'thursday')->value('status'),
            'friday' => DB::table('weekdays')->where('day', 'friday')->value('status'),
            'saturday' => DB::table('weekdays')->where('day', 'saturday')->value('status'),
            'sunday' => DB::table('weekdays')->where('day', 'sunday')->value('status'),
        );
        $collection = array(
            '01:00 am', '02:00 am', '03:00 am', '04:00 am', '05:00 am', '06:00 am', '07:00 am', '08:00 am', '09:00 am', '10:00 am', '11:00 am', '12:00 am', '01:00 pm', '02:00 pm', '03:00 pm', '04:00 pm', '05:00 pm', '06:00 pm', '07:00 pm', '08:00 pm', '09:00 pm', '10:00 pm', '11:00 pm', '12:00 pm'
        );
        return view('admin.SettingsTabs.bookingsettings', compact('collection', 'weekdays'));
    }
    public function profile()
    {
        $user = Auth::user();
        $info_user = DB::table('user_info')->where('user_id', $user->id)->get();
        $info = $info_user[0];
        return view('admin.SettingsTabs.profilesettings', compact('info', 'user'));
    }
    public function email()
    {
        return view('admin.SettingsTabs.emailpreferenes');
    }
    public function bookingsettings(Request $request)
    {
        $start = $request['start-time'];
        $end = $request['end-time'];
        DB::table('timings')->insert(
            ['start-time' => $start, 'end-time' => $end]
        );
        //  dd($weekdays, $duration, $start, $end);
        DB::table('weekdays')
            ->where('day', 'monday')
            ->update(['status' => $request['monday']]);
        DB::table('weekdays')
            ->where('day', 'tuesday')
            ->update(['status' => $request['tuesday']]);
        DB::table('weekdays')
            ->where('day', 'wednesday')
            ->update(['status' => $request['wednesday']]);
        DB::table('weekdays')
            ->where('day', 'thursday')
            ->update(['status' => $request['thursday']]);
        DB::table('weekdays')
            ->where('day', 'friday')
            ->update(['status' => $request['friday']]);
        DB::table('weekdays')
            ->where('day', 'saturday')
            ->update(['status' => $request['saturday']]);
        DB::table('weekdays')
            ->where('day', 'sunday')
            ->update(['status' => $request['sunday']]);

        DB::table('durations')
            ->where('duration', '15 mins')
            ->update(['status' => $request['15mins']]);
        DB::table('durations')
            ->where('duration', '30 mins')
            ->update(['status' => $request['30mins']]);
        DB::table('durations')
            ->where('duration', '45 mins')
            ->update(['status' => $request['45mins']]);
        DB::table('durations')
            ->where('duration', '60 mins')
            ->update(['status' => $request['60mins']]);


        $collection = array(
            '01:00 am', '02:00 am', '03:00 am', '04:00 am', '05:00 am', '06:00 am', '07:00 am', '08:00 am', '09:00 am', '10:00 am', '11:00 am', '12:00 am', '01:00 pm', '02:00 pm', '03:00 pm', '04:00 pm', '05:00 pm', '06:00 pm', '07:00 pm', '08:00 pm', '09:00 pm', '10:00 pm', '11:00 pm', '12:00 pm'
        );
        // return view('admin.SettingsTabs.bookingsettings', compact('collection', json_encode($collection)));
    }
    public function bookappointment(Request $request)
    {
        $info_user = DB::table('user_info')->where('user_id', $request['client'])->get();
        $info = $info_user[0];
        //dd($request);
        DB::table('booked_appointments')->insert([
            [
                'client_name' => $info->firstname,
                'client_id' => $request['client'],
                'booking_date' => $request['date'],
                'booking_time' => $request[''],
                'duration' => $request['duration'],
                'recurring' => $request[''],
                'reccur_until' => $request['reccur_until'],
                'reccur_frequency' => $request['frequency'],
                'status' => 'Active',
            ]
        ]);
        return view('admin.booknow');
    }
    public function allappointments()
    {
        $appointments = DB::table('booked_appointments')->get();
        return view('admin.appointments', compact('appointments'));
    }
}
