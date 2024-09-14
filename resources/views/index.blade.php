<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Well Talk</title>
    <!-- google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Pacifico&display=swap" rel="stylesheet">
    <!-- custom     css-->
    <!-- <link rel="stylesheet" href="./static/styles/global.css">
    <link rel="stylesheet" href="./static/styles/nav.css">
    <link rel="stylesheet" href="./static/styles/index.css"> -->
    @vite(['resources/styles/global.css', 
           'resources/styles/nav.css', 
           'resources/styles/index.css',
           'resources/scripts/index.js',
           'resources/scripts/navbar.js',
           ])
</head>
<body>
    <nav class="nav-bar">
        <div class="nav-bar-lg">
         <div class="brand-name">
             WellTalk
         </div>
         <div class="nav-links">
             <p class="services">Services<span></span></p>
             <p class="for-professionals">For Professionals</p>
             <p class="about-us">About Us</p>
             <p class="pricing">Pricing</p>
             <button class="primary btn-md js-navigate-to-login" >Get Started</button>
         </div> 
         </div>
        <div class="nav-bar-md">
         <button class="primary btn-md js-navigate-to-login">Get Started</button>
         <div class="brand-name">
             WellTalk
         </div>
         <div class="nav-links-md js-nav-links-md">
             <p class="services">Services <span></span></p>
             <p class="for-professionals">For Professionals</p>
             <p class="about-us">About Us</p>
             <p class="pricing">Pricing</p>
         </div>
 
         <div>
             <a class="menu-button js-menu-button">
                <div class="menu-bar start"></div>
                <div class="menu-bar middle"></div>
                <div class="menu-bar end"></div>
             </a>
         </div>
        </div>
     </nav>
 

    <!-- heading seciton-->
     <div class="main-value-props-container" id="main-value-props-container">

        <div class="right-side-sm">
            <img src="./static/assets/users/provider-vc-christina.png" class="right-side-img-sm" alt="doctor sitting on the couch" >
            <button class="btn outlined sm border-white js-navigate-to-login">Get started</button>
        </div>

        <div class="left-side container">
            <h1 class="heading">Talk to Professionals, Anytime, Anywhere </h1>
            <p class="description">WellTalk online service Providing instant access to mentorship, medical consultations, and personalized support just made for you</p>
           <div class="getting-started-container">
            <button class="primary btn-xl js-navigate-to-login">Get Started</button>
            <p>Secure SSL</p>
           </div>
        </div> <!-- end left side-->

        <div class="right-side container">
            <div class="carousel-1 js-carousel-1">
                <!-- vc providers-->
                <div class="vc-container">
                    <img class="provider-img" src="./static//assets/users/provider-1.jpg" alt="service provider image">
                </div>
                
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-2.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-3.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-4.jpg" alt="service provider image">
                </div>
                <div class="vc-container">
                    <img class="provider-img" src="./static//assets/users/provider-1.jpg" alt="service provider image">
                </div>
                
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-2.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-3.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-4.jpg" alt="service provider image">
                </div>
                <div class="vc-container">
                    <img class="provider-img" src="./static//assets/users/provider-1.jpg" alt="service provider image">
                </div>
                
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-2.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-3.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-4.jpg" alt="service provider image">
                </div>
            </div>
            <div class="carousel-2 js-carousel-2">
                <!-- vc providers-->
                <div class="vc-container">
                    <img class="provider-img" src="./static//assets/users/provider-1.jpg" alt="service provider image">
                </div>
                
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-2.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-3.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-4.jpg" alt="service provider image">
                </div>
                <div class="vc-container">
                    <img class="provider-img" src="./static//assets/users/provider-1.jpg" alt="service provider image">
                </div>
                
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-2.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-3.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-4.jpg" alt="service provider image">
                </div>
                <div class="vc-container">
                    <img class="provider-img" src="./static//assets/users/provider-1.jpg" alt="service provider image">
                </div>
                
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-2.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-3.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-4.jpg" alt="service provider image">
                </div>
                <div class="vc-container">
                    <img class="provider-img" src="./static//assets/users/provider-1.jpg" alt="service provider image">
                </div>
                
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-2.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-3.jpg" alt="service provider image">
                </div>  
                <div class="vc-container">
                        <img class="provider-img" src="./static//assets/users/provider-4.jpg" alt="service provider image">
                </div>

            </div>

        </div>

     </div> <!-- end main value props-->
    
     <!-- About section / description-->
     <div class="description container">
        <div class="left description">
            <h2 class="heading">One Platform for everything you need.</h2>
        </div>

        <div class="right description"><!-- right section-->
            <div class="folder">
                <div class="search-for heading">Search for</div>
                <div class="search-bar">
                    <span class="leading search-btn">
                  </span> Search
                </div>
                <div class="chips container">
                    <div class="single-chip">
                        Psychatrist
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>
                    <div class="single-chip">
                        Medical results
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>
                    <div class="single-chip">
                        Sales
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>
                    <div class="single-chip">
                        Home care nurse
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>
                    <div class="single-chip">
                        Doctor
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>
                    <div class="single-chip">
                        Dentist
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>
                    <div class="single-chip">
                        Relationships
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>
                    <div class="single-chip">
                        Depression
                        <span class="x-mark-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 x-mark-svg">
                        <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                      </svg>
                      </span>
                    </div>

                    
                </div>
            </div>
        </div><!-- end right section-->
        
     </div>
     <!-- End about section / description-->
      <div class="partners testimonial container"> <!-- partners testimonial-->
        <div class="partner-carousel partner-carousel-one">
            <div class="partner">
                <p class="logo">MCM</p>
                <p class="name">korean Hospital</p>
            </div>
            <div class="partner">
                <p class="logo">Wudassie</p>
                <p class="name">diagnostic Center</p>
            </div>
            <div class="partner">
                <p class="logo">MCM</p>
                <p class="name">korean Hospital</p>
            </div>
            <div class="partner">
                <p class="logo">Tikur Anbessa</p>
                <p class="name">Specialized Hospital</p>
            </div>
            <div class="partner">
                <p class="logo">Dr. Emebet</p>
                <p class="name">Higher Specialized Dental Clinic</p>
            </div>
            <div class="partner">
                <p class="logo">Sitota</p>
                <p class="name">Center for Mental Health Care</p>
            </div>
            
        </div>
       <div class="partner-carousel partner-carousel-two">
        <div class="partner">
            <p class="logo">Tikur Anbessa</p>
            <p class="name">Specialized Hospital</p>
        </div>
        <div class="partner">
            <p class="logo">Dr. Emebet</p>
            <p class="name">Higher Specialized Dental Clinic</p>
        </div>
        <div class="partner">
            <p class="logo">Sitota</p>
            <p class="name">Center for Mental Health Care</p>
        </div>
        <div class="partner">
            <p class="logo">MCM</p>
            <p class="name">korean Hospital</p>
        </div>
        <div class="partner">
            <p class="logo">Wudassie</p>
            <p class="name">diagnostic Center</p>
        </div>
        <div class="partner">
            <p class="logo">MCM</p>
            <p class="name">korean Hospital</p>
        </div>
       </div>
      </div> <!-- End partners testimonial-->

      <div class="getting-started-section js-getting-started"> <!-- Getting started-->
            <div class="getting-started-section-lg"> <!-- Desktop getting started -->
                <h2 class="getting-started-header">How to get started?</h2>
                <div class="getting started container">
                     <div class="step-cards">
                        <div class="single step-guide first js-step-guide" id="first-step-lg" data-item="first">
                            <div class="step">1</div>
                            <div class="instruction">
                                <p class="title">Match with your Mentor </p>
                                <p class="description">we provided some questions
                                     to filter out the best mentor for you it will take
                                      you less than 10 minutes. You can skip this process 
                                      and choose your mentor by yourself too.</p>
                            </div>
                        </div><!-- end single step guide-->
                        <div class="single step-guide second js-step-guide" id="second-step-lg" data-item="second">
                            <div class="step">2</div>
                            <div class="instruction">
                                <p class="title">Start your session </p>
                                <p class="description">Communicate with your mentor through
                                     live video session,  messages, or both. 
                                     Your security is our #1 priority for us.</p>
                            </div>
                        </div><!-- end single step guide-->
                        <div class="single step-guide third js-step-guide" id="third-step-lg" data-item="third">
                            <div class="step">3</div>
                            <div class="instruction">
                                <p class="title">Develop Consistent Habits  </p>
                                <p class="description">Use our habit tracking feature to maintain
                                     healthy habits. Regular monitoring helps you improve
                                      continuously and provides accurate information for 
                                      your next session with your mentor.</p>
                            </div>
                        </div><!-- end single step guide-->
                        <div class="single step-guide fourth js-step-guide" id="fourth-step-lg" data-item="fourth" >
                            <div class="step">4</div>
                            <div class="instruction">
                                <p class="title">You can switch your mentor anytime  </p>
                                <p class="description">We make sure to provide a good mentor for you. 
                                    but If you think the mentor is not a good fit for 
                                    you, it is easy to select a new mentor with no additional 
                                    cost.</p>
                            </div>
                        </div><!-- end single step guide-->
                    </div><!-- End step-cards -->
        
                    <div class="phone-container js-lg-phone-container">
                        <img src="./static/assets/other-image-assets/match-with-mentor.png" class="first right-section phone screen phone-enabled" alt="matching with the provider image">
                        <img src="./static/assets/other-image-assets/start-your-session.png " class="second right-section phone screen" alt="two people chatting over video">
                        <img src="./static/assets/other-image-assets/track-your-habits.png" class="third right-section phone screen" alt="person taking while walking">
                        <img src="./static/assets/other-image-assets/change-your-mentor-screen.png" class="fourth right-section phone screen"  alt="habit tracking screenshot section">
                    </div>
                </div>
            </div> <!-- End Desktop getting started -->
            <div class="getting-started-section-sm js-getting-started-sm"> <!-- Mobile Getting started -->
                    <div class="all-getting-started js-all-getting-started">
                         <div class="getting-started first" id="getting-started-first">
                        <div class="phone-container">
                        <img class="first phone screen right-section" src="./static/assets/other-image-assets/match-with-mentor.png" alt="">
                        <!-- <img src="./static/assets/users/match-with-mentor.png" class="second right-section phone screen" alt="matching with the provider image"> -->
                        </div>
                        <div class="single step-guide">
                            <div class="step">1</div>
                            <div class="instruction">
                                <p class="title">Match with your Mentor</p>
                                <p class="description">we provided some questions to filter out the best mentor for you it will take you less than 10 minutes. You can skip this process and choose your mentor by yourself too.</p>
                            </div>
                        </div><!-- end single step guide-->
                         </div>
                         <div class="getting-started second" id="getting-started-second">
                            <div class="phone-container">
                                 <img src="./static/assets/other-image-assets/start-your-session.png" class="second right-section phone screen" alt="matching with the provider image"> 
                            </div>
                        <div class="step-cards">
                            <div class="single step-guide">
                                <div class="step">2</div>
                                <div class="instruction">
                                    <p class="title">Start your session  </p>
                                    <p class="description">Communicate with your mentor through live video session, messages, or both. Your security is our #1 priority for us.</p>
                                </div>
                            </div><!-- end single step guide-->
                        </div>
                        </div>
                        <div class="getting-started third" id="getting-started-third">
                            <div class="phone-container">
                                <img class="first phone screen right-section" src="./static/assets/other-image-assets/track-your-habits.png" alt="">
                                <!-- <img src="./static/assets/users/match-with-mentor.png" class="second right-section phone screen" alt="matching with the provider image"> -->
                            </div>
                          <div class="step-cards">
                              <div class="single step-guide">
                                <div class="step">3</div>
                                <div class="instruction">
                                    <p class="title">Develop Consistent Habits</p>
                                    <p class="description">Use our habit tracking feature to maintain healthy habits. Regular monitoring helps you improve continuously and provides accurate information for your next session with your mentor.</p>
                                </div>
                            </div><!-- end single step guide-->
                          </div>
                        </div>
                        <div class="getting-started fourth" id="getting-started-fourth">
                            <div class="phone-container">
                                <img class="first phone screen right-section" src="./static/assets/other-image-assets/change-your-mentor-screen.png" alt="">
                                <!-- <img src="./static/assets/users/match-with-mentor.png" class="second right-section phone screen" alt="matching with the provider image"> -->
                            </div>
                          <div class="step-cards">
                              <div class="single step-guide">
                                <div class="step">4</div>
                                <div class="instruction">
                                    <p class="title">You can switch your mentor anytime</p>
                                    <p class="description">We make sure to provide a good mentor for you. but If you think the mentor is not a good fit for you, it is easy to select a new mentor with no additional cost.</p>
                                </div>
                            </div><!-- end single step guide-->
                          </div>
                        </div>
                    </div>
                    <!-- add more getting started containers -->
                <div class="carousel-container js-getting-started-carousel">
                     <a href="#getting-started-first" class="carousel one carousel-active js-carousel"></a>
                     <a href="#getting-started-second" class="carousel two js-carousel"></a>
                     <a href="#getting-started-third" class="carousel three js-carousel"></a>
                     <a href="#getting-started-fourth" class="carousel fourth js-carousel"></a>
                     <!-- <a href="#getting-started-fourth" class="carousel fourth js-carousel"></a> -->
                </div>
            </div> <!-- End Mobile Getting started-->
         
      </div> <!-- End Getting started-->
      
      <div class="why-full-section"> <!-- why section -->
      <div class="why-section-heading">Why WellTalk?</div>
        <div class="why-section js-why-section">
            <div class="why-descriptions container">
                <div class="single-why-description-container js-single-why-description" data-item="first">
                    <div class="single why-description">
                        <p class="description">Connect with your mentor anytime, anywhere</p>
                        <!-- chevron down -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                              </svg>
                              <div class="drop-down-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                            </div> -->
                        </div>
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="second">
                    <div class="single why-description">
                        <p class="description">Message your mentor anytime</p>
                        <!-- chevron down -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                              </svg>
                              <div class="drop-down-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                            </div> -->
                        </div>
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="third">
                    <div class="single why-description">
                      <p class="description">Easy appointment scheduling</p>
                            <!-- chevron down -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                              </svg>
                              <div class="drop-down-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                            </div> -->
                    </div>
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="fourth">
                    <div class="single why-description">
                        <!-- chevron down -->
                        <p class="description">No more taxi waiting line and traffic lights</p>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                              </svg>
                              <div class="drop-down-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                            </div> -->
                        </div> 
                </div>
                <div class="single-why-description-container js-single-why-description" data-item="fifth">
                    <div class="single why-description">
                        <p class="description">No more waiting for your mentor</p>
                        <!-- chevron down -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                              </svg>
                              <div class="drop-down-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                            </div> -->
                        </div>
                </div>
                <div class="single-why-description-container js.single-why-description" data-item="sixth">
                    <div class="single why-description">
                        <p class="description">Switch your mentor anytime</p>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                              </svg>
                              <div class="drop-down-desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                            </div> -->
                        </div>
                </div>
            </div>
            <!-- right section switched-->
            <div class="image-container">
                <img class="img reason-guide first reason-active" src="./static/assets/other-image-assets/person-sitting-on-couch.png" alt="">
                <img class="img reason-guide second" src="./static/assets/other-image-assets/message-your-mentor.png" alt="">
                <img class="img reason-guide third" src="./static/assets/other-image-assets/appointment.png" alt="">
                <img class="img reason-guide fourth" src="./static/assets/other-image-assets/waiting-for-taxi.png" alt="">
                <img class="img reason-guide fifth" src="./static/assets/other-image-assets/waiting-a-mentor.png" alt="">
                <img class="img reason-guide sixth" src="./static/assets/other-image-assets/change-your-mentor.png" alt="">
            </div>
        </div>
      </div> <!-- End why section -->

    <div class="achivements-section"> <!-- Achivements section-->
        <div class="left">
           <div class="heading">
                <p><img src="./static/assets/other-image-assets/messages-back-forth.svg" alt=""> Video Calls</p>
                <p>Talk it out. Face-to-face.</p>
           </div>
           <div class="search container">
                <div class="search-bar-with-btn">
                    <input type="text" placeholder="Search By company,  skill or role">
                    <button class="btn primary btn-md">Find mentors</button>
                </div>
                <div class="suggested-keywords">
                    <div class="single-keyword">Start up founders</div>
                    <div class="single-keyword">Sales Person</div>
                    <div class="single-keyword">Psychatrist</div>
                    <div class="single-keyword">Doctor</div>
                    <div class="single-keyword">Entrepreneur</div>
                    <div class="single-keyword">Home care nurse</div>
                    <div class="single-keyword">Leadership mentor</div>
                </div>
            </div>
            <div class="achivement stats">
                <div>
                    <p class="stat">1000+</p>
                    <p class="description">Available mentors</p>
                </div>
                <div>
                    <p class="stat">30,000+</p>
                    <p class="description">Sessions made</p>
                </div>
                <div>
                    <p class="stat">50+</p>
                    <p class="description">Countries served</p>
                </div>
               
            </div>
        </div> <!-- end left section-->
        <div class="right"> <!-- right section-->
            <div class="highlighted-providers highlighted-providers-one">
                <div class="highlighted provider">
                    <div class="provider-img">
                        <img src="./static/assets/users/provider-featured.jpg" alt="">
                    </div>
                    <div class="provider-full-info">
                        <div class="user-info">
                            <p class="username">Dr. John Doe <span class="rating"><img src="./static/assets/other-image-assets/star.svg" alt="" >5.0</span></p>
                            <p class="profession">psychatrist</p>
                        </div>
                        <div class="suggested-keywords">
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                        </div>
                    </div>
                </div> <!-- end single provider -->
                <div class="highlighted provider">
                    <div class="provider-img">
                        <img src="./static/assets/users/provider-featured.jpg" alt="">
                    </div>
                    <div class="provider-full-info">
                        <div class="user-info">
                            <p class="username">Dr. John Doe <span class="rating"><img src="./static/assets/other-image-assets/star.svg" alt="" >5.0</span></p>
                            <p class="profession">psychatrist</p>
                        </div>
                        <div class="suggested-keywords">
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                        </div>
                    </div>
                </div> <!-- end single provider -->
                <div class="highlighted provider">
                    <div class="provider-img">
                        <img src="./static/assets/users/provider-featured.jpg" alt="">
                    </div>
                    <div class="provider-full-info">
                        <div class="user-info">
                            <p class="username">Dr. John Doe <span class="rating"><img src="./static/assets/other-image-assets/star.svg" alt="" >5.0</span></p>
                            <p class="profession">psychatrist</p>
                        </div>
                        <div class="suggested-keywords">
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                        </div>
                    </div>
                </div> <!-- end single provider -->
            </div>
            <div class="highlighted-providers highlighted-providers-two">
                <div class="highlighted provider">
                    <div class="provider-img">
                        <img src="./static/assets/users/provider-featured.jpg" alt="">
                    </div>
                    <div class="provider-full-info">
                        <div class="user-info">
                            <p class="username">Dr. John Doe <span class="rating"><img src="./static/assets/other-image-assets/star.svg" alt="" >5.0</span></p>
                            <p class="profession">psychatrist</p>
                        </div>
                        <div class="suggested-keywords">
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                        </div>
                    </div>
                </div> <!-- end single provider -->
                <div class="highlighted provider">
                    <div class="provider-img">
                        <img src="./static/assets/users/provider-featured.jpg" alt="">
                    </div>
                    <div class="provider-full-info">
                        <div class="user-info">
                            <p class="username">Dr. John Doe <span class="rating"><img src="./static/assets/other-image-assets/star.svg" alt="" >5.0</span></p>
                            <p class="profession">psychatrist</p>
                        </div>
                        <div class="suggested-keywords">
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                        </div>
                    </div>
                </div> <!-- end single provider -->
                <div class="highlighted provider">
                    <div class="provider-img">
                        <img src="./static/assets/users/provider-featured.jpg" alt="">
                    </div>
                    <div class="provider-full-info">
                        <div class="user-info">
                            <p class="username">Dr. John Doe <span class="rating"><img src="./static/assets/other-image-assets/star.svg" alt="" >5.0</span></p>
                            <p class="profession">psychatrist</p>
                        </div>
                        <div class="suggested-keywords">
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                            <div class="single-keyword">Relationship</div>
                        </div>
                    </div>
                </div> <!-- end single provider -->
            </div>
        </div> <!-- end right section-->
    </div> <!-- End Achivements section-->

    <div class="faq-full-section"> <!-- FAQ section -->
        <div class="faq-section-heading">Any Questions?</div>
        <div class="faq-section-description">You asked, we listened. Find trust-worthy answered by us</div>
          <div class="faq-section">
              <div class="image-container">
                  <img class="img" src="./static/assets/other-image-assets/person-sitting-on-couch.svg" alt="">
              </div>
             <div class="faq-container-with-pagination">
                <div class="faq-descriptions container">
                    <div class="single-faq-description-container">
                        <details class="single faq-description">
                            <summary><p class="description">Connect with your mentor anytime, anywhere</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                  </svg></summary>
                                  <div class="drop-down-desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                                </div>
                        </details>
                          
                       
                          
                    </div>
                    <div class="single-faq-description-container">
                        <details class="single faq-description">
                            <summary><p class="description">Message your mentor anytime</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                  </svg></summary>
                                  <div class="drop-down-desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                                </div>
                        </details>
                          
                       
                          
                    </div>
                    <div class="single-faq-description-container">
                        <details class="single faq-description">
                            <summary><p class="description">Easy appointment scheduling</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                  </svg></summary>
                                  <div class="drop-down-desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                                </div>
                        </details>
                    </div>
                    
                    <div class="single-faq-description-container">
                        <details class="single faq-description">
                            <summary><p class="description">No more taxi waiting line and traffic lights</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                  </svg></summary>
                                  <div class="drop-down-desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                                </div>
                        </details>
                    </div>

                    <div class="single-faq-description-container">
                        <details class="single faq-description">
                            <summary><p class="description">No more waiting your mentor</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                  </svg></summary>
                                  <div class="drop-down-desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                                </div>
                        </details>
                    </div>

                   <div class="single-faq-description-container">
                        <details class="single faq-description">
                            <summary><p class="description">Switch your mentor anytime</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-down chevron">
                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 chevron-up chevron">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                  </svg></summary>
                                  <div class="drop-down-desc">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequuntur autem doloribus magni dignissimos atque veniam accusantium natus, laborum dolore ex quos pariatur? Odit qui explicabo veniam alias quibusdam vero?
                                </div>
                        </details>
                    </div>
                </div>
                <!-- pagination -->
                <div class="pagination-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-left pagination">
                        <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                    </svg>
                    <div class="pagination current-questions">1</div>
                    <div class="pagination">2</div>
                    <div class="pagination">3</div>
                    <div class="pagination">4</div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 chevron-right pagination">
                        <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                      

                </div>
               
             </div>
          </div>
        </div> <!-- FAQ section -->

        <footer class="footer container">
            <div class="branding">
                <h3>well</h3>
                <div class="social-accounts">
                    <span class="icon facebook"><a href="#"><img src="static/assets/icons/facebook.svg" alt=""></a></span>
                    <span class="icon x"><a href="#"><img src="static/assets/icons/x.svg" alt=""></a></span>
                    <span class="icon instagram"><a href="#"><img src="static/assets/icons/instagram.svg" alt=""></a></span>
                    <span class="icon linkedin"><a href="#"><img src="static/assets/icons/linked-in.svg" alt=""></a></span>
                </div>
            </div>
            <div class="contact-us">
                <h3>Contact us</h3>
                <div class="contact-section">
                    <p><a href="mailto:support@well.com">support@well.com</a></p>
                    <p><a href="tel:+1234567890">+251 111 328 765</a></p>
                </div>
            </div>
            <div class="subscribe">
                <h3>Subscribe</h3>
                <p>Enter your email to get notified about our solution</p>
                <div class="email-submit">
                    <input type="text" placeholder="email">
                    <button class="submit" role="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 arrow-right">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                          </svg>
                          
                    </button>
                </div>
            </div>
            <div class="footer-explore">
                <img class="footer-img" src="static/assets/other-image-assets/footer-explore.png" alt="">
                <p>Explore our success</p>
            </div>
            <a class="go-to-start-btn" href="#main-value-props-container">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 chevron-up">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                  </svg>
            </a>
            <div>
                <p class="current-year js-current-year"></p>
            </div>
        </footer>



        <!-- <script src="./static/scripts/navbar.js"></script> -->
        <!-- <script src="./static/scripts/index.js" type="module"></script> -->

</body>
</html>