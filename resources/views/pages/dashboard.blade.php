<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('dist/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/logo/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/shared/iconly.css')}}">

</head>

<body>
    <div id="app">
        {{-- sidebar:start --}}
        <div id="sidebar" class="active">
          <div class="sidebar-wrapper active">
              <div class="sidebar-header position-relative">
                  <div class="d-flex justify-content-between align-items-center">
                      <div class="logo">
                          <a href="index.html"><img src="{{ asset('dist/assets/images/logo/sesarengan.png') }}" alt="Logo" srcset=""></a>
                      </div>
                      <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                              height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                              <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                  stroke-linejoin="round">
                                  <path
                                      d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                      opacity=".3"></path>
                                  <g transform="translate(-210 -1)">
                                      <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                      <circle cx="220.5" cy="11.5" r="4"></circle>
                                      <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                      </path>
                                  </g>
                              </g>
                          </svg>
                          <div class="form-check form-switch fs-6">
                              <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                              <label class="form-check-label"></label>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                              aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                              preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                              <path fill="currentColor"
                                  d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                              </path>
                          </svg>
                      </div>
                      <div class="sidebar-toggler  x">
                          <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                      </div>
                  </div>
              </div>
              <div class="sidebar-menu">
                  <ul class="menu">
                      <li class="sidebar-title">Menu</li>

                      <li class="sidebar-item  active">
                          <a href="index.html" class='sidebar-link'>
                              <i class="bi bi-grid-fill"></i>
                              <span>Dashboard</span>
                          </a>
                      </li>

                      <li class="sidebar-item has-sub">
                          <a href="#" class='sidebar-link'>
                              <i class="bi bi-stack"></i>
                              <span>Aduan</span>
                          </a>
                          <ul class="submenu">
                              <li class="submenu-item">
                                  <a href="#">Data Aduan</a>
                              </li>
                          </ul>
                      </li>

                      <li class="sidebar-item has-sub">
                          <a href="#" class='sidebar-link'>
                              <i class="bi bi-collection-fill"></i>
                              <span>Data Master</span>
                          </a>
                          <ul class="submenu">
                              <li class="submenu-item ">
                                  <a href="#">Data User</a>
                              </li>
                              <li class="submenu-item">
                                  <a href="#">Data Caption</a>
                              </li>
                              <li class="submenu-item">
                                  <a href="#">Data Wisata</a>
                              </li>
                              <!-- <li class="submenu-item ">
                                  <a href="#">Sweet Alert</a>
                              </li> -->
                          </ul>
                      </li>
                      <li class="sidebar-item  has-sub">
                          <a href="#" class='sidebar-link'>
                              <i class="bi bi-grid-1x2-fill"></i>
                              <span>Setting</span>
                          </a>
                          <ul class="submenu ">
                              <li class="submenu-item ">
                                  <a href="#">1</a>
                              </li>
                              <li class="submenu-item ">
                                  <a href="#">2</a>
                              </li>
                              <li class="submenu-item ">
                                  <a href="#">3</a>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-item">
                          <a href="table.html" class='sidebar-link'>
                              <i class="bi bi-x-octagon-fill"></i>
                              <span>Logout</span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      {{-- sidebar:end --}}
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Dashboard Sesarengan</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple" style="background-color: #006266">
                                                    <i class="iconly-boldDanger"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Jumlah Aduan</h6>
                                                <h6 class="font-extrabold mb-0">{{ $complaint_all }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue" style="background-color: #009432">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Jumlah User Aktif</h6>
                                                <h6 class="font-extrabold mb-0">{{ $user_all }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green" style="background-color: #A3CB38">
                                                    <i class="iconly-boldActivity"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Aduan Dikerjakan</h6>
                                                <h6 class="font-extrabold mb-0">{{ $complaint_dikerjakan }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red" style="background-color: #C4E538">
                                                    <i class="iconly-boldTick-Square"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Aduan Selesai</h6>
                                                <h6 class="font-extrabold mb-0">{{ $complaint_selesai }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-6 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Aduan Terkini</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Aduan</th>
                                                        <th>Deskripsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($complaint_terkini as $complaint)
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <p class="font-bold ms-3 mb-0">{{ $complaint->caption->caption }}</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">{{ $complaint->description }}</p>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Statistik Aduan</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-visitors-profile">
                                            {!! $chart->container() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="{{ asset('dist/assets/images/faces/5.jpg')}}" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">Admin</h5>
                                        <h6 class="text-muted mb-0">@admin</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistik Aduan</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile">
                                    {!! $chart->container() !!}
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Sesarengan</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#">Sesarengan Team</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('dist/assets/js/app.js')}}"></script>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
    {{-- <script src="{{ asset('dist/assets/js/pages/dashboard.js')}}"></script> --}}
</body>

</html>