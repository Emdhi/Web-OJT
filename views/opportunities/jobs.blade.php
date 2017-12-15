@extends('layout.opportunities')
    
    {{--  Navbar  --}}
        @section('navContent')
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>           
                <li><a href="\gallery">Gallery</a></li>
                <li><a href="#">Apply Now</a></li>
            </ul>
        @endsection
    {{--  Navbar  --}}

    {{--  Background Photo Mobile View  --}}
        @section('bgphoto')
            <img src=<?php echo asset("img/mini_careers.jpg")?>>
        @endsection
    {{-- End of Background Photo Mobile View  --}}

@section('loadingScreen')
        <div id="load">
                <div class="dot1"></div>
                <div class="dot2"></div>
        </div>
@endsection

    {{--  Opportunities Content  --}}
        @section('content')
            {{--  This is a loop to display all jobs titles per department  --}}
                @foreach($headers as $entity) {{-- $header is dept_name from PagesController --}}
                    <?php  //explode is a key word array. $entity is an array variable
                        $responsibilities = explode("\n", $entity['responsibilities']);
                        $requirements = explode("\n", $entity['requirements']);
                        $advantages = explode("\n", $entity['advantages']);
                        $general_qualifications = explode("\n", $entity['general_qualifications']);
                    ?>
                    {{--  Collapsible Popout of Job Title --}}
                        <div class="section white container">                        
                            <ul class="collapsible popout" data-collapsible="accordion">
                                <li>
                                    <div class="collapsible-header active">
                                        <i class="material-icons">filter_drama</i>{{$entity->job_title}} {{--this will get the job_title from $entity--}}
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            {{$entity->job_description}} {{--this will get the job_description from $entity--}}
                                        </span>   
                                        <br><br>
                                        
                                        {{--this will get the job_id from $entity and use for modal--}}
                                        <?php echo("
                                        <a href=\"#modal_".$entity->job_id."\" class=\"waves-effect waves-light btn indigo darken-4 btn modal-trigger\">
                                        "); ?>
                                            Explore
                                        </a>
                                        {{--  this will redirect to webform application  --}}
                                        <a href="#" class="waves-effect waves-light btn teal darken-3 btn modal-trigger">
                                            Apply Now
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    {{--  Collapsible Popout  --}}

                        {{--  CORRESPONDING MODAL FOR THE JOB  --}}
                                <?php echo("
                            <div id=\"modal_".$entity->job_id."\" class=\"modal modal-fixed-footer\">
                                "); ?>

                                {{--  Modal Content  --}}
                                    <div class="modal-content">
                                        <h4>{{$entity->job_title}}</h4>
                                        <hr style="color:#101755;">
                                        
                                        {{--Responsibilities Area--}}
                                            @if($entity['responsibilities'] != "")
                                                <h5>Responsibilities</h5>
                                                <ul>
                                                    @foreach($responsibilities as $responsibility)                                
                                                        <div class="valign-center"> 
                                                            <i class="tiny material-icons indigo-text text-darken-4">check_circle</i>
                                                            <span>{!!$responsibility!!}</span><br>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        {{--End of Responsibilities Area--}}

                                        {{--Requirements Area--}}
                                            @if($entity['requirements'] != "")
                                                <br>
                                                <h5>Requirements</h5>
                                                    <ul>
                                                        @foreach($requirements as $requirement)
                                                            <div class="valign-center"> 
                                                                <i class="tiny material-icons indigo-text text-darken-4">check_circle</i>
                                                                <span>{!!$requirement!!}</span><br>
                                                            </div>
                                                        @endforeach
                                                    </ul>
                                            @endif
                                        {{--End of Requirements Area--}}

                                        {{--Advantages Area--}}
                                            @if($entity['advantages'] != "")
                                                <br>
                                                <h5>Advantages</h5>
                                                    <ul>
                                                        @foreach($advantages as $advantage)
                                                            <li>
                                                                <?php echo(chr(7));?> {{--  insert bullets here  --}}
                                                                {!!$advantage!!}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                            @endif
                                        {{--End of Advantages Area--}}

                                        {{--Genereal Qualification Area--}}
                                            @if($entity['general_qualifications'] != "")
                                                <br>
                                                <h5>General Qualifications</h5>
                                                    <ul>
                                                        @foreach($general_qualifications as $qualification)
                                                            <li>
                                                                <?php echo(chr(7));?> {{--  insert bullets here  --}}
                                                                {!!$qualification!!}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                            @endif
                                        {{--End of Genereal Qualification Area--}}
                                    </div>
                                {{--  End of Modal Content  --}}
                                
                                {{-- Modal Footer --}}
                                    <div class="modal-footer">
                                        <a href="#!" class=" waves-effect waves-green btn teal darken-3">Apply Now</a>
                                        <a href="#!" class="modal-action modal-close waves-effect red btn">Close</a>
                                    </div>
                                {{-- End of Modal Footer --}}
                            </div>
                        {{--  CORRESPONDING MODAL FOR THE JOB  --}}   
                @endforeach
            {{--  End Loop  --}}
        @endsection
    {{--  End of Opportunities Content  --}}

