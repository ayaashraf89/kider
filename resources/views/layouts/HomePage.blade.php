<!DOCTYPE html>
<html lang="en">

<head>
  @include("includes.head")
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
       @include("includes.navBar")
        <!-- Navbar End -->


        <!-- Carousel Start -->
       @include("includes.carousel")
        <!-- Carousel End -->


        <!-- Facilities Start -->
      @include("includes.facilities")
        <!-- Facilities End -->


        <!-- About Start -->
       @include("includes.about")
        <!-- About End -->


        <!-- Call To Action Start -->
        @include("includes.call")
        <!-- Call To Action End -->


        <!-- Classes Start -->
       @include("includes.classes")
        <!-- Classes End -->


        <!-- Appointment Start -->
       @include("includes.appointment")
        <!-- Appointment End -->


        <!-- Team Start -->
       @include("includes.team")
        <!-- Team End -->


        <!-- Testimonial Start -->
       @include("includes.testimonial")
        <!-- Testimonial End -->


        <!-- Footer Start -->
      @include("includes.footer")
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

   @include("includes.footerJs")
</body>

</html>