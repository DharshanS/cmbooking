
<footer class="deal-section">
    <div class="main-banner-main-div " style="background-image: url('dist/img/deal-item/contactus-image.jpg');">
.<div class="col-12 footer-mainDiv">
    <div class="row">
    <div class="col-4">
    <h2>Click My Booking</h2>
<div class="address">
    245 Kandy Road <br>Kandy <br>
Sri Lanka<br>
</div>
<div class="footer-link">
    <ul class="footer-ul">
    <li> <a href="#" class="footer-a">Email</a> </li>
    <li> <a href="#" class="footer-a">Phone</a> </li>
    <li> <a href="#" class="footer-a">FB</a> </li>
    <li> <a href="#" class="footer-a">Insta</a> </li>
    <li> <a href="#" class="footer-a">Ect</a> </li>
    </ul>
    </div>

    </div>
    <div class="col-8">
    <div class="form-row ">
    <div class="form-group col-6">
    <input type="text" class="form-control footer-input" name="" value="">
    </div>

    <div class="form-group col-6">
    <input type="text" class="footer-input form-control" name="" value="">
    </div>
    <div class="form-group col-12">
    <textarea name="name" class="footer-input form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group col-12">

    <button type="button " class="footer-btn form-control" name="button">Send</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>


    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="dist/slick/slick.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script  type="text/javascript" src="{{ asset('/js/cmb.js') }}" ></script>


    <script type="text/javascript">

    $(document).ready(function () {




        $('.thing').slick({
            dots: false,
            arrows: false,
            autoplay: true,
            speed: 400,
        });


        $(".partner").slick({
            dots: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: false,
            speed: 600,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1286,
                    settings: {
                        arrows: true,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: true,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 993,
                    settings: {
                        arrows: false,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        arrows: false,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },

            ]
        })
        $(".gift").slick({
            dots: true,
            slidesToShow: 5,
            slidesToScroll: 1,
//            autoplay:true,
            autoplay: false,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1631,
                    settings: {
                        arrows: true,
                        autoplay: true,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },

                {
                    breakpoint: 993,
                    settings: {
                        arrows: false,
                        autoplay: true,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 778,
                    settings: {
                        arrows: false,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        arrows: false,
                        autoplay: false,
                        centerMode: false,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                }
            ]
        });
    })
    </script>
