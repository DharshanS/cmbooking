@extends('layouts.fheader')
@section('content')
    <div class="top-second-section ">

        <div class="container top-second-section-container">
            <img src="dist/img/logo/logo.png" class="mainLogo" alt="">
        </div>
    </div>

    <div class="main-banner-main-div" style="background-image: url('dist/img/banner/tr2.jpg');">
    </div>

    <section class="serch-section">
        <div class="container">
            <div class="row">
                <div class="serch-col">
                    <div class="search-btn-group">
                        <div class="one-way">
                            <button type="button" class=" btn-trip btn btn-trip-active" name="button">One Way</button>
                        </div>
                        <div class="one-way">
                            <button type="button" class="btn btn-trip" name="button">Round Trip</button>
                        </div>
                        <div class="one-way">
                            <button type="button" class="btn btn-trip" name="button">Multi City</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="origin">
                            <div class="form-group">
                                <label class="search-label" for="">Origin</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text search-icon">

                                            <img src="dist/img/icon/ICONS-01.png" class="search-icon-size">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control origin-border place" id="origin"
                                           placeholder="Colombo, Sri Lanka(CMB)">
                                </div>
                            </div>
                        </div>
                        <div class="or" style="background-image: url('dist/img/icon/widget.png');">

                        </div>
                        <div class="origin">
                            <label class="search-label" for="">Origin</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text search-icon">

                                        <img src="dist/img/icon/ICONS-02.png" class="search-icon-size">
                                    </div>
                                </div>
                                <input type="text" class="form-control origin-border place" id="destination"
                                       placeholder="destination">
                            </div>
                        </div>
                        <div class="depart">
                            <label class="search-label" for="">Depart</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text search-icon">

                                        <img src="dist/img/icon/ICONS-03.png" class="search-icon-size">
                                    </div>
                                </div>
                                <input type="text" class="form-control origin-border" id="depart-date"
                                       placeholder="depart">
                            </div>
                        </div>

                        <div class="depart">
                            <label class="search-label" for="">Return</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text search-icon">
                                        <img src="dist/img/icon/ICONS-03.png" class="search-icon-size">
                                    </div>
                                </div>
                                <input type="text" class="form-control origin-border" id="arrival-date"
                                       placeholder="arrival">
                            </div>
                        </div>
                        <div class="depart">
                            <label class="search-label" for="">Travellers</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text search-icon">

                                        <img src="dist/img/icon/ICONS-04.png" class="search-icon-size">
                                    </div>
                                </div>
                                <input type="text" class="form-control origin-border" id="inlineFormInputGroup"
                                       placeholder="travel">
                            </div>
                        </div>


                        <div class="search-flight">
                            <button type="button" class="btn flight-trip  btn-trip-active" name="button">Search Flight
                            </button>

                        </div>


                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="container">
        <div class="row">
            <section class="deal-section">
                <div class="container">
                    <div class="row">
                        <h2 class="section-h2">Today Deal & Offers</h2>
                        <div class=" gift slider ">

                            <div class="card ">
                                <img src="dist/img/deal-item/maldives-tours-trips.jpg" class="deal-item-img" alt="">
                                <div class="deal-item-info">
                                    <div class="item-into">
                                        <div class="item-info-icon"><img src="dist/img/icon/ICONS-01.png" class="info-icon" alt=""></div>
                                        <div class="item-info-text">Colombo to Dubai Round trip</div>

                                    </div>
                                    <div class="item-rate">
                                        <div class="from">From</div>
                                        <div class="rate">37,000 LKR</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <img src="dist/img/deal-item/104992135-ThumbnailDubai_WEB.1910x1000.jpg" class="deal-item-img" alt="">
                                <div class="deal-item-info">
                                    <div class="item-into">
                                        <div class="item-info-icon"><img src="dist/img/icon/ICONS-01.png" class="info-icon" alt=""></div>
                                        <div class="item-info-text">Colombo to Dubai Round trip</div>

                                    </div>
                                    <div class="item-rate">
                                        <div class="from">From</div>
                                        <div class="rate">37,000 LKR</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card ">
                                <img src="dist/img/deal-item/maxresdefault.jpg" class="deal-item-img" alt="">
                                <div class="deal-item-info">
                                    <div class="item-into">
                                        <div class="item-info-icon"><img src="dist/img/icon/ICONS-01.png" class="info-icon" alt=""></div>
                                        <div class="item-info-text">Colombo to Dubai Round trip</div>

                                    </div>
                                    <div class="item-rate">
                                        <div class="from">From</div>
                                        <div class="rate">37,000 LKR</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card " >
                                <img src="dist/img/deal-item/maldives-tours-trips.jpg" class="deal-item-img" alt="">
                                <div class="deal-item-info">
                                    <div class="item-into">
                                        <div class="item-info-icon"><img src="dist/img/icon/ICONS-01.png" class="info-icon" alt=""> </div>
                                        <div class="item-info-text">Colombo to Dubai Round trip </div>

                                    </div>
                                    <div class="item-rate">
                                        <div class="from">From</div>
                                        <div class="rate">37,000 LKR</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card " >
                                <img src="dist/img/deal-item/traveller.jpg" class="deal-item-img" alt="">
                                <div class="deal-item-info">
                                    <div class="item-into">
                                        <div class="item-info-icon"><img src="dist/img/icon/ICONS-01.png" class="info-icon" alt=""> </div>
                                        <div class="item-info-text">Colombo to Dubai Round trip </div>

                                    </div>
                                    <div class="item-rate">
                                        <div class="from">From</div>
                                        <div class="rate">37,000 LKR</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card " >
                                <img src="dist/img/deal-item/maldives-tours-trips.jpg" class="deal-item-img" alt="">
                                <div class="deal-item-info">
                                    <div class="item-into">
                                        <div class="item-info-icon"> <img src="dist/img/icon/ICONS-01.png" class="info-icon" alt=""></div>
                                        <div class="item-info-text">Colombo to Dubai Round trip </div>

                                    </div>
                                    <div class="item-rate">
                                        <div class="from">From</div>
                                        <div class="rate">37,000 LKR</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>


            <section class="deal-section">
                <div class="container">
                    <div class="row">
                        <h2 class="section-h2">Our Partner</h2>
                        <div class=" partner slider ">
                            <div class="our-patner">
                                <img src="dist/img/deal-item/2.png" class="our-patner-img" alt="">
                            </div>

                            <div class="our-patner">
                                <img src="dist/img/deal-item/3.png" class="our-patner-img" alt="">
                            </div>

                            <div class="our-patner">
                                <img src="dist/img/deal-item/4.png" class="our-patner-img" alt="">
                            </div>

                            <div class="our-patner">
                                <img src="dist/img/deal-item/5.png" class="our-patner-img" alt="">
                            </div>
                            <div class="our-patner">
                                <img src="dist/img/deal-item/4.png" class="our-patner-img" alt="">
                            </div>
                            <div class="our-patner">
                                <img src="dist/img/deal-item/3.png" class="our-patner-img" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="deal-section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <h2 class="section-h2">Before Your fly</h2>
                                <div class="card" style="">
                                    <img class="card-img-top" src="dist/img/deal-item/traveller.jpg" alt="Card image cap">
                                    <div class="card-body offer-section-body">

                                        <div class="card-block">
                                            <h2 class="card-text offer-section-text you-fly-title">Get your Bags</h2>
                                            <p class="before-your-fly-text">
                                                This handy tool help you create dummy text for all your layout  needs.<br>


                                                We are gradually adding new function and we welocome your suggestions and feedback.

                                                <br>
                                                Please Feel free to sent us any addition dummytext
                                            </p>
                                        </div>



                                        <div class=" offer-section-body">
                                            <h2 class="card-text offer-section-text you-fly-title">Check your Document</h2>
                                            <p class="before-your-fly-text">
                                                This handy tool help you create dummy text for all your layout  needs.

                                                We are gradually adding new function and we welocome your suggestions and feedback
                                                Please Feel free to sent us any addition dummytext
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mb-3">
                                <h2 class="section-h2">Travel Insurance</h2>
                                <div class="card" style="">
                                    <div class="card-body">
                                        <div class="card-block">
                                            <div class="row travel-row">
                                                <div class="  insu-img"><img src="dist/img/deal-item/1.jpg" class="offer-img" alt="">  </div>
                                                <div class="   insu-text offer-text" >Colombo to Dubai Round trip</div>
                                                <div class="offer-btn-col insu-btn "><button class="btn offer-book-btn form-control">Book</button> </div>
                                            </div>
                                            <div class="row travel-row">
                                                <div class="  insu-img"><img src="dist/img/deal-item/2.png" class="offer-img" alt="">  </div>
                                                <div class="   insu-text offer-text" >Colombo to Dubai Round trip</div>
                                                <div class="offer-btn-col insu-btn "><button class="btn offer-book-btn form-control">Book</button> </div>
                                            </div>
                                            <div class="row travel-row">
                                                <div class="  insu-img"><img src="dist/img/deal-item/3.png" class="offer-img" alt="">  </div>
                                                <div class="   insu-text offer-text" >Colombo to Dubai Round trip</div>
                                                <div class="offer-btn-col insu-btn "><button class="btn offer-book-btn form-control">Book</button> </div>
                                            </div>
                                            <div class="row travel-row">
                                                <div class="  insu-img"><img src="dist/img/deal-item/4.png" class="offer-img" alt="">  </div>
                                                <div class="   insu-text offer-text" >Colombo to Dubai Round trip</div>
                                                <div class="offer-btn-col insu-btn "><button class="btn offer-book-btn form-control">Book</button> </div>
                                            </div>
                                            <div class="row travel-row">
                                                <div class="  insu-img"><img src="dist/img/deal-item/5.png" class="offer-img" alt="">  </div>
                                                <div class="   insu-text offer-text" >Colombo to Dubai Round trip</div>
                                                <div class="offer-btn-col insu-btn "><button class="btn offer-book-btn form-control">Book</button> </div>
                                            </div>
                                            <div class="row travel-row">
                                                <div class="  insu-img"><img src="dist/img/deal-item/2.png" class="offer-img" alt="">  </div>
                                                <div class="   insu-text offer-text" >Colombo to Dubai Round trip</div>
                                                <div class="offer-btn-col insu-btn "><button class="btn offer-book-btn form-control">Book</button> </div>
                                            </div>
                                            <div class="row travel-row">
                                                <div class="  insu-img"><img src="dist/img/deal-item/2.png" class="offer-img" alt="">  </div>
                                                <div class="   insu-text offer-text" >Colombo to Dubai Round trip</div>
                                                <div class="offer-btn-col insu-btn "><button class="btn offer-book-btn form-control">Book</button> </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 mb-3">
                                <h2 class="section-h2">Travel Insurance</h2>
                                <div class="card" style="">
                                    <img class="card-img-top" src="dist/img/deal-item/download.jpg" alt="Card image cap">
                                    <div class="card-body offer-section-body">
                                        <div class="card-block">
                                            <h2 class="card-text offer-section-text you-fly-title">Benifit</h2>

                                            <p class="before-your-fly-text">
                                                This handy tool help you create dummy text for all your layout  needs.

                                                We are gradually adding new function and we welocome your suggestions and feedback
                                                Please Feel free to sent us any addition dummytext
                                            </p>
                                            <div class="col-12 insurance-btn-col">
                                                <button type="button" class="btn insurance-btn" name="button">Get Insurance</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


            </section>
            <!-- <section class="deal-section">
                <div class="container">
                    <div class="row">
                      <div class="footer" style="background-image: url('dist/img/deal-item/contactus-image.jpg')">
    kljlkh
                      </div>
                    </div>
                  </div>
            </section> -->



        </div>
    </div>
    @include('layouts.ffooter')
@endsection

