<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Finder &mdash; Ажилын байрны бүртгэлийн систем</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('partialsjob.head')
  </head>
  <body>
  
  <div class="site-wrap">

    @include('partialsjob.nav')
    
    <div style="height: 113px;"></div>
    
    @yield('content')

    {{-- @include('partialsjob.findjob') --}}
    
    {{-- @include('partialsjob.categories') --}}

    {{-- @include('partialsjob.resentjob') --}}

    {{-- @include('partialsjob.testimonies') --}}

    @include('partialsjob.yourdreamjob')

    {{-- @include('partialsjob.whychoose') --}}

    {{-- @include('partialsjob.blog') --}}
    
    @include('partialsjob.footer')

    @include('partialsjob.scriptsjob')
  </div>
  </body>
</html>