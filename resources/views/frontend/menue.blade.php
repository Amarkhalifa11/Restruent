<section id="menu" class="menu">
    <div class="container">

      <div class="section-title">
        <h2>Check our tasty <span>Menu</span></h2>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <a style="color: black; margin-right: 20px;  margin-left: 20px"  href="{{ route('home') }}">All</a>
            @foreach ($categories as $category)
                
           <a active style="color: black; margin-right: 20px;  margin-left: 20px"  href="{{ route('category', ['id'=>$category->id]) }}">{{$category->name}}</a>
            
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row menu-container">

        @foreach ($products as $product)
        
        <div class="col-lg-6 menu-item filter-starters">
          <div class="menu-content">
            <a href="#">{{$product->name}}</a><span>{{$product->price}}</span>
          </div>
          <div class="menu-ingredients">
            {{$product->title}}
          </div>
        </div>
        @endforeach


      </div>

    </div>
  </section><!-- End Menu Section -->