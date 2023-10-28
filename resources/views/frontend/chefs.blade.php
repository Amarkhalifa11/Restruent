<section id="chefs" class="chefs">
    <div class="container">

      <div class="section-title">
        <h2>Our Proffesional <span>Chefs</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row">


        @foreach ($chefs as $chef)
            

        <div class="col-lg-4 col-md-6 mt-5">
          <div class="member">
            <div class="pic"><img src="{{ asset('frontend/assets/img/chefs/' . $chef->image) }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$chef->name}}</h4>
              <span>{{$chef->position}}</span>
              <div class="social">
                <a href="{{$chef->twitter}}"><i class="bi bi-twitter"></i></a>
                <a href="{{$chef->facebook}}"><i class="bi bi-facebook"></i></a>
                <a href="{{$chef->instagram}}"><i class="bi bi-instagram"></i></a>
                <a href="{{$chef->linkiden}}"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>

    </div>
  </section><!-- End Chefs Section -->