@extends('layouts.master')

@section('content')
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="filter-secs">
                                <div class="filter-heading">
                                    <h3>Filters</h3>
                                    <a href="#" title="">Clear all filters</a>
                                </div>
                                <div class="paddy">
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Skills</h3>
                                        </div>
                                        <input class="form-control form-control-sm" type="text" name="search-skills"
                                            placeholder="Search skills">
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Availabilty</h3>
                                        </div>
                                        <ul class="avail-checks">
                                            <li>
                                                <input type="radio" name="cc" id="c1">
                                                <label for="c1">
                                                    <span></span>
                                                </label>
                                                <small>Hourly</small>
                                            </li>
                                            <li>
                                                <input type="radio" name="cc" id="c2">
                                                <label for="c2">
                                                    <span></span>
                                                </label>
                                                <small>Part Time</small>
                                            </li>
                                            <li>
                                                <input type="radio" name="cc" id="c3">
                                                <label for="c3">
                                                    <span></span>
                                                </label>
                                                <small>Full Time</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Job Type</h3>
                                        </div>
                                        <select class="form-control form-control-sm">
                                            <option>type_name</option>

                                        </select>
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Pay Rate / Hr ($)</h3>
                                        </div>
                                        <div class="rg-slider">
                                            <input class="rn-slider slider-input" type="hidden" value="5,50" />
                                        </div>
                                        <div class="rg-limit">
                                            <h4>1</h4>
                                            <h4>100+</h4>
                                        </div>
                                    </div>
                                    <div class="filter-dd">
                                        <div class="filter-ttl">
                                            <h3>Countries</h3>
                                        </div>
                                        <select class="form-control form-control-sm all_countries">
                                            <option>nicnamecountery</option>
                                        </select>
                                    </div>
                                    <input class="btn btn-block text-white" type="button" value="Filter"
                                        style="background-color: #e44d3a;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="main-ws-sec">
                                <div class="posts-section">
                                    <ul class="nav nav-pills nav-justified mb-3 tabs-my" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                href="#pills-home" role="tab" aria-controls="pills-home"
                                                aria-selected="true">My Post</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                                href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                aria-selected="false">All Post</a>
                                        </li>
                                    </ul>
                                    {{--  =================== My Post =====================  --}}
                                    <div class="tab-content" id="pills-tabContent">
                                            @foreach ($getAllJobsDataByUserID as $byUserIdValue)
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <div class="posty">
                                                    <div class="post-bar no-margin">
                                                        <div class="post_topbar">
                                                            <div class="usy-dt">
                                                                <img src="images/resources/us-pc2.png" alt="">
                                                                <div class="usy-name">
                                                                    <h3>{{ auth()->user()->last_name ? ucfirst(auth()->user()->first_name . ' ' . auth()->user()->last_name): ucfirst(auth()->user()->first_name) }}
                                                                    </h3>
                                                                    <span><img src="images/clock.png"
                                                                            alt="">{{$byUserIdValue->jobs ?  date('l, h:i:s A', strtotime($byUserIdValue->jobs[0]->created_at)) : 'N/A'  }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="ed-opts">
                                                                <a href="#" title="" class="ed-opts-open">
                                                                    <i class="la la-ellipsis-v"></i>
                                                                </a>
                                                                <ul class="ed-options">
                                                                    <li><a href="#" title="">Edit Post</a></li>
                                                                    <li><a href="#" title="">Unsaved</a></li>
                                                                    <li><a href="#" title="">Unbid</a></li>
                                                                    <li><a href="#" title="">Close</a></li>
                                                                    <li><a href="#" title="">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="epi-sec">
                                                            <ul class="descp">
                                                                <li><img src="images/icon8.png" alt=""><span>Epic
                                                                        Coder</span>
                                                                </li>
                                                                <li><img src="images/icon9.png"
                                                                        alt=""><span>{{$byUserIdValue->country ? $byUserIdValue->country->nicename : 'N/A'}}</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="job_descp">
                                                            <h3>  {{ $byUserIdValue->jobs ? $byUserIdValue->jobs[0]->title : 'N/A' }}</h3>
                                                            <ul class="job-dt">
                                                                <li><a href="#" title="">
                                                                    {{ $byUserIdValue->jobs[0]->jobType ? $byUserIdValue->jobs[0]->jobType->type_name : 'N/A' }}</a></li>
                                                                    <li><span>{{ $byUserIdValue->jobs ? '$'.$byUserIdValue->jobs[0]->rate : 'N/A' }} / hr</span></li>
                                                            </ul>
                                                            {{-- <p><?= substr($job['description'], 0, 100) ?>....<a href="job?id=<?php echo $job['id']; ?>" title="">view more</a></p> --}}


                                                        <p><?php echo substr(($byUserIdValue->jobs ? $byUserIdValue->jobs[0]->description : "none"), 0, 100); ?> ... <a href="#" title="">view more</a></p>


                                                            <ul class="skill-tags">

                                                                <?php $tages = explode(',', $byUserIdValue->jobs ? $byUserIdValue->jobs[0]->tages : 'NA' );
                                                                foreach ($tages as $tag):
                                                                  echo "<li><a href='#' title='{$tag}'>{$tag}</li>";
                                                                  endforeach;
                                                                ?>



                                                            </ul>
                                                        </div>
                                                        <div class="job-status-bar">
                                                            <ul class="like-com">
                                                                <li>
                                                                    <a href="#" class="active"><i
                                                                            class="fas fa-heart"></i> Like</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach


                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                @foreach ($getAllJobsData as $getAllJobsValue )


                                                <div class="post-bar">
                                                    <div class="post_topbar">
                                                        <div class="usy-dt">
                                                            <img src="images/resources/us-pic.png" alt="">
                                                            <div class="usy-name">
                                                                <h3>{{ $getAllJobsValue->first_name.' '. $getAllJobsValue->last_name}}</h3>
                                                                <span><img src="images/clock.png" alt="">
                                                                    {{$getAllJobsValue->created_at ?  date('l, h:i:s A', strtotime($getAllJobsValue->created_at)) : 'N/A'  }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="ed-opts">
                                                            <a href="#" title="" class="ed-opts-open"><i
                                                                    class="la la-ellipsis-v"></i></a>
                                                            <ul class="ed-options">
                                                                <li><a href="#" title="">Edit Post</a></li>
                                                                <li><a href="#" title="">Unsaved</a></li>
                                                                <li><a href="#" title="">Unbid</a></li>
                                                                <li><a href="#" title="">Close</a></li>
                                                                <li><a href="#" title="">Hide</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="epi-sec">
                                                        <ul class="descp">
                                                            <li><img src="images/icon8.png" alt=""><span>Epic
                                                                    Coder</span></li>
                                                            <li><img src="images/icon9.png"
                                                                    alt=""><span>{{ $getAllJobsValue->nicename ?   $getAllJobsValue->nicename : 'N/A' }}</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="job_descp">
                                                        <h3>{{ $getAllJobsValue->title ?   $getAllJobsValue->title : 'N/A' }}</h3>
                                                        <ul class="job-dt">
                                                            <li><a href="#" title="">{{ $getAllJobsValue->type_name ?   $getAllJobsValue->type_name : 'N/A' }}</a></li>
                                                            <li><span>{{ $getAllJobsValue->rate ?   '$'.$getAllJobsValue->rate : 'N/A' }}/ hr</span></li>
                                                        </ul>
                                                        <p><?= substr( $getAllJobsValue->description, 0, 100); ?>....<a href="#" title="">view more</a></p>
                                                        <ul class="skill-tags">
                                                          <?php $tages = explode(',', $getAllJobsValue->tages);
                                                          foreach ($tages as $tag):
                                                            echo "<li><a href='#' title='{$tag}'>{$tag}</li>";
                                                            endforeach;
                                                          ?>
                                                        </ul>
                                                    </div>
                                                    <div class="job-status-bar">
                                                        <ul class="like-com">
                                                            <li>
                                                                <a href="#" class="active"><i
                                                                        class="fas fa-heart"></i> Like</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

                                        </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
