<?php
include 'core/init.php';
protect_page();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="images/icon/icon.png" />
<link rel="shortcut icon" type="image/x-icon" href="" />
<link rel="mask-icon" type="" href="images/icon/icon.png" color="#111" />
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/change/log_2/normalize.min.css">
<style>
.grid {
  zoom: 1;
}
.grid:after,
.grid:before {
  content: '';
  display: table;
}
.grid:after {
  clear: both;
}
.grid .grid-bit {
  float: left;
  padding-left: 0.625rem;
  padding-right: 0.3125rem;
}
.grid .grid-bit:last-of-type {
  padding-right: 0.625rem;
}
.grid .grid-bit + .grid-bit {
  padding-left: 0.3125rem;
}
.grid--gutter-x2 .grid-bit {
  padding-left: 1.25rem;
  padding-right: 0.625rem;
}
.grid--gutter-x2 .grid-bit:last-of-type {
  padding-right: 1.25rem;
}
.grid--gutter-x2 .grid-bit + .grid-bit {
  padding-left: 0.625rem;
}
.grid--gutter-x3 .grid-bit {
  padding-left: 1.875rem;
  padding-right: 0.9375rem;
}
.grid--gutter-x3 .grid-bit:last-of-type {
  padding-right: 1.875rem;
}
.grid--gutter-x3 .grid-bit + .grid-bit {
  padding-left: 0.9375rem;
}
.grid--gutter-x4 .grid-bit {
  padding-left: 2.5rem;
  padding-right: 1.25rem;
}
.grid--gutter-x4 .grid-bit:last-of-type {
  padding-right: 2.5rem;
}
.grid--gutter-x4 .grid-bit + .grid-bit {
  padding-left: 1.25rem;
}
.grid--gutter-x5 .grid-bit {
  padding-left: 3.125rem;
  padding-right: 1.5625rem;
}
.grid--gutter-x5 .grid-bit:last-of-type {
  padding-right: 3.125rem;
}
.grid--gutter-x5 .grid-bit + .grid-bit {
  padding-left: 1.5625rem;
}
.grid--gutter-x6 .grid-bit {
  padding-left: 3.75rem;
  padding-right: 1.875rem;
}
.grid--gutter-x6 .grid-bit:last-of-type {
  padding-right: 3.75rem;
}
.grid--gutter-x6 .grid-bit + .grid-bit {
  padding-left: 1.875rem;
}
.grid--gutter-x7 .grid-bit {
  padding-left: 4.375rem;
  padding-right: 2.1875rem;
}
.grid--gutter-x7 .grid-bit:last-of-type {
  padding-right: 4.375rem;
}
.grid--gutter-x7 .grid-bit + .grid-bit {
  padding-left: 2.1875rem;
}
.grid--gutter-x8 .grid-bit {
  padding-left: 5rem;
  padding-right: 2.5rem;
}
.grid--gutter-x8 .grid-bit:last-of-type {
  padding-right: 5rem;
}
.grid--gutter-x8 .grid-bit + .grid-bit {
  padding-left: 2.5rem;
}
.grid--gutter-x9 .grid-bit {
  padding-left: 5.625rem;
  padding-right: 2.8125rem;
}
.grid--gutter-x9 .grid-bit:last-of-type {
  padding-right: 5.625rem;
}
.grid--gutter-x9 .grid-bit + .grid-bit {
  padding-left: 2.8125rem;
}
.grid--gutter-x10 .grid-bit {
  padding-left: 6.25rem;
  padding-right: 3.125rem;
}
.grid--gutter-x10 .grid-bit:last-of-type {
  padding-right: 6.25rem;
}
.grid--gutter-x10 .grid-bit + .grid-bit {
  padding-left: 3.125rem;
}
.grid--sliced .grid-bit:first-of-type {
  padding-left: 0;
}
.grid--sliced .grid-bit:last-of-type {
  padding-right: 0;
}
.grid-bit--1-20 {
  width: 5%;
}
.grid-bit--2-20 {
  width: 10%;
}
.grid-bit--3-20 {
  width: 15%;
}
.grid-bit--4-20 {
  width: 20%;
}
.grid-bit--5-20 {
  width: 25%;
}
.grid-bit--6-20 {
  width: 30%;
}
.grid-bit--7-20 {
  width: 35%;
}
.grid-bit--8-20 {
  width: 40%;
}
.grid-bit--9-20 {
  width: 45%;
}
.grid-bit--10-20 {
  width: 50%;
}
.grid-bit--11-20 {
  width: 55%;
}
.grid-bit--12-20 {
  width: 60%;
}
.grid-bit--13-20 {
  width: 65%;
}
.grid-bit--14-20 {
  width: 70%;
}
.grid-bit--15-20 {
  width: 75%;
}
.grid-bit--16-20 {
  width: 80%;
}
.grid-bit--17-20 {
  width: 85%;
}
.grid-bit--18-20 {
  width: 90%;
}
.grid-bit--19-20 {
  width: 95%;
}
.grid-bit--20-20 {
  width: 100%;
}
* {
  box-sizing: border-box;
}
.hint {
  font-size: 0.875rem;
  line-height: 1.5rem;
  color: #fff;
  position: absolute;
  letter-spacing: 0.0625rem;
  opacity: 0;
}
.hint--1 {
  width: 10rem;
  top: 15rem;
  left: -11.875rem;
  padding-top: 1.75rem;
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNzVweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgNzUgMTYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPiAgICAgICAgPHRpdGxlPlNsaWNlIDE8L3RpdGxlPiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gICAgPGRlZnM+PC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4gICAgICAgIDxnIGlkPSJQYXRoLTY0LSstUGF0aC02NiIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzcuNTAwMDAwLCA4LjAwMDAwMCkgc2NhbGUoLTEsIDEpIHRyYW5zbGF0ZSgtMzcuNTAwMDAwLCAtOC4wMDAwMDApIHRyYW5zbGF0ZSgxLjAwMDAwMCwgMS4wMDAwMDApIiBzdHJva2U9IiNGRkZGRkYiIHN0cm9rZS13aWR0aD0iMiI+ICAgICAgICAgICAgPHBhdGggZD0iTTEuODMxOTg3OTgsMS4wNjk0OTI1MiBMMS4zODUyNTM5MSw1LjMyMTc3NzM0IEw1LjQyMDQxMDE2LDUuNjkyODcxMDkiIGlkPSJQYXRoLTY0IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzLjQwMjgzMiwgMy4zODExODIpIHJvdGF0ZSgyMC4wMDAwMDApIHRyYW5zbGF0ZSgtMy40MDI4MzIsIC0zLjM4MTE4MikgIj48L3BhdGg+ICAgICAgICAgICAgPHBhdGggZD0iTTIuMDY2NDA2MjUsNC4xMzY3MTg3NSBDMi4wNjY0MDYyNSw0LjEzNjcxODc1IDMxLjY4MTI4MDEsLTUuMzAxMjE2NTggNzIuNzE2MzA4NiwxMy45OTY1ODIiIGlkPSJQYXRoLTY1IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=") no-repeat right top;
}
.hint--2 {
  right: -10rem;
  top: -1.25rem;
  width: 9.375rem;
  padding-top: 0.625rem;
  padding-left: 0.625rem;
  text-align: right;
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNzRweCIgaGVpZ2h0PSIxOHB4IiB2aWV3Qm94PSIwIDAgNzQgMTgiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPiAgICAgICAgPHRpdGxlPlNsaWNlIDE8L3RpdGxlPiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gICAgPGRlZnM+PC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4gICAgICAgIDxnIGlkPSJQYXRoLTY0LSstUGF0aC02NSIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS4wMDAwMDAsIDEuMDAwMDAwKSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjIiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0wLjgzMTk4Nzk3NywzLjA2OTQ5MjUyIEwwLjM4NTI1MzkwNiw3LjMyMTc3NzM0IEw0LjQyMDQxMDE2LDcuNjkyODcxMDkiIGlkPSJQYXRoLTY0IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICAgICAgPHBhdGggZD0iTTEuMDY2NDA2MjUsNi4xMzY3MTg3NSBDMS4wNjY0MDYyNSw2LjEzNjcxODc1IDMzLjM1NTQ2ODgsLTEyLjU1NTY2NDEgNzEuNzE2MzA4NiwxNS45OTY1ODIiIGlkPSJQYXRoLTY1IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=") no-repeat left top;
}
body,
html {
  font-family: OpenSans, 'Open Sans', sans-serif;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
body {
  background: transparent url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNTA0cHgiIGhlaWdodD0iNDMxcHgiIHZpZXdCb3g9IjAgMCA1MDQgNDMxIiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4gICAgICAgIDx0aXRsZT5icmVhay1tb2RhbC1zY3JlZW48L3RpdGxlPiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gICAgPGRlZnM+PC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4gICAgICAgIDxwYXRoIGQ9Ik0xNDksMTIxLjYxNzk3NiBMMTYzLjAyMzA5NywxMjEuNjE3OTc2IEwxNjMuMDIzMDk3LDEzNi42MDk5MjggTDE3Ny4yNDY5ODQsMTM2LjYwOTkyOCBMMTc3LjI0Njk4NCwxNTEuMDIzNDciIGlkPSJQYXRoLTEwIiBzdHJva2U9IiNGQjNENkEiIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPHBhdGggZD0iTTI5NS43OTc3MTIsMjUzIEwzMDEuODU1NDg3LDI1MyBMMzAxLjg1NTQ4NywyNTkuNDc2MzA2IEwzMDgsMjU5LjQ3NjMwNiBMMzA4LDI2NS43MDI3NDciIGlkPSJQYXRoLTE2IiBzdHJva2U9IiM5QzUwODkiIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzAxLjg5ODg1NiwgMjU5LjM1MTM3Mykgcm90YXRlKC0xODAuMDAwMDAwKSB0cmFuc2xhdGUoLTMwMS44OTg4NTYsIC0yNTkuMzUxMzczKSAiPjwvcGF0aD4gICAgICAgIDxwYXRoIGQ9Ik03My41NTU1NDA0LDIwNi4xNzE4NzUgTDY3Ljg0ODUwOTIsMTk2LjUgTDc5LjQ4NTIyNzksMTk2IEw3My41NTU1NDA0LDIwNi4xNzE4NzUgWiIgaWQ9IlBhdGgtMTEiIHN0cm9rZT0iIzlENTg4RCIgc3Ryb2tlLXdpZHRoPSIyIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8cGF0aCBkPSJNNzMuNTU1NTQwNCwyMDYuMTcxODc1IEw2Ny44NDg1MDkyLDE5Ni41IEw3OS40ODUyMjc5LDE5NiBMNzMuNTU1NTQwNCwyMDYuMTcxODc1IFoiIGlkPSJQYXRoLTIxIiBzdHJva2U9IiM5RDU4OEQiIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPHBhdGggZD0iTTE4OS43MDcwMzEsMzg5LjE3MTg3NSBMMTg0LDM3OS41IEwxOTUuNjM2NzE5LDM3OSBMMTg5LjcwNzAzMSwzODkuMTcxODc1IFoiIGlkPSJQYXRoLTIyIiBzdHJva2U9IiM5RDU4OEQiIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTg5LjgxODM1OSwgMzg0LjA4NTkzOCkgcm90YXRlKDk2LjAwMDAwMCkgdHJhbnNsYXRlKC0xODkuODE4MzU5LCAtMzg0LjA4NTkzOCkgIj48L3BhdGg+ICAgICAgICA8cGF0aCBkPSJNMzk5LjA3MDMxMiwzMDkuNSBMMzkzLjM2MzI4MSwyOTkuODI4MTI1IEw0MDUsMjk5LjMyODEyNSBMMzk5LjA3MDMxMiwzMDkuNSBaIiBpZD0iUGF0aC0yMCIgc3Ryb2tlPSIjQjhFOTg2IiBzdHJva2Utd2lkdGg9IjIiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDM5OS4xODE2NDEsIDMwNC40MTQwNjIpIHJvdGF0ZSgtMTgwLjAwMDAwMCkgdHJhbnNsYXRlKC0zOTkuMTgxNjQxLCAtMzA0LjQxNDA2MikgIj48L3BhdGg+ICAgICAgICA8Y2lyY2xlIGlkPSJPdmFsLTEiIHN0cm9rZT0iIzUxQ0FEOCIgc3Ryb2tlLXdpZHRoPSIyIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiBjeD0iMTY1LjQ3MjQ0NyIgY3k9IjIyOS4yOTcyNTMiIHI9IjciPjwvY2lyY2xlPiAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbC04IiBzdHJva2U9IiM5RDU4OEQiIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgY3g9IjQ2NS40NzI0NDciIGN5PSIxMzYuMzIwNzIzIiByPSI1LjMzOTYzODUiPjwvY2lyY2xlPiAgICAgICAgPGNpcmNsZSBpZD0iT3ZhbC0zIiBzdHJva2U9IiM1MUNBRDciIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgY3g9IjI2MC41IiBjeT0iMzEuNSIgcj0iNy41Ij48L2NpcmNsZT4gICAgICAgIDxnIGlkPSJHcm91cCIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjQ0LjAwMDAwMCwgMTUzLjAwMDAwMCkiIHN0cm9rZT0iI0ZGRTIxNyIgc3Ryb2tlLXdpZHRoPSIyIj4gICAgICAgICAgICA8cGF0aCBkPSJNMTUuOTA5MDU2LDEwLjY1NjI4MjIgTDE1LjkwOTA1NiwwLjkwMzU0MDM1NSIgaWQ9IlBhdGgtMTIiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNMTUuOTA5MDU2LDIxLjA3ODE1NzIgTDE1LjkwOTA1NiwyOS43NzI1NzU2IiBpZD0iUGF0aC0xMyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0yMC4zOTM0MzEsMTYuMDIzNDY5NyBMMzAsMTYuMDIzNDY5NyIgaWQ9IlBhdGgtMTQiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNOS41OTI2NDk3OSwxNi4wMjM0Njk3IEwwLjEzMTg1MjQwNywxNi4wMjM0Njk3IiBpZD0iUGF0aC0xNSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPC9nPiAgICAgICAgPHBhdGggZD0iTTIwNCwyODUgQzIwNCwyODguODY1OTkzIDIwNy4xMzQwMDcsMjkyIDIxMSwyOTIgQzIxNC44NjU5OTMsMjkyIDIxOCwyODguODY1OTkzIDIxOCwyODUiIGlkPSJPdmFsLTIiIHN0cm9rZT0iI0ZCM0Q2QSIgc3Ryb2tlLXdpZHRoPSIyIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8cGF0aCBkPSJNNTEsMTAxLjUgQzUxLDk3LjYzNDAwNjggNDcuODY1OTkzMiw5NC41IDQ0LDk0LjUgQzQwLjEzNDAwNjgsOTQuNSAzNyw5Ny42MzQwMDY4IDM3LDEwMS41IiBpZD0iT3ZhbC05IiBzdHJva2U9IiNGQjNENkEiIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPGcgaWQ9IndhdmUiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMxOC4wMDAwMDAsIDk0LjAwMDAwMCkiIHN0cm9rZT0iI0I4RTk4NiIgc3Ryb2tlLXdpZHRoPSIyIj4gICAgICAgICAgICA8cGF0aCBkPSJNMCw0IEMwLDYuNzYxNDIzNzUgMi4wMTQ3MTg2Myw5IDQuNSw5IEM2Ljk4NTI4MTM3LDkgOSw2Ljc2MTQyMzc1IDksNCIgaWQ9Ik92YWwtNCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xOCw0IEMxOCw2Ljc2MTQyMzc1IDIwLjAxNDcxODYsOSAyMi41LDkgQzI0Ljk4NTI4MTQsOSAyNyw2Ljc2MTQyMzc1IDI3LDQiIGlkPSJPdmFsLTYiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNMTgsNSBDMTgsMi4yMzg1NzYyNSAxNS45ODUyODE0LDEuMDc4NTAyMzdlLTE1IDEzLjUsNC40NDA4OTIxZS0xNiBDMTEuMDE0NzE4Niw0LjQ0MDg5MjFlLTE2IDksMi4yMzg1NzYyNSA5LDUiIGlkPSJPdmFsLTUiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNMzYsNSBDMzYsMi4yMzg1NzYyNSAzMy45ODUyODE0LDEuMDc4NTAyMzdlLTE1IDMxLjUsNC40NDA4OTIxZS0xNiBDMjkuMDE0NzE4Niw0LjQ0MDg5MjFlLTE2IDI3LDIuMjM4NTc2MjUgMjcsNSIgaWQ9Ik92YWwtNyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPC9nPiAgICAgICAgPGcgaWQ9IndhdmUtMiIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTA0LjAwMDAwMCwgMzA5LjUwMDAwMCkgcm90YXRlKC0zMzAuMDAwMDAwKSB0cmFuc2xhdGUoLTEwNC4wMDAwMDAsIC0zMDkuNTAwMDAwKSB0cmFuc2xhdGUoODYuMDAwMDAwLCAzMDUuMDAwMDAwKSIgc3Ryb2tlPSIjQjhFOTg2IiBzdHJva2Utd2lkdGg9IjIiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0wLDQgQzAsNi43NjE0MjM3NSAyLjAxNDcxODYzLDkgNC41LDkgQzYuOTg1MjgxMzcsOSA5LDYuNzYxNDIzNzUgOSw0IiBpZD0iT3ZhbC00IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICAgICAgPHBhdGggZD0iTTE4LDQgQzE4LDYuNzYxNDIzNzUgMjAuMDE0NzE4Niw5IDIyLjUsOSBDMjQuOTg1MjgxNCw5IDI3LDYuNzYxNDIzNzUgMjcsNCIgaWQ9Ik92YWwtNiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xOCw1IEMxOCwyLjIzODU3NjI1IDE1Ljk4NTI4MTQsMS4wNzg1MDIzN2UtMTUgMTMuNSw0LjQ0MDg5MjFlLTE2IEMxMS4wMTQ3MTg2LDQuNDQwODkyMWUtMTYgOSwyLjIzODU3NjI1IDksNSIgaWQ9Ik92YWwtNSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0zNiw1IEMzNiwyLjIzODU3NjI1IDMzLjk4NTI4MTQsMS4wNzg1MDIzN2UtMTUgMzEuNSw0LjQ0MDg5MjFlLTE2IEMyOS4wMTQ3MTg2LDQuNDQwODkyMWUtMTYgMjcsMi4yMzg1NzYyNSAyNyw1IiBpZD0iT3ZhbC03IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8L2c+ICAgICAgICA8ZyBpZD0iUGF0aC0xNy0rLVBhdGgtMTgtKy1QYXRoLTE5IiBza2V0Y2g6dHlwZT0iTVNMYXllckdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2LjAwMDAwMCwgMjY4LjAwMDAwMCkiIHN0cm9rZT0iI0ZGRjM5MCIgc3Ryb2tlLXdpZHRoPSIyIj4gICAgICAgICAgICA8cGF0aCBkPSJNMi43MTY3OTY4OCwxNC45NDcyNjU2IEw2LjczNzc5Mjk3LDcuNjkxNDA2MjUgTDExLjQwMzgwODYsMTQuODYzMjgxMiIgaWQ9IlBhdGgtMTciIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNMTMuNDQ2Nzc3Myw2LjI5Njg3NSBMNi42MTI3OTI5Nyw3LjIyMzYzMjgxIEwwLjIwNjA1NDY4OCw2LjUwNTg1OTM4IiBpZD0iUGF0aC0xOCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik03LjEwMDA5NzY2LDAuNDE3OTY4NzUgTDYuODUwMDk3NjYsNy41OTg2MzI4MSIgaWQ9IlBhdGgtMTkiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgIDwvZz4gICAgICAgIDxnIGlkPSJQYXRoLTE3LSstUGF0aC0xOC0rLVBhdGgtMjAiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQyMy4wMDAwMDAsIDIwOC4wMDAwMDApIiBzdHJva2U9IiM1MUNBRDciIHN0cm9rZS13aWR0aD0iMiI+ICAgICAgICAgICAgPHBhdGggZD0iTTIuNzE2Nzk2ODgsMTQuOTQ3MjY1NiBMNi43Mzc3OTI5Nyw3LjY5MTQwNjI1IEwxMS40MDM4MDg2LDE0Ljg2MzI4MTIiIGlkPSJQYXRoLTE3IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICAgICAgPHBhdGggZD0iTTEzLjQ0Njc3NzMsNi4yOTY4NzUgTDYuNjEyNzkyOTcsNy4yMjM2MzI4MSBMMC4yMDYwNTQ2ODgsNi41MDU4NTkzOCIgaWQ9IlBhdGgtMTgiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNNy4xMDAwOTc2NiwwLjQxNzk2ODc1IEw2Ljg1MDA5NzY2LDcuNTk4NjMyODEiIGlkPSJQYXRoLTE5IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8L2c+ICAgICAgICA8ZyBpZD0iR3JvdXAiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDg2LjAwMDAwMCwgMzUuMDAwMDAwKSIgc3Ryb2tlPSIjODUyQzZFIiBzdHJva2Utd2lkdGg9IjIiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0zLjc5NjM4NjcyLDAuNjgzNTkzNzUgTDYuMjI4NzY3NzIsMy4xMTU5NzQ3NSBMOC42NTg5NDY3NiwwLjY4NTc5NTcwMiBNMy43OTYzODY3MiwwLjY4MzU5Mzc1IEw2LjIyODc2NzcyLDMuMTE1OTc0NzUgTDguNjU4OTQ2NzYsMC42ODU3OTU3MDIiIGlkPSJQYXRoLTI5IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICAgICAgPHBhdGggZD0iTTguNjU4OTQ2NzYsMTIuNzYzNDQ1MyBMNi4yMjY1NjU3NywxMC4zMzEwNjQzIEwzLjc5NjM4NjcyLDEyLjc2MTI0MzMgTTguNjU4OTQ2NzYsMTIuNzYzNDQ1MyBMNi4yMjY1NjU3NywxMC4zMzEwNjQzIEwzLjc5NjM4NjcyLDEyLjc2MTI0MzMiIGlkPSJQYXRoLTMyIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICAgICAgPHBhdGggZD0iTTAuNTgwMTk2MjE5LDkuMzMxMDY0MjcgTDMuMDEyNTc3MjIsNi44OTg2ODMyNyBMMC41ODIzOTgxNzIsNC40Njg1MDQyMyBNMC41ODAxOTYyMTksOS4zMzEwNjQyNyBMMy4wMTI1NzcyMiw2Ljg5ODY4MzI3IEwwLjU4MjM5ODE3Miw0LjQ2ODUwNDIzIiBpZD0iUGF0aC0zMSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMi40NDM4NTcyLDQuNDY4NTA0MjMgTDEwLjAxMTQ3NjIsNi45MDA4ODUyMyBMMTIuNDQxNjU1Myw5LjMzMTA2NDI3IE0xMi40NDM4NTcyLDQuNDY4NTA0MjMgTDEwLjAxMTQ3NjIsNi45MDA4ODUyMyBMMTIuNDQxNjU1Myw5LjMzMTA2NDI3IiBpZD0iUGF0aC0zMCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPC9nPiAgICAgICAgPHJlY3QgaWQ9IlJlY3RhbmdsZS0zIiBzdHJva2U9IiNGQjNFNjciIHN0cm9rZS13aWR0aD0iMiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgeD0iMzU3LjUiIHk9IjE3Ni41IiB3aWR0aD0iMTUiIGhlaWdodD0iMTUiPjwvcmVjdD4gICAgICAgIDxnIGlkPSJHcm91cCIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzk3LjAwMDAwMCwgMzkuMDAwMDAwKSIgc3Ryb2tlPSIjRkMzRjZCIiBzdHJva2Utd2lkdGg9IjIiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik00LjA1NzEyODkxLDcuNTk3MTY3OTcgTDAuMDA3ODEyNSw0LjQ0Njc3NzM0IiBpZD0iUGF0aC0zMyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xMC40NjE5MTQxLDEyLjUxMDc0MjIgTDEzLjY3Mjg1MTYsMTUuMjMwNDY4OCIgaWQ9IlBhdGgtMzQiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNNi4xOTA0Mjk2OSw1LjUzNzEwOTM4IEw2LjA5NzY1NjI1LDAuNjg2MDM1MTU2IiBpZD0iUGF0aC0zNSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik05LjQyNTI5Mjk3LDYuNTM3MTA5MzggTDEyLjY3Mjg1MTYsMi42NjQ1NTA3OCIgaWQ9IlBhdGgtMzYiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNMTEuNDc3MDUwOCw4Ljk4NTM1MTU2IEwxNS43OTU4OTg0LDguOTUyNjM2NzIiIGlkPSJQYXRoLTM3IiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8L2c+ICAgICAgICA8cGF0aCBkPSJNMzE1LDM1Mi44MjQyMTkgTDMyMS4yMTY0NywzNTkuMDQwNjg4IEwzMjcuMTcyNzg4LDM1My4wODQzNyIgaWQ9IlBhdGgtNDciIHN0cm9rZT0iIzlENTg4RCIgc3Ryb2tlLXdpZHRoPSIyIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8ZyBpZD0iUGF0aC00OC0rLVBhdGgtNDkiIHNrZXRjaDp0eXBlPSJNU0xheWVyR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQzNy4wMDAwMDAsIDM2MS4wMDAwMDApIiBzdHJva2U9IiNGQjNENkEiIHN0cm9rZS13aWR0aD0iMiI+ICAgICAgICAgICAgPHBhdGggZD0iTTAuMTA3NDIxODc1LDE0Ljc2NzU3ODEgTDE0Ljg0MDAwMTEsMC4wNzQ2NzA1MDA5IiBpZD0iUGF0aC00OCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgICAgIDxwYXRoIGQ9Ik01LjEwNzQyMTg4LDE4Ljc2NzU3ODEgTDE5LjUyODU2OTIsNC40MTIwMjMyNSIgaWQ9IlBhdGgtNDkiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgIDwvZz4gICAgICAgIDxnIGlkPSJQYXRoLTUwLSstUGF0aC01MSIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjYuMDAwMDAwLCAzNzEuMDAwMDAwKSIgc3Ryb2tlPSIjNTFDQUQ3IiBzdHJva2Utd2lkdGg9IjIiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik03LjIyMDAxMDkxLDAuNTczNzE5MjI0IEw3LjIyMDAxMDkxLDEzLjI3NjQ2NiIgaWQ9IlBhdGgtNTAiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgICAgICA8cGF0aCBkPSJNMC41MjYzNzA2MjYsNi45NTI5ODc5OCBMMTIuNzI4NjU4Myw2Ljk1Mjk4Nzk4IiBpZD0iUGF0aC01MSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPC9nPiAgICA8L2c+PC9zdmc+") repeat left top;
}
.look {
  position: absolute;
  z-index: 1;
  color: #fe3a64;
  top: 50%;
  left: 50%;
  margin-left: -6.5625rem;
  margin-top: -3.4375rem;
  letter-spacing: 0.03125rem;
  font-size: 0.875rem;
  text-align: center;
  font-weight: bold;
}
.launch-button {
  font-size: 16px;
  color: #fff;
  background-color: #4acad9;
  box-shadow: 0 0 0 3.875rem #fff;
  border-radius: 0.375rem;
  text-align: center;
  width: 13.75rem;
  height: 2.8125rem;
  line-height: 2.8125rem;
  font-size: 0.875rem;
  font-weight: 600;
  letter-spacing: 0.125rem;
  position: absolute;
  overflow: hidden;
  display: block;
  text-transform: uppercase;
  left: 50%;
  top: 50%;
  margin-left: -6.875rem;
  margin-top: -1.40625rem;
}
.launch-button:hover {
  cursor: pointer;
}
.launch-button:hover .launch-button__glare {
  right: -35%;
  -webkit-transition: all 0.4s linear;
  transition: all 0.4s linear;
}
.launch-button:active {
  opacity: 0.95;
}
.launch-button__glare {
  position: absolute;
  width: 45px;
  height: 200%;
  -webkit-transform: rotate(25deg);
          transform: rotate(25deg);
  background-color: rgba(255,255,255,0.5);
  top: -50%;
  right: 120%;
}
.launch-button__glare:after {
  content: '';
  display: none;
  position: absolute;
  width: 20px;
  height: 100%;
  background: inherit;
  right: -15px;
  top: 0;
}
button,
.button {
  border: 0;
  width: 100%;
  display: block;
  height: 2.5rem;
  border-radius: 0.375rem;
  font-size: 1rem;
  color: #fff;
  background: #222;
  letter-spacing: 0.0625rem;
  outline: none;
}
button:hover,
.button:hover {
  cursor: pointer;
  opacity: 0.9;
}
button--grey,
.button--grey {
  background: #cecece;
}
.modal-holder {
  position: absolute;
  width: 30rem;
  height: 28.125rem;
  z-index: 2;
  top: 50%;
  left: 50%;
  margin-left: -15rem;
  margin-top: -14.0625rem;
}
.modal-holder .svg-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.modal-holder .break-parts {
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 0;
}
.modal-holder .modal {
  position: absolute;
  z-index: 2;
}
.modal-holder .effect {
  position: absolute;
  top: -7.625rem;
  left: 0.125rem;
  z-index: 4;
  display: none;
}
.effect__burst {
  position: absolute;
  width: 3.625rem;
  height: 3.625rem;
  left: 20.125rem;
  top: 1.4375rem;
  opacity: 0.5;
}
.effect__circle {
  position: absolute;
  left: 25rem;
  top: 6.25rem;
  width: 6.25rem;
  height: 6.25rem;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.effect__line {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  position: absolute;
  height: 56.25rem;
  width: 0.25rem;
  left: 28.0625rem;
  top: 9.375rem;
  -webkit-transform-origin: 50% 0;
          transform-origin: 50% 0;
}
.effect__line--1 {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.effect__line--2 {
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.effect__line--3 {
  -webkit-transform: rotate(-135deg);
          transform: rotate(-135deg);
}
.effect__line--4 {
  -webkit-transform: rotate(-225deg);
          transform: rotate(-225deg);
}
.modal {
  background: #fff;
  border-radius: 0.4375rem;
  width: 100%;
  height: 100%;
  color: #222;
  text-align: center;
  letter-spacing: 0.0625rem;
  overflow: hidden;
  display: none;
}
.modal__close {
  position: absolute;
  top: 1.25rem;
  right: 1.25rem;
  display: inline-block;
}
.modal__close:before {
  content: '';
  position: absolute;
  width: 300%;
  height: 300%;
  top: -100%;
  left: -100%;
}
.modal__close:hover {
  opacity: 0.75;
  cursor: pointer;
}
.modal__close .icon {
  width: 1rem;
  height: 1rem;
  fill: #222;
  stroke: #222;
}
.modal__header {
  font-size: 1.5rem;
  margin-top: 5rem;
}
.modal__description {
  font-size: 0.875rem;
  color: #cecece;
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}
.modal__section {
  width: 21.875rem;
  margin-top: 1.25rem;
  margin-left: auto;
  margin-right: auto;
}
	#one{
		margin-top: 0.5rem;
	}
.modal__section:last-of-type {
  margin-top: 1.875rem;
}
.input-with-label {
  text-align: left;
  position: relative;
}
.input-with-label__input {
  height: 2.5rem;
  width: 100%;
  border: 0.125rem solid #222;
  border-radius: 0.375rem;
  background: transparent;
  padding: 0 0.625rem;
  letter-spacing: 0.0625rem;
  font-size: 0.875rem;
  color: #222;
}
.input-with-label__input:hover {
  background: rgba(34,34,34,0.01);
}
.input-with-label__input:not(:focus):not(.is-keep-focus).is-fill + .input-with-label__label {
  display: none;
}
.input-with-label__input:focus,
.input-with-label__input.is-keep-focus {
  outline: none;
  background: rgba(34,34,34,0.01);
}
.input-with-label__input:focus + .input-with-label__label,
.input-with-label__input.is-keep-focus + .input-with-label__label {
  top: -1.125rem;
  left: 0;
  background: #222;
  padding: 0.125rem 0.4375rem 0.25rem;
  font-size: 0.625rem;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  color: #fff;
  letter-spacing: 0.0625rem;
}
.input-with-label__input:focus + .input-with-label__label .input-with-label__label__corner,
.input-with-label__input.is-keep-focus + .input-with-label__label .input-with-label__label__corner {
  display: block;
}
.input-with-label__label {
  font-size: 0.875rem;
  display: block;
  position: absolute;
  color: #cecece;
  top: 0.625rem;
  left: 0.625rem;
  cursor: text;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.input-with-label__label__corner {
  display: none;
  position: absolute;
  left: 0;
  bottom: -0.25rem;
  width: 0;
  height: 0;
  border: 0.25rem solid transparent;
  border-left-color: #222;
}
.modal-overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background: rgba(34,34,34,0.9);
  z-index: 1;
}
.svg-overlay {
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  display: none;
}
.svg-overlay--2 {
  -webkit-transform-origin: 96% 2%;
          transform-origin: 96% 2%;
}
.svg-overlay--3 {
  -webkit-transform-origin: 97% 6%;
          transform-origin: 97% 6%;
}
.svg-overlay svg {
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  position: absolute;
}
.by {
  position: absolute;
  right: 1.25rem;
  bottom: 1.25rem;
  width: 5.125rem;
  height: 5.125rem;
  border-radius: 50%; 
	background-color: white;
  background: url("images/icon/icon_1.png") no-repeat center center;
  background-image: url("images/icon/icon_1.png");
  z-index: 3;
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<link href="../assets/change/log_2/font.css" rel="stylesheet" type="text/css">
<svg id="svg-source" height="0" version="1.1" xmlns="#" style="position:absolute; margin-left: -100%" xmlns:xlink="http://www.w3.org/1999/xlink">
<g id="close-icon">
<path d="M0.014,1.778L1.79,0.001l30.196,30.221l-1.778,1.777L0.014,1.778z" />
<path d="M1.79,31.999l-1.776-1.777L30.208,0.001l1.778,1.777L1.79,31.999z" />
</g>
</svg>
<div class="look"></div><a href="#" class="by"></a>
<div id="js-show-modal" class="launch-button">show modal
<div class="launch-button__glare"></div>
</div>
<div id="js-modal-overlay" class="modal-overlay"></div>
<div id="js-modal-holder" class="modal-holder">
<div id="js-hint1" class="hint hint--1">Read the Change log.. </div>
<div id="js-hint2" class="hint hint--2">then hit<br> the close icon</div>
<div id="js-effect" style="outline1: 1px solid red" class="effect">
<div class="effect__burst">
<svg viewBox="0 0 300 300" width="300" height="300" id="js-burst">
<g id="Group" sketch:type="MSLayerGroup" transform="translate(2.000000, 2.000000)">
<path d="M119.843557,132.665423 L142.438936,241.234321" stroke="#FC46AD" stroke-width="2" transform="translate(131.141247, 186.949872) rotate(9.000000) translate(-131.141247, -186.949872) "></path>
<path d="M120.923275,136.327807 L194.055085,223.544529" stroke="#D0D202" stroke-width="2" transform="translate(157.489180, 179.936168) rotate(9.000000) translate(-157.489180, -179.936168) "></path>
<path d="M110.892215,7.63766131 L143.724586,126.274355" stroke="#FFE217" stroke-width="2" transform="translate(127.308401, 66.956008) rotate(-165.000000) translate(-127.308401, -66.956008) "></path>
<path d="M198.35904,105.458064 L161.773069,223.598866" stroke="#B8E986" stroke-width="3" transform="translate(180.066054, 164.528465) rotate(-74.000000) translate(-180.066054, -164.528465) "> </path>
<path d="M146.454121,53.5458334 L227.175148,153.69563" stroke="#D0D202" stroke-width="2" transform="translate(186.814634, 103.620732) rotate(-74.000000) translate(-186.814634, -103.620732) "> </path>
<path d="M94.4127006,27.0036828 L46.0682754,156.269505" stroke="#51CAD7" stroke-width="3" transform="translate(70.240488, 91.636594) rotate(-257.000000) translate(-70.240488, -91.636594) "> </path>
<path d="M29.3969741,113.63349 L113.205038,207.338224" stroke="#FC3F6B" stroke-width="2" transform="translate(71.301006, 160.485857) rotate(-257.000000) translate(-71.301006, -160.485857) "> </path>
<path d="M125.792,38.3112087 L198.92381,125.527931" stroke="#D0D202" stroke-width="2" transform="translate(162.357905, 81.919570) rotate(-104.000000) translate(-162.357905, -81.919570) "> </path>
<path d="M43.4006609,130.173225 L130.540432,224.973356" stroke="#FC46AD" stroke-width="2" transform="translate(86.970546, 177.573291) rotate(-278.000000) translate(-86.970546, -177.573291) "> </path>
<path d="M157.646537,8.08731537 L121.060566,126.228117" stroke="#B8E986" stroke-width="3" transform="translate(139.353552, 67.157716) rotate(-187.000000) translate(-139.353552, -67.157716) "> </path>
<path d="M139.340711,132.100895 L90.9962855,261.366717" stroke="#51CAD7" stroke-width="3" transform="translate(115.168498, 196.733806) rotate(-10.000000) translate(-115.168498, -196.733806) "> </path>
<path d="M136.22617,122.003677 L220.034234,215.708411" stroke="#FC3F6B" stroke-width="2" transform="translate(178.130202, 168.856044) rotate(-10.000000) translate(-178.130202, -168.856044) "></path>
</g>
</svg>
</div>
<div class="effect__circle">
<svg viewBox="0 0 100 100" width="100" height="100">
<circle cx="50" cy="50" fill="none" id="js-circle"></circle>
</svg>
</div>
<div class="effect__line effect__line--1">
<svg viewBox="0 0 4 900" width="4" height="900">
<defs>
<g id="proto-line" class="js-line">
<line x1="2" x2="2" y1="0" y2="900" stroke="red" stroke-dasharray="900 1800" stroke-dashoffset="900"></line>
<line x1="2" x2="2" y1="0" y2="900" stroke="red" stroke-dasharray="900 1800" stroke-dashoffset="900"></line>
<line x1="2" x2="2" y1="0" y2="900" stroke="red" stroke-dasharray="900 1800" stroke-dashoffset="900"></line>
</g>
</defs>
<use xlink:href="#proto-line" width="4" height="900"></use>
</svg>
</div>
<div class="effect__line effect__line--2">
<svg viewBox="0 0 4 900" width="4" height="900">
<use xlink:href="#proto-line" width="4" height="900"></use>
</svg>
</div>
<div class="effect__line effect__line--3">
<svg viewBox="0 0 4 900" width="4" height="900">
<use xlink:href="#proto-line" width="4" height="900"></use>
</svg>
</div>
<div class="effect__line effect__line--4">
<svg viewBox="0 0 4 900" width="4" height="900">
<use xlink:href="#proto-line" width="4" height="900"></use>
</svg>
</div>
</div>
<form1 action="" id="js-modal" class="modal">
<div id="js-close-button" class="modal__close">
<div id="" title="" class="icon ">
<svg viewBox="0 0 32 32">
<use xlink:href="#close-icon"></use>
</svg>
</div>
</div>
<div class="modal__header">What's New</div>
<div class="modal__description">this is dumb modal window, click × to close it</div>
<div class="modal__section">
- I am selling replica of this theme click <br><br><a href="select.php">here</a>.
</div>
<div class="modal__section">
- Facebook login is coming soon!
</div>
<div class="modal__section">
- Gamers Origin Desktop Application <div id="one">is Coming Soon.</div>
</div>
</form1>
<svg style="display:none">
<image width="480" height="450" xlink:href="" id="proto-image" class="js-proto-image"></image>
</svg>
<div id="js-break-parts" class="break-parts">
<div id="js-svg-overlay" class="svg-overlay">
<svg viewBox="0 0 480 450" id="js-svg1">
<clipPath id="clip1">
<path d="M0,450.575574 L0,0 L424.903452,0 L452.375,28.5599486 L20.5087638,460.426185 L0,450.575574 Z"></path>
</clipPath>
<use xlink:href="#proto-image" clip-path="url(#clip1)" id="js-image1"></use>
</svg>
</div>
<div class="svg-overlay svg-overlay--2">
<svg viewBox="0 0 480 450" id="js-svg2">
<clipPath id="clip2">
<path d="M452.214614,28.6494713 L424.309513,0 L482.040672,0 L452.214614,28.6494713 Z"></path>
</clipPath>
<use xlink:href="#proto-image" clip-path="url(#clip2)" id="js-image2"></use>
</svg>
</div>
<div class="svg-overlay svg-overlay--3">
<svg viewBox="0 0 480 450" id="js-svg3">
<clipPath id="clip3">
<path d="M452.320312,28.526424 L482,58 L482,0.066291362 L452.320312,28.526424 Z"></path>
</clipPath>
<use xlink:href="#proto-image" clip-path="url(#clip3)" id="js-image3"></use>
</svg>
</div>
<div class="svg-overlay">
<svg viewBox="0 0 480 450" id="js-svg4">
<clipPath id="clip4">
<path d="M452.270844,28.4954427 L482,57.8942871 L482,451 L29.2740886,450.99999 L452.270844,28.4954427 Z"></path>
</clipPath>
<use xlink:href="#proto-image" clip-path="url(#clip4)" id="js-image4"></use>
</svg>
</div>
</div>
</div>
<script src='assets/change/log_2/jquery.min.js'></script>
<script src='assets/change/log_2/howler.min.js'></script>
<script src='assets/change/log_2/tween.min.js'></script>
<script src='assets/change/log_2/canvas.js'></script>
<script id="rendered-js">
(function () {
  var Main;

  Main = class Main {
    constructor(o = {}) {
      this.o = o;
      this.vars();
      this.listeners();
    }

    vars() {
      var crack1, crack3, isOpera, url;
      this.$effect = $('#js-effect');
      this.$close = $('#js-close-button');
      this.$modal = $('#js-modal');
      this.$modalHolder = $('#js-modal-holder');
      this.$protoImage = $('.js-proto-image');
      this.$breakParts = $('#js-break-parts');
      this.$modalOverlay = $('#js-modal-overlay');
      this.$hint1 = $('#js-hint1');
      this.$hint2 = $('#js-hint2');
      this.$burst = $('#js-burst');
      this.$burstPaths = this.$burst.find('path');
      this.$showModal = $('#js-show-modal');
      this.$circle = $('#js-circle');
      this.$breakParts = $('#js-break-parts');
      this.$breakOverlays = this.$breakParts.find('.svg-overlay');
      this.$breakPart1 = this.$breakOverlays.eq(0);
      this.$breakPart2 = this.$breakOverlays.eq(1);
      this.$breakPart3 = this.$breakOverlays.eq(2);
      this.$breakPart4 = this.$breakOverlays.eq(3);
      this.$svgOverlay = $('.svg-overlay');
      this.$lines = $('.js-line').children();
      this.loop = this.loop.bind(this);
      this.loop();
      this.initEffectTweens();
      this.showModal(true);
      this.showHints(700);
      isOpera = navigator.userAgent.match(/Opera|OPR\//);
      url = !isOpera ? 'images/sounds/crack3.mp3' : 'images/sounds/crack1.wav';
      return this.audio = new Howl({
        urls: [url] });

    }

    showHints(delay) {
      var HIDE_DELAY, HINT2_DELAY, it;
      it = this;
      HIDE_DELAY = 5000;
      HINT2_DELAY = 200;
      this.hint1T = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      500).onUpdate(function () {
        return it.$hint1.css({
          opacity: this.p });

      }).delay(delay).start();
      this.hint2T = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      500).onUpdate(function () {
        return it.$hint2.css({
          opacity: this.p });

      }).delay(delay + HINT2_DELAY).start();
      return this.hintHideT = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      500).onUpdate(function () {
        it.$hint1.css({
          opacity: 1 - this.p });

        return it.$hint2.css({
          opacity: 1 - this.p });

      }).delay(delay + HINT2_DELAY + HIDE_DELAY).start();
    }

    showModal(isFirst) {
      var tm;
      if (isFirst) {
        tm = setTimeout(() => {
          this.$modal.find('input').val('');
          return clearTimeout(tm);
        }, 10);
      }
      this.initEffectTweens(isFirst);
      return this.showModalT.start();
    }

    listeners() {
      var $input;
      this.$showModal.on('click', () => {
        return this.showModal();
      });
      this.$modal.on('keyup', 'input', function (e) {
        var $it, k, text;
        $it = $(e.target);
        text = $it.val();
        $it.toggleClass('is-fill', !!text);
        if ($it.attr('type') === 'text') {
          text = text.replace(/\s/g, '');
        }
        k = e.keyCode;
        if (k > 48 && k < 90 || k === 48 || k === 45 || k === 32) {
          return $it.val(text);
        }
      });
      $input = null;
      this.$close.on('mouseleave touchstart', function () {
        if ($input != null) {
          $input.removeClass('is-keep-focus');
        }
        return $input = null;
      });
      this.$close.on('mouseenter touchstart', () => {
        $input = $('input:focus').addClass('is-keep-focus');
        return html2canvas(this.$modal, {
          onrendered: canvas => {
            var dataURL;
            dataURL = canvas.toDataURL();
            this.$svgOverlay.css({
              display: 'block' });

            return this.$protoImage.attr('xlink:href', dataURL);
          } });

      });
      return this.$close.on('click', () => {
        this.$modal.css({
          display: 'none' });

        this.$breakParts.css({
          'z-index': 2,
          opacity: 1 });

        this.$effect.show();
        this.launchEffects();
        this.audio.play();
        return true;
      });
    }

    initEffectTweens(isFirst) {
      var colors, i, it, j, len, len1, path, ref, shakeOffset, showLen, showOffset;
      it = this;
      this.s = 1;
      ref = it.$burstPaths;
      for (i = j = 0, len1 = ref.length; j < len1; i = ++j) {
        path = ref[i];
        len = path.getTotalLength();
        showLen = this.rand(0, ~~len / 2);
        showOffset = this.rand(0, -~~len);
        path.len = len;
        path.showLen = showLen;
        path.showOffset = showOffset;
        path.strokeWidth = this.rand(0, 5);
        path.setAttribute('stroke-dasharray', `${showLen} ${3 * len}`);
        path.setAttribute('stroke-dashoffset', showLen);
        path.setAttribute('stroke-linecap', 'round');
      }
      len = 900;
      colors = ['hotpink', 'yellow', 'cyan'];
      this.linesT = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      900 * this.s).easing(TWEEN.Easing.Exponential.Out).onUpdate(function () {
        var l, len2, line, nP, p, progress, ref1;
        p = this.p;
        nP = 1 - p;
        progress = len * nP - len * p;
        ref1 = it.$lines;
        for (i = l = 0, len2 = ref1.length; l < len2; i = ++l) {
          line = ref1[i];
          line.setAttribute('stroke-dashoffset', progress + i * 500 * nP);
          line.setAttribute('stroke', colors[i]);
          line.setAttribute('stroke-width', 2 * nP);
        }
        return it.$circle.attr({
          r: 11 * p,
          fill: `rgba(${~~(0 + 255 * p)},${~~(255 - 153 * p)},${~~(255 - 75 * p)}, ${nP})`,
          'stroke-width': 7 * nP });

      }).onComplete(() => {
        return this.$effect.css({
          display: 'none' });

      });
      this.burstT = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      400 * this.s).onUpdate(function () {
        var l, len2, nP, p, ref1, results;
        p = this.p;
        nP = 1 - p;
        ref1 = it.$burstPaths;
        results = [];
        for (i = l = 0, len2 = ref1.length; l < len2; i = ++l) {
          path = ref1[i];
          path.setAttribute('stroke-dashoffset', path.showOffset - path.len * p);
          results.push(path.setAttribute('stroke-width', path.strokeWidth * nP));
        }
        return results;
      });
      shakeOffset = 50;
      this.shakeT = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      350 * this.s).onUpdate(function () {
        var nP, p, shake;
        p = this.p;
        nP = 1 - p;
        shake = shakeOffset * nP;
        it.$breakParts.css({
          transform: `translate(${shake}px, ${shake}px)` });

        return it.$effect.css({
          transform: `translate(${-.75 * shake}px, ${-.5 * shake}px)` });

      }).easing(TWEEN.Easing.Elastic.Out);
      this.shiftT = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1
        // .easing TWEEN.Easing.Quadratic.In
      }, 1350 * this.s).easing(TWEEN.Easing.Sinusoidal.In).onUpdate(function () {
        var nP, p, shift, t1, t4;
        p = this.p;
        nP = 1 - p;
        shift = 900 * p;
        t1 = `translate(${-shift}px, ${1000 * p}px) rotate(${-50 * p}deg)`;
        t4 = `translate(0, ${1000 * p}px) rotate(${-15 * p}deg)`;
        it.$breakPart1.css({
          transform: t1 });

        it.$breakPart4.css({
          transform: t4 });

        return it.$modalOverlay.css({
          transform: `translate(0, ${50 * p})`,
          opacity: nP });

      }).onComplete(() => {
        this.$modalOverlay.css({
          display: 'none' });

        this.$breakParts.css({
          display: 'none' });

        return this.$modalHolder.css({
          display: 'none' });

      });
      this.shiftT2 = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      1350 * this.s).onUpdate(function () {
        var nP, p, shift, t2, t3;
        p = this.p;
        nP = 1 - p;
        shift = 900 * p;
        t2 = `translate(${-1670 * p}px, ${-800 * p}px) rotate(${905 * p}deg)`;
        t3 = `translate(${1000 * p}px, ${700 * p}px) rotate(${-1500 * p}deg)`;
        it.$breakPart2.css({
          transform: t2 });

        return it.$breakPart3.css({
          transform: t3 });

      });
      return this.showModalT = new TWEEN.Tween({
        p: 0 }).
      to({
        p: 1 },
      800 * this.s).easing(TWEEN.Easing.Exponential.Out).onStart(() => {
        TWEEN.remove(this.shiftT);
        TWEEN.remove(this.shiftT2);
        TWEEN.remove(this.shakeT);
        TWEEN.remove(this.linesT);
        TWEEN.remove(this.burstT);
        this.$modal.css({
          display: 'block',
          opacity: 0 });

        this.$breakParts.css({
          display: 'block' });

        this.$modalHolder.css({
          display: 'block' });

        !isFirst && this.$modalOverlay.css({
          display: 'block',
          opacity: 0 });

        this.$breakPart1.css({
          transform: 'none' });

        this.$breakPart2.css({
          transform: 'none' });

        this.$breakPart3.css({
          transform: 'none' });

        this.$breakPart4.css({
          transform: 'none' });

        this.$modal.css({
          display: 'block' });

        return this.$breakParts.css({
          'z-index': 0,
          opacity: 0 });

      }).onUpdate(function () {
        var nP, p;
        p = this.p;
        nP = 1 - p;
        it.$modal.css({
          opacity: p,
          transform: `translateY(${15 * nP}px)` });

        return !isFirst && it.$modalOverlay.css({
          opacity: p });

      });
    }

    launchEffects() {
      this.$hint1.hide();
      this.$hint2.hide();
      this.burstT.start();
      this.linesT.start();
      this.shiftT.start();
      this.shiftT2.start();
      return this.shakeT.start();
    }

    loop() {
      requestAnimationFrame(this.loop);
      return TWEEN.update();
    }

    rand(min, max) {
      return Math.floor(Math.random() * (max + 1 - min) + min);
    }};



  new Main();

}).call(this);


//# sourceURL=coffeescript
//# sourceURL=pen.js
    </script>
	
	<!-- start-Disable Right Click -->
	
	<script type="text/javascript">
         $(document).ready(function() {
         	$('body').bind('cut copy paste', function(e){
         		e.preventDefault();
         	})
			 $("body").on("contextmenu", function(e){
				 return false;
         })
			 })
      </script>
	
     <!-- end-Disable Right Click -->
	
</body>
</html>

