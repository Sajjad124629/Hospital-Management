

<div class="page-section bg-light">
    <div class="container">
      <h1 style="font-size: 2.5rem" class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">

        @foreach ($postdata as $postdatas)

          @if ($postdatas->newstype=='letestnews')


        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$postdatas->postcategory}}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="postthumbnail/{{$postdatas->thumnail}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">{{$postdatas->newstitle}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="adminimage/{{$postdatas->	adminimage}}" alt="">
                  </div>
                  <span>{{$postdatas->postby}}</span>
                </div>
                <span class="mai-time"></span> {{$postdatas->date}}
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/newspage" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->
