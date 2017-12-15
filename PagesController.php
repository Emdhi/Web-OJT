<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs;

class PagesController extends Controller
{
    // $data = array
    // (
    //     'titleindex' => 'Welcome to PBO Global',
    // );
    
    // this function index is responsible in redirecting to the Home page
    public function index()
    {
        $title = 'Welcome to PBO Global';
        return view('home.index')->with('title',$title);
    }
    
    //this function Admin is responsible in redirecting to the Admin page 
    public function Admin()
    {
        $title = 'Welcome Admin';
        $jobs_finance = jobs::all()->where('dept_name', 'Finance and Accounting');  
        $jobs_it = jobs::all()->where('dept_name', 'IT and IT Enabled Services');
        $jobs_law = jobs::all()->where('dept_name', 'Legal Support Service');
        $jobs_market = jobs::all()->where('dept_name', 'Sales and Marketing Admin');
        return view('AdminOnly.adminpage')
            ->with('title',$title)                    //this will redirect with title, all of 
            ->with('jobs_finance', $jobs_finance)
            ->with('jobs_it', $jobs_it)
            ->with('jobs_law', $jobs_law)
            ->with('jobs_market', $jobs_market);
    }

     //This function addpage is responsible in redirecting to the Add Page
     public function addpage()
     {
         $title = 'Welcome Admin';
         return view('AdminOnly.addpage')->with('title',$title); 
     }

    //This function login is responsible in redirecting to the Login Page
    public function login()
    {
        $title = 'Welcome to PBO Global';
        return view('AdminOnly.loginpage')->with('title',$title); 
    }

    //This function gallery is responsible in redirecting to the Gallery page
    public function gallery()
    {
        $title = 'Gallery';
        return view('home.gallery')->with('title',$title);
    }

    //This function itservices is responsible in redirecting to the Jobs Opportunities of IT and It Enabled Services
    public function itservices()
    {
        $dept_name = 'IT and IT Enabled Services';
        $headers = jobs::all()->where('dept_name', $dept_name);
        //return $headers;
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }

    //This function financeaccounting is responsible in redirecting to the Jobs Opportunities of Finance and Accounting
    public function financeaccounting()
    {
        $dept_name = 'Finance and Accounting';
        $headers = jobs::all()->where('dept_name', $dept_name);
        //return $headers;
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }

    //This function legalsupport is responsible in redirecting to the Jobs Opportunities of Legal Support Service
    public function legalsupport()
    {
        $dept_name = 'Legal Support Service';
        $headers = jobs::all()->where('dept_name', $dept_name);
        //return $headers;
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }

    //This function salesmarketing is responsible in redirecting to the Jobs Opportunities of Sales and Marketing Admin
    public function salesmarketing()
    {
        $dept_name = 'Sales and Marketing Admin';
        $headers = jobs::all()->where('dept_name', $dept_name);
        //return $headers;
        
        return view('opportunities.jobs')
            ->with('headers', $headers)
            ->with('dept_name', $dept_name);
    }

    

}
