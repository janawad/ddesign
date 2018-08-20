<?php 
	include("header.php");
	require "../admin/clasess/home.class.php";
	$homeObj = new home();
	
	if($_REQUEST['id']>0){
		$package_detail = $homeObj->getpackageById($_REQUEST['id']);
		extract($package_detail);
	}
 ?>




<style class="cp-pen-styles">@-moz-keyframes quick_cart_pay_show {
  0% {
    -webkit-transform: rotate(70deg);
    -ms-transform: rotate(70deg);
    transform: rotate(70deg);
    right: -100px;
  }
  50% {
    -webkit-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    transform: rotate(-20deg);
    right: 20px;
  }
  100% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    transform: rotate(0deg);
    right: 0;
  }
}
@-webkit-keyframes quick_cart_pay_show {
  0% {
    -webkit-transform: rotate(70deg);
    transform: rotate(70deg);
    right: -100px;
  }
  50% {
    -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    right: 20px;
  }
  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    right: 0;
  }
}
@keyframes quick_cart_pay_show {
  0% {
    -webkit-transform: rotate(70deg);
    transform: rotate(70deg);
    right: -100px;
  }
  50% {
    -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    right: 20px;
  }
  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
    right: 0;
  }
}
@-webkit-keyframes quick_cart_pay_hide {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(200px);
    transform: translateX(200px);
  }
}
@keyframes quick_cart_pay_hide {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(200px);
    transform: translateX(200px);
  }
}
@keyframes fadeDown {
  0% {
    -webkit-transform: rotate(0deg) translateY(0px);
    transform: rotate(0deg) translateY(0px);
    opacity: 1;
  }
  100% {
    -webkit-transform: rotate(5deg) translateY(5px);
    transform: rotate(5deg) translateY(5px);
    opacity: 0;
  }
}
@-webkit-keyframes fadeDown {
  0% {
    -webkit-transform: rotate(0deg) translateY(0px);
    transform: rotate(0deg) translateY(0px);
    opacity: 1;
  }
  100% {
    -webkit-transform: rotate(5deg) translateY(5px);
    transform: rotate(5deg) translateY(5px);
    opacity: 0;
  }
}
@keyframes fadeUp {
  0% {
    -webkit-transform: rotate(5deg) translateY(5px);
    transform: rotate(5deg) translateY(5px);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotate(0deg) translateY(0px);
    transform: rotate(0deg) translateY(0px);
    opacity: 1;
  }
}
@-webkit-keyframes fadeUp {
  0% {
    -webkit-transform: rotate(5deg) translateY(5px);
    transform: rotate(5deg) translateY(5px);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotate(0deg) translateY(0px);
    transform: rotate(0deg) translateY(0px);
    opacity: 1;
  }
}
.fadeDown {
  opacity: 0;
  position: relative;
  -webkit-animation: fadeDown 400ms ease-in-out;
  animation: fadeDown 400ms ease-in-out;
}

.fadeUp {
  opacity: 1 !important;
  position: relative;
  -webkit-animation: fadeUp 400ms ease-in-out;
  animation: fadeUp 400ms ease-in-out;
}

.animateOut {
  position: absolute !important;
  top: 0;
  left: 0;
  -webkit-animation: quick_cart_pay_hide 200ms ease-in forwards;
  animation: quick_cart_pay_hide 200ms ease-in forwards;
}

.quick-cart-product .hide {
  opacity: 0;
}

#quick-cart {
  bottom: 20px;
  padding-bottom: 60px;
  position: fixed;
  right: 10px;
  top: auto !important;
  z-index: 1000;
}

#quick-cart-pay {
  font-size: 100%;
  line-height: 123.07692%;
  font-family: "robotobold", sans-serif;
  border-radius: 50%;
  -webkit-transform: rotate(70deg);
  -ms-transform: rotate(70deg);
  transform: rotate(70deg);
  border: 2px solid #086fcf;
  bottom: 0;
  cursor: pointer;
  display: block;
  position: absolute;
  text-decoration: none;
  right: -100px;
}

#quick-cart-pay > span {
  border-radius: 50%;
  transition: all 0.3s ease-in-out;
  background-color: #086fcf;
  border: 2px solid #fff;
  color: #fff;
  display: block;
  height: 56px;
  padding-top: 15px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  width: 56px;
}

#quick-cart-pay.open {
  -webkit-animation: quick_cart_pay_show 1s ease-in-out forwards;
  animation: quick_cart_pay_show 1s ease-in-out forwards;
}

#quick-cart-pay.cart-ico strong {
  display: none;
}

#quick-cart-pay.cart-ico > span {
  background: #086fcf url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE5cHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDE5IDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02ODYuMDAwMDAwLCAtNDUwLjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NjAuMDAwMDAwLCAxNjUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAwMDAwMCwgMjY5LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjAwMDAwMCwgMTYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNi43NjU0Nzg0LDQuMjc1IEwxNS44NzU4NzQ5LDguNTkzMzYwNzEgTDQuNjk5ODQwNTksOS43MjQwOTgyMSBMMy40NzM5MDMwNCw0LjI3NSBMMTYuNzY1NDc4NCw0LjI3NSBaIE0xNi44MDQ1NDYzLDkuNzI4MDY3ODYgTDE4LjY3MzcyNTEsMy4wNTM1NzE0MyBMMy4xOTkxNTIwNywzLjA1MzU3MTQzIEwyLjUxMjI3NDYzLDAgTDMuMjYzMDc1NzJlLTA1LDAgTDMuMjYzMDc1NzJlLTA1LDEuMjIxNDI4NTcgTDEuNDUzMDgwMjUsMS4yMjE0Mjg1NyBMNC4wNjM1NDA4MywxMi44MjUgTDE2Ljk2ODAyNjQsMTIuODI1IEwxNi45NjgwMjY0LDExLjYwMzU3MTQgTDUuMTIyNzM1MjEsMTEuNjAzNTcxNCBMNC45NzAwMjMyNiwxMC45MjUzNzMyIEwxNi44MDQ1NDYzLDkuNzI4MDY3ODYgWiI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNy44MzEzODE3MywxNS4yNjc4NTcxIEM3LjgzMTM4MTczLDE2LjI3OTgxMDcgNi45NTQ5MTk1OSwxNy4xIDUuODczNTM2MywxNy4xIEM0Ljc5MjE1MzAxLDE3LjEgMy45MTU2OTA4NywxNi4yNzk4MTA3IDMuOTE1NjkwODcsMTUuMjY3ODU3MSBDMy45MTU2OTA4NywxNC4yNTU5MDM2IDQuNzkyMTUzMDEsMTMuNDM1NzE0MyA1Ljg3MzUzNjMsMTMuNDM1NzE0MyBDNi45NTQ5MTk1OSwxMy40MzU3MTQzIDcuODMxMzgxNzMsMTQuMjU1OTAzNiA3LjgzMTM4MTczLDE1LjI2Nzg1NzEiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1LjY2Mjc2MzUsMTUuMjY3ODU3MSBDMTUuNjYyNzYzNSwxNi4yNzk4MTA3IDE0Ljc4NjMwMTMsMTcuMSAxMy43MDQ5MTgsMTcuMSBDMTIuNjIzNTM0NywxNy4xIDExLjc0NzA3MjYsMTYuMjc5ODEwNyAxMS43NDcwNzI2LDE1LjI2Nzg1NzEgQzExLjc0NzA3MjYsMTQuMjU1OTAzNiAxMi42MjM1MzQ3LDEzLjQzNTcxNDMgMTMuNzA0OTE4LDEzLjQzNTcxNDMgQzE0Ljc4NjMwMTMsMTMuNDM1NzE0MyAxNS42NjI3NjM1LDE0LjI1NTkwMzYgMTUuNjYyNzYzNSwxNS4yNjc4NTcxIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=") no-repeat center 9px;
}

#quick-cart-pay:hover {
  border-color: #303030;
}

#quick-cart-pay:hover > span {
  background-color: #303030;
}

#quick-cart-pay #quick-cart-price {
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  font-family: "robotobold", sans-serif;
  border-radius: 11px;
  background-color: #16161a;
  bottom: -4px;
  display: block;
  height: 21px;
  left: 50%;
  padding: 2px 8px 0;
  position: absolute;
}

#quick-cart-pay #quick-cart-pay-total-count {
  display: none;
}

.quick-cart-product {
  margin-bottom: 6px;
}

.quick-cart-product > div,
#quick-cart-pay {
  box-shadow: rgba(0, 0, 0, 0.23) 0 6px 13px 0;
}

.quick-cart-animated-product > div {
  box-shadow: transparent 0 6px 13px 0;
}

.quick-cart-product {
  position: relative;
}

.quick-cart-product > div {
  transition: all 1s ease-in-out 0s;
  overflow: hidden;
  position: relative;
}

.quick-cart-product > div .s1,
.quick-cart-product > div .s2 {
  font-family: "robotobold", sans-serif;
  font-size: 100%;
  line-height: 107.69231%;
  background-color: rgba(22, 22, 26, 0.5);
  bottom: 0;
  color: #fff;
  cursor: default;
  display: none;
  height: 100%;
  left: 0;
  padding-top: 23px;
  position: absolute;
  text-align: center;
  top: 0;
  width: 100%;
}

.quick-cart-product > div del {
  display: none;
}

#quick-cart .quick-cart-product > div,
.quick-cart-product.run > div {
  border-radius: 50%;
  height: 60px !important;
  width: 60px !important;
}

#quick-cart .quick-cart-product > div .s1,
.quick-cart-product.run > div .s1 {
  display: block;
}

#quick-cart .quick-cart-product > div img,
.quick-cart-product.run > div img {
  width: 100%;
}

#quick-cart .quick-cart-product > div:hover span.s1,
.quick-cart-product.run > div:hover span.s1 {
  display: none;
}

#quick-cart .quick-cart-product > div:hover span.s2,
.quick-cart-product.run > div:hover span.s2 {
  display: block;
}

.quick-cart-product.run > div {
  border-radius: 50%;
  height: 58px !important;
  width: 58px !important;
}

#quick-cart .quick-cart-product > div .s1,
#quick-cart .quick-cart-product > div .s2 {
  border-radius: 50%;
}

.quick-cart-product.animated {
  left: 0;
  position: absolute;
  top: 0;
  z-index: 2000;
}

.quick-cart-product.animated img {
  border-radius: 1px;
  display: block;
  position: relative;
}

.quick-cart-product .remove,
.quick-cart-product .removeall:before,
.quick-cart-product .count {
  border-radius: 10px;
  font-family: "robotobold", sans-serif;
  font-size: 76.92308%;
  line-height: 110.0%;
  background-color: #16161a;
  color: #fff;
  display: block;
  height: 20px;
  overflow: hidden;
  padding-top: 4px;
  position: absolute;
  right: 0;
  top: 0;
  text-align: center;
  width: 20px;
  z-index: 10;
}

.quick-cart-product .removeall {
  width: 20px;
  height: 20px;
  content: "Delete all";
}

.quick-cart-product .removeall:before {
  content: "Delete all";
}

.quick-cart-product .removeall:before {
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  display: none;
  left: -62px;
  padding: 4px 7px 0;
  right: auto;
  width: auto;
  height: 16px;
}

.quick-cart-product .removeall:hover {
  background-color: #086fcf;
}

.quick-cart-product.show-remove-all:hover .removeall:before {
  display: block;
}

.quick-cart-product .remove {
  background: #16161a url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjhweCIgaGVpZ2h0PSI4cHgiIHZpZXdCb3g9IjAgMCA4IDgiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPgogICAgPGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyMTYuMDAwMDAwLCAtMTg5MS4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIj4KICAgICAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTE0OC4wMDAwMDAsIDE4ODUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Mi4wMDAwMDAsIDAuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTcuMTQyNjgzOTcsNiBMNiw3LjE0MjY4Mzk3IEw4Ljg1NzExNCw5Ljk5OTc5Nzk3IEw2LDEyLjg1NzMxNiBMNy4xNDI2ODM5NywxNCBMOS45OTk3OTc5NywxMS4xNDI4ODYgTDEyLjg1NzMxNiwxNCBMMTQsMTIuODU3MzE2IEwxMS4xNDI0ODE5LDkuOTk5Nzk3OTcgTDE0LDcuMTQyNjgzOTcgTDEyLjg1NzMxNiw2IEw5Ljk5OTc5Nzk3LDguODU3MTE0IEw3LjE0MjY4Mzk3LDYgTDcuMTQyNjgzOTcsNiBaIj48L3BhdGg+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==") no-repeat center center;
  cursor: pointer;
  display: none;
  left: 0;
  right: auto;
}

.quick-cart-product .remove:hover {
  background-color: #086fcf;
}

.quick-cart-product:hover .remove {
  display: block;
}

.quick-cart-product.remove-product {
  -webkit-animation: quick_cart_pay_hide 200ms ease-in-out forwards;
  animation: quick_cart_pay_hide 200ms ease-in-out forwards;
}

.cubic-btn {
  width: 10px;
  height: 10px;
  position: absolute;
}

.quick-cart-product-wrap {
  position: relative;
}

.img.animate {
  transition: all 0ms ease-out 0s;
  -webkit-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  opacity: 0;
}

.img {
  transition: all 600ms ease-out 0s;
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  border-radius: 1px;
  background: transparent no-repeat center center;
  background-size: cover;
  border: 1px solid #e2e2e3;
  display: block;
  height: 0;
  opacity: 1;
}

header ._cont,
.collection .settings,
.collection-list a .variants,
.product-detail .price-shipping,
.product-detail .btn-and-quantity-wrap,
.product-detail .btn-and-quantity,
.spinner,
.tabs .tab-labels,
.detail-socials,
.detail-socials .social-sharing,
.homepage .main-services ol,
.homepage .main-text .links,
.socials ul,
.cart .cart-products .product,
.cart .cart-products .p-count-price,
.cart .inputs,
footer .top,
footer .bottom,
footer .bottom .left nav ul,
.swatches,
.swatch {
  display: block;
}

header ._cont:after,
.collection .settings:after,
.collection-list a .variants:after,
.product-detail .price-shipping:after,
.product-detail .btn-and-quantity-wrap:after,
.product-detail .btn-and-quantity:after,
.spinner:after,
.tabs .tab-labels:after,
.detail-socials:after,
.detail-socials .social-sharing:after,
.homepage .main-services ol:after,
.homepage .main-text .links:after,
.socials ul:after,
.cart .cart-products .product:after,
.cart .cart-products .p-count-price:after,
.cart .inputs:after,
footer .top:after,
footer .bottom:after,
footer .bottom .left nav ul:after,
.swatches:after,
.swatch:after {
  clear: both;
  content: "";
  display: block;
  visibility: hidden;
  height: 0;
}

/*@font-face {
    font-family: 'montserratlight';
    src: url("montserrat-light-webfont.eot");
    src: url("montserrat-light-webfont.eot?#iefix") format("embedded-opentype"), url("montserrat-light-webfont.woff") format("woff"), url("montserrat-light-webfont.ttf") format("truetype");
    font-weight: normal;
    font-style: normal
}
@font-face {
    font-family: 'montserratregular';
    src: url("montserrat-regular-webfont.eot");
    src: url("montserrat-regular-webfont.eot?#iefix") format("embedded-opentype"), url("montserrat-regular-webfont.woff") format("woff"), url("montserrat-regular-webfont.ttf") format("truetype");
    font-weight: normal;
    font-style: normal
}
@font-face {
    font-family: 'montserratbold';
    src: url("montserrat-bold-webfont.eot");
    src: url("montserrat-bold-webfont.eot?#iefix") format("embedded-opentype"), url("montserrat-bold-webfont.woff") format("woff"), url("montserrat-bold-webfont.ttf") format("truetype");
    font-weight: normal;
    font-style: normal
}
@font-face {
    font-family: 'robotolight';
    src: url("roboto-light-webfont.eot");
    src: url("roboto-light-webfont.eot?#iefix") format("embedded-opentype"), url("roboto-light-webfont.woff") format("woff"), url("roboto-light-webfont.ttf") format("truetype");
    font-weight: normal;
    font-style: normal
}
@font-face {
    font-family: 'robotoregular';
    src: url("roboto-regular-webfont.eot");
    src: url("roboto-regular-webfont.eot?#iefix") format("embedded-opentype"), url("roboto-regular-webfont.woff") format("woff"), url("roboto-regular-webfont.ttf") format("truetype");
    font-weight: normal;
    font-style: normal
}
@font-face {
    font-family: 'robotobold';
    src: url("roboto-bold-webfont.eot");
    src: url("roboto-bold-webfont.eot?#iefix") format("embedded-opentype"), url("roboto-bold-webfont.woff") format("woff"), url("roboto-bold-webfont.ttf") format("truetype");
    font-weight: normal;
    font-style: normal
}
@font-face {
    font-family: 'robotoblack';
    src: url("roboto-black-webfont.eot");
    src: url("roboto-black-webfont.eot?#iefix") format("embedded-opentype"), url("roboto-black-webfont.woff") format("woff"), url("roboto-black-webfont.ttf") format("truetype");
    font-weight: normal;
    font-style: normal
}*/
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol,
ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption,
th,
td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q,
blockquote {
  quotes: none;
}

q:before,
q:after,
blockquote:before,
blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  outline: 0 none;
}

body {
  background-color: #fff;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

img {
  max-width: 100%;
}

img.float-left {
  float: left;
  margin: 0 20px 10px 0;
}

img.float-right {
  float: right;
  margin: 0 0 10px 20px;
}

a {
  color: inherit;
  text-decoration: inherit;
  cursor: inherit;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}

a:active,
a:focus {
  outline: none;
}

em {
  font-style: oblique;
}

u {
  text-decoration: underline;
}

del {
  text-decoration: line-through;
}

sup,
sub {
  font-size: smaller;
  line-height: normal;
}

sup {
  vertical-align: super;
}

sub {
  vertical-align: sub;
}

button {
  cursor: pointer;
}

input,
textarea {
  outline: 0 none;
}

textarea {
  resize: none;
}

div.grid_info {
  background-color: #fff;
  bottom: 0;
  color: #16161a;
  display: block;
  left: 0;
  padding: 15px;
  position: fixed;
  top: auto !important;
  z-index: 99999;
}

body {
  font-family: "montserratlight", sans-serif;
  background-color: #fff;
  color: #16161a;
  font-size: 81.25%;
  line-height: 184.61538%;
  overflow-x: hidden;
  position: relative;
}

._cont {
  margin: 0 auto;
  width: 1110px;
}

._cont2 {
  margin: 0 auto;
  width: 700px;
}

header nav > ul > li > a:before,
header nav > ul > li > a:after,
.sorter .sorter-value:before,
.sorter .sorter-value:after {
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjEwcHgiIGhlaWdodD0iNHB4IiB2aWV3Qm94PSIwIDAgMTAgNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQ3LjAwMDAwMCwgLTU2NS4wMDAwMDApIiBzdHJva2U9IiMxNjE2MWEiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMDAuMDAwMDAwLCAzNDAuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5LjAwMDAwMCwgMjE4LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgIDxnPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMzksNyBMNDMsMTEgTDQ3LDciIGlkPSJQYXRoLTY3LUNvcHkiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==") no-repeat center center;
}

header nav > ul > li > a:before,
.sorter .sorter-value:before {
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjEwcHgiIGhlaWdodD0iNHB4IiB2aWV3Qm94PSIwIDAgMTAgNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQ3LjAwMDAwMCwgLTU2NS4wMDAwMDApIiBzdHJva2U9IiMwODZmY2YiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMDAuMDAwMDAwLCAzNDAuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5LjAwMDAwMCwgMjE4LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgIDxnPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMzksNyBMNDMsMTEgTDQ3LDciIGlkPSJQYXRoLTY3LUNvcHkiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==") no-repeat center center;
}

header nav > ul > li ul a:after {
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IlZyc3R2YV8xIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyINCgkgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI3cHgiIGhlaWdodD0iOHB4Ig0KCSB2aWV3Qm94PSIzIC0yIDcgOCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAzIC0yIDcgOCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQ3LjAwMDAwMCwgLTU2NS4wMDAwMDApIj4NCgkJPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAwLjAwMDAwMCwgMzQwLjAwMDAwMCkiPg0KCQkJPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOS4wMDAwMDAsIDIxOC4wMDAwMDApIj4NCgkJCQk8Zz4NCgkJCQkJPHBhdGggaWQ9IlBhdGgtNjctQ29weSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRkZGRkZGIiBkPSJNNDEsMTNsNC00bC00LTQiLz4NCgkJCQk8L2c+DQoJCQk8L2c+DQoJCTwvZz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==") no-repeat center center;
}

header {
  font-size: 100%;
  line-height: 130.76923%;
  position: relative;
  z-index: 1000;
}

header .header {
  -moz-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  -webkit-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  height: 74px;
}

header .logo {
  font-family: "montserratbold", sans-serif;
  font-size: 107.69231%;
  line-height: 128.57143%;
  display: block;
  float: left;
  margin-top: 30px;
  letter-spacing: 4px;
  position: relative;
  text-transform: uppercase;
  z-index: 100;
}

header nav {
  font-family: "montserratregular", sans-serif;
  left: 0;
  position: absolute;
  text-align: center;
  text-transform: uppercase;
  top: 31px;
  width: 100%;
  z-index: 1;
}

header nav > ul > li {
  display: inline-block;
  margin-right: 19px;
}

header nav > ul > li:last-child {
  margin-right: 0;
}

header nav > ul > li:last-child.categories-open ul:after {
  left: 55%;
}

header nav > ul > li > a {
  padding: 0 14px 20px 0;
  position: relative;
}

header nav > ul > li > a:before,
header nav > ul > li > a:after {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  content: "";
  height: 10px;
  margin-top: -15px;
  opacity: 1;
  position: absolute;
  right: 0;
  top: 50%;
  width: 10px;
}

header nav > ul > li > a:before {
  opacity: 0;
}

header nav > ul > li > a:hover {
  color: #086fcf;
}

header nav > ul > li > a:hover:before {
  opacity: 1;
}

header nav > ul > li > a:hover:after {
  opacity: 0;
}

header nav > ul > li ul {
  -moz-column-count: 2;
  -webkit-column-count: 2;
  column-count: 2;
  -moz-column-gap: 50px;
  -webkit-column-gap: 50px;
  column-gap: 50px;
  font-family: "montserratlight", sans-serif;
  font-size: 107.69231%;
  line-height: 121.42857%;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  background-color: rgba(13, 13, 26, 0.93);
  display: none;
  left: 50%;
  margin-left: -331px;
  padding: 13px 26px 20px;
  position: absolute;
  text-align: left;
  text-transform: none;
  top: 28px;
  width: 662px;
  z-index: 1000;
}

header nav > ul > li ul:after {
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjEycHgiIGhlaWdodD0iN3B4IiB2aWV3Qm94PSIwIDAgMTIgNyIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTE3NS4wMDAwMDAsIC0xMzAzLjAwMDAwMCkiIGZpbGw9IiMwQzBDMTkiIG9wYWNpdHk9IjAuOTM5OTk5OTk4Ij4KICAgICAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMuMDAwMDAwLCAxMjQ2LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPHBhdGggZD0iTTExNzgsNjMuNDg1MjgxNCBMMTE4My42NTY4NSw1Ny44Mjg0MjcxIEwxMTg5LjMxMzcxLDYzLjQ4NTI4MTQgTDExNzgsNjMuNDg1MjgxNCBaIiBpZD0iU2lwa2EtbWVudSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=") no-repeat left top;
  content: "";
  display: none;
  height: 7px;
  left: 44%;
  left: 43.5%;
  position: absolute;
  top: -6px;
  width: 14px;
}

header nav > ul > li ul li {
  border-bottom: 1px solid #2e2e38;
}

header nav > ul > li ul a {
  color: #fff;
  display: block;
  opacity: 1;
  padding: 10px 20px 11px 0;
  position: relative;
}

header nav > ul > li ul a:after {
  content: "";
  display: block;
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  width: 7px;
}

header nav > ul > li ul a:hover {
  opacity: 0.65;
}

header nav > ul > li.categories-open > a:after,
header nav > ul > li.categories-open > a:before {
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

header nav > ul > li.categories-open > a:hover:after,
header nav > ul > li.categories-open > a:hover:before {
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

header nav > ul > li.categories-open ul {
  display: block;
}

header nav > ul > li.categories-open ul:after {
  display: block;
}

header form {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 19px;
  -webkit-border-radius: 19px;
  border-radius: 19px;
  border: 1px solid #fff;
  float: right;
  margin-top: 19px;
  overflow: hidden;
  position: relative;
  z-index: 100;
}

header form .find-input {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-family: "montserratlight", sans-serif;
  font-size: 100%;
  line-height: 130.76923%;
  color: #16161a;
  border: 0 none;
  margin-right: 0;
  overflow: hidden;
  padding: 10px 0;
  width: 0;
}

header form button {
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE0cHgiIGhlaWdodD0iMTE0cHgiIHZpZXdCb3g9IjAgMCAxNCAxMTQiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPgogICAgPGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTQ5NC4wMDAwMDAsIC0xMjk3LjAwMDAwMCkiIGZpbGw9IiMxNjE2MTkiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMy4wMDAwMDAsIDEyNDYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNTA1Ljc1MDA0NCw1MSBDNTAyLjg1MDczMSw1MSA1MDAuNSw1My4zNTA2NDM3IDUwMC41LDU2LjI0OTk1NjMgQzUwMC41LDU3LjQ2Mjk2ODggNTAwLjkxNTMxOSw1OC41NzY3NTYzIDUwMS42MDY2MTIsNTkuNDY1NDA2MyBMNDk3LjE5MjMyNSw2My44Nzk3Mzc1IEM0OTcuMDY0MTM4LDY0LjAwNzkyNSA0OTcsNjQuMTc1MzU2MiA0OTcsNjQuMzQzNzA2MyBDNDk3LDY0LjUxMTY2MjUgNDk3LjA2NDEzOCw2NC42Nzk1MzEzIDQ5Ny4xOTIzMjUsNjQuODA3NzE4OCBDNDk3LjMyMDQ2OSw2NC45MzU5MDYyIDQ5Ny40ODgzODEsNjUgNDk3LjY1NjI5NCw2NSBDNDk3LjgyNDE2Miw2NSA0OTcuOTkyMDc1LDY0LjkzNTkwNjIgNDk4LjEyMDI2Myw2NC44MDc3MTg4IEw1MDIuNTM0NTUsNjAuMzkzNDMxMiBDNTAzLjQyMzI0NCw2MS4wODQ3MjUgNTA0LjUzNzAzMSw2MS40OTk5NTYzIDUwNS43NTAwNDQsNjEuNDk5OTU2MyBDNTA4LjY0OTMxMiw2MS40OTk5NTYzIDUxMS4wMDAwNDQsNTkuMTQ5MjY4NyA1MTEuMDAwMDQ0LDU2LjI0OTk1NjMgQzUxMS4wMDAwNDQsNTMuMzUwNjQzNyA1MDguNjQ5MzEyLDUxIDUwNS43NTAwNDQsNTEgTDUwNS43NTAwNDQsNTEgWiBNNTA1Ljc1MDA0NCw2MC4xODc1IEM1MDMuNTc4NzMxLDYwLjE4NzUgNTAxLjgxMjU0NCw1OC40MjEyMjUgNTAxLjgxMjU0NCw1Ni4yNDk5NTYzIEM1MDEuODEyNTQ0LDU0LjA3ODY4NzUgNTAzLjU3ODczMSw1Mi4zMTI0NTYzIDUwNS43NTAwNDQsNTIuMzEyNDU2MyBDNTA3LjkyMTI2OSw1Mi4zMTI0NTYzIDUwOS42ODc1LDU0LjA3ODY4NzUgNTA5LjY4NzUsNTYuMjQ5OTU2MyBDNTA5LjY4NzUsNTguNDIxMjI1IDUwNy45MjEyNjksNjAuMTg3NSA1MDUuNzUwMDQ0LDYwLjE4NzUgTDUwNS43NTAwNDQsNjAuMTg3NSBaIj48L3BhdGg+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLDEwMCkiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC00OTQuMDAwMDAwLCAtMTI5Ny4wMDAwMDApIiBmaWxsPSIjMDg2ZmNmIj4KICAgICAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMuMDAwMDAwLCAxMjQ2LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPHBhdGggZD0iTTUwNS43NTAwNDQsNTEgQzUwMi44NTA3MzEsNTEgNTAwLjUsNTMuMzUwNjQzNyA1MDAuNSw1Ni4yNDk5NTYzIEM1MDAuNSw1Ny40NjI5Njg4IDUwMC45MTUzMTksNTguNTc2NzU2MyA1MDEuNjA2NjEyLDU5LjQ2NTQwNjMgTDQ5Ny4xOTIzMjUsNjMuODc5NzM3NSBDNDk3LjA2NDEzOCw2NC4wMDc5MjUgNDk3LDY0LjE3NTM1NjIgNDk3LDY0LjM0MzcwNjMgQzQ5Nyw2NC41MTE2NjI1IDQ5Ny4wNjQxMzgsNjQuNjc5NTMxMyA0OTcuMTkyMzI1LDY0LjgwNzcxODggQzQ5Ny4zMjA0NjksNjQuOTM1OTA2MiA0OTcuNDg4MzgxLDY1IDQ5Ny42NTYyOTQsNjUgQzQ5Ny44MjQxNjIsNjUgNDk3Ljk5MjA3NSw2NC45MzU5MDYyIDQ5OC4xMjAyNjMsNjQuODA3NzE4OCBMNTAyLjUzNDU1LDYwLjM5MzQzMTIgQzUwMy40MjMyNDQsNjEuMDg0NzI1IDUwNC41MzcwMzEsNjEuNDk5OTU2MyA1MDUuNzUwMDQ0LDYxLjQ5OTk1NjMgQzUwOC42NDkzMTIsNjEuNDk5OTU2MyA1MTEuMDAwMDQ0LDU5LjE0OTI2ODcgNTExLjAwMDA0NCw1Ni4yNDk5NTYzIEM1MTEuMDAwMDQ0LDUzLjM1MDY0MzcgNTA4LjY0OTMxMiw1MSA1MDUuNzUwMDQ0LDUxIEw1MDUuNzUwMDQ0LDUxIFogTTUwNS43NTAwNDQsNjAuMTg3NSBDNTAzLjU3ODczMSw2MC4xODc1IDUwMS44MTI1NDQsNTguNDIxMjI1IDUwMS44MTI1NDQsNTYuMjQ5OTU2MyBDNTAxLjgxMjU0NCw1NC4wNzg2ODc1IDUwMy41Nzg3MzEsNTIuMzEyNDU2MyA1MDUuNzUwMDQ0LDUyLjMxMjQ1NjMgQzUwNy45MjEyNjksNTIuMzEyNDU2MyA1MDkuNjg3NSw1NC4wNzg2ODc1IDUwOS42ODc1LDU2LjI0OTk1NjMgQzUwOS42ODc1LDU4LjQyMTIyNSA1MDcuOTIxMjY5LDYwLjE4NzUgNTA1Ljc1MDA0NCw2MC4xODc1IEw1MDUuNzUwMDQ0LDYwLjE4NzUgWiI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=") no-repeat left top;
  border: 0 none;
  height: 14px;
  margin-right: 15px;
  position: relative;
  overflow: hidden;
  top: 1px;
  text-indent: -1000px;
  width: 14px;
}

header form button:hover {
  background-position: left bottom;
}

header form.open {
  border-color: #d2d4d6;
}

header form.open input {
  padding: 10px 15px;
  width: 157px;
}

header #customer_login_link {
  display: inline-block;
  float: right;
  margin: 30px 26px 0 0;
  position: relative;
  z-index: 100;
}

header #customer_login_link:hover {
  color: #086fcf;
}

header #nav-icon {
  display: none;
}

.breadcrumb {
  margin-top: 15px;
}

.breadcrumb li {
  display: inline-block;
}

.breadcrumb a {
  color: #b5b6bd;
  display: inline-block;
  margin-right: 5px;
  padding-right: 14px;
  position: relative;
}

.breadcrumb a:hover {
  color: #086fcf;
}

.breadcrumb a:after {
  color: #b5b6bd;
  content: ">";
  position: absolute;
  right: 0;
}

.text {
  margin: 0 auto;
  padding: 90px 0 165px;
  width: 700px;
}

.text h1 {
  font-family: "montserratbold", sans-serif;
  font-size: 369.23077%;
  line-height: 125%;
  margin-bottom: 60px;
}

.text h2 {
  font-family: "montserratregular", sans-serif;
  font-size: 184.61538%;
  line-height: 133.33333%;
  margin: 55px 0 17px;
}

.text p {
  font-size: 138.46154%;
  line-height: 177.77778%;
  margin: 17px 0 28px;
}

.text strong {
  font-family: "montserratbold", sans-serif;
}

.text em {
  font-style: italic;
}

.text *:last-child {
  margin-bottom: 0;
}

.text ul {
  font-size: 115.38462%;
  line-height: 173.33333%;
  margin: 17px 0 28px 40px;
}

.text ul li {
  list-style-type: disc;
  padding: 7px 0 7px 7px;
}

.text ol {
  font-size: 115.38462%;
  line-height: 173.33333%;
  margin: 17px 0 28px 40px;
}

.text ol li {
  list-style-type: decimal;
  padding: 7px 0 7px 7px;
}

.collection {
  padding-top: 15px;
}

.collection.search {
  padding-top: 0;
}

.collection h1 {
  font-family: "montserratbold", sans-serif;
  font-size: 369.23077%;
  line-height: 116.66667%;
  color: #086fcf;
  padding-bottom: 13px;
  text-align: center;
}

.collection .description {
  font-size: 107.69231%;
  line-height: 171.42857%;
  margin: 0 auto;
  max-width: 700px;
  padding-bottom: 13px;
  text-align: center;
}

.collection .head {
  -moz-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  -webkit-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  padding-bottom: 30px;
  position: relative;
  z-index: 100;
}

.collection .products {
  background-color: #f7f7fa;
  padding: 28px 0 110px;
}

.collection .settings {
  font-size: 107.69231%;
  line-height: 121.42857%;
  color: #b5b6bd;
  position: relative;
}

.collection .settings .sort {
  float: right;
}

.collection .settings .sort .sorter {
  margin-left: 5px;
}

.collection .settings .count {
  float: left;
}

.collection .no-products {
  font-size: 115.38462%;
  line-height: 120%;
  font-family: "montserratregular", sans-serif;
  padding-top: 70px;
  text-align: center;
}

.more-products {
  padding-top: 40px;
  text-align: center;
}

.more-products span {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-size: 107.69231%;
  line-height: 121.42857%;
  font-family: "montserratbold", sans-serif;
  -moz-border-radius: 26px;
  -webkit-border-radius: 26px;
  border-radius: 26px;
  -moz-box-shadow: rgba(17, 17, 18, 0.1) 0 2px 4px, rgba(19, 20, 20, 0.07) 0 1px 1px;
  -webkit-box-shadow: rgba(17, 17, 18, 0.1) 0 2px 4px, rgba(19, 20, 20, 0.07) 0 1px 1px;
  box-shadow: rgba(17, 17, 18, 0.1) 0 2px 4px, rgba(19, 20, 20, 0.07) 0 1px 1px;
  background-color: #086fcf;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  padding: 16px 26px;
}

.more-products span:hover {
  background-color: #0084ff;
}

.more-products.hidden {
  display: none;
}

.sorter {
  display: inline-block;
  position: relative;
}

.sorter:after {
  -moz-transition: opacity 0.3s ease-in-out 0s;
  -o-transition: opacity 0.3s ease-in-out 0s;
  -webkit-transition: opacity 0.3s ease-in-out;
  -webkit-transition-delay: 0s;
  transition: opacity 0.3s ease-in-out 0s;
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjEycHgiIGhlaWdodD0iN3B4IiB2aWV3Qm94PSIwIDAgMTIgNyIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTE3NS4wMDAwMDAsIC0xMzAzLjAwMDAwMCkiIGZpbGw9IiMwQzBDMTkiIG9wYWNpdHk9IjAuOTM5OTk5OTk4Ij4KICAgICAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMuMDAwMDAwLCAxMjQ2LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgPHBhdGggZD0iTTExNzgsNjMuNDg1MjgxNCBMMTE4My42NTY4NSw1Ny44Mjg0MjcxIEwxMTg5LjMxMzcxLDYzLjQ4NTI4MTQgTDExNzgsNjMuNDg1MjgxNCBaIiBpZD0iU2lwa2EtbWVudSI+PC9wYXRoPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=") no-repeat left top;
  content: "";
  display: block;
  height: 7px;
  opacity: 0;
  position: absolute;
  right: 38px;
  top: 20px;
  width: 12px;
}

.sorter .sorter-value {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-position: right 8px;
  color: #16161a;
  cursor: pointer;
  display: inline-block;
  padding-right: 14px;
  position: relative;
}

.sorter .sorter-value:before,
.sorter .sorter-value:after {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  content: "";
  height: 10px;
  margin-top: -5px;
  opacity: 1;
  position: absolute;
  right: 0;
  top: 50%;
  width: 10px;
}

.sorter .sorter-value:before {
  opacity: 0;
}

.sorter .sorter-value:hover {
  color: #086fcf;
}

.sorter .sorter-value:hover:before {
  opacity: 1;
}

.sorter .sorter-value:hover:after {
  opacity: 0;
}

.sorter .sorter-options {
  -moz-transition: opacity 0.3s ease-in-out 0s, max-height 0s ease-in-out 0.3s;
  -o-transition: opacity 0.3s ease-in-out 0s, max-height 0s ease-in-out 0.3s;
  -webkit-transition: opacity 0.3s ease-in-out, max-height 0s ease-in-out;
  -webkit-transition-delay: 0s, 0.3s;
  transition: opacity 0.3s ease-in-out 0s, max-height 0s ease-in-out 0.3s;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  background-color: rgba(13, 13, 26, 0.93);
  color: #fff;
  max-height: 0;
  opacity: 0;
  overflow: hidden;
  padding: 0 12px;
  position: absolute;
  right: 0;
  top: 26px;
  z-index: 100;
}

.sorter .sorter-options > div {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  border-bottom: 1px solid #2e2e38;
  cursor: pointer;
  padding: 11px 0;
  white-space: nowrap;
}

.sorter .sorter-options > div:first-child {
  padding-top: 12px;
}

.sorter .sorter-options > div:last-child {
  border-bottom: 0 none;
  padding-bottom: 14px;
}

.sorter .sorter-options > div:hover {
  opacity: 0.65;
}

.sorter .sorter-options > div.active {
  color: #5d5e66;
}

.sorter .sorter-options > div.active:hover {
  opacity: 1;
}

.sorter.open .sorter-value:before,
.sorter.open .sorter-value:after {
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -webkit-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

.sorter.open .sorter-options {
  -moz-transition: opacity 0.3s ease-in-out 0s, max-height 0s ease-in-out 0s;
  -o-transition: opacity 0.3s ease-in-out 0s, max-height 0s ease-in-out 0s;
  -webkit-transition: opacity 0.3s ease-in-out, max-height 0s ease-in-out;
  -webkit-transition-delay: 0s, 0s;
  transition: opacity 0.3s ease-in-out 0s, max-height 0s ease-in-out 0s;
  max-height: 1000px;
  opacity: 1;
}

.sorter.open:after {
  opacity: 0.93;
}

.collection-list {
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 18px;
}

.collection-list:after {
  content: " ";
  display: block;
  clear: both;
}

.collection-list.cols-4 a {
  width: 23.72881%;
  float: left;
  margin-right: 1.69492%;
}

.collection-list.cols-4 a:nth-child(4n) {
  float: right;
  margin-right: 0;
}

.collection-list.cols-4 a:nth-child(4n+1) {
  clear: both;
}

.collection-list.cols-3 a {
  width: 32.20339%;
  float: left;
  margin-right: 1.69492%;
}

.collection-list.cols-3 a:nth-child(3n) {
  float: right;
  margin-right: 0;
}

.collection-list.cols-3 a:nth-child(3n+1) {
  clear: both;
}

.collection-list.cols-2 a {
  width: 49.15254%;
  float: left;
  margin-right: 1.69492%;
}

.collection-list.cols-2 a:nth-child(2n) {
  float: right;
  margin-right: 0;
}

.collection-list.cols-2 a:nth-child(2n+1) {
  clear: both;
}

.collection-list a {
  font-size: 100%;
  line-height: 123.07692%;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  display: block;
  margin-bottom: 3.44828%;
  position: relative;
}

.collection-list a .img {
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  -webkit-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  background-color: rgba(64, 64, 82, 0.1) !important;
  border: 1px solid rgba(64, 64, 82, 0.1);
  display: block;
  height: 0;
  overflow: hidden;
  padding-bottom: 133%;
  position: relative;
}

.collection-list a .img .i {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background: transparent no-repeat center center;
  -moz-background-size: cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
  display: block;
  height: 100%;
  left: 0;
  opacity: 1;
  position: absolute;
  top: 0;
  width: 100%;
}

.collection-list a .img .second,
.collection-list a .img .hide {
  opacity: 0;
}

.collection-list a .img .show {
  opacity: 1;
}

.collection-list a .text {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  background-color: rgba(13, 13, 26, 0.93);
  bottom: -10px;
  color: #fff;
  display: block;
  left: 3%;
  max-width: 94%;
  padding: 6px 10px 3px;
  position: absolute;
}

.collection-list a .text strong {
  font-family: "robotoregular", sans-serif;
  display: block;
}

.collection-list a .text > span {
  font-family: "robotoblack", sans-serif;
  display: block;
  margin-bottom: 2px;
}

.collection-list a .text > span > span {
  font-family: "robotoregular", sans-serif;
  opacity: 0.5;
}

.collection-list a:hover > span {
  background-color: #0d0d1a;
}

.collection-list a:hover .variants {
  height: 27px;
}

.collection-list a .variants {
  -moz-transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53) 0s;
  -o-transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53) 0s;
  -webkit-transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53);
  -webkit-transition-delay: 0s;
  transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53) 0s;
  font-family: "robotoregular", sans-serif;
  height: 0;
  overflow: hidden;
}

.collection-list a .variants .variant {
  float: left;
  margin: 5px 0 2px;
  width: 50%;
}

.collection-list a .variants .variant:nth-child(even) {
  text-align: right;
}

.collection-list a .variants .var {
  display: inline-block;
}

.collection-list a .variants .var.color {
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  border: 1px solid #5d5e66;
  height: 16px;
  padding: 3px;
  width: 16px;
}

.collection-list a .variants .var.blue .c {
  background-color: #086fcf !important;
}

.collection-list a .variants .var.yellow .c {
  background-color: #f5c81f !important;
}

.collection-list a .variants .var.red .c {
  background-color: #d9332e !important;
}

.collection-list a .variants .var .c {
  height: 100%;
  width: 100%;
}

.collection-list a .variants .var:not(:last-child) .t:after {
  content: ", ";
}

.collection-list a.hidden {
  display: none;
}

.homepage-banners {
  background-color: #f7f7fa;
}

.homepage-banners a .text {
  display: inline-block;
  padding: 6px 10px;
  width: auto;
}

.homepage-banners a .text > strong {
  font-family: "robotoblack", sans-serif;
}

.homepage-banners a .text > span {
  font-family: "robotoregular", sans-serif;
  margin: 6px 0 0;
}

.homepage-banners a .img {
  padding-bottom: 45%;
}

.homepage-banners a .descr {
  -moz-transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53) 0s;
  -o-transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53) 0s;
  -webkit-transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53);
  -webkit-transition-delay: 0s;
  transition: all 200ms cubic-bezier(0.64, 0.57, 0.67, 1.53) 0s;
  font-family: "robotoregular", sans-serif;
  max-height: 0;
  max-width: 0;
  overflow: hidden;
}

.homepage-banners a .descr > span {
  display: block;
  padding-top: 5px;
}

.homepage-banners a:hover .descr {
  max-height: 100px;
  max-width: 600px;
}

.product-detail {
  padding-top: 15px;
}

.product-detail .shadow {
  -moz-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  -webkit-box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  box-shadow: rgba(17, 17, 18, 0.04) 0 2px 4px, rgba(19, 20, 20, 0.06) 0 1px 1px;
  margin-bottom: 2px;
}

.product-detail .cols {
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
  padding: 35px 0 58px;
}

.product-detail .cols:after {
  content: " ";
  display: block;
  clear: both;
}

.product-detail .left-col {
  width: 48.27586%;
  float: left;
  margin-right: 3.44828%;
  max-width: 100%;
  margin-left: auto;
  margin-right: auto;
}

.product-detail .left-col:after {
  content: " ";
  display: block;
  clear: both;
}

.product-detail .left-col .thumbs {
  width: 15.25424%;
  float: left;
  margin-right: 1.69492%;
}

.product-detail .left-col .thumbs a {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  border: 1px solid #e2e2e3;
  display: block;
  margin-bottom: 8px;
  position: relative;
  width: 100%;
}

.product-detail .left-col .thumbs a.active {
  border-color: #086fcf;
}

.product-detail .left-col .thumbs a.active:hover {
  border-color: #086fcf;
}

.product-detail .left-col .thumbs a:hover {
  border-color: #b5b6bd;
}

.product-detail .left-col .thumbs img {
  display: block;
  width: 100%;
}

.product-detail .left-col .big {
  width: 83.05085%;
  float: right;
  margin-right: 0;
}

.product-detail .left-col .big .img {
  -moz-transition: all 600ms ease-out 0s;
  -o-transition: all 600ms ease-out 0s;
  -webkit-transition: all 600ms ease-out;
  -webkit-transition-delay: 0s;
  transition: all 600ms ease-out 0s;
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -webkit-transform: translateY(0px);
  transform: translateY(0px);
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  background: transparent no-repeat center center;
  -moz-background-size: cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
  border: 1px solid #e2e2e3;
  display: block;
  height: 0;
  opacity: 1;
  padding-bottom: 133%;
}

.product-detail .left-col .big .img.animate {
  -moz-transition: all 0ms ease-out 0s;
  -o-transition: all 0ms ease-out 0s;
  -webkit-transition: all 0ms ease-out;
  -webkit-transition-delay: 0s;
  transition: all 0ms ease-out 0s;
  -moz-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  -webkit-transform: translateY(-30px);
  transform: translateY(-30px);
  opacity: 0;
}

.product-detail .left-col .big #banner-gallery {
  display: none;
}

.product-detail .right-col {
  width: 48.27586%;
  float: right;
  margin-right: 0;
}

.product-detail h1 {
  font-size: 184.61538%;
  line-height: 141.66667%;
  font-family: "montserratregular", sans-serif;
}

.product-detail a {
  font-size: 100%;
  line-height: 123.07692%;
  color: #b5b6bd;
  text-decoration: underline;
}

.product-detail a:hover {
  color: #086fcf;
}

.product-detail .price-shipping {
  border-bottom: 1px solid #edeff2;
  padding-bottom: 14px;
}

.product-detail .price-shipping a {
  display: block;
  float: left;
  margin: 19px 0 0 25px;
}

.product-detail .price {
  font-size: 369.23077%;
  line-height: 108.33333%;
  font-family: "montserratbold", sans-serif;
  color: #086fcf;
  float: left;
  letter-spacing: -2px;
}

.product-detail .price del {
  font-size: 54.16667%;
  line-height: 200%;
  font-family: "montserratregular", sans-serif;
  color: #b5b6bd;
}

.product-detail #AddToCartForm {
  margin-top: 40px;
}

.product-detail .btn-and-quantity {
  float: left;
}

.product-detail #AddToCart {
  font-family: "montserratbold", sans-serif;
  -moz-border-radius: 25px;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  font-size: 107.69231%;
  line-height: 128.57143%;
  background: #086fcf url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE5cHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDE5IDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02ODYuMDAwMDAwLCAtNDUwLjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NjAuMDAwMDAwLCAxNjUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAwMDAwMCwgMjY5LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjAwMDAwMCwgMTYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNi43NjU0Nzg0LDQuMjc1IEwxNS44NzU4NzQ5LDguNTkzMzYwNzEgTDQuNjk5ODQwNTksOS43MjQwOTgyMSBMMy40NzM5MDMwNCw0LjI3NSBMMTYuNzY1NDc4NCw0LjI3NSBaIE0xNi44MDQ1NDYzLDkuNzI4MDY3ODYgTDE4LjY3MzcyNTEsMy4wNTM1NzE0MyBMMy4xOTkxNTIwNywzLjA1MzU3MTQzIEwyLjUxMjI3NDYzLDAgTDMuMjYzMDc1NzJlLTA1LDAgTDMuMjYzMDc1NzJlLTA1LDEuMjIxNDI4NTcgTDEuNDUzMDgwMjUsMS4yMjE0Mjg1NyBMNC4wNjM1NDA4MywxMi44MjUgTDE2Ljk2ODAyNjQsMTIuODI1IEwxNi45NjgwMjY0LDExLjYwMzU3MTQgTDUuMTIyNzM1MjEsMTEuNjAzNTcxNCBMNC45NzAwMjMyNiwxMC45MjUzNzMyIEwxNi44MDQ1NDYzLDkuNzI4MDY3ODYgWiI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNy44MzEzODE3MywxNS4yNjc4NTcxIEM3LjgzMTM4MTczLDE2LjI3OTgxMDcgNi45NTQ5MTk1OSwxNy4xIDUuODczNTM2MywxNy4xIEM0Ljc5MjE1MzAxLDE3LjEgMy45MTU2OTA4NywxNi4yNzk4MTA3IDMuOTE1NjkwODcsMTUuMjY3ODU3MSBDMy45MTU2OTA4NywxNC4yNTU5MDM2IDQuNzkyMTUzMDEsMTMuNDM1NzE0MyA1Ljg3MzUzNjMsMTMuNDM1NzE0MyBDNi45NTQ5MTk1OSwxMy40MzU3MTQzIDcuODMxMzgxNzMsMTQuMjU1OTAzNiA3LjgzMTM4MTczLDE1LjI2Nzg1NzEiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1LjY2Mjc2MzUsMTUuMjY3ODU3MSBDMTUuNjYyNzYzNSwxNi4yNzk4MTA3IDE0Ljc4NjMwMTMsMTcuMSAxMy43MDQ5MTgsMTcuMSBDMTIuNjIzNTM0NywxNy4xIDExLjc0NzA3MjYsMTYuMjc5ODEwNyAxMS43NDcwNzI2LDE1LjI2Nzg1NzEgQzExLjc0NzA3MjYsMTQuMjU1OTAzNiAxMi42MjM1MzQ3LDEzLjQzNTcxNDMgMTMuNzA0OTE4LDEzLjQzNTcxNDMgQzE0Ljc4NjMwMTMsMTMuNDM1NzE0MyAxNS42NjI3NjM1LDE0LjI1NTkwMzYgMTUuNjYyNzYzNSwxNS4yNjc4NTcxIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=") no-repeat 26px center;
  border: 0 none;
  color: #fff;
  float: right;
  height: 50px;
  padding: 14px 26px 14px 53px;
}

.product-detail #AddToCart:hover {
  background-color: #0084ff;
}

.product-detail .spinner {
  float: right;
}

.product-detail .spinner:before {
  background: transparent url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAyCAIAAADqed0qAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACsSURBVDhP7ZNbEsIgDAC9/2HVSnkUWnAVZhwlBA/Q/QqzhKaQXIrKqUU0ndI+1DmX27IO9Wq980HWx5FJJZC1dcH5jUDQOZNq+DYI2oeN7BoL+mEsv1RjQV/vpkW9jjGZ1bVFr431IcS2+NFUtBj7Lrnx0b2DpkUHLz1y8IcG7fCKVlql3/GlQbsWmFwqaE8CkwedtMOkmYDsYSvCpJFBGwOYDBFoI1g5tUApTxJ40LZNFr4gAAAAAElFTkSuQmCC") no-repeat left top;
  content: "";
  display: block;
  height: 50px;
  left: -6px;
  position: absolute;
  top: 0;
  width: 10px;
}

.related {
  background-color: #f7f7fa;
  padding: 40px 0 85px;
}

.related h2 {
  font-size: 184.61538%;
  line-height: 150%;
  font-family: "montserratregular", sans-serif;
  text-align: center;
}

.related .collection-list {
  margin-top: 26px;
}

.swatches .guide {
  float: left;
  margin: 36px 0 0 20px;
}

.spinner {
  -moz-border-radius: 25px;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  border: 1px solid #edeff2;
  height: 50px;
  margin-left: 10px;
  padding: 15px 16px 0;
  position: relative;
}

.spinner.is-hidden {
  display: none;
}

.spinner .btn {
  cursor: pointer;
  display: block;
  float: left;
  height: 10px;
  margin-top: 4px;
  position: relative;
  width: 10px;
}

.spinner .btn:before {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: #086fcf;
  content: "";
  display: block;
  height: 2px;
  left: 0;
  margin-top: -1px;
  position: absolute;
  top: 50%;
  width: 100%;
}

.spinner .btn.plus:after {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background-color: #086fcf;
  bottom: 0;
  content: "";
  display: block;
  height: 100%;
  left: 50%;
  margin-left: -1px;
  position: absolute;
  top: 0;
  width: 2px;
}

.spinner .btn:hover:before,
.spinner .btn:hover:after {
  background-color: #0084ff;
}

.spinner input {
  font-family: "montserratlight", sans-serif;
  border: 0 none;
  color: #16161a;
  display: block;
  float: left;
  font-size: 14px;
  height: 17px !important;
  line-height: 17px !important;
  margin-left: 1px;
  padding-bottom: 0;
  padding-top: 0;
  text-align: right;
  width: 30px;
}

.spinner .q {
  font-size: 107.69231%;
  line-height: 121.42857%;
  display: block;
  float: left;
  margin: 1px 20px 0 3px;
}

.tabs {
  margin: 30px 0;
}

.tabs .tab-labels {
  position: relative;
  top: 1px;
  z-index: 100;
}

.tabs .tab-labels span {
  font-family: "montserratbold", sans-serif;
  font-size: 100%;
  line-height: 123.07692%;
  -moz-border-radius: 1px;
  -webkit-border-radius: 1px;
  border-radius: 1px;
  border: 1px solid #fff;
  border-bottom: 0 none;
  color: #086fcf;
  cursor: pointer;
  display: block;
  float: left;
  padding: 7px 15px 9px;
  text-transform: uppercase;
}

.tabs .tab-labels span.active {
  background-color: #fff;
  border-color: #edeff2;
  color: #16161a;
}

.tabs .tab-slides {
  font-size: 100%;
  line-height: 184.61538%;
  border-top: 1px solid #edeff2;
  padding-top: 10px;
  position: relative;
}

.tabs .tab-slides > div {
  display: none;
}

.tabs .tab-slides > div.active {
  display: block;
}

.social-sharing-btn-wrapper {
  display: none;
}

.detail-socials .social-sharing {
  float: right;
  margin: 12px 0;
}

.detail-socials a {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  background: transparent no-repeat center center;
  border: 1px solid #edeff2;
  display: block;
  float: left;
  height: 26px;
  margin-right: 7px;
  width: 26px;
}

.detail-socials a:hover {
  border-color: #b5b6bd;
}

.detail-socials a:last-child {
  margin-right: 0;
}

.detail-socials .icon,
.detail-socials .share-title,
.detail-socials .share-count {
  display: none;
}

.detail-socials .share-facebook {
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI3cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI3IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01NjEuMDAwMDAwLCAtNzY5LjAwMDAwMCkiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4My4wMDAwMDAsIDE1Ny4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ0NS4wMDAwMDAsIDYxMi4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMy40Mjg1NzEsIDAuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMS4yMTE3OTE2LDE5LjQyNzY0NzUgTDExLjIxMTc5MTYsMTMuMjcyMTY2OCBMOS45NDExNzY0NywxMy4yNzIxNjY4IEw5Ljk0MTE3NjQ3LDExLjE1MDg3MTMgTDExLjIxMTc5MTYsMTEuMTUwODcxMyBMMTEuMjExNzkxNiw5Ljg3NzI1MzEzIEMxMS4yMTE3OTE2LDguMTQ2NzAzNjEgMTEuOTI5MjYwNCw3LjExNzY0NzA2IDEzLjk2NzY3NCw3LjExNzY0NzA2IEwxNS42NjQ3MTA1LDcuMTE3NjQ3MDYgTDE1LjY2NDcxMDUsOS4yMzkxODI4MiBMMTQuNjAzOTQyNiw5LjIzOTE4MjgyIEMxMy44MTA0Mzg3LDkuMjM5MTgyODIgMTMuNzU3OTQ2OSw5LjUzNTYzNTY3IDEzLjc1Nzk0NjksMTAuMDg4OTAyMiBMMTMuNzU1MDY0LDExLjE1MDYzMSBMMTUuNjc2NzIyMywxMS4xNTA2MzEgTDE1LjQ1MTg2MDIsMTMuMjcxOTI2NiBMMTMuNzU1MDY0LDEzLjI3MTkyNjYgTDEzLjc1NTA2NCwxOS40Mjc2NDc1IEwxMS4yMTE3OTE2LDE5LjQyNzY0NzUgWiIgZmlsbD0iI0I1QjdCRCI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgPC9nPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+");
}

.detail-socials .share-twitter {
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01MjguMDAwMDAwLCAtNzY5LjAwMDAwMCkiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4My4wMDAwMDAsIDE1Ny4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ0NS4wMDAwMDAsIDYxMi4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMTUuMDU2NDI4NCw4LjUyNzIxNjk1IEMxMy45ODgxODAyLDguOTE2MDI1MDEgMTMuMzEzMDQ3Myw5LjkxODI4NTggMTMuMzg5OTYxMiwxMS4wMTU1ODg2IEwxMy40MTU1OTkxLDExLjQzODk1NzMgTDEyLjk4ODI5OTgsMTEuMzg3MTE2MyBDMTEuNDMyOTMwNSwxMS4xODgzOTIxIDEwLjA3NDExODcsMTAuNTE0NDU4MiA4LjkyMDQxMDY4LDkuMzgyNTk0NjkgTDguMzU2Mzc1NjMsOC44MjA5ODMwNCBMOC4yMTEwOTM4OCw5LjIzNTcxMTY0IEM3LjkwMzQzODM5LDEwLjE2MDIxMDggOC4wOTk5OTYwNiwxMS4xMzY1NTExIDguNzQwOTQ0OTgsMTEuNzkzMjA0NyBDOS4wODI3ODQ0MSwxMi4xNTYwOTIyIDkuMDA1ODcwNTQsMTIuMjA3OTMzMyA4LjQxNjE5NzUzLDExLjk5MTkyODggQzguMjExMDkzODgsMTEuOTIyODA3NCA4LjAzMTYyODE4LDExLjg3MDk2NjMgOC4wMTQ1MzYyMSwxMS44OTY4ODY4IEM3Ljk1NDcxNDMxLDExLjk1NzM2ODEgOC4xNTk4MTc5NiwxMi43NDM2MjQ0IDguMzIyMTkxNjksMTMuMDU0NjcwOCBDOC41NDQzODczMiwxMy40ODY2Nzk4IDguOTk3MzI0NTUsMTMuOTEwMDQ4NiA5LjQ5Mjk5MTcyLDE0LjE2MDYxMzggTDkuOTExNzQ1MDIsMTQuMzU5MzM3OSBMOS40MTYwNzc4NSwxNC4zNjc5NzgxIEM4LjkzNzUwMjY1LDE0LjM2Nzk3ODEgOC45MjA0MTA2OCwxNC4zNzY2MTgzIDguOTcxNjg2NiwxNC41NTgwNjIgQzkuMTQyNjA2MzEsMTUuMTE5NjczNyA5LjgxNzczOTE3LDE1LjcxNTg0NiAxMC41Njk3ODU5LDE1Ljk3NTA1MTQgTDExLjA5OTYzNywxNi4xNTY0OTUyIEwxMC42MzgxNTM4LDE2LjQzMjk4MDkgQzkuOTU0NDc0OTQsMTYuODMwNDI5MSA5LjE1MTE1MjMsMTcuMDU1MDczOCA4LjM0NzgyOTY1LDE3LjA3MjM1NDIgQzcuOTYzMjYwMjksMTcuMDgwOTk0MyA3LjY0NzA1ODgyLDE3LjExNTU1NTEgNy42NDcwNTg4MiwxNy4xNDE0NzU2IEM3LjY0NzA1ODgyLDE3LjIyNzg3NzQgOC42ODk2NjkwNywxNy43MTE3Mjc0IDkuMjk2NDM0MDUsMTcuOTAxODExNCBDMTEuMTE2NzI5LDE4LjQ2MzQyMyAxMy4yNzg4NjM0LDE4LjIyMTQ5OCAxNC45MDI2MDA2LDE3LjI2MjQzODEgQzE2LjA1NjMwODcsMTYuNTc5ODYzOSAxNy4yMTAwMTY3LDE1LjIyMzM1NTggMTcuNzQ4NDEzOCwxMy45MTAwNDg2IEMxOC4wMzg5Nzc0LDEzLjIxMDE5NDEgMTguMzI5NTQwOSwxMS45MzE0NDc1IDE4LjMyOTU0MDksMTEuMzE3OTk0OCBDMTguMzI5NTQwOSwxMC45MjA1NDY2IDE4LjM1NTE3ODgsMTAuODY4NzA1NSAxOC44MzM3NTQsMTAuMzkzNDk1NyBDMTkuMTE1NzcxNSwxMC4xMTcwMDk5IDE5LjM4MDY5NzEsOS44MTQ2MDM2NSAxOS40MzE5NzMsOS43MjgyMDE4NiBDMTkuNTE3NDMyOSw5LjU2NDAzODQ1IDE5LjUwODg4NjksOS41NjQwMzg0NSAxOS4wNzMwNDE2LDkuNzEwOTIxNSBDMTguMzQ2NjMyOCw5Ljk3MDEyNjg3IDE4LjI0NDA4MSw5LjkzNTU2NjE2IDE4LjYwMzAxMjQsOS41NDY3NTgwOSBDMTguODY3OTM4LDkuMjcwMjcyMzYgMTkuMTg0MTM5NCw4Ljc2OTE0MTk3IDE5LjE4NDEzOTQsOC42MjIyNTg5MiBDMTkuMTg0MTM5NCw4LjU5NjMzODM4IDE5LjA1NTk0OTYsOC42Mzk1MzkyOCAxOC45MTA2Njc5LDguNzE3MzAwODkgQzE4Ljc1Njg0MDEsOC44MDM3MDI2OCAxOC40MTUwMDA3LDguOTMzMzA1MzcgMTguMTU4NjIxMiw5LjAxMTA2Njk4IEwxNy42OTcxMzc5LDkuMTU3OTUwMDMgTDE3LjI3ODM4NDYsOC44NzI4MjQxMiBDMTcuMDQ3NjQzLDguNzE3MzAwODkgMTYuNzIyODk1Niw4LjU0NDQ5NzMxIDE2LjU1MTk3NTksOC40OTI2NTYyMyBDMTYuMTE2MTMwNiw4LjM3MTY5MzczIDE1LjQ0OTU0MzcsOC4zODg5NzQwOCAxNS4wNTY0Mjg0LDguNTI3MjE2OTUgTDE1LjA1NjQyODQsOC41MjcyMTY5NSBaIiBmaWxsPSIjQjVCN0JEIj48L3BhdGg+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==");
}

.detail-socials .share-pinterest {
  background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjI2cHgiIGhlaWdodD0iMjZweCIgdmlld0JveD0iMCAwIDI2IDI2IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01OTQuMDAwMDAwLCAtNzY5LjAwMDAwMCkiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4My4wMDAwMDAsIDE1Ny4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ0NS4wMDAwMDAsIDYxMi4wMDAwMDApIj4KICAgICAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2Ni4wMDAwMDAsIDAuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMy40MzcwNjg3LDYuMTE3NjQ3MDYgQzkuNzE2MzUwOTQsNi4xMTc2NDcwNiA3Ljg0MDMzNjEzLDguNzg1MjQyODcgNy44NDAzMzYxMywxMS4wMDk3NzYgQzcuODQwMzM2MTMsMTIuMzU2NzA3NSA4LjM1MDI4NDQzLDEzLjU1NDk5NDYgOS40NDQwMjQ4MSwxNC4wMDE1MzY0IEM5LjYyMzM3MjE0LDE0LjA3NDg1ODQgOS43ODQwMTkzMywxNC4wMDQwNTg4IDkuODM2MDMxOCwxMy44MDU0ODk1IEM5Ljg3MjIxNDM4LDEzLjY2ODA2NTIgOS45NTc4MDAxMSwxMy4zMjEzNzM0IDkuOTk1OTgzMTcsMTMuMTc2OTkxIEMxMC4wNDg0MzA1LDEyLjk4MDU5NjEgMTAuMDI4MDc3OCwxMi45MTE3MTAxIDkuODgzMzQ3NDgsMTIuNzQwNTM4NiBDOS41Njc5Njc1NiwxMi4zNjg1MzY0IDkuMzY2NDQxLDExLjg4Njk0MjcgOS4zNjY0NDEsMTEuMjA0Nzc5MiBDOS4zNjY0NDEsOS4yMjU2OTYyNiAxMC44NDcxNDM3LDcuNDUzOTY3MzEgMTMuMjIyMTQ3Niw3LjQ1Mzk2NzMxIEMxNS4zMjUxNzM0LDcuNDUzOTY3MzEgMTYuNDgwNTgwNyw4LjczODk3MDkyIDE2LjQ4MDU4MDcsMTAuNDU1MTIxMyBDMTYuNDgwNTgwNywxMi43MTMxNDA3IDE1LjQ4MTI5NzcsMTQuNjE4OTAxOCAxMy45OTc4MTE4LDE0LjYxODkwMTggQzEzLjE3ODU3MiwxNC42MTg5MDE4IDEyLjU2NTI5NDYsMTMuOTQxMzQ4MSAxMi43NjE4NjM0LDEzLjExMDM2NjQgQzEyLjk5NzIyNDIsMTIuMTE4MzAyNSAxMy40NTMxNTk1LDExLjA0NzYxMTEgMTMuNDUzMTU5NSwxMC4zMzE1MjY1IEMxMy40NTMxNTk1LDkuNjkwNTAzMyAxMy4xMDkwNzcxLDkuMTU1ODUzNDMgMTIuMzk2OTkzNCw5LjE1NTg1MzQzIEMxMS41NTk0ODgzLDkuMTU1ODUzNDMgMTAuODg2NzE4NCwxMC4wMjIyMzUgMTAuODg2NzE4NCwxMS4xODI4NjA5IEMxMC44ODY3MTg0LDExLjkyMjA4MTYgMTEuMTM2NTE3NCwxMi40MjIwMjc1IDExLjEzNjUxNzQsMTIuNDIyMDI3NSBDMTEuMTM2NTE3NCwxMi40MjIwMjc1IDEwLjI3OTQ0MjQsMTYuMDUzNDE5NSAxMC4xMjkyMzI1LDE2LjY4OTM5OCBDOS44MzAwMzAzNiwxNy45NTU5NjI0IDEwLjA4NDI2NTIsMTkuNTA4NTk1NCAxMC4xMDU3NDg2LDE5LjY2NTQxNTUgQzEwLjExODM2MDMsMTkuNzU4MzA3NCAxMC4yMzc3ODAzLDE5Ljc4MDM5OTYgMTAuMjkxODgwMiwxOS43MTAyMDg5IEMxMC4zNjkxMTYxLDE5LjYwOTQwMjEgMTEuMzY2NTcyNSwxOC4zNzc5NzY2IDExLjcwNTY5NzMsMTcuMTQ3NTA3OCBDMTEuODAxNjMzMywxNi43OTkwNzY0IDEyLjI1NjUyNDksMTQuOTk0OTA0OSAxMi4yNTY1MjQ5LDE0Ljk5NDkwNDkgQzEyLjUyODU5MDEsMTUuNTEzODk4OSAxMy4zMjM4MjQyLDE1Ljk3MTA1MTkgMTQuMTY5NTA1MSwxNS45NzEwNTE5IEMxNi42ODY5NzgsMTUuOTcxMDUxOSAxOC4zOTQ5NTI1LDEzLjY3NTk4MDIgMTguMzk0OTUyNSwxMC42MDM5Mzk2IEMxOC4zOTQ5NTI1LDguMjgxMDM1MDggMTYuNDI3NDM3NSw2LjExNzY0NzA2IDEzLjQzNzA2ODcsNi4xMTc2NDcwNiBMMTMuNDM3MDY4Nyw2LjExNzY0NzA2IFoiIGZpbGw9IiNCNUI3QkQiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==");
}

@-moz-keyframes quick_cart_pay_show {
  0% {
    -moz-transform: rotate(70deg);
    transform: rotate(70deg);
    right: -100px;
  }
  50% {
    -moz-transform: rotate(-20deg);
    transform: rotate(-20deg);
    right: 20px;
  }
  100% {
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
    right: 0;
  }
}

  

@media only screen and (max-width: 450px) {
  div.grid_info:after {
    content: "< 450px";
  }

  .collection-list.cols-4 a,
  .collection-list.cols-3 a {
    margin-bottom: 7.14286%;
  }

  #sign-in-popup form .btn {
    font-size: 100%;
    line-height: 138.46154%;
  }

  .homepage .collection-list.featured {
    padding-top: 80px;
  }

  footer .top form input {
    width: 218px;
  }
}
@media only screen and (max-width: 320px) {
  div.grid_info:after {
    content: "< 320px";
  }
}
.homepage .bg {
  -moz-background-size: 1920px auto;
  -o-background-size: 1920px auto;
  -webkit-background-size: 1920px auto;
  background-size: 1920px auto;
}

@media only screen and (max-width: 1600px) {
  .homepage .bg {
    -moz-background-size: 100% auto;
    -o-background-size: 100% auto;
    -webkit-background-size: 100% auto;
    background-size: 100% auto;
  }
}
@media only screen and (max-width: 1200px) {
  .homepage .bg {
    background-position: center -50px;
  }
}
@media only screen and (max-width: 850px) {
  .homepage .bg {
    background-position: center -50px;
  }
}
@media only screen and (max-width: 600px) {
  .homepage .bg {
    background-position: center -80px;
  }
}
@media only screen and (max-width: 320px) {
  .homepage .bg {
    background-position: center -70px;
  }
}
.swatches {
  margin: 17px 0 80px;
}

.selector-wrapper,
#productSelect {
  display: none;
}

.swatch {
  float: left;
  margin-right: 40px;
}

.swatch:nth-last-child(2) {
  margin-right: 0;
}

.swatch .header {
  font-family: "montserratbold", sans-serif;
  text-transform: uppercase;
}

.swatch input {
  display: none;
}

.swatch .swatch-element {
  float: left;
  margin: 5px 8px 0 0;
  position: relative;
}

.swatch .color label {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid;
  cursor: pointer;
  display: block;
  height: 42px;
  padding: 7px 0 0 7px;
  width: 42px;
}

.swatch .color label span {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  display: block;
  height: 26px;
  position: relative;
  width: 26px;
}

.swatch .color label span:after {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjEycHgiIGhlaWdodD0iOXB4IiB2aWV3Qm94PSIwIDAgMTIgOSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpza2V0Y2g9Imh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaC9ucyI+CiAgICA8ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj4KICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTIzMS4wMDAwMDAsIC0xMzAyLjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMy4wMDAwMDAsIDEyNDYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMTIzNS45MzgzNyw1OC40NTA1ODYxIEwxMjM0LjUyMTE2LDU5LjM5NTUzMDcgTDEyMzcuNTQ4NDgsNjMuOTM2NzE1OCBMMTI0NS45MjIyNSw1OC4zNTM5MTk4IEwxMjQ0Ljk3NzczLDU2LjkzNjcxNTggTDEyMzguMDIxMTYsNjEuNTc0NTY3MSBMMTIzNS45MzgzNyw1OC40NTA1ODYxIEwxMjM1LjkzODM3LDU4LjQ1MDU4NjEgWiIgaWQ9ImZhamZrYSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTI0MC4yMjE3MDYsIDYwLjQzNjcxNikgcm90YXRlKC0xMC4wMDAwMDApIHRyYW5zbGF0ZSgtMTI0MC4yMjE3MDYsIC02MC40MzY3MTYpIj48L3BhdGg+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPg==") no-repeat center center;
  bottom: 0;
  content: "";
  display: block;
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

.swatch .plain label {
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  font-family: "montserratbold", sans-serif;
  border: 1px solid #086fcf;
  color: #086fcf;
  cursor: pointer;
  display: block;
  height: 42px;
  padding-top: 8px;
  text-align: center;
  width: 42px;
}

.swatch .color input:checked + label span:after {
  opacity: 1;
}

.swatch input:not(:checked) + label {
  border-color: #edeff2 !important;
}

.swatch input:not(:checked) + label:hover {
  border-color: #b5b6bd !important;
}

.swatch .plain input:not(:checked) + label {
  color: #16161a !important;
}

.swatch .blue input:checked + label {
  border-color: #086fcf !important;
}

.swatch .yellow input:checked + label {
  border-color: #f5c81f !important;
}

.swatch .red input:checked + label {
  border-color: #d9332e !important;
}

.swatch .blue label span {
  background-color: #086fcf !important;
}

.swatch .yellow label span {
  background-color: #f5c81f !important;
}

.swatch .red label span {
  background-color: #d9332e !important;
}

.crossed-out {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
}

.swatch .swatch-element .crossed-out {
  display: none;
}

.swatch .swatch-element.soldout .crossed-out {
  display: block;
}

.swatch .swatch-element.soldout label {
  filter: alpha(opacity=60);
  -khtml-opacity: 0.6;
  -moz-opacity: 0.6;
  opacity: 0.6;
}

.swatch .tooltip {
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  text-align: center;
  background-color: rgba(22, 22, 26, 0.93);
  color: #fff;
  bottom: 100%;
  padding: 10px;
  display: block;
  position: absolute;
  width: 100px;
  left: -23px;
  margin-bottom: 15px;
  filter: alpha(opacity=0);
  -khtml-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translateY(10px);
  -moz-transform: translateY(10px);
  -ms-transform: translateY(10px);
  -o-transform: translateY(10px);
  transform: translateY(10px);
  -webkit-transition: all .25s ease-out;
  -moz-transition: all .25s ease-out;
  -ms-transition: all .25s ease-out;
  -o-transition: all .25s ease-out;
  transition: all .25s ease-out;
  -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  -moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  -ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  -o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  z-index: 10000;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.swatch .tooltip:before {
  bottom: -20px;
  content: " ";
  display: block;
  height: 20px;
  left: 0;
  position: absolute;
  width: 100%;
}

.swatch .tooltip:after {
  border-left: solid transparent 10px;
  border-right: solid transparent 10px;
  border-top: solid rgba(22, 22, 26, 0.93) 10px;
  bottom: -10px;
  content: " ";
  height: 0;
  left: 50%;
  margin-left: -13px;
  position: absolute;
  width: 0;
}

.swatch .swatch-element:hover .tooltip {
  filter: alpha(opacity=100);
  -khtml-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -ms-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
}

.swatch.error {
  background-color: #E8D2D2 !important;
  color: #333 !important;
  padding: 1em;
  border-radius: 5px;
}

.swatch.error p {
  margin: 0.7em 0;
}

.swatch.error p:first-child {
  margin-top: 0;
}

.swatch.error p:last-child {
  margin-bottom: 0;
}

.swatch.error code {
  font-family: monospace;
}
</style>
<!-- Demo page craeted by https://github.com/petr-goca -->
<br>
<br>
<h1 style="text-align:center;font-size:25px;">Product Description</h1>
<section aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    
    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
			<img src="../admin/uploads/package/<?php echo $package_detail['icon_image']; ?>">
            
          </div>
          <div class="right-col">
            <h1 itemprop="name">Product Name :<?php echo $package_detail['package_title']; ?></h1><br>
            <div>
				<h1>Product Category : 
					<?php $query=mysql_query("select * from packages_category where id= '".$package_detail['pkg_cat_id']."'");
					$a=mysql_fetch_array($query);
					echo $a['packages_category_name'];
					?> 
				</h1>
			</div>
			<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">								
              <div class="price-shipping">
                <div class="price">
                  ₹ <?php echo $package_detail['package_price']; ?>
                </div>
                
              </div>
            </div>
			
			<div>
				<?php
					if($package_detail['number_of_qty'] == '0'){
						?><h4>Out Of Stock :<?php echo $package_detail['number_of_qty']; ?></h4><?php
					}else{
						?><h4>In Stock :<?php echo $package_detail['number_of_qty']; ?></h4><?php
					}
				?>
			</div>
			<br>
			
			<div>
				<b>Product Description :</b> <p><?php echo $package_detail['slider_desc1']; ?></p>
			</div>
			<br>
			<h4>Quantity</h4>
			<form action="orderconfirm.php" method="post" name="myForm" onsubmit="return checkInp()">
				<div class="form-group margin-bottom-none">
				  
					<input class="form-control" placeholder="No. of quantity" type="text" name="text" value="<?php echo $text?>" style="width:25%;" required />
					<input type="hidden" name="pkg_cat_id" value="<?php echo $package_detail['pkg_cat_id']; ?>"/>
					<input type="hidden" name="package_title" value="<?php echo $package_detail['package_title']; ?>"/>
					<input type="hidden" name="package_price" value="<?php echo $package_detail['package_price']; ?>"/>
					<input type="hidden" name="id" value="<?php echo $package_detail['id']; ?>"/>
					<input type="hidden" name="number_of_qty" value="<?php echo $package_detail['number_of_qty']; ?>"/>
					<input type="hidden" name="icon_image" value="<?php echo $package_detail['icon_image']; ?>"/>
					<input type="hidden" name="name" value="<?php echo $userRow['name']; ?>"/>
					<input type="hidden" name="email" value="<?php echo $userRow['email']; ?>"/>
					<input type="hidden" name="address" value="<?php echo $userRow['address']; ?>"/>
					<input type="hidden" name="pan" value="<?php echo $userRow['pan']; ?>"/>
					<input type="hidden" name="gst" value="<?php echo $userRow['gst']; ?>"/>
				  
					<br>
					<input type="submit" class="single_add_to_cart_button button alt" value="Buy Product">
				  
				</div>
			</form>								
			
          </div>
        </div>
      </div>
	  
	  
		<div class="col-md-8 ml-auto mr-auto">
			
			<br />
			<div class="nav-container">
				<ul class="nav nav-icons justify-content-center" role="tablist">
					<li class="nav-item show active">
						<a class="nav-link" id="description-tab" href="#description-logo" role="tab" data-toggle="tab">
							<i class="nc-icon nc-notes"></i>
							<br> Description
						</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" id="help-tab" href="#help-logo" role="tab" data-toggle="tab">
							<i class="nc-icon nc-support-17"></i>
							<br> Help Center
						</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="description-logo" aria-labelledby="info-tab">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Description about product</h4>
							<p class="card-category">More information here</p>
						</div>
						<div class="card-body">
							<p><?php echo $package_detail['slider_desc1']; ?></p><br>
						</div>
					</div>
				</div>
				
				<div class="tab-pane fade" id="help-logo" aria-labelledby="info-tab">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Help center</h4>
							<p class="category">More information here</p>
						</div>
						<div class="card-body">
							<div class="col-md-4">
								<h1>ADDRESS</h1>
								<p>1-B-9, Singh Ind Estate, Ram Mandir Rd, Goregaon(west),Mumbai – 400104.India. </p><br>
							</div>
							<div class=" col-md-offset-1 col-md-4">
								<h1>Contact</h1>
								Mobile Number : 	<p>+ 91-22-66949177<br>+ 91-22-26760091</p><br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end tab card-body -->
		</div>
                           
    </div>
    
	
  </div>
  
  

</section>

<script>
	function checkInp()
	{
	  var x=document.forms["myForm"]["text"].value;
	  if (isNaN(x)) 
	  {
		alert("Must input is numbers");
		return false;
	  }
	  if (x < 50)
	  {
		alert("Add Minimum 50 Numbers Of Products");
		return false;
	  }
	  if (<?php echo $package_detail['number_of_qty']; ?> < x)
	  {
		alert("Insufficient Number Of Products");
		return false;
	  }
	}
</script>

<?php include("footer.php");?>