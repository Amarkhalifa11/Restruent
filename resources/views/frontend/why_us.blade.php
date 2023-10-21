<section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>Why choose <span>Our Restaurant</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>

      <div class="row">

            @php
                $i = 1;
            @endphp
        @foreach ($services as $service)
        <div class="col-lg-4">
          <div class="box">
            <span>{{$i++}}</span>
            <h4>{{$service->title}}</h4>
            <p>{{$service->description}}</p>
          </div>
        </div>

        @endforeach

      </div>

    </div>
  </section><!-- End Whu Us Section -->