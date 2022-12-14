@extends('layouts.new_main_app')

@section('content')
    <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
            <h1 class="mb-0">{{$user->firstName}}
                <span class="text-primary">{{$user->lastName}}</span>
            </h1>
            <div class="subheading mb-5">{{$user->address}} ·
                <a style="color: #0b7dfd" href="tel:{{$user->phone_number}}">{{$user->phone_number}}</a> ·
                <a href="mailto:{{$user->email}}">{{$user->email}}</a>
            </div>
            <div class="mb-4" style="line-height: 20px;">{!! $user->summery !!}</div>
            <ul class="list-inline list-social-icons mb-0">
                <li class="list-inline-item">
                    <a target="_blank" href="{{$user->instagram}}">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a target="_blank" href="{{$user->linkedin}}">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a target="_blank" href="{{$user->github}}">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- <hr class="m-0"> -->
    
    <!-- Experience -->
    
    <!-- <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills and Tools</h2>
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
                <div class="resume-content mr-auto">
                    <h4 class="mb-0">Knowledge</h4>
                    <p>
                        <ul>
                            <li>Software Development Life Cycle</li>
                            <li>PHP Programing</li>
                            <li>Database Design</li>
                            <li>Algorithms and Data Structures / Collections</li>
                            <li>Web Services</li>
                            <li>Enterprise Architecture</li>
                            <li>Design Patterns </li>
                            <li>Requirement Analysis</li>
                            <li>Backend Development</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section> -->
    <hr class="m-0">
    
    <!-- Experience -->
    
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experience</h2>

            @foreach($experiences as $exp)
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">{{$exp->section->title}}</h3>
                        <div class="subheading mb-3">{{$exp->companyName}}</div>
                        <p>{!!$exp->section->details!!}</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span
                            class="text-primary">{{date('Y', strtotime($exp->section->startDate))}} - {{($exp->section->isActive)? 'Present': date('Y', strtotime($exp->section->endDate))}}</span>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    
    <hr class="m-0" />
   
    <!-- Skills-->

    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
            <div class="subheading mb-3">Programming Languages, Frameworks &amp; Tools</div>
            <p>
                <ul>
                    <li>Software Development Life Cycle</li>
                    <li>PHP Programing</li>
                    <li>Database Design</li>
                    <li>Algorithms and Data Structures / Collections</li>
                    <li>Web Services</li>
                    <li>Enterprise Architecture</li>
                    <li>Design Patterns </li>
                    <li>Requirement Analysis</li>
                    <li>Backend Development</li>
                </ul>
            </p>
            <p>
                <b>Languages:</b>  PHP <br>
                <b>Web:</b> HTML5, CSS, JavaScript, AJAX, VueJS, jQuery <br>
                <b>Web and Application Servers:</b> Apache HTTP Server, Amazon EC2, Amazon S3 <br>
                <b>Frameworks:</b> MVC Architecture Laravel, Codeigniter <br>
                <b>Databases:</b> MySQL, Oracle, SQL Server <br>
                <b>Design Patterns:</b> Builder pattern, Provider pattern, Facade pattern <br>
                <b>SDLC:</b> Agile / SCRUM, Waterfall, Iterative <br>
                <b>Cloud:</b> AWS, Cpanel Hosting <br>
                <b>Tools:</b> Visual Studio Code, Apache Server, Xampp Control Panel, Git, Slack, Postman, MySQL Workbench, Toad, Composer, Eloquent, Vue Dev tools, <br>
                <b>CI/CD:</b> Git, Docker <br>
                <b>Platforms:</b> Windows, Linux <br>
            </p>
            
            <!-- <ul class="fa-ul mb-0">
                @foreach($user->activeSkills as $skill)
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        {{$skill->name}}
                    </li>
                @endforeach
            </ul> -->
        </div>
    </section>
    
    <hr class="m-0" />
     
    <!-- Education-->
    
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Education</h2>
            @foreach($education as $edu)
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <h3 class="mb-0">{{$edu->collageName}}</h3>
                        <div class="subheading mb-3">{{$edu->degree}}<b> in </b>{{$edu->department}}</div>
                        <!-- <p>Percentage: {{$edu->gpa}}%</p> -->
                        <div>{!!$edu->section->details!!}</div>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">{{date('Y', strtotime($edu->section->startDate))}} - {{($edu->section->isActive)? 'Present': date('Y', strtotime($edu->section->endDate))}}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <hr class="m-0" />

    <!-- Interests-->
    
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <h2 class="mb-5">Interests</h2>
            <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid
                skiier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free
                climbing, and kayaking.</p>
            <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television
                shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technolgy
                advancements in the front-end web development world.</p>
        </div>
    </section>

    <hr class="m-0" />

    <!-- Awards-->
    
    <section class="resume-section" id="awards">
        <div class="resume-section-content">
            <h2 class="mb-5">Awards &amp; Certifications</h2>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Google Analytics Certified Developer
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    Mobile Web Specialist - Google Certification
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    1<sup>st</sup>
                    Place - University of Colorado Boulder - Emerging Tech Competition 2009
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    1<sup>st</sup>
                    Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    2<sup>nd</sup>
                    Place - University of Colorado Boulder - Emerging Tech Competition 2008
                </li>
                <li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    1<sup>st</sup>
                    Place - James Buchanan High School - Hackathon 2006
                </li>
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    3<sup>rd</sup>
                    Place - James Buchanan High School - Hackathon 2005
                </li>
            </ul>
        </div>
    </section>

@endsection
