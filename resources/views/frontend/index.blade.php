<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Avilon Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

@include('frontend.partials.styles')

</head>

<body>

 <!--==========================
    Header
  ============================-->

@include('frontend.sections.header')

  <!--==========================
    Intro Section
  ============================-->

@include('frontend.sections.intro')

<main id="main">

    <!--==========================
      About Us Section
    ============================-->

@include('frontend.sections.about')

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->

@include('frontend.sections.team')

    <!--==========================
      Gallery Section
    ============================-->

@include('frontend.sections.gallery')

    <!--==========================
      Contact Section
    ============================-->

@include('frontend.sections.contact')

</main>

  <!--==========================
    Footer
  ============================-->

@include('frontend.sections.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('frontend.partials.scripts')

</body>
</html>
