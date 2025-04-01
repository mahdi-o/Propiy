
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
    <title>Propiy</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
  </head>
  <body class="m-0 font-sans antialiased font-normal dark:bg-slate-900 bg-gray-50 text-base text-slate-500 leading-default">
    <!-- Navbar -->
    @include('admin.plugins.navbar')

    <!-- End Navbar -->
    
    <div class="relative mx-6 mt-6 rounded-2xl" style="background-image: url('{{ asset('assets/img/vr-bg.jpg') }}'); background-size: cover">
      <aside class="fixed inset-y-0 dark:shadow-none dark:bg-slate-850 xl:animate-fade-up z-990 xl:scale-60 left-0 xl:left-[18%] flex-wrap items-center justify-between block w-full p-0 my-4 xl:ml-4 antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-none max-w-64 ease-nav-brand rounded-2xl xl:translate-x-0" aria-expanded="false">
        @include('admin.plugins.sidenav')
      </aside>

      <main class="mt-1 transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        <div class="relative md:scale-70 min-h-85-screen">
          <div class="container">
            <div class="flex flex-wrap pt-48 -mx-3">
              <div class="max-w-full px-3 pt-12 text-center md:w-1/12 md:flex-none lg:ml-12 lg:pt-0">
                <a href="javascript:;" class="inline-flex items-center justify-center w-12 h-12 mr-6 text-white transition-all duration-200 ease-in-out border-0 text-base rounded-xl" data-target="tooltip_trigger" data-placement="left">
                  <img class="w-full rounded-xl" alt="Image placeholder" src="../assets/img/team-1.jpg" />
                </a>
                <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                  My Profile
                  <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                </div>
                <button class="inline-block p-2 mb-4 mr-6 font-bold tracking-tight text-center text-black uppercase align-middle transition-all duration-200 ease-in bg-white border-0 border-white shadow-md cursor-pointer lg:mt-2 hover:-translate-y-px hover:shadow-xs active:opacity-85 leading-pro text-xs bg-150 rounded-xl bg-x-25" type="button" data-target="tooltip_trigger" data-placement="left">
                  <i class="p-2 fas fa-home"></i>
                </button>
                <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                  Home
                  <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                </div>
                <button class="inline-block p-2 mb-4 mr-6 font-bold tracking-tight text-center text-black uppercase align-middle transition-all duration-200 ease-in bg-white border-0 border-white shadow-md cursor-pointer hover:-translate-y-px hover:shadow-xs active:opacity-85 leading-pro text-xs bg-150 rounded-xl bg-x-25" type="button" data-target="tooltip_trigger" data-placement="left">
                  <i class="p-2 fas fa-search"></i>
                </button>
                <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                  Search
                  <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                </div>
                <button class="inline-block p-2 mb-4 mr-6 font-bold tracking-tight text-center text-black uppercase align-middle transition-all duration-200 ease-in bg-white border-0 border-white shadow-md cursor-pointer hover:-translate-y-px hover:shadow-xs active:opacity-85 leading-pro text-xs bg-150 rounded-xl bg-x-25" type="button" data-target="tooltip_trigger" data-placement="left">
                  <i class="p-2 fas fa-ellipsis-h"></i>
                </button>
                <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                  Minimize
                  <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                </div>
              </div>
              <div class="max-w-full px-3 md:w-11/12 md:flex-none lg:w-8/12">
                <div class="flex">
                  <div class="mr-auto">
                    <h1 class="mb-0 font-semibold text-banner-calculate leading-tighter xl:text-8xl dark:text-white">12°C</h1>
                    <h6 class="mb-0 ml-1 uppercase dark:text-white">Cloudy</h6>
                  </div>
                  <div class="ml-auto">
                    <img class="float-right w-1/2 lg:-mt-12" src="../assets/img/small-logos/icon-sun-cloud.png" alt="image sun" />
                  </div>
                </div>
                <div class="flex flex-wrap mt-6 -mx-3">
                  <div class="w-full max-w-full px-3 md:w-4/12 md:flex-none">
                    <div class="relative flex flex-col min-w-0 overflow-hidden break-words transition-all duration-200 ease-out origin-top bg-white border-0 border-transparent shadow-xl dark:bg-slate-850 dark:shadow-dark-xl transform3d hover:transform3d-hover rounded-2xl bg-clip-border">
                      <div class="flex-auto p-6">
                        <div class="flex">
                          <h6 class="mb-0 mr-4 dark:text-white">08:00</h6>
                          <h6 class="mb-0 dark:text-white">
                            Synk up with Mark
                            <small class="font-normal text-slate-400 dark:opacity-60 dark:text-white">Hangouts</small>
                          </h6>
                        </div>
                        <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                        <div class="flex">
                          <h6 class="mb-0 mr-4 dark:text-white">09:30</h6>
                          <h6 class="mb-0 dark:text-white">
                            Gym <br />
                            <small class="font-normal text-slate-400 dark:opacity-60 dark:text-white">World Class</small>
                          </h6>
                        </div>
                        <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                        <div class="flex">
                          <h6 class="mb-0 mr-4 dark:text-white">11:00</h6>
                          <h6 class="mb-0 dark:text-white">
                            Design Review<br />
                            <small class="font-normal text-slate-400 dark:opacity-60 dark:text-white">Zoom</small>
                          </h6>
                        </div>
                      </div>
                      <a href="javascript:;" class="w-full py-1 text-center dark:bg-gray-600 bg-gray-50" data-target="tooltip_trigger" data-placement="top">
                        <i class="text-blue-500 fas fa-chevron-down"></i>
                      </a>
                      <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                        Show More
                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 mt-6 md:mt-0 md:w-4/12 md:flex-none">
                    <div class="relative flex flex-col min-w-0 break-words transition-all duration-200 ease-out bg-white border-0 border-transparent shadow-xl dark:shadow-dark-xl bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:transform3d-hover transform3d rounded-2xl bg-clip-border">
                      <div class="flex-auto p-6">
                        <div class="flex">
                          <h5 class="mb-0 text-white">To Do</h5>
                          <div class="ml-auto">
                            <h1 class="mb-0 -mt-2 text-right text-white">7</h1>
                            <p class="mb-0 leading-normal text-white dark:opacity-60 text-sm">items</p>
                          </div>
                        </div>
                        <p class="mb-0 text-white dark:opacity-60">Shopping</p>
                        <p class="mb-0 text-white dark:opacity-60">Meeting</p>
                      </div>
                      <a href="javascript:;" class="w-full py-1 text-center" data-target="tooltip_trigger" data-placement="top">
                        <i class="text-white fas fa-chevron-down"></i>
                      </a>
                      <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                        Show More
                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                      </div>
                    </div>
                    <div class="relative flex flex-col min-w-0 mt-6 break-words transition-all duration-200 ease-out bg-white border-0 border-transparent shadow-xl dark:bg-slate-850 dark:shadow-dark-xl transform3d hover:transform3d-hover rounded-2xl bg-clip-border">
                      <div class="flex-auto p-6">
                        <div class="flex">
                          <p class="mb-0 dark:opacity-60 dark:text-white">Emails (21)</p>
                          <a href="javascript:;" class="ml-auto dark:text-white" data-target="tooltip_trigger" data-placement="top"> Check </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                            Check
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 mt-6 mb-6 md:mb-0 md:mt-0 md:w-4/12 md:flex-none">
                    <div class="relative flex flex-col items-start min-w-0 break-words transition-all duration-200 ease-out bg-white border-0 border-transparent shadow-xl dark:bg-slate-850 dark:shadow-dark-xl after:bg-gradient-to-tl after:from-blue-500 after:to-violet-500 after:opacity-85 transform3d hover:transform3d-hover rounded-2xl bg-clip-border after:absolute after:top-0 after:bottom-0 after:left-0 after:z-10 after:block after:h-full after:w-full after:rounded-2xl">
                      <div class="cursor-pointer">
                        <div class="absolute w-full h-full mb-8 bg-center bg-cover rounded-2xl" style="background-image: url('https://images.unsplash.com/photo-1518609878373-06d740f60d8b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2370&q=80')"></div>
                        <div class="relative z-20 flex-auto p-6 text-white">
                          <h5 class="mb-0 text-white">Some Kind Of Blues</h5>
                          <p class="leading-normal text-white text-sm">Deftones</p>
                          <div class="flex mt-12">
                            <button class="inline-block p-2 mb-0 font-bold tracking-tight text-center text-white uppercase align-middle transition-all ease-in border border-solid rounded-full shadow-none leading-pro text-xs border-white/75 bg-white/10" type="button" data-target="tooltip_trigger" data-placement="top">
                              <i class="p-2 fas fa-backward"></i>
                            </button>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                              Prev
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <button class="inline-block p-2 mx-2 mb-0 font-bold tracking-tight text-center text-white uppercase align-middle transition-all ease-in border border-solid rounded-full shadow-none leading-pro text-xs border-white/75 bg-white/10" type="button" data-target="tooltip_trigger" data-placement="top">
                              <i class="p-2 fas fa-play"></i>
                            </button>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                              Pause
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <button class="inline-block p-2 mb-0 font-bold tracking-tight text-center text-white uppercase align-middle transition-all ease-in border border-solid rounded-full shadow-none leading-pro text-xs border-white/75 bg-white/10" type="button" data-target="tooltip_trigger" data-placement="top">
                              <i class="p-2 fas fa-forward"></i>
                            </button>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                              Next
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="relative flex flex-col min-w-0 mt-6 break-words transition-all duration-200 ease-out bg-white border-0 border-transparent shadow-xl dark:bg-slate-850 dark:shadow-dark-xl transform3d hover:transform3d-hover rounded-2xl bg-clip-border">
                      <div class="flex-auto p-6">
                        <div class="flex">
                          <p class="my-auto dark:text-white dark:opacity-60">Messages</p>
                          <div class="ml-auto">
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center text-white transition-all duration-200 ease-in-out border-0 rounded-full text-sm h-9 w-9 hover:z-30" data-target="tooltip_trigger" data-placement="top">
                                <img class="w-full rounded-full" alt="Image placeholder" src="../assets/img/team-1.jpg" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                                2 New Messages
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center -ml-4 text-white transition-all duration-200 ease-in-out border-0 rounded-full text-sm h-9 w-9 hover:z-30" data-target="tooltip_trigger" data-placement="top">
                                <img class="w-full rounded-full" alt="Image placeholder" src="../assets/img/team-2.jpg" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                                1 New Message
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center -ml-4 text-white transition-all duration-200 ease-in-out border-0 rounded-full text-sm h-9 w-9 hover:z-30" data-target="tooltip_trigger" data-placement="top">
                                <img class="w-full rounded-full" alt="Image placeholder" src="../assets/img/team-3.jpg" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                                13 New Messages
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                              <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center -ml-4 text-white transition-all duration-200 ease-in-out border-0 rounded-full text-sm h-9 w-9 hover:z-30" data-target="tooltip_trigger" data-placement="top">
                                <img class="w-full rounded-full" alt="Image placeholder" src="../assets/img/team-4.jpg" />
                              </a>
                              <div data-target="tooltip" class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm">
                                7 New Messages
                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
   
   @include('admin.plugins.fixed-plugin')
  </body>
  @include('admin.layouts.footer')

</html>
