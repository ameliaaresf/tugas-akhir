<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <style>
      body{ font-family: Roboto; font-size: 14px; line-height: 1.5;}
h1 { font-size: 28px; text-align: center; margin-top: 50px; margin-bottom: 30px;}
.menu-parent { background: #323232; color: #ffffff; text-align: left;}
.menu-parent.style1 { background: #1e7cdc;}
.menu-parent.style2 { background: #f77528;}
.menu-parent.style3 { background: #50bd0b;}
.menu-parent * { margin: 0; padding: 0;}
.menu-parent li { list-style: none;}
.menu-parent ul ul { display: none;}
.menu-parent li.active>ul { display: block;}
.menu-parent > ul > li > a { position: relative; display: block; background: #003040; background: linear-gradient(#003040, #002535); padding: 0 30px; font-size: 16px; line-height: 4; color: #ffffff; text-decoration: none;}
.menu-parent > ul > li > a .fa { margin-right: 8px;}
.menu-parent ul ul li a { color: #ffffff; text-decoration: none; font-size: 16px; line-height: 4; display: block; padding: 0 30px; position: relative;}
.menu-parent ul ul li a:hover { background: #003545;}
.menu-parent ul ul ul { background: rgba(0,0,0,.1); padding: 0;}
.menu-parent a:not(:only-child):after { position: absolute; right: 20px; content: "\f067"; top: -6px; font-size: 20px; font-family: FontAwesome;}
.menu-parent .active>a:not(:only-child):after { content: "\f068"; top: -6px; font-size: 20px; font-family: FontAwesome;}
        
        input[type="radio"] + label span {
    transition: background .2s,
      transform .2s;
}

input[type="radio"] + label span:hover,
input[type="radio"] + label:hover span{
  transform: scale(1.2);
} 

input[type="radio"]:checked + label span {
  background-color: #3490DC; //bg-blue
  box-shadow: 0px 0px 0px 2px white inset;
}

input[type="radio"]:checked + label{
   color: #3490DC; //text-blue
}


    </style>
</head>