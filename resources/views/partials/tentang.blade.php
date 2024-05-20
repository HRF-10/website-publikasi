<section class="dento-about-us-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="about-us-content mb-50 text-center">
            <div class="section-heading text-center wow fadeInUp" data-wow-delay="0.1s">
              @foreach ($abouts as $about)
                @if ($about->id == 1)
                  <div>
                    <h2>{{ $about->title }}</h2>
                    <div class="line"></div>
                  </div>  
                @endif
              @endforeach
            </div>
            <div class="wow fadeInUp" data-wow-delay="0.3s">
              @foreach ($abouts as $about)
                @if ($about->id == 1)
                  <div>
                    @if($showBody)
                        {!! $about->body !!}
                    @elseif($showExcerpt)
                        {!! $about->excerpt !!}
                    @endif
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>