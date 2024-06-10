<!DOCTYPE html>
<html lang="en">

<?php
include("head.php");

?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div> <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


        <!--**********************************
            Nav header start
***********************************-->
       <div class="nav-header"> 
        
       <a href="home" class="brand-logo"> 
       
                <img class="logo-abbr" src="assets/images/onee.png" alt="Logo Abbr" width="55" height="37" >
                <img class="logo-abbr" src="assets\images\titre_icon.png" alt="Logo Abbr" width="100" height="37">
         
       </a>
       <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>
        <!--**********************************
            Nav header end
 ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz- -user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="assets/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1" />
                                            <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="assets/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU</div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU</div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO</div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--**********************************
            Chat box End
        ***********************************-->

        <?php require_once('header.php') ?>
        <?php require_once('sidebar.php') ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="page-titles">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 wid-100">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card chart-grd same-card">
                                        <div class="card-body depostit-card p-0">
                                            <div class="depostit-card-media d-flex justify-content-between pb-0">
                                                <div>
                                                    <h6>Total Deposit</h6>
                                                    <h3>$1200.00</h3>
                                                </div>
                                                <div class="icon-box bg-primary-light">
                                                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--primary)" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="NewCustomers"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card same-card">
                                        <div class="card-body d-flex align-items-center  py-2">
                                            <div id="AllProject"></div>
                                            <ul class="project-list">
                                                <li>
                                                    <h6>All Projects</h6>
                                                </li>
                                                <li>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="10" height="10" rx="3" fill="#3AC977" />
                                                    </svg>
                                                    Compete
                                                </li>
                                                <li>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="10" height="10" rx="3" fill="var(--primary)" />
                                                    </svg>
                                                    Pending
                                                </li>
                                                <li>
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="10" height="10" rx="3" fill="var(--secondary)" />
                                                    </svg>
                                                    Not Start
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card chart-grd same-card">
                                        <div class="card-body depostit-card p-0">
                                            <div class="depostit-card-media d-flex justify-content-between pb-0">
                                                <div>
                                                    <h6>Total Expenses</h6>
                                                    <h3>$1200.00</h3>
                                                </div>
                                                <div class="icon-box bg-danger-light">
                                                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="#FF5E5E" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="NewExperience"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 same-card">
                                    <div class="card">
                                        <div class="card-body depostit-card">
                                            <div class="depostit-card-media d-flex justify-content-between style-1">
                                                <div>
                                                    <h6>Total Deposit</h6>
                                                    <h3>20</h3>
                                                </div>
                                                <div class="icon-box bg-primary-light">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.3787 1.875H15.625V1.25C15.625 1.08424 15.5592 0.925268 15.4419 0.808058C15.3247 0.690848 15.1658 0.625 15 0.625C14.8342 0.625 14.6753 0.690848 14.5581 0.808058C14.4408 0.925268 14.375 1.08424 14.375 1.25V1.875H10.625V1.25C10.625 1.08424 10.5592 0.925268 10.4419 0.808058C10.3247 0.690848 10.1658 0.625 10 0.625C9.83424 0.625 9.67527 0.690848 9.55806 0.808058C9.44085 0.925268 9.375 1.08424 9.375 1.25V1.875H5.625V1.25C5.625 1.08424 5.55915 0.925268 5.44194 0.808058C5.32473 0.690848 5.16576 0.625 5 0.625C4.83424 0.625 4.67527 0.690848 4.55806 0.808058C4.44085 0.925268 4.375 1.08424 4.375 1.25V1.875H3.62125C2.99266 1.87599 2.3901 2.12614 1.94562 2.57062C1.50114 3.0151 1.25099 3.61766 1.25 4.24625V17.0037C1.25099 17.6323 1.50114 18.2349 1.94562 18.6794C2.3901 19.1239 2.99266 19.374 3.62125 19.375H16.3787C17.0073 19.374 17.6099 19.1239 18.0544 18.6794C18.4989 18.2349 18.749 17.6323 18.75 17.0037V4.24625C18.749 3.61766 18.4989 3.0151 18.0544 2.57062C17.6099 2.12614 17.0073 1.87599 16.3787 1.875ZM17.5 17.0037C17.499 17.3008 17.3806 17.5854 17.1705 17.7955C16.9604 18.0056 16.6758 18.124 16.3787 18.125H3.62125C3.32418 18.124 3.03956 18.0056 2.8295 17.7955C2.61944 17.5854 2.50099 17.3008 2.5 17.0037V4.24625C2.50099 3.94918 2.61944 3.66456 2.8295 3.4545C3.03956 3.24444 3.32418 3.12599 3.62125 3.125H4.375V3.75C4.375 3.91576 4.44085 4.07473 4.55806 4.19194C4.67527 4.30915 4.83424 4.375 5 4.375C5.16576 4.375 5.32473 4.30915 5.44194 4.19194C5.55915 4.07473 5.625 3.91576 5.625 3.75V3.125H9.375V3.75C9.375 3.91576 9.44085 4.07473 9.55806 4.19194C9.67527 4.30915 9.83424 4.375 10 4.375C10.1658 4.375 10.3247 4.30915 10.4419 4.19194C10.5592 4.07473 10.625 3.91576 10.625 3.75V3.125H14.375V3.75C14.375 3.91576 14.4408 4.07473 14.5581 4.19194C14.6753 4.30915 14.8342 4.375 15 4.375C15.1658 4.375 15.3247 4.30915 15.4419 4.19194C15.5592 4.07473 15.625 3.91576 15.625 3.75V3.125H16.3787C16.6758 3.12599 16.9604 3.24444 17.1705 3.4545C17.3806 3.66456 17.499 3.94918 17.5 4.24625V17.0037Z" fill="var(--primary)" />
                                                        <path d="M7.68311 7.05812L6.24999 8.49125L5.44186 7.68312C5.38421 7.62343 5.31524 7.57581 5.23899 7.54306C5.16274 7.5103 5.08073 7.49306 4.99774 7.49234C4.91475 7.49162 4.83245 7.50743 4.75564 7.53886C4.67883 7.57028 4.60905 7.61669 4.55037 7.67537C4.49168 7.73406 4.44528 7.80384 4.41385 7.88065C4.38243 7.95746 4.36661 8.03976 4.36733 8.12275C4.36805 8.20573 4.3853 8.28775 4.41805 8.364C4.45081 8.44025 4.49842 8.50922 4.55811 8.56687L5.80811 9.81687C5.92532 9.93404 6.08426 9.99986 6.24999 9.99986C6.41572 9.99986 6.57466 9.93404 6.69186 9.81687L8.56686 7.94187C8.68071 7.82399 8.74371 7.66612 8.74229 7.50224C8.74086 7.33837 8.67513 7.18161 8.55925 7.06573C8.44337 6.94985 8.28661 6.88412 8.12274 6.8827C7.95887 6.88127 7.80099 6.94427 7.68311 7.05812Z" fill="var(--primary)" />
                                                        <path d="M15 8.125H10.625C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75C10 8.91576 10.0658 9.07473 10.1831 9.19194C10.3003 9.30915 10.4592 9.375 10.625 9.375H15C15.1658 9.375 15.3247 9.30915 15.4419 9.19194C15.5592 9.07473 15.625 8.91576 15.625 8.75C15.625 8.58424 15.5592 8.42527 15.4419 8.30806C15.3247 8.19085 15.1658 8.125 15 8.125Z" fill="var(--primary)" />
                                                        <path d="M7.68311 12.6831L6.24999 14.1162L5.44186 13.3081C5.38421 13.2484 5.31524 13.2008 5.23899 13.1681C5.16274 13.1353 5.08073 13.1181 4.99774 13.1173C4.91475 13.1166 4.83245 13.1324 4.75564 13.1639C4.67883 13.1953 4.60905 13.2417 4.55037 13.3004C4.49168 13.3591 4.44528 13.4288 4.41385 13.5056C4.38243 13.5825 4.36661 13.6648 4.36733 13.7477C4.36805 13.8307 4.3853 13.9127 4.41805 13.989C4.45081 14.0653 4.49842 14.1342 4.55811 14.1919L5.80811 15.4419C5.92532 15.559 6.08426 15.6249 6.24999 15.6249C6.41572 15.6249 6.57466 15.559 6.69186 15.4419L8.56686 13.5669C8.68071 13.449 8.74371 13.2911 8.74229 13.1272C8.74086 12.9634 8.67513 12.8066 8.55925 12.6907C8.44337 12.5749 8.28661 12.5091 8.12274 12.5077C7.95887 12.5063 7.80099 12.5693 7.68311 12.6831Z" fill="var(--primary)" />
                                                        <path d="M15 13.75H10.625C10.4592 13.75 10.3003 13.8158 10.1831 13.9331C10.0658 14.0503 10 14.2092 10 14.375C10 14.5408 10.0658 14.6997 10.1831 14.8169C10.3003 14.9342 10.4592 15 10.625 15H15C15.1658 15 15.3247 14.9342 15.4419 14.8169C15.5592 14.6997 15.625 14.5408 15.625 14.375C15.625 14.2092 15.5592 14.0503 15.4419 13.9331C15.3247 13.8158 15.1658 13.75 15 13.75Z" fill="var(--primary)" />
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="progress-box mt-0">
                                                <div class="d-flex justify-content-between">
                                                    <p class="mb-0">Tasks Not Finished</p>
                                                    <p class="mb-0">20/28</p>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" style="width:50%; height:5px; border-radius:4px;" role="progressbar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="card overflow-hidden">
                                        <div class="card-header border-0 pb-0 flex-wrap">
                                            <h4 class="heading mb-0">Projects Overview</h4>
                                            <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab" aria-selected="true">Week</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-selected="false">Month</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-selected="false">Year</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body  p-0">
                                            <div id="overiewChart"></div>
                                            <div class="ttl-project">
                                                <div class="pr-data">
                                                    <h5>12,721</h5>
                                                    <span>Number of Projects</span>
                                                </div>
                                                <div class="pr-data">
                                                    <h5 class="text-primary">721</h5>
                                                    <span>Active Projects</span>
                                                </div>
                                                <div class="pr-data">
                                                    <h5>$2,50,523</h5>
                                                    <span>Revenue</span>
                                                </div>
                                                <div class="pr-data">
                                                    <h5 class="text-success">12,275h</h5>
                                                    <span>Working Hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <h4 class="heading mb-0">My To Do Items</h4>
                                            <div>
                                                <a href="javascript:void(0);" class="text-primary me-2">View All</a>
                                                <a href="javascript:void(0);" class="text-black"> + Add To Do</a>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="dt-do-bx">
                                                <div class="draggable-zone dropzoneContainer to-dodroup dz-scroll">
                                                    <div class="sub-card draggable-handle draggable">
                                                        <div class="d-items">
                                                            <span class="text-warning dang d-block mb-2">
                                                                <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.61051 15.3276H14.3978C15.5843 15.3276 16.329 14.0451 15.7395 13.0146L10.35 3.59085C9.75676 2.5536 8.26126 2.55285 7.66726 3.5901L2.26876 13.0139C1.67926 14.0444 2.42326 15.3276 3.61051 15.3276Z" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M9.00189 10.0611V7.7361" stroke="#FF9F00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M8.99625 12.375H9.00375" stroke="#FF9F00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                Latest to do's
                                                            </span>
                                                            <div class="d-flex justify-content-between flex-wrap">
                                                                <div class="d-items-2">
                                                                    <div>
                                                                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect width="1" height="1" fill="#888888" />
                                                                            <rect y="3" width="1" height="1" fill="#888888" />
                                                                            <rect y="6" width="1" height="1" fill="#888888" />
                                                                            <rect y="9" width="1" height="1" fill="#888888" />
                                                                            <rect y="12" width="1" height="1" fill="#888888" />
                                                                            <rect y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="15" width="1" height="1" fill="#888888" />
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <div class="form-check custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                                                            <label class="form-check-label" for="customCheckBox1">Compete this projects Monday</label>
                                                                        </div>
                                                                        <span>2023-12-26 07:15:00</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="icon-box icon-box-md bg-danger-light me-1">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="icon-box icon-box-md bg-primary-light">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sub-card draggable-handle draggable">
                                                        <div class="d-items">
                                                            <span class="text-success dang d-block mb-2">
                                                                <svg class="me-1" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15 4.5L6.75 12.75L3 9" stroke="#3AC977" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                                Latest finished to do's
                                                            </span>
                                                            <div class="d-flex justify-content-between flex-wrap">
                                                                <div class="d-items-2">
                                                                    <div>
                                                                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect width="1" height="1" fill="#888888" />
                                                                            <rect y="3" width="1" height="1" fill="#888888" />
                                                                            <rect y="6" width="1" height="1" fill="#888888" />
                                                                            <rect y="9" width="1" height="1" fill="#888888" />
                                                                            <rect y="12" width="1" height="1" fill="#888888" />
                                                                            <rect y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="15" width="1" height="1" fill="#888888" />
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <div class="form-check custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="customCheckBox02" required>
                                                                            <label class="form-check-label" for="customCheckBox02">Compete this projects Monday</label>
                                                                        </div>
                                                                        <span>2023-12-26 07:15:00</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="icon-box icon-box-md bg-danger-light me-1">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="icon-box icon-box-md bg-primary-light">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sub-card draggable-handle draggable">
                                                        <div class="d-items">
                                                            <div class="d-flex justify-content-between flex-wrap">
                                                                <div class="d-items-2">
                                                                    <div>
                                                                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect width="1" height="1" fill="#888888" />
                                                                            <rect y="3" width="1" height="1" fill="#888888" />
                                                                            <rect y="6" width="1" height="1" fill="#888888" />
                                                                            <rect y="9" width="1" height="1" fill="#888888" />
                                                                            <rect y="12" width="1" height="1" fill="#888888" />
                                                                            <rect y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="15" width="1" height="1" fill="#888888" />
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <div class="form-check custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="customCheckBox03" required>
                                                                            <label class="form-check-label" for="customCheckBox03">Compete this projects Monday</label>
                                                                        </div>
                                                                        <span>2023-12-26 07:15:00</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="icon-box icon-box-md bg-danger-light me-1">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="icon-box icon-box-md bg-primary-light">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sub-card draggable-handle draggable">
                                                        <div class="d-items">
                                                            <div class="d-flex justify-content-between flex-wrap">
                                                                <div class="d-items-2">
                                                                    <div>
                                                                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect width="1" height="1" fill="#888888" />
                                                                            <rect y="3" width="1" height="1" fill="#888888" />
                                                                            <rect y="6" width="1" height="1" fill="#888888" />
                                                                            <rect y="9" width="1" height="1" fill="#888888" />
                                                                            <rect y="12" width="1" height="1" fill="#888888" />
                                                                            <rect y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="15" width="1" height="1" fill="#888888" />
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <div class="form-check custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="customCheckBox4" required>
                                                                            <label class="form-check-label" for="customCheckBox4">Compete this projects Monday</label>
                                                                        </div>
                                                                        <span>2023-12-26 07:15:00</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="icon-box icon-box-md bg-danger-light me-1">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="icon-box icon-box-md bg-primary-light">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sub-card draggable-handle draggable">
                                                        <div class="d-items">
                                                            <div class="d-flex justify-content-between flex-wrap">
                                                                <div class="d-items-2">
                                                                    <div>
                                                                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect width="1" height="1" fill="#888888" />
                                                                            <rect y="3" width="1" height="1" fill="#888888" />
                                                                            <rect y="6" width="1" height="1" fill="#888888" />
                                                                            <rect y="9" width="1" height="1" fill="#888888" />
                                                                            <rect y="12" width="1" height="1" fill="#888888" />
                                                                            <rect y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="4" y="15" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="3" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="6" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="9" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="12" width="1" height="1" fill="#888888" />
                                                                            <rect x="8" y="15" width="1" height="1" fill="#888888" />
                                                                        </svg>
                                                                    </div>
                                                                    <div>
                                                                        <div class="form-check custom-checkbox">
                                                                            <input type="checkbox" class="form-check-input" id="customCheckBox5" required>
                                                                            <label class="form-check-label" for="customCheckBox5">Compete this projects Monday</label>
                                                                        </div>
                                                                        <span>2023-12-26 07:15:00</span>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="icon-box icon-box-md bg-danger-light me-1">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12.8833 6.31213C12.8833 6.31213 12.5213 10.8021 12.3113 12.6935C12.2113 13.5968 11.6533 14.1261 10.7393 14.1428C8.99994 14.1741 7.25861 14.1761 5.51994 14.1395C4.64061 14.1215 4.09194 13.5855 3.99394 12.6981C3.78261 10.7901 3.42261 6.31213 3.42261 6.31213" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M13.8055 4.1598H2.50012" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M11.6271 4.1598C11.1037 4.1598 10.6531 3.7898 10.5504 3.27713L10.3884 2.46647C10.2884 2.09247 9.94974 1.8338 9.56374 1.8338H6.74174C6.35574 1.8338 6.01707 2.09247 5.91707 2.46647L5.75507 3.27713C5.65241 3.7898 5.20174 4.1598 4.67841 4.1598" stroke="#FF5E5E" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="icon-box icon-box-md bg-primary-light">
                                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.16492 13.6286H14" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52001 2.52986C9.0371 1.91186 9.96666 1.82124 10.5975 2.32782C10.6324 2.35531 11.753 3.22586 11.753 3.22586C12.446 3.64479 12.6613 4.5354 12.2329 5.21506C12.2102 5.25146 5.87463 13.1763 5.87463 13.1763C5.66385 13.4393 5.34389 13.5945 5.00194 13.5982L2.57569 13.6287L2.02902 11.3149C1.95244 10.9895 2.02902 10.6478 2.2398 10.3849L8.52001 2.52986Z" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M7.34723 4.00059L10.9821 6.79201" stroke="#0D99FF" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
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
                        <div class="col-xl-3 t-earn">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="heading mb-0">Total Earning</h4>
                                </div>
                                <div class="card-body px-0 overflow-hidden">
                                    <div class="total-earning">
                                        <h2>$6,743.00</h2>
                                        <ul class="nav nav-pills mb-3 earning-tab earning-chart" id="pills-tab1" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" data-series="day" id="pills-day-tab1" data-bs-toggle="pill" data-bs-target="#pills-day1" type="button" role="tab" aria-selected="true">Day</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-week-tab1" data-series="week" data-bs-toggle="pill" data-bs-target="#pills-week1" type="button" role="tab" aria-selected="false">Week</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-month-tab1" data-series="month" data-bs-toggle="pill" data-bs-target="#pills-month1" type="button" role="tab" aria-selected="false">Month</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="pills-year-tab1" data-series="year" data-bs-toggle="pill" data-bs-target="#pills-year1" type="button" role="tab" aria-selected="false">Year</button>
                                            </li>
                                        </ul>
                                        <div id="earningChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--**********************************
            Content body end
        ***********************************-->
            <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
                <div class="offcanvas-header">
                    <h5 class="modal-title" id="#gridSystemModal">Add Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <div class="container-fluid">
                        <div>
                            <label>Profile Picture</label>
                            <div class="dz-default dlab-message upload-img mb-3">
                                <form action="#" class="dropzone">
                                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Employee Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Employee Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput4" class="form-label">Password<span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Designation<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Please select</option>
                                        <option value="html">Software Engineer</option>
                                        <option value="css">Civil Engineer</option>
                                        <option value="javascript">Web Doveloper</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Department<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Please select</option>
                                        <option value="html">Software</option>
                                        <option value="css">Doit</option>
                                        <option value="javascript">Designing</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Country<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Please select</option>
                                        <option value="html">Ind</option>
                                        <option value="css">USA</option>
                                        <option value="javascript">UK</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Gender<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Please select</option>
                                        <option value="html">Male</option>
                                        <option value="css">Female</option>
                                        <option value="javascript">Other</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput99" class="form-label">Joining Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="exampleFormControlInput99">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput8" class="form-label">Date of Birth<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="exampleFormControlInput8">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInput10" class="form-label">Reporting To<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput10" placeholder="">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Language Select<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Please select</option>
                                        <option value="html">English</option>
                                        <option value="css">Hindi</option>
                                        <option value="javascript">Canada</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">User Role<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Please select</option>
                                        <option value="html">Parmanent</option>
                                        <option value="css">Parttime</option>
                                        <option value="javascript">Per Hours</option>
                                    </select>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Address<span class="text-danger">*</span></label>
                                    <textarea rows="3" class="form-control"></textarea>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">About<span class="text-danger">*</span></label>
                                    <textarea rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-danger light ms-1">Cancel</button>
                                <button class="btn btn-primary me-1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
                <div class="offcanvas-header">
                    <h5 class="modal-title" id="#gridSystemModal1">Add New Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <div class="container-fluid">
                        <form>
                            <div class="row">
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInputfirst" class="form-label">Title<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInputfirst" placeholder="Title">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Project<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Project</option>
                                        <option value="html">Salesmate</option>
                                        <option value="css">ActiveCampaign</option>
                                        <option value="javascript">Insightly</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInputthree" class="form-label">Start Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="exampleFormControlInputthree">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label for="exampleFormControlInputfour" class="form-label">End Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="exampleFormControlInputfour">
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Estimated Hour<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i class="fas fa-clock"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Status<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Status</option>
                                        <option value="html">In Progess</option>
                                        <option value="css">Pending</option>
                                        <option value="javascript">Completed</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">priority<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">priority</option>
                                        <option value="html">Hight</option>
                                        <option value="css">Medium</option>
                                        <option value="javascript">Low</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Category<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Category</option>
                                        <option value="html">Designing</option>
                                        <option value="css">Development</option>
                                        <option value="javascript">react developer</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Permission<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Permission</option>
                                        <option value="html">Public</option>
                                        <option value="css">Private</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Deadline add<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Deadline</option>
                                        <option value="html">Yes</option>
                                        <option value="css">No</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Assigned to<span class="text-danger">*</span></label>
                                    <select class="default-select style-1 form-control">
                                        <option data-display="Select">Assigned</option>
                                        <option value="html">Bernard</option>
                                        <option value="css">Sergey Brin</option>
                                        <option value="javascript"> Larry Ellison</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 mb-3">
                                    <label class="form-label">Responsible Person<span class="text-danger">*</span></label>
                                    <input name='tagify' class="form-control py-0 ps-0 h-auto" value='James, Harry'>

                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Description<span class="text-danger">*</span></label>
                                    <textarea rows="3" class="form-control"></textarea>
                                </div>
                                <div class="col-xl-12 mb-3">
                                    <label class="form-label">Summary<span class="text-danger">*</span></label>
                                    <textarea rows="3" class="form-control"></textarea>
                                </div>

                            </div>
                            <div>
                                <button class="btn btn-danger light ms-1">Cancel</button>
                                <button class="btn btn-primary me-1">Help Desk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xl-12">
                                    <label class="form-label">Email ID<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="hello@gmail.com">
                                    <label class="form-label mt-3">Employment date<span class="text-danger">*</span></label>
                                    <input class="form-control" type="date">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <label class="form-label mt-3">First Name<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <label class="form-label mt-3">Last Name<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Surname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3 invite">
                                        <label class="form-label">Send invitation email<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control " placeholder="+ invite">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
            Footer start
        ***********************************-->

            <div class="footer">
                <div class="copyright">
                    <p>Copyright © ONEE <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </p>
                </div>
            </div> <!--**********************************
            Footer end
        ***********************************-->

            <!--**********************************
           Support ticket button start
        ***********************************-->

            <!--**********************************
           Support ticket button end
        ***********************************-->
        </div>
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
        <!-- Required vendors -->

        <script>
            var enableSupportButton = '1'
        </script>

        <?php
        include("script.php");

        ?>
</body>

</html>