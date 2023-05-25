<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){

        $query = "
        SELECT users.first_name, users.last_name, jobs.created_at, countries.nicename, jobs.title, jobs.description, jobs.tages, jobs.rate, job_types.type_name
        FROM users
        LEFT JOIN countries ON users.country_id = countries.id
        LEFT JOIN jobs ON jobs.user_id = users.id
        LEFT JOIN job_types ON job_types.id = jobs.type_id
        WHERE users.is_deleted <> 'Y' AND jobs.is_deleted <> 'Y'
        ";
        $getAllJobsData =DB::select($query);
        $getAllJobsDataByUserID = User::with(['country', 'jobs.jobType'])
        ->where('is_deleted', '<>', 'Y')
        ->where('id', Auth::id())
        ->get();

        // dd( $getAllJobsData, $getAllJobsDataByUserID );


        return view('dashboard',['getAllJobsData' => $getAllJobsData, 'getAllJobsDataByUserID' => $getAllJobsDataByUserID]);
    }
}
