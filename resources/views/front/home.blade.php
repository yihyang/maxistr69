@extends('layouts.frontEndMaster')
@section('content')
    <div class="col-lg-9 blog-main">
      @foreach($jobPosts as $jobPost)
          <div class="blog-post">
            <h3>{{ $jobPost->jobTitle }}</h3>
            <pre><code>Deadline : {{ $jobPost->deadline }} | Department : {{ $jobPost->department->departmentName }}</code></pre>
            <p>{{ $jobPost->jobDescription }}</p>
            <nav>
                <ul class="pager">
                  <li><a href="{{ URL::to('/apply-to-job/'.$jobPost->autoGeneratedJobId) }}">Apply</a></li>
                  <li><a href="{{ URL::to('/job-detail/'.$jobPost->autoGeneratedJobId) }}">Read More</a></li>
                </ul>
             </nav>
          </div>
      @endforeach
    </div>
@endsection