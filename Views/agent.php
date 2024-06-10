
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
</div>    <!--*******************
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
</div>   <!--**********************************
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
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
						<div>
							<h6 class="mb-1">Chat List</h6>
							<p class="mb-0">Show All</p>
						</div>
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
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
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
						</a>
						<div>
							<h6 class="mb-1">Chat with Khelesh</h6>
							<p class="mb-0 text-success">Online</p>
						</div>							
						<div class="dropdown">
							<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
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
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
						<div>
							<h6 class="mb-1">Notications</h6>
							<p class="mb-0">Show All</p>
						</div>
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
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
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
						<div>
							<h6 class="mb-1">Notes</h6>
							<p class="mb-0">Add New Nots</p>
						</div>
						<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
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
</div>		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header sidebar start
        ***********************************-->
		
        <?php require_once('header.php') ?>
        <?php require_once('sidebar.php') ?>
		
		
        <!--**********************************
            Sidebar header end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<!--<li><h5 class="bc-title">Employee</h5></li>-->
					<li class="breadcrumb-item"><a href="home">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<a>Home</a>
					</li>
					<!--<li class="breadcrumb-item active"><a href="javascript:void(0)">Employee</a></li>-->
				</ol>
				<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1">
								<div class="tbl-caption">
									<h4 class="heading mb-0">Agents</h4>
									<div>
										<a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Ajouter Agent</a>
										<button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">
												  + Modifier Agent
												</button>
									</div>
								</div>
									<table id="empoloyees-tblwrapper" class="table">
										<thead>
											<tr>
												<th>Matricule</th>
												<th>Nom Agent</th>
												<th>Fonction</th>
												<th>Division</th>
												<th>Numéro de téléphone</th>
												<th>Classement</th>
												<th>Date Naissance</th>
												<th>Date Embauche</th>
												<th>Actions</th> 
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Liam Antony</h6>
															<span>Technicien Electrique</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Noah Oliver</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic3.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Elijah James</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic3.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>James Antony</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											</tr>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic2.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>Benjamin Chaa</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											<tr>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="assets/images/contacts/pic1.jpg" class="avatar avatar-md" alt="">
														<div>
															<h6>William Sokli</h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><span>Computer Science</span></td>
												<td><span class="text-primary">Commercial</span></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td><span>01/01/1990</span></td>
                                                <td><span>15/06/2015</span></td>
												<td>
												<!-- Bouton de suppression -->
												<button class="btn btn-danger btn-sm" onclick="deleteAgent('1001')">Supprimer</button>
											</td>
											</tr>
											
												
	
										</tbody>
										
									</table>
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
            </div>        <!--**********************************
            Footer end
        ***********************************-->
		
		
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal">Ajouter Agent</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				<div>
					<label> Photo de Profile</label>
					<div class="dz-default dlab-message upload-img mb-3">	
						<form action="#" class="dropzone">
							<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
							<label for="exampleFormControlInput1" class="form-label">Agent Matricule <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">Nom Agent<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Fonction<span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
						</div>
			
						<div class="col-xl-6 mb-3">
							<label class="form-label">Division<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Veuillez sélectionner</option>
								<option value="commercial">Commercial</option>
								<option value="securite">Sécurité</option>
								<option value="industriel">Industriel</option>
							</select>
						</div>	
						<div class="col-xl-6 mb-3">
							<label class="form-label">Habilitation<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Veuillez sélectionner</option>
								<option value="haute">Haute Tension</option>
								<option value="basse">Basse Tension</option>
								<option value="sous">Sous Tension</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Formation<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Veuillez sélectionner</option>
								<option value="electrique">Electrique</option>
								<option value="industriel">Industriel</option>
								<option value="informatique">Informatique</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput88" class="form-label">Mobile<span class="text-danger">*</span></label>
							<input type="number" class="form-control" id="exampleFormControlInput88" placeholder="">
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Gendre<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Veuillez sélectionner</option>
								<option value="html">Homme</option>
								<option value="css">Femme</option>
								
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput99" class="form-label">Date de Naissance<span class="text-danger">*</span></label>
							<input type="date" class="form-control" id="exampleFormControlInput99">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput8" class="form-label">Date d'Embauche<span class="text-danger">*</span></label>
							<input type="date" class="form-control" id="exampleFormControlInput8">
						</div>
						
						<div class="col-xl-12 mb-3">
							<label class="form-label">Address<span class="text-danger">*</span></label>
							<textarea rows="3" class="form-control"></textarea>
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">A propos<span class="text-danger">*</span></label>
							<textarea rows="3" class="form-control"></textarea>
						</div>	
					</div>
					<div>
						<button class="btn btn-danger light ms-1">Annuler</button>
						<button class="btn btn-primary me-1">Valider</button>
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
								<option  data-display="Select">Project</option>
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
								<input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
											class="fas fa-clock"></i></span>
                            </div>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Status<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Status</option>
								<option value="html">In Progess</option>
								<option value="css">Pending</option>
								<option value="javascript">Completed</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">priority<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">priority</option>
								<option value="html">Hight</option>
								<option value="css">Medium</option>
								<option value="javascript">Low</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Category<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Category</option>
								<option value="html">Designing</option>
								<option value="css">Development</option>
								<option value="javascript">react developer</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Permission<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Permission</option>
								<option value="html">Public</option>
								<option value="css">Private</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Deadline add<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Deadline</option>
								<option value="html">Yes</option>
								<option value="css">No</option>
							</select>
						</div>
						<div class="col-xl-6 mb-3">
							<label class="form-label">Assigned to<span class="text-danger">*</span></label>
							<select class="default-select style-1 form-control">
								<option  data-display="Select">Assigned</option>
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
				<h1 class="modal-title fs-5" id="exampleModalLabel1">Modifier Agent</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>

  <div class="offcanvas-body">
    <div class="container-fluid">
      <form id="agentForm">
        <input type="hidden" id="agentId" name="agentId" />
        <div class="row">
          <div class="col-xl-6 mb-3">
            <label for="agentMatricule" class="form-label">Agent Matricule <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="agentMatricule" name="agentMatricule" placeholder="">
          </div> 
          <div class="col-xl-6 mb-3">
            <label for="agentNom" class="form-label">Nom Agent<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="agentNom" name="agentNom" placeholder="">
          </div> 
          <div class="col-xl-6 mb-3">
            <label for="agentFonction" class="form-label">Fonction<span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="agentFonction" name="agentFonction" placeholder="">
          </div>
          
          <div class="col-xl-6 mb-3">
            <label class="form-label">Division<span class="text-danger">*</span></label>
            <select id="agentDivision" class="default-select style-1 form-control">
              <option data-display="Select">Veuillez sélectionner</option>
              <option value="commercial">Commercial</option>
              <option value="securite">Sécurité</option>
              <option value="industriel">Industriel</option>
            </select>
          </div> 
          <div class="col-xl-6 mb-3">
            <label class="form-label">Habilitation<span class="text-danger">*</span></label>
            <select id="agentHabilitation" class="default-select style-1 form-control">
              <option data-display="Select">Veuillez sélectionner</option>
              <option value="haute">Haute Tension</option>
              <option value="basse">Basse Tension</option>
              <option value="sous">Sous Tension</option>
            </select>
          </div>
          <div class="col-xl-6 mb-3">
            <label class="form-label">Formation<span class="text-danger">*</span></label>
            <select id="agentFormation" class="default-select style-1 form-control">
              <option data-display="Select">Veuillez sélectionner</option>
              <option value="electrique">Electrique</option>
              <option value="industriel">Industriel</option>
              <option value="informatique">Informatique</option>
            </select>
          </div>
          <div class="col-xl-6 mb-3">
            <label for="agentMobile" class="form-label">Mobile<span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="agentMobile" name="agentMobile" placeholder="">
          </div>
          <div class="col-xl-6 mb-3">
            <label class="form-label">Genre<span class="text-danger">*</span></label>
            <select id="agentGenre" class="default-select style-1 form-control">
              <option data-display="Select">Veuillez sélectionner</option>
              <option value="homme">Homme</option>
              <option value="femme">Femme</option>
            </select>
          </div>
          <div class="col-xl-6 mb-3">
            <label for="agentDateNaissance" class="form-label">Date de Naissance<span class="text-danger">*</span></label>
            <input type="date" class="form-control" id="agentDateNaissance" name="agentDateNaissance">
          </div>
          <div class="col-xl-6 mb-3">
            <label for="agentDateEmbauche" class="form-label">Date d'Embauche<span class="text-danger">*</span></label>
            <input type="date" class="form-control" id="agentDateEmbauche" name="agentDateEmbauche">
          </div>
          
          <div class="col-xl-12 mb-3">
            <label class="form-label">Adresse<span class="text-danger">*</span></label>
            <textarea rows="3" class="form-control" id="agentAdresse" name="agentAdresse"></textarea>
          </div>
          <div class="col-xl-12 mb-3">
            <label class="form-label">A propos<span class="text-danger">*</span></label>
            <textarea rows="3" class="form-control" id="agentAPropos" name="agentAPropos"></textarea>
          </div> 
        </div>
        <div>
          <button class="btn btn-danger light ms-1" type="button" data-bs-dismiss="offcanvas">Annuler</button>
          <button class="btn btn-primary me-1" type="submit">Enregistrer modification</button>
        </div>
      </form>
    </div>
  </div>
</div>

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
     <script src="assets/vendor/global/global.min.js"></script>
	<script src="assets/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="assets/vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	 
	<script src="assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="https://w3crm.dexignzone.com/xhtml/page-error-404.html"></script>
	<script src="assets/vendor/datatables/js/jszip.min.js"></script>
	<script src="assets/js/plugins-init/datatables.init.js"></script>
   
	<!-- Apex Chart -->
     <script src="assets/js/custom.js"></script>
	<script src="assets/js/deznav-init.js"></script>
	<script src="assets/js/demo.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>
	
	<!-- tagify -->
	<script src="assets/vendor/tagify/dist/tagify.js"></script>
	
	
	
</body>

<!-- Mirrored from w3crm.dexignzone.com/php/demo/employee.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 11:20:25 GMT -->
</html>