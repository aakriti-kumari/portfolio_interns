<?php 
include('config.php');
?>


<!-- section for website design starts here -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Marketify">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="modules/ui/assets/css/plugins.css">
<link rel="stylesheet" href="modules/ui/assets/css/custom.css">
<link rel="stylesheet" href="modules/ui/assets/css/main.css">
<link rel="icon" type="image/png" href="modules/ui/assets/img/logo/akriti.png">
<title>Akriti's Portfolio</title>
</head>
<body>

<div class="tokyo_tm_all_wrap" data-magic-cursor="show" data-enter="fadeInLeft" data-exit>
<!-- 
<div id="preloader">
<div class="loader_line"></div>
</div> -->


<div class="tokyo_tm_topbar bg-white fixed top-0 left-0 right-0 h-[50px] z-[14] hidden">
<div class="topbar_inner w-full h-full clear-both flex items-center justify-between py-0 px-[20px]">
<div class="logo" data-type="image"> 
<a href="#">
<img class="max-w-[100px] max-h-[40px]" src="modules/ui/assets/img/logo/dark.jpeg" alt />
<h3 class="font-black font-poppins text-[25px] tracking-[4px]">AKRITI</h3>
</a>
</div>
<div class="trigger relative top-[5px]">
<div class="hamburger hamburger--slider">
<div class="hamburger-box w-[30px]">
<div class="hamburger-inner"></div>
</div>
</div>
</div>
</div>
</div>
<div class="tokyo_tm_mobile_menu fixed top-[50px] right-[-200px] h-[100vh] w-[200px] z-[15] bg-white transition-all duration-300">
<div class="menu_list w-full h-auto clear-both float-left text-right px-[20px] pt-[100px] pb-[0px]">
<ul class="transition_link list-none">
<li class="active mb-[7px]"><a class="text-black font-montserrat" href="#home">Home</a></li>
<li class="mb-[7px]"><a class="text-black font-montserrat" href="#about">About</a></li>
<li class="mb-[7px]"><a class="text-black font-montserrat" href="#service">Service</a></li>
<li class="mb-[7px]"><a class="text-black font-montserrat" href="#portfolio">Portfolio</a></li>
<li class="mb-[7px]"><a class="text-black font-montserrat" href="#news">News</a></li>
<li><a class="text-black font-montserrat" href="#contact">Contact</a></li>
<li><a class="text-black font-montserrat" href="#login">Login</a></li>
</ul>
</div>
</div>


<div class="leftpart w-[450px] h-[100vh] fixed flex items-center z-[12] px-[100px] py-[0px] bg-white">
<div class="leftpart_inner w-full h-auto">
<div class="logo" data-type="image"> 
<a href="#">
<img class="max-w-[150px]" src="modules/ui/assets/img/logo/dark.jpeg" alt />
<h3 class="font-poppins font-black text-[31px] tracking-[5px]">AKRITI</h3>
</a>
</div>
<div class="menu px-[0px] py-[50px] w-full float-left">
<ul class="transition_link m-0 list-none">
<li class="active m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#home">Home</a></li>
<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#about">About</a></li>
<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#service">Service</a></li>
<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#portfolio">Portfolio</a></li>
<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#news">News</a></li>
<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#contact">Contact</a></li>
<li class="m-0 w-full float-left"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#login">Login</a></li>

</ul>
</div>
<div class="copyright w-full float-left">
<p class="text-[15px] text-[#999] font-montserrat leading-[25px]">&copy; <?php echo date('Y'); ?><br>Created by <a class="text-[#787878] font-medium transition-all duration-300 hover:text-black" href="https://akriti.online/" target="_blank">Akriti</a></p>
</div>
</div>
</div>


<div class="rightpart w-full min-h-[100vh] float-left relative bg-[#f8f8f8] pl-[450px]">
<div class="rightpart_in relative w-full float-left clear-both border-solid border-[#ebebeb] border-l min-h-[100vh]">

<div id="home" class="tokyo_tm_section animated">
<div class="container">
<div class="tokyo_tm_home w-full min-h-[100vh] clear-both flex items-center justify-center relative">
<div class="home_content flex items-center">
<div class="avatar min-w-[300px] min-h-[300px] relative rounded-full" data-type="wave"> 
<div class="image absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="modules/ui/assets/img/slider/1.jpeg"></div>
</div>
<div class="details ml-[80px]">
<h3 class="name text-[55px] font-extrabold uppercase mb-[14px]">Akriti <span>Kumari</span></h3>
<p class="job font-montserrat font-medium max-w-[450px] mb-[25px]">I am a WordPress Developer at heart and create features that are best suited for the job at hand.</p>
<div class="social w-full float-left">
<ul class="m-0 list-none">
<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="#"><i class="icon-facebook-squared"></i></a></li>
<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="#"><i class="icon-twitter-squared"></i></a></li>
<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="#"><i class="icon-behance-squared"></i></a></li>
<li class="mr-[8px] inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="#"><i class="icon-linkedin-squared"></i></a></li>
<li class="inline-block"><a class="text-black text-[20px] transition-all duration-300 hover:text-black" href="#"><i class="icon-instagram-"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<div id="about" class="tokyo_tm_section">
<div class="container">
<div class="tokyo_tm_about w-full h-auto clear-both float-left py-[100px] px-0">
<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
<div class="left">
<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">About</span>
<h3 class="font-extrabold font-montserrat">About Me</h3>
</div>
</div>
</div>
<div class="top_author_image w-full h-auto clear-both float-left relative mb-[35px]">
<img class="min-w-full" src="modules/ui/assets/img/slider/1.jpeg" alt />
</div>
<div class="about_title w-full h-auto clear-both float-left border-solid border-[#DFDFDF] border-b pb-[20px] mb-[30px]">
<h3 class="text-[22px] font-bold">Adriano Smith</h3>
<span>Web Developer</span>
</div>
<div class="about_text w-full h-auto clear-both float-left border-solid border-[#DFDFDF] border-b pb-[31px] mb-[30px]">
<p class="mb-[11px]">Hi, my name is Adriano Smith and I began using WordPress when it first began. I’ve spent most of my waking hours for the last ten years designing, programming and operating WordPress sites.</p>
<p>One of my specialties is taking an idea from scratch and creating a full-fledged platform. I go beyond to produce sites with a unique, outstanding, contemporary look-and-feel. With extensive knowledge of web mechanics, I’m able to optimize complex integrations to require little-to-no maintenance while running on their own for years.</p>
</div>
<div class="tokyo_tm_short_info w-full h-auto clear-both float-left flex border-solid border-[#DFDFDF] border-b pb-[30px] mb-[40px]">
<div class="left w-1/2 pr-[50px]">
<div class="tokyo_tm_info w-full h-auto clear-both float-left">
<ul class="m-0 list-none">
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Birthday:</span><span>01.07.1990</span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Age:</span><span>32</span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Address:</span><span>Ave 11, New York, USA</span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Email:</span><span><a class="text-[#767676] transition-all duration-300 hover:text-black" href="/cdn-cgi/l/email-protection#d1a5bebaa8be91b6bcb0b8bdffb2bebc"><span class="__cf_email__" data-cfemail="f2869d998b9db2959f939b9edc919d9f">[email&#160;protected]</span></a></span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Phone:</span><span><a class="text-[#767676] transition-all duration-300 hover:text-black" href="tel:+77 022 177 05 05">+77 022 177 05 05</a></span></li>
</ul>
</div>
</div>
<div class="right w-1/2 pl-[50px]">
<div class="tokyo_tm_info">
<ul class="m-0 list-none">
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Nationality:</span><span>USA</span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Study:</span><span>Univercity of Texas</span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Degree:</span><span>Master</span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Interest:</span><span>Playing Football</span></li>
<li class="m-0"><span class="min-w-[100px] float-left mr-[10px] font-bold text-black">Freelance:</span><span>Available</span></li>
</ul>
</div>
</div>
</div>
<div class="tokyo_tm_button" data-position="left">
<a href="modules/ui/assets/img/cv/1.jpg" download>
<span>Download CV</span>
</a>
</div>
</div>
</div>
<div class="tokyo_tm_progressbox w-full h-auto clear-both float-left bg-white pt-[93px] pr-[0px] pb-[100px] pl-[0px]">
<div class="container">
<div class="in w-full h-auto clear-both float-left flex">
<div class="left w-1/2 pr-[50px]">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Programming Skills</h3>
</div>
<div class="tokyo_progress">
<div class="progress_inner" data-value="95">
<span><span class="label">WordPress</span><span class="number">95%</span></span>
<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
</div>
<div class="progress_inner" data-value="80">
<span><span class="label">JavaScript</span><span class="number">80%</span></span>
<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
</div>
<div class="progress_inner" data-value="90">
<span><span class="label">Angular</span><span class="number">90%</span></span>
<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
</div>
</div>
</div>
<div class="right w-1/2 pl-[50px]">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Language Skills</h3>
</div>
<div class="tokyo_progress">
<div class="progress_inner" data-value="90">
<span><span class="label">English</span><span class="number">90%</span></span>
<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
</div>
<div class="progress_inner" data-value="95">
<span><span class="label">Russian</span><span class="number">95%</span></span>
<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
</div>
<div class="progress_inner" data-value="85">
<span><span class="label">Arabic</span><span class="number">85%</span></span>
<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tokyo_tm_skillbox w-full h-auto clear-both float-left pt-[90px] pr-[0px] pb-[90px] pl-[0px]">
<div class="container">
<div class="in w-full h-auto clear-both float-left flex">
<div class="left w-1/2 pr-[50px]">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Knowledge</h3>
</div>
<div class="tokyo_tm_skill_list w-full h-auto clear-both float-left">
<ul class="m-0 list-none">
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Bootstrap, Angular</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />React, Vue, Laravel</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Stylus, Sass, Less</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Gulp, Webpack, Grunt</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Tweenmax, GSAP</span>
</li>
</ul>
</div>
</div>
<div class="right w-1/2 pl-[50px]">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Interests</h3>
</div>
<div class="tokyo_tm_skill_list w-full h-auto clear-both float-left">
<ul class="m-0 list-none">
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Make UI/UX Design</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Create Mobile App</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Site Optimization</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Custom Website</span>
</li>
<li class="m-0 pl-[25px] relative">
<span><img class="svg text-black w-[10px] h-[10px] absolute left-0 top-1/2 translate-y-[-50%]" src="modules/ui/assets/img/svg/rightarrow.svg" alt />Learn Ecommerce</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="tokyo_tm_resumebox w-full h-auto clear-both float-left bg-white py-[93px] px-0">
<div class="container">
<div class="in w-full h-auto clear-both float-left flex">
<div class="left w-1/2 pr-[50px]">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Education</h3>
</div>
<div class="tokyo_tm_resume_list w-full h-auto clear-both float-left">
<ul class="m-0 list-none relative inline-block pt-[10px]">
<li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
<div class="list_inner  w-full h-auto clear-both float-left relative flex">
<div class="time w-1/2 pr-[20px]">
<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2014 - 2016</span>
</div>
<div class="place w-1/2 pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Oxford Univercity</h3>
<span class="text-[14px]">Master Degree</span>
</div>
</div>
</li>
<li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
<div class="list_inner  w-full h-auto clear-both float-left relative flex">
<div class="time w-1/2 pr-[20px]">
<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2010 - 2014</span>
</div>
<div class="place w-1/2 pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Texas Univercity</h3>
<span class="text-[14px]">Bachelor Degree</span>
</div>
</div>
</li>
<li class="m-0 w-full float-left relative pl-[20px]">
<div class="list_inner  w-full h-auto clear-both float-left relative flex">
<div class="time w-1/2 pr-[20px]">
<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2008 - 2010</span>
</div>
<div class="place w-1/2 pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Simone College</h3>
<span class="text-[14px]">Associate Degree</span>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="right w-1/2 pl-[50px]">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Experience</h3>
</div>
<div class="tokyo_tm_resume_list w-full h-auto clear-both float-left">
<ul class="m-0 list-none relative inline-block pt-[10px]">
<li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
<div class="list_inner  w-full h-auto clear-both float-left relative flex">
<div class="time w-1/2 pr-[20px]">
<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2018 - Now</span>
</div>
<div class="place w-1/2 pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Envato Market</h3>
<span class="text-[14px]">Exclusive Author</span>
</div>
</div>
</li>
<li class="m-0 w-full float-left relative pl-[20px] pb-[45px]">
<div class="list_inner  w-full h-auto clear-both float-left relative flex">
<div class="time w-1/2 pr-[20px]">
<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2016 - 2018</span>
</div>
<div class="place w-1/2 pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">RGB Studio</h3>
<span class="text-[14px]">UX Designer</span>
</div>
</div>
</li>
<li class="m-0 w-full float-left relative pl-[20px]">
<div class="list_inner  w-full h-auto clear-both float-left relative flex">
<div class="time w-1/2 pr-[20px]">
<span class="inline-block py-[5px] px-[25px] bg-[rgba(0,0,0,.05)] rounded-[50px] text-[14px] whitespace-nowrap">2012 - 2016</span>
</div>
<div class="place w-1/2 pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Innovations Park</h3>
<span class="text-[14px]">Web Designer</span>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="tokyo_tm_testimonials w-full h-auto clear-both float-left py-[100px] px-0">
<div class="container">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Testimonials</h3>
</div>
<div class="list w-full h-auto clear-both float-left overflow-hidden">
<ul class="owl-carousel m-0 list-none cursor-e-resize">
<li>
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="text w-full h-auto clear-both float-left border-solid border-[#E5EDF4] border-2 p-[40px] mb-[30px] relative">
<p>Beautiful minimalist design and great, fast response with support. Highly recommend. Thanks Marketify!</p>
</div>
<div class="details w-full h-auto clear-both float-left flex items-center pl-[20px]">
<div class="image relative w-[60px] h-[60px]">
<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" data-img-url="modules/ui/assets/img/testimonials/1.jpg"></div>
</div>
<div class="info pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Alexander Walker</h3>
<span class="text-[14px]">Graphic Designer</span>
</div>
</div>
</div>
</li>
<li>
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="text w-full h-auto clear-both float-left border-solid border-[#E5EDF4] border-2 p-[40px] mb-[30px] relative">
<p>These people really know what they are doing! Great customer support availability and supperb kindness.</p>
</div>
<div class="details w-full h-auto clear-both float-left flex items-center pl-[20px]">
<div class="image relative w-[60px] h-[60px]">
<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" data-img-url="modules/ui/assets/img/testimonials/2.jpg"></div>
</div>
<div class="info pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Isabelle Smith</h3>
<span class="text-[14px]">Content Manager</span>
</div>
</div>
</div>
</li>
<li>
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="text w-full h-auto clear-both float-left border-solid border-[#E5EDF4] border-2 p-[40px] mb-[30px] relative">
<p>I had a little problem and the support was just awesome to quickly solve the situation. And keep going on.</p>
</div>
<div class="details w-full h-auto clear-both float-left flex items-center pl-[20px]">
<div class="image relative w-[60px] h-[60px]">
<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" data-img-url="modules/ui/assets/img/testimonials/3.jpg"></div>
</div>
<div class="info pl-[20px]">
<h3 class="text-[16px] mb-[2px] font-semibold">Baraka Clinton</h3>
<span class="text-[14px]">English Teacher</span>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>


<div id="service" class="tokyo_tm_section">
<div class="container">
<div class="tokyo_tm_services w-full h-auto clear-both float-left py-[100px] px-0">
<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
<div class="left">
<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Services</span>
<h3 class="font-extrabold font-montserrat">What I Do</h3>
</div>
</div>
</div>
<div class="list w-full h-auto clear-both float-left">
<ul class="ml-[-40px] list-none flex flex-wrap">
<li class="mb-[40px] w-1/3 pl-[40px]">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">01</span>
<h3 class="title font-bold text-black text-[18px] mb-[15px]">Web Design</h3>
<p class="text">Web development is the most famous job in the world and it is very interesting...</p>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
<a class="tokyo_tm_full_link" href="#"></a>

<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="modules/ui/assets/img/news/1.jpg" alt />
<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
<div class="service_popup_informations w-full h-auto clear-both float-left">
<div class="descriptions w-full float-left">
<p class="mb-[15px]">Tokyo is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Tokyo, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>
</div>

</div>
</li>
<li class="mb-[40px] w-1/3 pl-[40px]">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">02</span>
<h3 class="title font-bold text-black text-[18px] mb-[15px]">Content Writing</h3>
<p class="text">Web development is the most famous job in the world and it is very interesting...</p>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
<a class="tokyo_tm_full_link" href="#"></a>

<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="modules/ui/assets/img/news/2.jpg" alt />
<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
<div class="service_popup_informations w-full h-auto clear-both float-left">
<div class="descriptions w-full float-left">
<p class="mb-[15px]">Tokyo is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Tokyo, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>
</div>

</div>
</li>
<li class="mb-[40px] w-1/3 pl-[40px]">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">03</span>
<h3 class="title font-bold text-black text-[18px] mb-[15px]">Brand Identity</h3>
<p class="text">Web development is the most famous job in the world and it is very interesting...</p>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
<a class="tokyo_tm_full_link" href="#"></a>

<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="modules/ui/assets/img/news/3.jpg" alt />
<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
<div class="service_popup_informations w-full h-auto clear-both float-left">
<div class="descriptions w-full float-left">
<p class="mb-[15px]">Tokyo is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Tokyo, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>
</div>

</div>
</li>
<li class="mb-[40px] w-1/3 pl-[40px]">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">04</span>
<h3 class="title font-bold text-black text-[18px] mb-[15px]">Live Chat</h3>
<p class="text">Web development is the most famous job in the world and it is very interesting...</p>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
<a class="tokyo_tm_full_link" href="#"></a>

<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="modules/ui/assets/img/news/4.jpg" alt />
<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
<div class="service_popup_informations w-full h-auto clear-both float-left">
<div class="descriptions w-full float-left">
<p class="mb-[15px]">Tokyo is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Tokyo, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>
</div>

</div>
</li>
<li class="mb-[40px] w-1/3 pl-[40px]">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">05</span>
<h3 class="title font-bold text-black text-[18px] mb-[15px]">After Effects</h3>
<p class="text">Web development is the most famous job in the world and it is very interesting...</p>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
<a class="tokyo_tm_full_link" href="#"></a>

<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="modules/ui/assets/img/news/1.jpg" alt />
<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
<div class="service_popup_informations w-full h-auto clear-both float-left">
<div class="descriptions w-full float-left">
<p class="mb-[15px]">Tokyo is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Tokyo, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>
</div>

</div>
</li>
<li class="mb-[40px] w-1/3 pl-[40px]">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border bg-white pt-[45px] pr-[30px] pb-[40px] pl-[30px] transition-all duration-300">
<span class="number inline-block mb-[25px] relative w-[60px] h-[60px] leading-[60px] text-center rounded-full bg-[rgba(0,0,0,.03)] font-bold text-black font-montserrat transition-all duration-300">06</span>
<h3 class="title font-bold text-black text-[18px] mb-[15px]">Mobile App</h3>
<p class="text">Web development is the most famous job in the world and it is very interesting...</p>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
<a class="tokyo_tm_full_link" href="#"></a>

<img class="popup_service_image opacity-0 invisible hidden absolute z-[-111]" src="modules/ui/assets/img/news/2.jpg" alt />
<div class="service_hidden_details opacity-0 invisible hidden absolute z-[-111]">
<div class="service_popup_informations w-full h-auto clear-both float-left">
<div class="descriptions w-full float-left">
<p class="mb-[15px]">Tokyo is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
<p class="mb-[15px]">In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Tokyo, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
</div>
</div>
</div>

</div>
</li>
</ul>
</div>
</div>
</div>
<div class="tokyo_tm_partners w-full h-auto clear-both float-left bg-white py-[100px] px-0">
<div class="container">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Partners</h3>
</div>
<div class="partners_inner w-full h-auto clear-both float-left">
<ul class="mt-[-2px] mr-[-10px] mb-[-2px] ml-[-2px] list-none pt-[2px] float-left pl-[2px]">
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/1.png" alt />
</div>
</li>
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/2.png" alt />
</div>
</li>
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/3.png" alt />
</div>
</li>
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/4.png" alt />
</div>
</li>
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/5.png" alt />
</div>
</li>
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/6.png" alt />
</div>
</li>
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/7.png" alt />
</div>
</li>
<li class="m-0 float-left w-1/4 border-solid border-[#eee] border-2 text-center h-[145px] leading-[145px] relative mt-[-2px] ml-[-2px] overflow-hidden">
<div class="list_inner w-full h-full clear-both float-left opacity-50 transition-all duration-300 hover:opacity-100">
<img class="max-w-[50%] max-h-[100px] inline-block" src="modules/ui/assets/img/partners/dark/8.png" alt />
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="tokyo_tm_facts w-full h-auto clear-both float-left px-0 pt-[100px] pb-[60px]">
<div class="container">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Fun Facts</h3>
</div>
<div class="list w-full h-auto clear-both float-left">
<ul class="ml-[-40px] list-none">
<li class="mb-[40px] pl-[40px] w-1/3 float-left">
<div class="list_inner  w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border text-center px-[20px] py-[40px]">
<h3 class="font-semibold text-[20px] mb-[3px]">777+</h3>
<span>Projects Completed</span>
</div>
</li>
<li class="mb-[40px] pl-[40px] w-1/3 float-left">
<div class="list_inner  w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border text-center px-[20px] py-[40px]">
<h3 class="font-semibold text-[20px] mb-[3px]">3K</h3>
<span>Happy Clients</span>
</div>
</li>
<li class="mb-[40px] pl-[40px] w-1/3 float-left">
<div class="list_inner  w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border text-center px-[20px] py-[40px]">
<h3 class="font-semibold text-[20px] mb-[3px]">9K+</h3>
<span>Lines of Code</span>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="tokyo_tm_pricing w-full h-auto clear-both float-left px-[0px] pt-[100px] pb-[60px] bg-white">
<div class="container">
<div class="tokyo_section_title w-full h-auto clear-both float-left mb-[40px]">
<h3 class="text-[20px] font-bold">Pricing</h3>
</div>
<div class="list w-full h-auto clear-both float-left">
<ul class="ml-[-40px]">
<li class="mb-[40px] pl-[40px] w-1/3 float-left">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border px-[40px] pt-[27px] pb-[45px]">
<div class="price w-full float-left">
<h3 class="text-[40px] font-semibold"><span>0<span class="currency">$</span></span></h3>
</div>
<div class="plan w-full float-left">
<h3 class="font-semibold text-[20px] border-solid border-[rgba(0,0,0,.1)] border-b mb-[20px] pb-[20px]">Free</h3>
</div>
<ul class="item list-none">
<li class="active"><p>Premium Icons</p></li>
<li class="opacity-50"><p>Quality Logo</p></li>
<li class="opacity-50"><p>Stock Images</p></li>
<li class="opacity-50"><p>Free Support</p></li>
</ul>
<div class="tokyo_tm_button" data-position="left">
<a href="#">
<span>Purchase</span>
</a>
</div>
</div>
</li>
<li class="mb-[40px] pl-[40px] w-1/3 float-left">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border px-[40px] pt-[27px] pb-[45px]">
<div class="price w-full float-left">
<h3 class="text-[40px] font-semibold"><span>30<span class="currency">$</span></span></h3>
</div>
<div class="plan w-full float-left">
<h3 class="font-semibold text-[20px] border-solid border-[rgba(0,0,0,.1)] border-b mb-[20px] pb-[20px]">Basic</h3>
</div>
<ul class="item list-none">
<li class="active"><p>Premium Icons</p></li>
<li class="active"><p>Quality Logo</p></li>
<li class="opacity-50"><p>Stock Images</p></li>
<li class="opacity-50"><p>Free Support</p></li>
</ul>
<div class="tokyo_tm_button" data-position="left">
<a href="#">
<span>Purchase</span>
</a>
</div>
<span class="popular absolute inline-block bg-black text-white text-[13px] px-[20px] pb-[3px] pt-0 top-[-17px] right-[10px]">Popular</span>
</div>
</li>
<li class="mb-[40px] pl-[40px] w-1/3 float-left">
<div class="list_inner w-full h-auto clear-both float-left relative border-solid border-[rgba(0,0,0,.1)] border px-[40px] pt-[27px] pb-[45px]">
<div class="price w-full float-left">
<h3 class="text-[40px] font-semibold"><span>70<span class="currency">$</span></span></h3>
</div>
<div class="plan w-full float-left">
<h3 class="font-semibold text-[20px] border-solid border-[rgba(0,0,0,.1)] border-b mb-[20px] pb-[20px]">Premium</h3>
</div>
<ul class="item list-none">
<li class="active"><p>Premium Icons</p></li>
<li class="active"><p>Quality Logo</p></li>
<li class="active"><p>Stock Images</p></li>
<li class="active"><p>Free Support</p></li>
</ul>
<div class="tokyo_tm_button" data-position="left">
<a href="#">
<span>Purchase</span>
</a>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="tokyo_tm_portfolio_titles"></div>

<div id="portfolio" class="tokyo_tm_section">
<div class="container">
<div class="tokyo_tm_portfolio w-full h-auto clear-both float-left px-0 pt-[100px] pb-[40px]">
<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
<div class="left">
<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Portfolio</span>
<h3 class="font-extrabold font-montserrat">Creative Portfolio</h3>
</div>
<div class="portfolio_filter">
<ul class="list-none">
<li class="mr-[25px] inline-block"><a href="#" class="current text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" data-filter="*">All</a></li>
<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".vimeo">Vimeo</a></li>
<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".youtube">Youtube</a></li>
<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".soundcloud">Soundcloud</a></li>
<li class="mr-[25px] inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".image">Image</a></li>
<li class="inline-block"><a class="text-[#767676] inline-block font-medium font-montserrat transition-all duration-300 hover:text-black" href="#" data-filter=".detail">Detail</a></li>
</ul>
</div>
</div>
</div>
<div class="list_wrapper w-full h-auto clear-both float-left">
<ul class="portfolio_list gallery_zoom ml-[-40px] list-none">
<li class="vimeo mb-[40px] float-left w-1/3 pl-[40px]">
<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Teresa Butler" data-category="Vimeo">
<a class="popup-vimeo" href="https://vimeo.com/337293658">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/1-1.jpg" alt />
<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/portfolio/5.jpg"></div>
</a>
</div>
</div>
</li>
<li class="youtube mb-[40px] float-left w-1/3 pl-[40px]">
<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Ashley Flores" data-category="Youtube">
<a class="popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/1-1.jpg" alt />
<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/portfolio/6.jpg"></div>
</a>
</div>
</div>
</li>
<li class="soundcloud mb-[40px] float-left w-1/3 pl-[40px]">
<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Derek Smith" data-category="Soundcloud">
<a class="soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/1-1.jpg" alt />
<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/portfolio/4.jpg"></div>
</a>
</div>
</div>
</li>
<li class="image mb-[40px] float-left w-1/3 pl-[40px]">
<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Gloria Jenkins" data-category="Image">
<a class="zoom" href="modules/ui/assets/img/portfolio/3.jpg">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/1-1.jpg" alt />
<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/portfolio/3.jpg"></div>
</a>
</div>
</div>
</li>
<li class="detail mb-[40px] float-left w-1/3 pl-[40px]">
<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Selena Gomez" data-category="Detail">
<a class="popup_info" href="#">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/1-1.jpg" alt />
<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/portfolio/7.jpg"></div>
</a>
</div>
</div>

<div class="details_all_wrap w-full h-auto clear-both float-left">
<div class="popup_details">
<div class="main_details w-full h-auto clear-both flex mb-[90px]">
<div class="textbox w-[70%] pr-[40px]">
<p class="mb-[20px]">We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance between true-life representation of the end product and ease of modification.</p>
<p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they will represent the target product. Making mockups a part of your creative and development process allows you to quickly and easily ideate.</p>
</div>
<div class="detailbox w-[30%] pl-[40px]">
<ul class="list-none">
<li class="mb-[8px] w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Client</span>
<span>Alvaro Morata</span>
</li>
<li class="mb-[8px] w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Category</span>
<span><a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Detail</a></span>
</li>
<li class="mb-[8px] w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Date</span>
<span>October 22, 2022</span>
</li>
<li class="w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Share</span>
<ul class="share list-none relative top-[7px]">
<li class="mr-[10px] inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-facebook-squared"></i></a></li>
<li class="mr-[10px] inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-twitter-squared"></i></a></li>
<li class="mr-[10px] inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-behance-squared"></i></a></li>
<li class="inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-linkedin-squared"></i></a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="additional_images w-full h-auto clear-both float-left">
<ul class="ml-[-30px] list-none">
<li class="mb-[30px] float-left w-1/2 pl-[30px]">
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="my_image relative">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/4-2.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="modules/ui/assets/img/portfolio/1.jpg"></div>
</div>
</div>
</li>
<li class="mb-[30px] float-left w-1/2 pl-[30px]">
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="my_image relative">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/4-2.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="modules/ui/assets/img/portfolio/2.jpg"></div>
</div>
</div>
</li>
<li class="mb-[30px] float-left w-1/2 pl-[30px]">
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="my_image relative">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/4-2.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="modules/ui/assets/img/portfolio/3.jpg"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>

</li>
<li class="detail mb-[40px] float-left w-1/3 pl-[40px]">
<div class="inner w-full h-auto clear-both float-left overflow-hidden relative">
<div class="entry tokyo_tm_portfolio_animation_wrap" data-title="Ave Simone" data-category="Detail">
<a class="popup_info" href="#">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/1-1.jpg" alt />
<div class="abs_image absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/portfolio/8.jpg"></div>
</a>
</div>
</div>

<div class="details_all_wrap w-full h-auto clear-both float-left">
<div class="popup_details">
<div class="main_details w-full h-auto clear-both flex mb-[90px]">
<div class="textbox w-[70%] pr-[40px]">
<p class="mb-[20px]">We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance between true-life representation of the end product and ease of modification.</p>
<p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they will represent the target product. Making mockups a part of your creative and development process allows you to quickly and easily ideate.</p>
</div>
<div class="detailbox w-[30%] pl-[40px]">
<ul class="list-none">
<li class="mb-[8px] w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Client</span>
<span>Alvaro Morata</span>
</li>
<li class="mb-[8px] w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Category</span>
<span><a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Detail</a></span>
</li>
<li class="mb-[8px] w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Date</span>
<span>October 22, 2022</span>
</li>
<li class="w-full float-left">
<span class="first font-bold block text-black mb-[3px]">Share</span>
<ul class="share list-none relative top-[7px]">
<li class="mr-[10px] inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-facebook-squared"></i></a></li>
<li class="mr-[10px] inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-twitter-squared"></i></a></li>
<li class="mr-[10px] inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-behance-squared"></i></a></li>
<li class="inline-block"><a class="text-black text-[18px]" href="#"><i class="icon-linkedin-squared"></i></a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="additional_images w-full h-auto clear-both float-left">
<ul class="ml-[-30px] list-none">
<li class="mb-[30px] float-left w-1/2 pl-[30px]">
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="my_image relative">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/4-2.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="modules/ui/assets/img/portfolio/1.jpg"></div>
</div>
</div>
</li>
<li class="mb-[30px] float-left w-1/2 pl-[30px]">
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="my_image relative">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/4-2.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="modules/ui/assets/img/portfolio/2.jpg"></div>
</div>
</div>
</li>
<li class="mb-[30px] float-left w-1/2 pl-[30px]">
<div class="list_inner w-full h-auto clear-both float-left relative">
<div class="my_image relative">
<img class="opacity-0 min-w-full" src="modules/ui/assets/img/thumbs/4-2.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-center bg-cover" data-img-url="modules/ui/assets/img/portfolio/3.jpg"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>

</li>
</ul>
</div>
</div>
</div>
</div>


<div id="news" class="tokyo_tm_section">
<div class="container">
<div class="tokyo_tm_news w-full clear-both float-left h-auto pt-[100px] px-0 pb-[45px]">
<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
<div class="left">
<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">News</span>
<h3 class="font-extrabold font-montserrat">Latest News</h3>
</div>
</div>
</div>
<ul class="ml-[-50px] list-none">
<li class="mb-[50px] float-left w-1/2 pl-[50px]">
<div class="list_inner w-full clear-both float-left h-auto relative">
<div class="image relative overflow-hidden">
<img class="min-w-full opacity-0" src="modules/ui/assets/img/thumbs/40-25.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/news/1.jpg"></div>
<a class="tokyo_tm_full_link" href="#"></a>
</div>
<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
<div class="extra flex items-center justify-between mb-[25px] relative">
<div class="short">
<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Alex Watson</a> <span class="relative">22 Oct 2022</span></p>
</div>
</div>
<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Format releases a new tool that enables direct video hosting</a></h3>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
</div>

<div class="main_content w-full float-left">
<div class="descriptions w-full float-left">
<p class="bigger text-[#888] text-[20px] mb-[31px]">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
<p class="mb-[22px]">Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
<div class="icon absolute left-0 top-[5px]">
<i class="icon-quote-left text-[40px] text-black"></i>
</div>
<p class="text-[20px]">Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
</div>
<p class="mb-[22px]">Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
<p class="mb-[22px]">Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
</div>
</div>

</div>
</li>
<li class="mb-[50px] float-left w-1/2 pl-[50px]">
<div class="list_inner w-full clear-both float-left h-auto relative">
<div class="image relative overflow-hidden">
<img class="min-w-full opacity-0" src="modules/ui/assets/img/thumbs/40-25.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/news/2.jpg"></div>
<a class="tokyo_tm_full_link" href="#"></a>
</div>
<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
<div class="extra flex items-center justify-between mb-[25px] relative">
<div class="short">
<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Brook Kennedy</a> <span class="relative">15 Oct 2022</span></p>
</div>
</div>
<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Sony announced two new full frame cameras with zero fanfare</a></h3>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
</div>

<div class="main_content w-full float-left">
<div class="descriptions w-full float-left">
<p class="bigger text-[#888] text-[20px] mb-[31px]">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
<p class="mb-[22px]">Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
<div class="icon absolute left-0 top-[5px]">
<i class="icon-quote-left text-[40px] text-black"></i>
</div>
<p class="text-[20px]">Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
</div>
<p class="mb-[22px]">Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
<p class="mb-[22px]">Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
<p class="mb-[22px]">The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
</div>
</div>

</div>
</li>
<li class="mb-[50px] float-left w-1/2 pl-[50px]">
<div class="list_inner w-full clear-both float-left h-auto relative">
<div class="image relative overflow-hidden">
<img class="min-w-full opacity-0" src="modules/ui/assets/img/thumbs/40-25.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/news/3.jpg"></div>
<a class="tokyo_tm_full_link" href="#"></a>
</div>
<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
<div class="extra flex items-center justify-between mb-[25px] relative">
<div class="short">
<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Paola Atkins</a> <span class="relative">07 Oct 2022</span></p>
</div>
</div>
<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Why every photographer should shoot film, even in 2022</a></h3>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
</div>

<div class="main_content w-full float-left">
<div class="descriptions w-full float-left">
<p class="bigger text-[#888] text-[20px] mb-[31px]">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
<p class="mb-[22px]">Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
<div class="icon absolute left-0 top-[5px]">
<i class="icon-quote-left text-[40px] text-black"></i>
</div>
<p class="text-[20px]">Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
</div>
<p class="mb-[22px]">Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
<p class="mb-[22px]">Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
</div>
</div>

</div>
</li>
<li class="mb-[50px] float-left w-1/2 pl-[50px]">
<div class="list_inner w-full clear-both float-left h-auto relative">
<div class="image relative overflow-hidden">
<img class="min-w-full opacity-0" src="modules/ui/assets/img/thumbs/40-25.jpg" alt />
<div class="main absolute inset-0 bg-no-repeat bg-cover bg-center transition-all duration-300" data-img-url="modules/ui/assets/img/news/4.jpg"></div>
<a class="tokyo_tm_full_link" href="#"></a>
</div>
<div class="details w-full float-left px-[40px] pt-[30px] pb-[25px] bg-white transition-all duration-300">
<div class="extra flex items-center justify-between mb-[25px] relative">
<div class="short">
<p class="date font-montserrat text-[13px] text-[#767676]">By <a class="text-[#767676] transition-all duration-300 hover:text-black" href="#">Kevin Stone</a> <span class="relative">25 Sep 2022</span></p>
</div>
</div>
<h3 class="title mb-[10px] leading-[1.4]"><a class="text-black text-[18px] font-semibold inline-block transition-all duration-300 hover:text-black" href="#">Stay creative in lockdown with these fun photo projects</a></h3>
<div class="tokyo_tm_read_more">
<a href="#"><span>Read More</span></a>
</div>
</div>

<div class="main_content w-full float-left">
<div class="descriptions w-full float-left">
<p class="bigger text-[#888] text-[20px] mb-[31px]">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
<p class="mb-[22px]">Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
<div class="quotebox w-full clear-both float-left h-auto relative pl-[70px] mb-[24px]">
<div class="icon absolute left-0 top-[5px]">
<i class="icon-quote-left text-[40px] text-black"></i>
</div>
<p class="text-[20px]">Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
</div>
<p class="mb-[22px]">Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
<p class="mb-[22px]">Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
</div>
</div>

</div>
</li>
</ul>
</div>
</div>
</div>


<div id="contact" class="tokyo_tm_section">
<div class="container">
<div class="tokyo_tm_contact w-full float-left clear-both h-auto py-[100px] px-[0px]">
<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
<div class="left">
<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Contact</span>
<h3 class="font-extrabold font-montserrat">Get in Touch</h3>
</div>
</div>
</div>
<div class="map_wrap w-full float-left clear-both h-auto mb-[50px]">
<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="355" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:355px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:355px;width:100%;}</style></div></div>

</div>
<div class="fields w-full float-left clear-both h-auto">
<form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
<div class="empty_notice"><span>Please Fill Required Fields</span></div>
<div class="first w-full float-left">
<ul class="list-none">
<li class="w-full mb-[30px] float-left">
<input id="name" type="text" placeholder="Name">
</li>
<li class="w-full mb-[30px] float-left">
<input id="email" type="text" placeholder="Email">
</li>
</ul>
</div>
<div class="last">
<textarea id="message" placeholder="Message"></textarea>
</div>
<div class="tokyo_tm_button" data-position="left">
<a id="send_message" href="#">
<span>Send Message</span>
</a>
</div>

</form>
</div>
</div>
</div>
</div>



<div id="login" class="tokyo_tm_section">
<div class="container">
<div class="tokyo_tm_contact w-full float-left clear-both h-auto py-[100px] px-[0px]">
<div class="tokyo_tm_title w-full h-auto clear-both float-left mb-[62px]">
<div class="title_flex w-full h-auto clear-both flex justify-between items-end">
<div class="left">
<span class="inline-block bg-[rgba(0,0,0,.04)] uppercase py-[4px] px-[10px] font-semibold text-[12px] text-[#333] font-montserrat tracking-[0px] mb-[11px]">Admin Login Portal</span>
<h3 class="font-extrabold font-montserrat">Authorised Dashboard Access</h3>
</div>
</div>
</div>
<div class="fields w-full float-left clear-both h-auto">

<form method="post" class="contact_form" id="contact_form" autocomplete="off">

<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>

<div class="empty_notice"><span>All Fields are Mandatory</span></div>

<div class="first w-full float-left">

<ul class="list-none">

<li class="w-full mb-[30px] float-left">
<input id="name" type="text" placeholder="Username" name="username">
</li>

<li class="w-full mb-[30px] float-left">
<input id="email" type="email" placeholder="Email" name="useremail">
</li>

<li class="w-full mb-[30px] float-left">
<input id="password" type="password" placeholder="Your Password Here" name="userpassword">
</li>


</ul>

</div>

<div class="tokyo_tm_button">
<button type="submit" name="login" class="tokyo_tm_button form-control btn btn-outline-info">Login</button>
</div>

</form>
</div>
</div>
</div>
</div>

</div>
</div>


<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="modules/ui/assets/js/jquery.js"></script>
<script src="modules/ui/assets/js/plugins.js"></script>
<script src="modules/ui/assets/js/init.js"></script>

</body>
</html>
<!-- section for website design ends here -->



<?php 

$username = $_POST['username'];
$email = $_POST['useremail'];
$userpassword = $_POST['userpassword'];

$matchCredentials = mysqli_query($config,"SELECT * FROM login WHERE username='$username' AND email='$email' AND password='$userpassword'");

if(mysqli_num_rows($matchCredentials)>0)
{
	session_start();
	$_SESSION['loggedinUser'] = $email;

	echo "<script>alert('Login Successful')</script>";
	
	header('location:https://akriti.online/dashboard.php');
}

?>