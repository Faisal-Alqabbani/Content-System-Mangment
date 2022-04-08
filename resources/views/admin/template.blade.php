<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Bootstrap core CSS-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/sb-admin.css') }}" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav text-right" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light  bg-secondary fixed-top" id="mainNav">
        <div class="container">    
         @include('partials.navbar')
                <ul class="navbar-nav navbar-sidenav h-auto" id="exampleAccordion">
                    <li class="nav-item mt-5" data-toggle="tooltip" data-placement="right" title="Dashboard">
                   
                        <a class="nav-link" href="{{ route('dashboard')}}">
                            <i class="fa fa-home"></i>
                            <span class="nav-link-text">الإحصائيات</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" >
                        {{-- {{ route('category.index') }} --}}
                        <a class="nav-link" href="">
                            <i class="fa fa-home"></i>
                            <span class="nav-link-text">التصنيفات</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right">
                        {{-- {{ route('user.index') }} --}}
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">المستخدمين</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="المنشورات">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePosts" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">المنشورات</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapsePosts">
                            <li>
                                
                                <a href="{{route('post.index')}}">جميع المنشورات</a>
                            </li>
                            <li>
                                <a href="#">إضافة منشور</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="الأدوار">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseRoles" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">الأدوار</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseRoles">
                            <li>
                                <a href="#">الأدوار</a>
                            </li>
                            <li>
                                <a href="#">إضافة دور</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right">
                        {{-- {{ route('permissions') }} --}}
                        <a class="nav-link" href="">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text"> الصلاحيات</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePages" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-file"></i>
                            <span class="nav-link-text">الصفحات</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapsePages">
                            <li>
                                {{-- {{ route('page.index') }} --}}
                                <a href=""> الصفحات</a>
                            </li>
                            <li>
                                {{-- {{ route('page.create') }} --}}
                                <a href=""> إضافة صفحة جديدة</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        <div>
  </nav>

  <!-- /.content-wrapper-->
  <div class="content-wrapper">
      <!-- /.container-fluid-->
      <div class="container-fluid">
          <!-- Breadcrumbs-->
          <ol class="breadcrumb mt-5">
              <li class="breadcrumb-item">
                  <a href="/dashboard">لوحة التحكم </a>
              </li>
              <li class="breadcrumb-item active">
                  @yield('breadcrumb')
              </li>
          </ol>
         @yield('content')
       </div>
   </div>

   <footer class="bg-secondary text-center p-4">
        <a href="https://academy.hsoub.com">
           <img style="width:100px" src="https://academy.hsoub.com/uploads/monthly_2016_01/SiteLogo-346x108.png.dd3bdd5dfa0e4a7099ebc51f8484032e.png" alt="أكاديمية حسوب">
        </a>
    </footer>
  </div>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('/js/app.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    @yield('script')
</body>

</html>