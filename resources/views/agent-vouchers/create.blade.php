@extends('layouts.appLogin')
@section('content')
    <!-- Start Banner section -->
    <div class="home1-banner-area mt-120">
        <div class="container-fluid">
            <div class="swiper home1-banner-slider">
                <div class="swiper-wrapper">
                   
                    <div class="swiper-slide">
                        <div class="home1-banner-wrapper"
                            style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url({{asset('home_banner.png')}});">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home1-banner-content">
                                            
                                            <h2 style="height: 130px"></h2>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-btn-grp">
                <div class="slider-btn home1-banner-prev">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div class="slider-btn home1-banner-next">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="home1-banner-bottom mb-120">
        <div class="container-fluid">
            <div class="filter-wrapper">
                <div class="nav-buttons">
                    <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                        
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tour-tab" data-bs-toggle="pill" data-bs-target="#tour"
                                type="button" role="tab" aria-controls="tour" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <path d="M16.7611 10.0896L15.946 9.90118L15.7703 9.02653C15.7562 8.95659 15.7249 8.89201 15.6795 8.83957C15.6341 8.78713 15.5764 8.74879 15.5125 8.72857C15.4485 8.70835 15.3806 8.707 15.316 8.72467C15.2514 8.74233 15.1924 8.77836 15.1453 8.82896L13.6465 10.4371C13.6026 10.4842 13.5705 10.5423 13.553 10.6061C13.5354 10.6699 13.5331 10.7374 13.5462 10.8025L13.7297 11.7162L13.1228 12.3674C12.6046 11.9319 11.953 11.6713 11.2453 11.6713C9.56304 11.6713 8.1944 13.1398 8.1944 14.9449C8.1944 16.7499 9.56304 18.2184 11.2453 18.2184C12.9276 18.2184 14.2962 16.7499 14.2962 14.9449C14.2962 14.1855 14.0533 13.4864 13.6475 12.9304L14.2544 12.2792L15.1059 12.4761C15.1666 12.4902 15.2295 12.4877 15.289 12.4689C15.3485 12.4501 15.4026 12.4156 15.4464 12.3685L16.9453 10.7603C16.9924 10.7097 17.0259 10.6464 17.0424 10.5771C17.0588 10.5078 17.0575 10.435 17.0387 10.3663C17.0198 10.2977 16.9841 10.2358 16.9353 10.1871C16.8864 10.1384 16.8262 10.1048 16.7611 10.0896ZM13.5543 14.9448C13.5543 16.3109 12.5185 17.4223 11.2453 17.4223C9.97217 17.4223 8.93633 16.3109 8.93633 14.9448C8.93633 13.5788 9.97217 12.4673 11.2453 12.4673C11.7483 12.4673 12.2138 12.6413 12.5935 12.9354L11.8476 13.7356C11.8255 13.6807 11.792 13.6318 11.7498 13.5927C11.7075 13.5536 11.6576 13.5252 11.6037 13.5097C11.5087 13.4825 11.4074 13.4968 11.3222 13.5496C11.237 13.6024 11.1749 13.6893 11.1493 13.7912L10.887 14.8418C10.8702 14.9093 10.8702 14.9803 10.887 15.0478C10.9039 15.1153 10.937 15.1768 10.9831 15.2262C11.0291 15.2756 11.0864 15.3111 11.1493 15.3292C11.2122 15.3473 11.2784 15.3474 11.3413 15.3293L12.3204 15.0479C12.3675 15.0343 12.4116 15.011 12.4502 14.9792C12.4889 14.9474 12.5213 14.9077 12.5457 14.8624C12.57 14.8171 12.5858 14.7672 12.5922 14.7154C12.5985 14.6635 12.5953 14.6109 12.5827 14.5604C12.5683 14.5025 12.5419 14.449 12.5054 14.4036C12.469 14.3583 12.4234 14.3224 12.3722 14.2986L13.1181 13.4984C13.3922 13.9057 13.5543 14.4052 13.5543 14.9448ZM15.0647 11.6522L14.4472 11.5094L14.314 10.8468L15.1884 9.90854L15.2711 10.3201C15.2862 10.3949 15.321 10.4635 15.3714 10.5177C15.4219 10.5718 15.4858 10.6092 15.5556 10.6253L15.9391 10.714L15.0647 11.6522ZM16.468 13.979C16.5188 14.298 16.5444 14.6211 16.5445 14.9448C16.5445 18.0801 14.1673 20.6307 11.2453 20.6307C8.32331 20.6307 5.94615 18.08 5.94615 14.9448C5.94615 11.8096 8.32336 9.25894 11.2453 9.25894C11.546 9.25894 11.8488 9.28655 12.1454 9.34098C12.2424 9.35882 12.3288 9.41724 12.3856 9.5034C12.4425 9.58956 12.4651 9.69642 12.4485 9.80047C12.4319 9.90452 12.3775 9.99722 12.2971 10.0582C12.2168 10.1192 12.1173 10.1435 12.0203 10.1257C11.7643 10.0787 11.505 10.055 11.2453 10.055C8.73244 10.055 6.68808 12.2486 6.68808 14.9448C6.68808 17.641 8.73244 19.8346 11.2453 19.8346C13.7582 19.8346 15.8026 17.641 15.8026 14.9448C15.8025 14.6661 15.7804 14.388 15.7367 14.1133C15.7201 14.0093 15.7427 13.9024 15.7995 13.8163C15.8563 13.7301 15.9427 13.6717 16.0397 13.6538C16.0877 13.645 16.1369 13.6464 16.1844 13.658C16.2319 13.6695 16.2768 13.691 16.3166 13.7212C16.3564 13.7514 16.3902 13.7897 16.4162 13.8339C16.4421 13.8782 16.4597 13.9275 16.468 13.979ZM20.834 2.12563H20.249V0.879517C20.249 0.394556 19.8813 0 19.4293 0H18.5395C18.0875 0 17.7197 0.394556 17.7197 0.879517V2.12563H16.5068V0.879517C16.5068 0.394556 16.139 0 15.6871 0H14.7973C14.3453 0 13.9776 0.394556 13.9776 0.879517V2.12563H12.7646V0.879517C12.7646 0.394556 12.3969 0 11.9449 0H11.0551C10.6031 0 10.2354 0.394556 10.2354 0.879517V2.12563H9.0224V0.879517C9.0224 0.394556 8.65463 0 8.20265 0H7.31284C6.86086 0 6.49314 0.394556 6.49314 0.879517V2.12563H5.28017V0.879517C5.28017 0.394556 4.91245 0 4.46047 0H3.5707C3.11873 0 2.75096 0.394556 2.75096 0.879517V2.12563H2.16599C0.971657 2.12563 0 3.16814 0 4.44963V20.676C0 21.9575 0.971657 23 2.16599 23H18.116C18.7113 23 19.2266 22.771 19.6476 22.3194L22.3656 19.403C22.7866 18.9513 23 18.3984 23 17.7597V4.44963C23 3.16814 22.0283 2.12563 20.834 2.12563ZM18.4617 0.879517C18.462 0.857472 18.4702 0.836413 18.4848 0.820827C18.4993 0.805242 18.5189 0.796362 18.5395 0.796078H19.4293C19.4498 0.796375 19.4695 0.805261 19.484 0.820845C19.4985 0.836429 19.5068 0.85748 19.5071 0.879517V3.80018C19.5068 3.82223 19.4985 3.84329 19.484 3.85888C19.4695 3.87448 19.4498 3.88337 19.4293 3.88367H18.5395C18.5189 3.88337 18.4993 3.87448 18.4848 3.85889C18.4702 3.84329 18.4619 3.82223 18.4617 3.80018V0.879517ZM14.7195 0.879517C14.7198 0.857472 14.7281 0.836413 14.7426 0.820827C14.7571 0.805242 14.7768 0.796362 14.7973 0.796078H15.6871C15.7076 0.796362 15.7272 0.805242 15.7418 0.820827C15.7563 0.836413 15.7646 0.857472 15.7649 0.879517V3.80018C15.7649 3.84541 15.7292 3.88367 15.6871 3.88367H14.7973C14.7767 3.88337 14.7571 3.87448 14.7426 3.85889C14.7281 3.84329 14.7198 3.82223 14.7195 3.80018V0.879517ZM10.9773 0.879517C10.9776 0.857472 10.9859 0.836413 11.0004 0.820827C11.0149 0.805242 11.0346 0.796362 11.0551 0.796078H11.9449C11.9654 0.796362 11.9851 0.805242 11.9996 0.820827C12.0141 0.836413 12.0224 0.857472 12.0227 0.879517V3.80018C12.0227 3.84541 11.987 3.88367 11.9449 3.88367H11.0551C11.0346 3.88337 11.0149 3.87448 11.0004 3.85889C10.9859 3.84329 10.9776 3.82223 10.9773 3.80018V0.879517ZM7.23508 0.879517C7.23535 0.85748 7.24363 0.836429 7.25816 0.820845C7.27268 0.805261 7.2923 0.796375 7.31284 0.796078H8.20265C8.2232 0.796362 8.24283 0.805242 8.25737 0.820827C8.2719 0.836413 8.28019 0.857472 8.28046 0.879517V3.80018C8.28046 3.84541 8.2448 3.88367 8.20265 3.88367H7.31284C7.29229 3.88337 7.27267 3.87448 7.25814 3.85888C7.24362 3.84329 7.23534 3.82223 7.23508 3.80018V0.879517ZM3.49289 0.879517C3.49317 0.857472 3.50146 0.836413 3.51599 0.820827C3.53053 0.805242 3.55016 0.796362 3.5707 0.796078H4.46047C4.48101 0.796375 4.50063 0.805261 4.51515 0.820845C4.52968 0.836429 4.53796 0.85748 4.53823 0.879517V3.80018C4.53797 3.82223 4.52969 3.84329 4.51517 3.85888C4.50064 3.87448 4.48102 3.88337 4.46047 3.88367H3.5707C3.55015 3.88337 3.53052 3.87448 3.51599 3.85889C3.50146 3.84329 3.49317 3.82223 3.49289 3.80018V0.879517ZM2.16599 2.92171H2.75096V3.80018C2.75096 4.28514 3.11873 4.67975 3.5707 4.67975H4.46047C4.91245 4.67975 5.28017 4.28514 5.28017 3.80018V2.92171H6.49314V3.80018C6.49314 4.28514 6.86086 4.67975 7.31284 4.67975H8.20265C8.65463 4.67975 9.0224 4.28514 9.0224 3.80018V2.92171H10.2353V3.80018C10.2353 4.28514 10.6031 4.67975 11.0551 4.67975H11.9448C12.3968 4.67975 12.7646 4.28514 12.7646 3.80018V2.92171H13.9775V3.80018C13.9775 4.28514 14.3453 4.67975 14.7973 4.67975H15.687C16.139 4.67975 16.5068 4.28514 16.5068 3.80018V2.92171H17.7197V3.80018C17.7197 4.28514 18.0875 4.67975 18.5394 4.67975H19.4293C19.8812 4.67975 20.2489 4.28514 20.2489 3.80018V2.92171H20.834C21.6192 2.92171 22.258 3.60713 22.258 4.44963V6.32887H0.741935V4.44963C0.741935 3.60713 1.38074 2.92171 2.16599 2.92171ZM2.16599 22.2039C1.38074 22.2039 0.741935 21.5185 0.741935 20.676V7.1249H22.2581V17.7597C22.2581 17.9007 22.2428 18.0336 22.2126 18.1594H19.3083C18.8563 18.1594 18.4886 18.554 18.4886 19.039V22.1551C18.3713 22.1875 18.2474 22.2039 18.116 22.2039H2.16599ZM19.2305 21.6409V19.0389C19.2308 19.0169 19.239 18.9958 19.2536 18.9802C19.2681 18.9646 19.2877 18.9557 19.3083 18.9554H21.7334L19.2305 21.6409Z"></path>
                                  </svg>
                                Activities
                            </button>
                        </li>
                        
                        
                    </ul>
                </div>
                <div class="filter-group">
                    <div class="tab-content" id="pills-tab2Content">
                        
                        <div class="tab-pane fade show active" id="tour" role="tabpanel">
                        <form action="{{ route('agent-vouchers.store') }}" method="post" class="form" > 
    {{ csrf_field() }}
                                <div class="filter-area">
                                    <div class="row g-xl-4 gy-4">
                                        <div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
                                            <div class="single-search-box">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                                        viewBox="0 0 27 27">
                                                        <path
                                                            d="M18.0075 17.8392C20.8807 13.3308 20.5195 13.8933 20.6023 13.7757C21.6483 12.3003 22.2012 10.5639 22.2012 8.75391C22.2012 3.95402 18.3062 0 13.5 0C8.7095 0 4.79883 3.94622 4.79883 8.75391C4.79883 10.5627 5.3633 12.3446 6.44361 13.8399L8.99237 17.8393C6.26732 18.2581 1.63477 19.506 1.63477 22.2539C1.63477 23.2556 2.28857 24.6831 5.40327 25.7955C7.57814 26.5722 10.4536 27 13.5 27C19.1966 27 25.3652 25.3931 25.3652 22.2539C25.3652 19.5055 20.7381 18.2589 18.0075 17.8392ZM7.76508 12.9698C7.75639 12.9562 7.7473 12.9428 7.73782 12.9298C6.83886 11.6931 6.38086 10.2274 6.38086 8.75391C6.38086 4.79788 9.56633 1.58203 13.5 1.58203C17.4255 1.58203 20.6191 4.7993 20.6191 8.75391C20.6191 10.2297 20.1698 11.6457 19.3195 12.8498C19.2432 12.9503 19.6408 12.3327 13.5 21.9686L7.76508 12.9698ZM13.5 25.418C7.27766 25.418 3.2168 23.589 3.2168 22.2539C3.2168 21.3566 5.30339 19.8811 9.92714 19.306L12.8329 23.8656C12.9044 23.9777 13.0029 24.0701 13.1195 24.134C13.2361 24.198 13.367 24.2315 13.4999 24.2315C13.6329 24.2315 13.7638 24.198 13.8804 24.134C13.9969 24.0701 14.0955 23.9777 14.167 23.8656L17.0727 19.306C21.6966 19.8811 23.7832 21.3566 23.7832 22.2539C23.7832 23.5776 19.7589 25.418 13.5 25.418Z" />
                                                        <path
                                                            d="M13.5 4.79883C11.3192 4.79883 9.54492 6.57308 9.54492 8.75391C9.54492 10.9347 11.3192 12.709 13.5 12.709C15.6808 12.709 17.4551 10.9347 17.4551 8.75391C17.4551 6.57308 15.6808 4.79883 13.5 4.79883ZM13.5 11.127C12.1915 11.127 11.127 10.0624 11.127 8.75391C11.127 7.44541 12.1915 6.38086 13.5 6.38086C14.8085 6.38086 15.873 7.44541 15.873 8.75391C15.873 10.0624 14.8085 11.127 13.5 11.127Z" />
                                                    </svg>
                                                </div>
                                                <div class="searchbox-input">
                                                    <label>Location</label>
                                                    <div class="custom-select-dropdown">
                                                        <div class="select-input">
                                                            <input type="text" readonly value="United Arab Emirates">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </div>
                                                        <div class="custom-select-wrap">
                                                            <div class="custom-select-search-area">
                                                                <i class='bx bx-search'></i>
                                                                <input type="text" placeholder="Type Your Destination">
                                                            </div>
                                                            <ul class="option-list">
                                                                <li>
                                                                    <div class="destination">
                                                                        <h6>United Arab Emirates</h6>
                                                                     
                                                                    </div> 
                                                                    <div class="tour">
                                                                         <span>AE</span>
                                                                     </div>           
                                                                 </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 d-flex justify-content-center divider">
                                            <div class="single-search-box">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                                        <g clip-path="url(#clip0_2037_326)">
                                                            <path
                                                                d="M15.5978 13.5309L12.391 11.1258V6.22655C12.391 5.73394 11.9928 5.33575 11.5002 5.33575C11.0076 5.33575 10.6094 5.73394 10.6094 6.22655V11.5713C10.6094 11.8519 10.7412 12.1164 10.9657 12.2839L14.5288 14.9563C14.6826 15.0721 14.8699 15.1346 15.0624 15.1344C15.3341 15.1344 15.6013 15.0124 15.7759 14.7772C16.0717 14.3843 15.9916 13.8258 15.5978 13.5309Z"/>
                                                            <path
                                                                d="M11.5 0C5.15851 0 0 5.15851 0 11.5C0 17.8415 5.15851 23 11.5 23C17.8415 23 23 17.8415 23 11.5C23 5.15851 17.8415 0 11.5 0ZM11.5 21.2184C6.14194 21.2184 1.78156 16.8581 1.78156 11.5C1.78156 6.14194 6.14194 1.78156 11.5 1.78156C16.859 1.78156 21.2184 6.14194 21.2184 11.5C21.2184 16.8581 16.8581 21.2184 11.5 21.2184Z"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="searchbox-input">
                                                    <label>Travel Date</label>
                                                    <div class="custom-select-dropdown">
                                                        <div class="select-input">
                                                          <input name="nof_night" id="nof_night" value="7" type="hidden" />
                                                            <input type="text" name="travel_from_date" readonly value="{{ old('travel_from_date', date('Y-m-d', strtotime('+1 day'))) }}">
                                                            <i class="bi bi-chevron-down"></i>
                                                        </div>
                                                        <!-- <div class="custom-select-wrap two">
                                                            <ul class="option-list">
                                                                <li class="single-item">
                                                                    <h6>Sep 12 - Sep 20</h6>
                                                                </li>
                                                                <li class="single-item">
                                                                    <h6>Aug 04 - Aug 10</h6>
                                                                </li>
                                                                <li class="single-item">
                                                                    <h6>Oct 15 - Oct 20</h6>
                                                                </li>
                                                                <li class="single-item">
                                                                    <h6>Nov 18 - Nov 25</h6>
                                                                </li>
                                                            </ul>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-3 col-md-6 d-flex justify-content-center">
                                            <div class="single-search-box">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
                                                        <g clip-path="url(#clip0_273_1754)">
                                                            <path
                                                                d="M13.3207 14.07C13.4615 14.163 13.6265 14.2126 13.7952 14.2127C14.0765 14.2127 14.3521 14.0761 14.5173 13.8238C14.7799 13.4251 14.6699 12.8893 14.2712 12.6268C12.4344 11.4175 11.4549 10.0781 11.189 8.413C11.0664 7.63051 11.2293 6.44276 11.8788 5.68373C12.3 5.19189 12.8555 4.95227 13.5776 4.95227C14.9937 4.95227 15.5731 5.95799 15.7926 6.55698C16.3228 8.00211 15.8852 9.80108 14.7761 10.7403C14.4116 11.0492 14.3666 11.5944 14.6745 11.958C14.9834 12.323 15.5281 12.3679 15.8922 12.0596C17.5541 10.6528 18.1943 8.0887 17.415 5.96263C16.787 4.2484 15.3522 3.22491 13.5775 3.22491C12.3552 3.22491 11.3134 3.6868 10.5651 4.56052C9.4864 5.82268 9.30716 7.56876 9.48218 8.68299C9.93995 11.5476 11.8924 13.1293 13.3207 14.07Z"/>
                                                            <path
                                                                d="M20.1255 22.0477H7.78708C7.81845 18.178 8.05759 17.0286 8.16475 16.7076C8.40062 16.0014 9.36979 15.275 10.2183 14.8006C10.9848 16.008 12.2021 16.7277 13.555 16.7277H13.5555C14.893 16.7272 16.0999 16.008 16.8628 14.801C17.7112 15.2756 18.679 16.0019 18.9144 16.7072C19.2186 17.6211 19.2013 18.9062 19.1873 19.9386C19.1845 20.1506 19.1816 20.3528 19.1816 20.5404C19.1816 21.0178 19.5682 21.4044 20.0455 21.4044C20.5229 21.4044 20.9095 21.0178 20.9095 20.5404C20.9095 20.3603 20.9123 20.166 20.915 19.962C20.9314 18.7991 20.9515 17.3521 20.5538 16.1601C19.9014 14.2048 17.1333 12.9862 16.8197 12.8538C16.714 12.8088 16.6003 12.7854 16.4853 12.7851C16.3704 12.7848 16.2565 12.8075 16.1505 12.8519C16.0445 12.8962 15.9485 12.9613 15.8679 13.0431C15.7873 13.125 15.7238 13.2221 15.6811 13.3287C15.2628 14.3747 14.4681 14.9995 13.5555 14.9995H13.5551C12.6378 14.9995 11.8123 14.3592 11.3995 13.3287C11.3568 13.2221 11.2933 13.125 11.2128 13.0431C11.1322 12.9613 11.0361 12.8963 10.9301 12.8519C10.8241 12.8076 10.7103 12.7849 10.5953 12.7853C10.4804 12.7856 10.3667 12.8089 10.2609 12.8538C9.94784 12.9862 7.17923 14.2044 6.52593 16.1606C6.21422 17.0965 6.05655 19.3681 6.05655 22.9113C6.05655 23.3886 6.44313 23.7752 6.92047 23.7752H20.1261C20.603 23.7752 20.9896 23.3891 20.9896 22.9118C20.9895 22.4343 20.6029 22.0477 20.1255 22.0477ZM5.3695 13.815C4.171 13.815 3.19618 12.5608 3.19618 11.0197C3.19618 9.48001 4.171 8.22724 5.3695 8.22724C5.98304 8.22724 6.59094 8.58197 6.95596 9.15243C7.22315 9.57034 7.58495 10.459 7.00463 11.7166C6.80478 12.1499 6.99387 12.6628 7.42723 12.8631C7.86106 13.0625 8.37352 12.8739 8.57332 12.4405C9.24909 10.9762 9.18966 9.43888 8.41048 8.22118C7.72069 7.14343 6.58393 6.49993 5.36903 6.49993C3.21817 6.49993 1.46835 8.52724 1.46835 11.0197C1.46835 13.5136 3.21817 15.5423 5.36903 15.5423C5.84636 15.5423 6.23342 15.1562 6.23342 14.6789C6.23337 14.2015 5.84684 13.815 5.3695 13.815ZM4.27767 21.2255H1.75991C1.7983 20.3701 1.87597 19.0981 2.01682 18.3503C2.19933 17.374 2.72444 16.8232 3.13296 16.533C3.52281 16.2569 3.61404 15.7178 3.33745 15.3289C3.06135 14.939 2.52268 14.8473 2.13331 15.1244C1.58578 15.5128 0.621729 16.4076 0.318939 18.0315C0.0680901 19.3639 0.00307088 21.9584 0.000223323 22.0679C-0.00239217 22.1831 0.0179889 22.2976 0.060174 22.4048C0.102359 22.512 0.165501 22.6097 0.245904 22.6922C0.326391 22.7746 0.422553 22.8401 0.528728 22.8848C0.634904 22.9294 0.748946 22.9524 0.86414 22.9524H4.27762C4.75496 22.9524 5.14154 22.5667 5.14154 22.0894C5.14159 21.6121 4.75501 21.2255 4.27767 21.2255ZM25.5327 11.0187C25.5327 8.52623 23.7829 6.49893 21.632 6.49893C20.4166 6.49893 19.2794 7.14195 18.5892 8.2197C17.81 9.43692 17.7501 10.9747 18.4249 12.439C18.6248 12.8719 19.1381 13.0619 19.571 12.8621C20.0039 12.6623 20.1939 12.1494 19.9941 11.716C19.4138 10.4581 19.7764 9.56986 20.0437 9.15191C20.4092 8.58144 21.0171 8.22671 21.6316 8.22671C22.8301 8.22671 23.8049 9.47953 23.8049 11.0192C23.8049 12.5602 22.8301 13.8145 21.6316 13.8145C21.1542 13.8145 20.7677 14.201 20.7677 14.6784C20.7677 15.1557 21.1542 15.5423 21.6316 15.5423C23.7819 15.5423 25.5322 13.5136 25.5327 11.0187ZM26.6811 18.0334C26.39 16.4624 25.4746 15.5769 24.9552 15.1894C24.5728 14.9049 24.0313 14.9825 23.7459 15.3649C23.4609 15.7473 23.5395 16.2892 23.9214 16.5742C24.3093 16.8634 24.8078 17.4053 24.9828 18.3511C25.1236 19.098 25.2013 20.3695 25.2397 21.2245H22.7215C22.2441 21.2245 21.8575 21.6111 21.8575 22.0885C21.8575 22.5658 22.2441 22.9524 22.7215 22.9524H26.1359C26.3685 22.9524 26.5912 22.8588 26.7545 22.6917C26.8349 22.6092 26.8979 22.5115 26.94 22.4043C26.9821 22.2971 27.0024 22.1826 26.9997 22.0674C26.997 21.9579 26.9324 19.3629 26.6811 18.0334Z"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="searchbox-input">
                                                    <label>Guest</label>
                                                    <div class="custom-select-dropdown">
                                                        <div class="select-input">
                                                            <h6><span id="adult-qty">1</span> Adults, <span id="child-qty">0</span> Child</h6>
                                                            <i class="bi bi-chevron-down"></i>
                                                        </div>
                                                        <div class="custom-select-wrap two no-scroll">
                                                            <ul class="guest-count">
                                                                <li class="single-item">
                                                                    <div class="title">
                                                                        <h6>Adult</h6>
                                                                        <Span></Span>
                                                                    </div>
                                                                    <div class="quantity-counter">
                                                                        <a href="#" data-type="adult" class="guest-quantity__minus"><i class="bi bi-dash"></i></a>
                                                                        <input name="adult_quantity" type="text" class="quantity__input"
                                                                            value="1">
                                                                        <a href="#" data-type="adult" class="guest-quantity__plus"><i class="bi bi-plus"></i></a>
                                                                    </div>
                                                                </li>
                                                                <li class="single-item">
                                                                    <div class="title">
                                                                        <h6>Children</h6>
                                                                        <Span></Span>
                                                                    </div>
                                                                    <div class="quantity-counter">
                                                                        <a href="#" data-type="child" class="guest-quantity__minus"><i class="bi bi-dash"></i></a>
                                                                        <input name="child_quantity" type="text" class="quantity__input"
                                                                            value="0">
                                                                        <a href="#" data-type="child" class="guest-quantity__plus"><i class="bi bi-plus"></i></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="save_and_activity">Search</button>
                            </form>
                        </div>
                        
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner section -->


    <div style="height: 200px;"></div>
           
   
    <!-- /.content -->
@endsection
@section('scripts')
@include('inc.citystatecountryjs')
<script type="text/javascript">
  
  // ... your existing JavaScript code ...

</script>
@endsection
