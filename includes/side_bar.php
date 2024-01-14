  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">

      <div class="overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">

          <nav id="sidebar">
              <div class="shadow-bottom"></div>
              <ul class="list-unstyled menu-categories" id="accordionExample">
                  <li class="menu">
                      <a href="index.php" data-active="true" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>

                              <span>Dashboard</span>

                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>

                  </li>

                  <li class="menu">
                      <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                                  <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                  <rect x="9" y="9" width="6" height="6"></rect>
                                  <line x1="9" y1="1" x2="9" y2="4"></line>
                                  <line x1="15" y1="1" x2="15" y2="4"></line>
                                  <line x1="9" y1="20" x2="9" y2="23"></line>
                                  <line x1="15" y1="20" x2="15" y2="23"></line>
                                  <line x1="20" y1="9" x2="23" y2="9"></line>
                                  <line x1="20" y1="14" x2="23" y2="14"></line>
                                  <line x1="1" y1="9" x2="4" y2="9"></line>
                                  <line x1="1" y1="14" x2="4" y2="14"></line>
                              </svg>
                              <span>Stations</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
                          <li>
                              <a href="add_station.php"> Add Station </a>
                          </li>
                          <li>
                              <a href="view_station.php"> View Station </a>
                          </li>
                      </ul>
                  </li>
                  <li class="menu">
                      <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal">
                                  <polyline points="4 17 10 11 4 5"></polyline>
                                  <line x1="12" y1="19" x2="20" y2="19"></line>
                              </svg>
                              <span>Region</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                          <li>
                              <a href="add_district.php"> Add Region </a>
                          </li>
                          <li>
                              <a href="view_district.php"> View Region </a>
                          </li>

                      </ul>
                  </li>

                  <li class="menu">
                      <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                  <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                  <line x1="12" y1="22.08" x2="12" y2="12"></line>
                              </svg>
                              <span>Drivers</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>

                      <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                          <li>
                              <a href="Add_driver.php"> Add Driver </a>
                          </li>
                          <li>
                              <a href="view_driver.php">View Driver </a>
                          </li>

                      </ul>
                  </li>

                  <li class="menu">
                      <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                                  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                              </svg>
                              <span>Trucks</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                          <li>
                              <a href="add_buss.php"> Add Truck</a>
                          </li>
                          <li>
                              <a href="view_buss.php"> view Truck </a>
                          </li>
                      </ul>
                  </li>
                  <li class="menu">
                      <a href="#product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                                  <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                              </svg>
                              <span>Products</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="product" data-parent="#accordionExample">
                          <li>
                              <a href="product.php"> Add product</a>
                          </li>
                          <li>
                              <a href="view_product.php"> view product </a>
                          </li>
                      </ul>
                  </li>



                  <!--li class="menu">
                <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                        <span>Widgets</span>
                    </div>
                </a>
            </li-->

                  <li class="menu">
                      <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                  <polyline points="2 17 12 22 22 17"></polyline>
                                  <polyline points="2 12 12 17 22 12"></polyline>
                              </svg>
                              <span>Schedule</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                          <li>
                              <a href="Add_schedule.php"> Make Schedule </a>
                          </li>
                          <li>
                              <a href="view_schedule.php"> Manage Schedule </a>
                          </li>

                      </ul>
                  </li>

                  <li class="menu">
                      <a href="#route" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                  <polyline points="2 17 12 22 22 17"></polyline>
                                  <polyline points="2 12 12 17 22 12"></polyline>
                              </svg>
                              <span>Route</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="route" data-parent="#accordionExample">
                          <li>
                              <a href="Add_route.php"> Add Route </a>
                          </li>
                          <li>
                              <a href="view_route.php"> Manage Route </a>
                          </li>

                      </ul>
                  </li>
                  <li class="menu">
                      <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                  <circle cx="9" cy="7" r="4"></circle>
                                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                              </svg>
                              <span>Users</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                          <li>
                              <a href="add_user.php"> Add User </a>
                          </li>
                          <li>
                              <a href="view_user.php">View User </a>
                          </li>
                      </ul>
                  </li>

                  <!--li class="menu">
                <a href="map_jvector.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                        <span>Maps</span>
                    </div>
                </a>
            </li-->


              </ul>
              <!-- <div class="shadow-bottom"></div> -->

          </nav>

      </div>
      <!--  END SIDEBAR  -->