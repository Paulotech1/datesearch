<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-listing-single-v5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 11:17:35 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, google maps, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Houzing - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


<!-- Title -->
<title>{{ $property->p_title }} - Panlet Nigeria</title>
<!-- Favicon -->
<link href="{{ asset('frontend/images/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('frontend/images/favicon.png') }}" sizes="128x128" rel="shortcut icon" />

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=62018e70a311b1001939f79d&product=inline-share-buttons" async="async"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

  <!-- Main Header Nav -->
  @include('user.frontend.myheader')

  <!-- Listing Single Property -->
 


    <!-- Listing Single Property -->
    <section class="listing-title-area pb50">
    <div class="container">
      <div class="row mb30">
        <div class="col-lg-7 col-xl-7">
          <div class="single_property_title mt30-767">
            <div class="breadcrumb_content style3">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('property/'.$categories->id.'/'.$categories->category_slug ) }}">{{ $categories->category_name }}</a></li>
                <li class="breadcrumb-item active style2" aria-current="page">{{ $states->state_name }}</li>
              </ol>
            </div>
            <div class="media">
              <div class="media-body">
                <h2 class="mt-0">{{ $property->p_title }}</h2>
                <p>{{ $property->p_address }}</p>
                <ul class="prop_details mb0">
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-bed pr5 vam"></span>{{ $property->p_no_of_bed }} Beds</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-bath pr5 vam"></span> {{ $property->p_no_of_bath }} Bath</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-car pr5 vam"></span> {{ $property->p_no_of_garage }} Garage</a></li>
                  <li class="list-inline-item mr20"><a class="mr20" href="#"><span class="flaticon-ruler pr5 vam"></span> {{ $property->p_lot_area }} Garage Sq Ft</a></li>

                  @php
  $state = App\Models\State::where('id',$property->p_location)->orderBy('state_name','ASC')->get();
  @endphp

                   @foreach($state as $states)

                  <li class="list-inline-item mr20"><a href="#"><span class="flaticon-calendar pr5 vam"></span> Location: {{ $states->state_name }}</a></li>
                  @endforeach

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-5">
          <div class="single_property_social_share_content text-right tal-md">
            <div class="spss style2 mt30">
            <li class="list-inline-item"> <div class="sharethis-inline-share-buttons"></div></li>
            </div>
            @if ($property->discount_price == NULL)

<div class="price mt20 mb10"><h3><small class="mr10"></small> N{{ number_format($property->selling_price, 2) }}/per night</h3></div>

@else

 <div class="price mt20 mb10"><h3><small class="mr10"><del>N{{ number_format($property->selling_price, 2) }}/per night</del></small>N{{ number_format($property->discount_price, 2) }}/per night</h3></div>

@endif
            <p class="mb0">{{ $property->p_area }}</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-12 pr0 pl15-767 pr15-767">
              <div class="spls_style_two mb30-md">
                <a class="popup-img" href="{{ asset($property->product_thambnail) }}">
                  <img class="img-fluid first-img" src="{{ asset($property->product_thambnail) }}" alt="1.jpg">
                </a>
                <a href="#"><span class="baddge_left">FEATURED</span></a>
                <!-- <a href="#"><span class="baddge_right">FOR SALE</span></a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="row">

          @foreach($multiImag as $img)
            <div class="col-sm-4 col-lg-4 pr5 pr15-767">
              <div class="spls_style_two mb10">
                <a class="popup-img" href="{{ asset($img->photo_name) }}"><img class="img-fluid w100" src="{{ asset($img->photo_name) }}" alt="2.jpg"></a>
              </div>
            </div>

            @endforeach
          
           
           
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Agent Single Grid View -->
  <section class="our-agent-single pt40 pb70 bgc-alice-blue">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-8 col-xl-9">
          <div class="property_sp_v8_tabs">
            <ul class="nav nav-tabs" id="myTab6" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="psp-frst-tab" data-toggle="tab" href="#psp-frst" role="tab" aria-controls="psp-frst" aria-selected="true">DESCRIPTION</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="psp-second-tab" data-toggle="tab" href="#psp-second" role="tab" aria-controls="psp-second" aria-selected="false">LOCATION</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="psp-third-tab" data-toggle="tab" href="#psp-third" role="tab" aria-controls="psp-third" aria-selected="false">DETAILS</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="psp-fourth-tab" data-toggle="tab" href="#psp-fourth" role="tab" aria-controls="psp-fourth" aria-selected="false">FEATURES</a>
              </li>
          
            
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="psp-ninth-tab" data-toggle="tab" href="#psp-ninth" role="tab" aria-controls="psp-ninth" aria-selected="false">REVIEW</a>
              </li>

              <li class="nav-item" role="presentation">
                <a class="nav-link" id="psp-fifth-tab" data-toggle="tab" href="#psp-fifth" role="tab" aria-controls="psp-fifth" aria-selected="false">HOST</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent6">
              <div class="tab-pane fade show active" id="psp-frst" role="tabpanel" aria-labelledby="psp-frst-tab">
                <div class="property_single_page_widget mb30">
                  <div class="listing_single_description mb20">
                    <h4 class="mb30">Description</h4>
                    <p class="first-Description mb25">{{ $property->p_desc }}</p>
                
                  </div>
                 
                </div>
              </div>
              <div class="tab-pane fade" id="psp-second" role="tabpanel" aria-labelledby="psp-second-tab">
                <div class="property_single_page_widget mb30">
                  <div class="location_details">
                  <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb15">Location</h4>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item mb0">
                      <li><p>Address: <span>{{ $property->p_address }}</span> </p></li>
                      <li><p>Country: <span> {{ $property->p_country }} </span> </p> </li>
                    </ul>
                  
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item mb0">
                      <li><p>City: <span>{{ $property->p_city }}</span> </p></li>
                      <li><p>Zip: <span>{{ $property->p_zip_code }}</span> </p></li>
                    </ul>
                 
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item mb0">
                      <li><p>Area: <span>{{ $property->p_area }}</span></p></li>
                      @php
                      $state = App\Models\State::where('id',$property->p_location)->orderBy('state_name','ASC')->get();
                      @endphp


                      <li><p>State: <span>{{ $states->state_name }}</span></p></li>
                    </ul>
                 
                  </div>
                  <!-- <div class="col-lg-12">
                    <div class="property_sp_map mt30">
                      <div class="h400 bdrs3" id="map-canvas2"></div>
                    </div>
                  </div> -->
                </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="psp-third" role="tabpanel" aria-labelledby="psp-third-tab">
                <div class="property_single_page_widget mb30">
                  <div class="additional_details">
                    <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb15">Property Details</h4>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item">
                      <li><p>Property ID:</p></li>
                      <li><p>Price:</p></li>
                      <li><p>Property Size:</p></li>
                      <li><p>Garage Size:</p></li>
                    </ul>
                    <ul class="list-inline-item">
                     <li><p><span>{{ $property->p_property_id }}</span></p></li>

                      @if ($property->discount_price == NULL)

                      <li><p><span> N{{ number_format($property->selling_price, 2) }} </span></p></li>

@else

<li><p><span>  N{{ number_format($property->discount_price, 2) }} </span></p></li>

@endif


                    
                      <li><p><span> {{ $property->p_unit }} Sq Ft</span></p></li>
                      <li><p><span> {{ ($property->p_size) }} Sq Ft</span></p></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item">
                      <li><p>Bed :</p></li>
                      <li><p>Bathrooms :</p></li>
                      <li><p>Room :</p></li>
                      <li><p>Garage :</p></li>
                    </ul>
                    <ul class="list-inline-item">
                     <li><p><span> {{ number_format($property->p_no_of_bed) }} </span></p></li>
                      <li><p><span> {{ number_format($property->p_no_of_bath) }} </span></p></li>
                      <li><p><span> {{ number_format($property->p_no_of_room) }} </span></p></li>
                      <li><p><span>{{ number_format($property->p_no_of_garage) }} </span></p></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-4">
                    <ul class="list-inline-item">
                    <li><p>Property Type:</p></li>
                      <li><p>Property Status:</p></li>
                      <li><p>Guest:</p></li>
                      <li><p>Caution Fee:</p></li>
                    </ul>
                    <ul class="list-inline-item">

                        @php
                        $categories = App\Models\Category::where('id',$property->p_type)->orderBy('category_name','ASC')->get();
                        @endphp

                        @foreach($categories as $category)
                        <li><p><span>{{ $category->category_name }}</span></p></li>
                        @endforeach

                        <li><p><span>For Rent</span></p></li>

                      
                        <li><p><span>{{ $property->p_no_of_guest }}</span></p></li>
                        

                        <li><p><span> N{{ number_format($property->p_caution_fee, 2) }} </span></p></li>

                    </ul>
                  </div>
                </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="psp-fourth" role="tabpanel" aria-labelledby="psp-fourth-tab">
                <div class="property_single_page_widget mb30">
                  <div class="additional_details">
                    <div class="row">
                  <div class="col-lg-12">
                    <h4 class="mb30">Features</h4>
                  </div>

                  @if ($property->air_con == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-air-conditioner"></span></div>
                      <div class="details">
                        <div class="title">Air Conditioning</div>
                      </div>
                    </div>
                  </div>
                  @else

                  @endif


                  @if ($property->lawn == 1)

                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-grass"></span></div>
                      <div class="details">
                        <div class="title">Lawn</div>
                      </div>
                    </div>
                  </div>
                  @else
                @endif


                @if ($property->refrigerator == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-refrigerator"></span></div>
                      <div class="details">
                        <div class="title">Refrigerator</div>
                      </div>
                    </div>
                  </div>

                  @else
                @endif

                  @if ($property->unit_washer == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-liquid-soap"></span></div>
                      <div class="details">
                        <div class="title">Washer</div>
                      </div>
                    </div>
                  </div>

                  @else
                @endif

                  @if ($property->barbeque == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-barbecue"></span></div>
                      <div class="details">
                        <div class="title">Barbeque</div>
                      </div>
                    </div>
                  </div>

                  @else
                @endif

                  @if ($property->laundry == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-laundry"></span></div>
                      <div class="details">
                        <div class="title">Laundry</div>
                      </div>
                    </div>
                  </div>

                  @else
                @endif


                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-sauna"></span></div>
                      <div class="details">
                        <div class="title">Sauna</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-wifi"></span></div>
                      <div class="details">
                        <div class="title">WiFi</div>
                      </div>
                    </div>
                  </div>

                  @if ($property->dryer == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-dryer"></span></div>
                      <div class="details">
                        <div class="title">Dryer</div>
                      </div>
                    </div>
                  </div>

                  @else
                @endif

                  @if ($property->microwave == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-microwave"></span></div>
                      <div class="details">
                        <div class="title">Microwave</div>
                      </div>
                    </div>
                  </div>

                  @else
                @endif

                @if ($property->swimming_pool == 1)
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-swimmer"></span></div>
                      <div class="details">
                        <div class="title">Swimming Pool</div>
                      </div>
                    </div>
                  </div>
                  @else
                @endif

                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-blinds"></span></div>
                      <div class="details">
                        <div class="title">Window Coverings</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-dumbbell"></span></div>
                      <div class="details">
                        <div class="title">Gym</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-outdoor-shower"></span></div>
                      <div class="details">
                        <div class="title">Outdoor Shower</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-coaxial"></span></div>
                      <div class="details">
                        <div class="title">TV Cable</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xl-3">
                    <div class="listing_feature_iconbox mb30">
                      <div class="icon float-left mr10"><span class="flaticon-chair"></span></div>
                      <div class="details">
                        <div class="title">Dining room</div>
                      </div>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="psp-fifth" role="tabpanel" aria-labelledby="psp-fifth-tab">
                <div class="property_single_page_widget mb30">
                @php
  $sub = DB::table('hosts')->where('id',$property->user_id)->first();
  $ads = DB::table('properties')->where('user_id',$property->user_id)->get();

  @endphp
                  <div class="property_sp_floor_plan">
                    <h4 class="mb30">Agent</h4>
                    <div class="col-md-6 col-lg-6">
                      <div class="feat_property list agent">
                        <div class="thumb">
                          
                          <img class="rounded-circle" src="{{ (!empty($sub->image))?url('upload/user_images/'.$sub->image):url('upload/no_image.jpg') }}" alt="e1.png" >
                        </div>
                        <div class="details">
                          <div class="tc_content">
                            <h4><a href="">{{ $sub->name }}</a></h4>
                          
                            
                          </div>
                          <div class="fp_footer">
                            <a class="fp_pdate float-left text-thm" href="{{ url('author/listings/'.$sub->id ) }}">Total Listings ({{ count($ads) }})</a>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="psp-sixth" role="tabpanel" aria-labelledby="psp-sixth-tab">
                <div class="property_single_page_widget mb30">
                  <div class="property_sp_videos">
                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="property-tab" data-toggle="tab" href="#property" role="tab" aria-controls="property" aria-selected="true">Property Video</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="virtual-tab" data-toggle="tab" href="#virtual" role="tab" aria-controls="virtual" aria-selected="false">360° Virtual Tour</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent3">
                      <div class="tab-pane fade show active" id="property" role="tabpanel" aria-labelledby="property-tab">
                        <div class="listing_single_video">
                          <div class="property_video">
                            <div class="thumb"><img class="pro_img img-fluid w100" src="images/listing/lspv.jpg" alt="lspv.jpg">
                              <div class="overlay_icon"><a class="video_popup_btn popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play-button"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="virtual" role="tabpanel" aria-labelledby="virtual-tab">
                        <div class="listing_single_video">
                          <div class="property_video">
                            <div class="thumb"><img class="pro_img img-fluid w100" src="images/listing/lspv.jpg" alt="lspv.jpg">
                              <div class="overlay_icon"><a class="video_popup_btn popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play-button"></span></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="psp-seventh" role="tabpanel" aria-labelledby="psp-seventh-tab">
                <div class="property_single_page_widget mb30">
                  <div class="whats_nearby">
                    <h4 class="mb20">What's Nearby</h4>
                    <div class="education_distance mb30">
                      <h5><span class="icon"><span class="flaticon-graduate-cap"></span></span>Education</h5>
                      <div class="single_line">
                        <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                      <div class="single_line">
                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                      <div class="single_line">
                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="education_distance mb30">
                      <h5><span class="icon"><span class="flaticon-heartbeat"></span></span> Health & Medical</h5>
                      <div class="single_line">
                        <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                      <div class="single_line">
                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                      <div class="single_line">
                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="education_distance">
                      <h5><span class="icon"><span class="flaticon-house-1"></span></span> Real Estate</h5>
                      <div class="single_line">
                        <p class="para">Eladia's Kids <span>(3.13 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                      <div class="single_line">
                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                      <div class="single_line">
                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                        <ul class="review">
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="psp-eight" role="tabpanel" aria-labelledby="psp-eight-tab">
                <div class="property_single_page_widget mb30">
                  <div class="property_view_sp_tabs">
                    <ul class="nav nav-tabs float-right fn-414" id="myTab5" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="hourly-tab" data-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent5">
                      <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
                        <h4 class="mt10-414">Property Views</h4>
                        <canvas id="myChartweave" width="100" height="50"></canvas>
                      </div>
                      <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                        <h4 class="mt10-414">Property Views</h4>
                        <div class="c_container w100"></div>
                      </div>
                      <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                        <h4 class="mt10-414">Property Views</h4>
                        <canvas class="ls_barchart" id="chart"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="chart_circle_doughnut">
                    <canvas class="mt50 mb50 dn" id="myChart"></canvas>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="psp-ninth" role="tabpanel" aria-labelledby="psp-ninth-tab">
                <div class="property_single_page_widget mb30">
                  <div class="bsp_reveiw_wrt">
                    <h4>Write a Review</h4>
                    <div class="df db-520">

                      <div class="bs-contact-form pt-45">
                      <div id="fb-root"></div>
                      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="NVg2LpSe"></script>


                      <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="8" data-width=""></div>
                      </div>

                   </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-xl-3">
          <div class="sidebar_agent_search_widget bgc-white">
            <div class="media">
              <img class="mr-3 author_img" src="{{ asset('image/panlet.jpg') }}" width="65" height="65" alt="Panlet Ng">
              <div class="media-body">
                <h5 class="mt10 mb5 fz16 heading-color fw600">Panlet Ng</h5>
                <p class="mb0"><a href="mailto:bookings@panlet.ng"><b>bookings@panlet.ng</b></a></p>
                <!-- <a class="tdu text-thm" href="#">View Listings</a> -->
              </div>
            </div>
            <div class="agent_search_form">
              <form action="" method="">
                @csrf

              <div class="form-group input-group mb30">
                  <input type="text" placeholder="ARRIVE" name="arrive" class="form-control form_control" onfocus="(this.type='date')" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                </div>

                <div class="form-group input-group mb30">
                <input type="text" placeholder="DEPART" name="depart" class="form-control form_control" onfocus="(this.type='date')">
                </div>

                <!-- <div class="form-group input-group mb30">
                  <input type="text" class="form-control form_control" placeholder="Name" name="Name">
                </div> -->
                <div class="ui_kit_select_box form-group input-group mb30">
                      <select class="selectpicker custom-select-lg mb20">
                        <option value="" selected>Adults</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10+">10+</option>
                      </select>
                </div>

                <div class="ui_kit_select_box form-group input-group mb30">
                      <select class="selectpicker custom-select-lg mb20">
                        <option value="" selected>No of Children</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10+">10+</option>
                      </select>
                </div>

               
                <div class="ui_kit_checkbox">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">By submitting this form I agree to Terms of Use</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-block btn-thm mb10">BOOK NOW</button>
                <button class="btn btn-block btn-whatsapp mb10"><a href="https://wa.me/2349012533681" target="_blank" title="Panlet Whatsapp Number"> WHATSAPP </a></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature Properties -->
  <section class="feature-property bgc-alice-blue">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Similar Listings</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
          </div>
        </div>
        
        
        <div class="col-lg-12">
          <div class="popular_listing_slider1">


          @forelse($relatedProperty as $row)
          <div class="item">
              <div class="feat_property">
                <div class="thumb"> <img class="img-whp" src="{{ asset($row->product_thambnail) }}" alt="fl1.jpg">
                  <div class="thmb_cntnt">
                    <ul class="tag mb0">
                        @php
                        $state = App\Models\State::where('id',$row->p_location)->orderBy('state_name','ASC')->get();
                        @endphp
                        @php
                        $host = DB::table('hosts')->where('id',$row->user_id)->first();
                        @endphp
                        @foreach($state as $states)
                        <li class="list-inline-item"><a href="{{ url('location/'.$states->id.'/'.$states->state_slug ) }}">{{ $states->state_name }}</a></li>
                        @endforeach
                      </ul>
                  </div>
                  <div class="thmb_cntnt2">
                    <ul class="listing_gallery mb0">
                        @php
                        $multiImag =  DB::table('multi_imgs')->where('property_id', $row->id)->get();                  
                        @endphp
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> {{ count($multiImag) }} </a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="tc_content">
                    <div class="badge_icon"><a href="{{ url('author/listings/'.$host->id ) }}"><img src="{{ (!empty($host->image))?url('upload/user_images/'.$host->image):url('upload/no_image.jpg') }}" alt="1.png" style="height: 43px; width: 43px"></a></div>
                    <h4><a href="{{ url('property/listing/'.$row->id.'/'.$row->p_title_slug ) }}">{{ $row->p_title }}</a></h4>
                    <p>{{ $row->p_address }}</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>{{ $row->p_no_of_bed }} Beds</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>{{ $row->p_no_of_bath }} Bath</a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>{{ $row->p_no_of_garage }} Garage</a></li>
                       
                    </ul>
                  </div>
                  <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                                   
                          @if ($row->discount_price == NULL)
                          <li class="list-inline-item"><a href="#">
                         <span class="heading-color fw600">N{{ number_format($row->selling_price, 2) }}</span></a></li>
                          @else

                          <li class="list-inline-item"><a href="#"><small><del class="body-color">N{{ number_format($row->selling_price, 2) }}</del></small><br>
                           <span class="heading-color fw600">N{{ number_format($row->discount_price, 2) }}</span></a></li>

                          
                          @endif

                          </ul>



                    <ul class="fp_meta float-right mb0">
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                      <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            @empty
                  <h5 class="text-danger">No Properties Found</h5>
           
          @endforelse
            
          </div>
        </div>



      </div>
    </div>
  </section>

	<!-- Our Footer -->
  @include('user.frontend.myfooter')
<!-- <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a> -->
</div>
<!-- Wrapper End -->
<script src="{{asset('frontend/js/jquery-3.6.0.js') }}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{asset('frontend/js/popper.min.js') }}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{asset('frontend/js/jquery.mmenu.all.js') }}"></script>
<script src="{{asset('frontend/js/ace-responsive-menu.js') }}"></script>
<script src="{{asset('frontend/js/bootstrap-select.min.js') }}"></script>
<script src="{{asset('frontend/js/chart.min.js') }}"></script>
<script src="{{asset('frontend/js/chart-custome.js') }}"></script>
<script src="{{asset('frontend/js/isotop.js') }}"></script>
<script src="{{asset('frontend/js/snackbar.min.js') }}"></script>
<script src="{{asset('frontend/js/simplebar.js') }}"></script>
<script src="{{asset('frontend/js/parallax.js') }}"></script>
<script src="{{asset('frontend/js/scrollto.js') }}"></script>
<script src="{{asset('frontend/js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{asset('frontend/js/jquery.counterup.js') }}"></script>
<script src="{{asset('frontend/js/wow.min.js') }}"></script>
<script src="{{asset('frontend/js/progressbar.js') }}"></script>
<script src="{{asset('frontend/js/slider.js') }}"></script>
<script src="{{asset('frontend/js/timepicker.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"></script>
<script src="{{asset('frontend/js/googlemaps1.js') }}"></script>
<script src="{{asset('frontend/js/googlemaps2.js') }}"></script>
<!-- Custom script for all pages --> 
<script src="{{asset('frontend/js/script.js') }}"></script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

</body>

<!-- Mirrored from creativelayers.net/themes/houzing-html/page-listing-single-v5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 11:17:43 GMT -->
</html>