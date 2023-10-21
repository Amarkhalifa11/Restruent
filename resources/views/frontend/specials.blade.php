<section id="specials" class="specials">
    <div class="container">

        <div class="section-title">
            <h2>Check our <span>Specials</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">


                    @foreach ($specials_products as $product)
                    
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-{{ $product->id }}">{{ $product->name }} </a>
                        </li>


                    @endforeach


                </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">


                    @foreach ($specials_products as $product)
                        <div id="tab-{{ $product->id }}"
                            class="tab-pane">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>{{ $product->title }}</h3>
                                    <p class="fst-italic">{{ $product->description }}</p>

                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('frontend/assets/img/' . $product->image) }}" width="200"
                                        alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </div>
</section><!-- End Specials Section -->
