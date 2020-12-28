
    <div class="top_navigation"> <!-- navigation section start -->
        <div class="left_nav">
            <a href="">Login</a>
            <a href="">Join Us</a>
        </div>

        <div class="right_nav">
            <select name="" class="lang">
                <option value="">English</option>
                <option value="">Bangla</option>
            </select>
        </div>
    </div>


    <div class="main_navigation" style="background-color: #364F6B;">
        <div class="container-fluid">
            <div class="row">    
                <div class="col-12">
                    
                        <nav class="navbar navbar-expand-md">
                            <a href="{{ route('front.index') }}">
                                <img src="frontend/images/logo_title.png" alt="" class="img-fluid">
                            </a>
                            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars"></i>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav ml-auto">
                                
                                <li class="nav-item">
                                  <a class="nav-link" href="{{ route('front.index') }}">Home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Committee
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #2D4662">
                                      <a class="dropdown-item" href="{{ route('front.founders') }}">Founding Team</a>
                                      <a class="dropdown-item" href="{{ route('front.executives') }}">Executive Committee</a>
                                      <a class="dropdown-item" href="{{ route('front.regionals') }}">Regional Committee</a>
                                    </div>
                                  </li>

                                <li class="nav-item" id="1">
                                    <a class="nav-link" href="{{ route('front.activities') }}">Activities</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.news') }}">News</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.notice') }}">Notice</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.investment') }}">Cloud Investment</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.donation') }}">Donation</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.service') }}">One-stop Service</a>
                                </li>

                              </ul>
                              
                            </div>
                          </nav>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
