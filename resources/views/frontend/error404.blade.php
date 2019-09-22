@extends('layouts/frontendapp')
@section('frontend_content')
<main>
  <section class="container">


  <div class="err404">
      <h1 class="err404-ttl">404</h1>
      <p class="err404-subttl">
          Error. Page not found.
      </p>
      <form action="#" class="err404-search">
          <input type="text" placeholder="Search...">
          <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      
  </div>

  </section>
</main>
@endsection
