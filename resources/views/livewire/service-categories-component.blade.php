<div>
<div class="container">
        <h1>Our Services</h1>
        <div class="row">
        @foreach($scategories as $scategory)
            <div class="service">
               <i class="fa"><a href="#"><img class="icon-img"  src="{{ asset('assets/images/categories')}}/{{$scategory->image}}" alt="{{$scategory->name}}"></a></i>
              <h5>{{$scategory->name}}</h5>
            </div>
            @endforeach
        </div>
    </div>
</div>
