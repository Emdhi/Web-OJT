@extends('layout.admin')

    @section('Finance')
    <br>
    <h4>Finance & Accounting</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_finance as $finance)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        {{$finance->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {{$finance->job_description}}
                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            @endforeach
        </ul>

    @endsection
        
    @section('Legal')
        <br>
        <h4>Legal Support Service</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_law as $law)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        {{$law->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {{$law->job_description}}
                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            @endforeach
        </ul>
    @endsection

    @section('IT')
        <br>
        <h4>IT and IT-Enabled Services</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_it as $IT)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        {{$IT->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {{$IT->job_description}}
                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            @endforeach
        </ul>
    @endsection

    @section('Sales')
        <br>
        <h4>Sales and Marketing Support Services</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_market as $market)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        {{$market->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {{$market->job_description}}
                        </span>   
                        <br><br>
                        <a href="#!" class="waves-effect waves-light btn indigo darken-4 btn">
                            Edit Job
                        </a>
                        <a href="#!" class="waves-effect waves-light btn red">
                            Delete Job
                        </a>
                    </div>
                </li>   
            @endforeach
        </ul>
    @endsection


    