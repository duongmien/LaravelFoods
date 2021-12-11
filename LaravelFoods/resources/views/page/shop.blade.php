@extends('layout')
@section('content')

  <div class="content-wrapper">
    <div class="breadcrumb-wrap bg-f br-1">
      <div class="overlay bg-black op-9"></div>
      <img src="{{asset('frontend/assets/img/shape-1.png')}}"
        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png" alt="Image" class="br-shape-1">
      <img src="{{asset('frontend/assets/img/shape-2.png')}}"
        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png" alt="Image" class="br-shape-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb-title">
              <h2>Shop Left Sidebar</h2>
              <ul class="breadcrumb-menu list-style">
                <li><a href="index.html" tppabs="https://templates.hibootstrap.com/caban/default/index.html">Home </a>
                </li>
                <li>Shop Left Sidebar</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="Shop-wrap ptb-100">
      <div class="container">
        <div class="row gx-5">
          <div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
            <div class="sidebar">
              <div class="sidebar-widget search-box">
                <h4>Search </h4>
                <div class="form-group">
                  <input type="search" placeholder="Search">
                  <button type="submit"> <i class="flaticon-search"></i></button>
                </div>
              </div>
              <div class="sidebar-widget categories">
                <h4>Category</h4>
                <div class="category-box">
                  <ul class="list-style">

                  @foreach($category as $key => $cate)
                    <li>
                      <a href="{{URL::to('/category-shop/'.$cate->category_id)}}">
                      {{$cate->category_name}}
                      <i class="flaticon-right-arrow-angle"></i>
                     </a>
                    </li>
                  @endforeach
                  </ul>
                </div>
              </div>
              <!-- <div class="sidebar-widget new-product">
                <h4>New Arrivals</h4>
                <div class="new-product-wrap">
                  <div class="new-product-item">
                    <a href="javascript:if(confirm(%27https://templates.hibootstrap.com/caban/default/car-details.html  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27https://templates.hibootstrap.com/caban/default/car-details.html%27"
                      tppabs="https://templates.hibootstrap.com/caban/default/car-details.html" class="new-product-img">
                      <img src="{{('frontend/assets/img/post-thumb-1.jpg')}}"
                        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/blog/post-thumb-1.jpg"
                        alt="Iamge">
                    </a>
                    <div class="new-product-info">
                      <h6><a href="shop-details.html"
                          tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">Pasta Barista</a>
                      </h6>
                      <div class="price">
                        <span>$22</span>
                      </div>
                    </div>
                  </div>
                  <div class="new-product-item">
                    <a href="javascript:if(confirm(%27https://templates.hibootstrap.com/caban/default/car-details.html  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27https://templates.hibootstrap.com/caban/default/car-details.html%27"
                      tppabs="https://templates.hibootstrap.com/caban/default/car-details.html" class="new-product-img">
                      <img src="{{('frontend/assets/img/post-thumb-3.jpg')}}"
                        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/blog/post-thumb-3.jpg"
                        alt="Iamge">
                    </a>
                    <div class="new-product-info">
                      <h6><a href="shop-details.html"
                          tppabs="https://templates.hibootstrap.com/caban/default/shop-details.html">Chicken
                          Sandwitch</a></h6>
                      <div class="price"><span>$32</span>
                        <span class="discount">$35</span>
                      </div>
                    </div>
                  </div>
                  <div class="new-product-item">
                    <a href="javascript:if(confirm(%27https://templates.hibootstrap.com/caban/default/car-details.html  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27https://templates.hibootstrap.com/caban/default/car-details.html%27"
                      tppabs="https://templates.hibootstrap.com/caban/default/car-details.html" class="new-product-img">
                      <img src="{{('frontend/assets/img/post-thumb-2.jpg')}}"
                        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/blog/post-thumb-2.jpg"
                        alt="Iamge">
                    </a>
                    <div class="new-product-info">
                      <h6><a
                          href="javascript:if(confirm(%27https://templates.hibootstrap.com/caban/default/car-details.html  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that this file cannot be found.  \n\nDo you want to open it from the server?%27))window.location=%27https://templates.hibootstrap.com/caban/default/car-details.html%27"
                          tppabs="https://templates.hibootstrap.com/caban/default/car-details.html">Strawberry
                          Salsa</a></h6>
                      <div class="price"><span>$98</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-widget price-range-widget">
                <h4>Price Filter</h4>
                <div class="checkbox-item-wrap">
                  <div class="checkbox-item d-flex justify-content-between align-items-center">
                    <div class="checkbox style2">
                      <input type="checkbox" id="check_1">
                      <label for="check_1">$100-$120</label>
                    </div>
                    <span>(11)</span>
                  </div>
                  <div class="checkbox-item d-flex justify-content-between align-items-center">
                    <div class="checkbox style2">
                      <input type="checkbox" id="check_2">
                      <label for="check_2">$120-$140</label>
                    </div>
                    <span>(6)</span>
                  </div>
                  <div class="checkbox-item d-flex justify-content-between align-items-center">
                    <div class="checkbox style2">
                      <input type="checkbox" id="check_3">
                      <label for="check_3">$140-$180</label>
                    </div>
                    <span>(15)</span>
                  </div>
                  <div class="checkbox-item d-flex justify-content-between align-items-center">
                    <div class="checkbox style2">
                      <input type="checkbox" id="check_4">
                      <label for="check_4">$180-$240</label>
                    </div>
                    <span>(12)</span>
                  </div>
                  <div class="checkbox-item d-flex justify-content-between align-items-center">
                    <div class="checkbox style2">
                      <input type="checkbox" id="check_5">
                      <label for="check_5">$240-$300</label>
                    </div>
                    <span>(9)</span>
                  </div>
                </div>
              </div>
              <div class="sidebar-widget tags">
                <h4>Popular Tags </h4>
                <div class="tag-list">
                  <ul class="list-style">
                    <li><a href="blog-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/blog-left-sidebar.html">Food</a></li>
                    <li><a href="blog-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/blog-left-sidebar.html">Restaurant</a>
                    </li>
                    <li><a href="blog-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/blog-left-sidebar.html">Health</a>
                    </li>
                    <li><a href="blog-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/blog-left-sidebar.html">Review </a>
                    </li>
                    <li><a href="blog-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/blog-left-sidebar.html">Fastfood</a>
                    </li>
                    <li><a href="blog-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/blog-left-sidebar.html">Business</a>
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
            <div class="row align-items-center mb-25">
              <div class="col-xl-6 col-lg-5 col-md-4">
                <div class="profuct-result">
                  <p>Showing 10 of 120 Products</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="filter-item-cat">
                  <select>
                    <option value="1">Sort By Most Popular</option>
                    <option value="2">Sort By High To Low</option>
                    <option value="3">Sort By Low To High</option>
                  </select>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="filter-item-num">
                  <select>
                    <option value="1">Show 10</option>
                    <option value="2">Show 20</option>
                    <option value="3">Show 30</option>
                  </select>
                </div>
              </div>
            </div>
            @yield('shop_content')
            <div class="page-navigation">
              <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-sm-start text-center smb-20">
                  <a href="shop-left-sidebar.html"
                    tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html"
                    class="btn prev">Prev Page</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center smb-20">
                  <ul class="page-nav list-style">
                    <li><a class="active" href="shop-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">1</a></li>
                    <li><a href="shop-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">2</a></li>
                    <li><a href="shop-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">3</a></li>
                  </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-sm-end text-center">
                  <a href="shop-left-sidebar.html"
                    tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html"
                    class="btn next">Next Page </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
