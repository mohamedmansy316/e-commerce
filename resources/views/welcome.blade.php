<!DOCTYPE html>
<html lang="en">
@include('layout.header')

<body>
    @include('layout.navbar')
    <section class="mb-5">
        <div class="container-fluid">
            <div class="owl-carousel owl-theme d-block">
                <div class="item">
                    <img src="{{ 'public/img' }}/homepage/hero-sec.png" alt="">
                </div>
                <div class="item">
                    <img src="{{ 'public/img' }}/homepage/hero-sec1.png" alt="">

                </div>
                <div class="item">
                    <img src="{{ 'public/img' }}/homepage/hero-sec2.png" alt="">
                </div>
                <div class="item">
                    <img src="{{ 'public/img' }}/homepage/hero-sec3.png" alt="">
                </div>
                <div class="item">
                    <img src="{{ 'public/img' }}/homepage/hero-sec4.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="text-center">
            <h2>DENIM COLLECTION</h2>
            <p class="mb-4">Explore the best trends for girls and women at SaleHub! Clothes, shoes and cool accessories for a new season are available now at SaleHub online.</p>
        <div class="row ">
            <div class="col-6  d-flex justify-content-end p-0">
                <img src="{{ 'public/img' }}/homepage/second-sec1.png" alt="">
            </div>
            <div class="col-6 custom-img  d-flex flex-column justify-content-start p-0">
                <img src="{{ 'public/img' }}/homepage/second-sec2.png" alt="">
                <img src="{{ 'public/img' }}/homepage/second-sec3.png" alt="">
            </div>
        </div>
    </div>
    </section>





    @include('layout.scripts')
    @include('layout.footer')
    <script>
      $('.owl-carousel').owlCarousel({

    loop:true,
    dots:false,
    margin:10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
    </script>
</body>

</html>
