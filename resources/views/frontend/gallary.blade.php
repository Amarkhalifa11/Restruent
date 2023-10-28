<section id="gallery" class="gallery">
    <div class="container-fluid">

      <div class="section-title">
        <h2>Some photos from <span>Our Restaurant</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row g-0">

        @foreach ($gallarys as $gallary)
            
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('frontend/assets/img/gallery/' . $gallary->image) }}" class="gallery-lightbox">
              <img src="{{ asset('frontend/assets/img/gallery/' . $gallary->image) }}" alt="" class="img-fluid">
            </a>
          </div>
        </div>


        @endforeach

      </div>

    </div>
  </section><!-- End Gallery Section -->