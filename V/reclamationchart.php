<?php
 header("Content-type: text/css; charset: UTF-8");
.heade-chart
{
    text-align: left;
    font-size: 14px;
}
.pieContainer {
    height: 150px;
    position: relative;

  }
  
  .pieBackground {
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 100%;
    box-shadow: 0px 0px 8px rgba(255, 255, 255, 0.5);
  } 
  
  .pie {
    transition: all 1s;
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 100%;
    clip: rect(0px, 75px, 360px, 0px);
  }
  
  .hold {
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 100%;
    clip: rect(0px, 150px, 150px, 75px);
  }
  
  #pieSlice1 {
    transform: rotate(180deg);
  }
  #pieSlice1 .pie {
    background-color: rgb(255, 16, 235);
    transform:rotate(180deg);
  }
  
  #pieSlice2 {
    transform: rotate(0deg);
  }
  
  #pieSlice2 .pie {
    background-color: rgb(255, 16, 235);
    transform: rotate(180deg);
  }
  #pieSlice3 {
    transform: rotate(0deg);
  }
  #pieSlice3 .pie {
    background-color: rgb(108, 0, 170);
    transform:rotate(0deg);
  }#pieSlice4{
    transform: rotate(180deg);
  }
  #pieSlice4 .pie {
    background-color:  rgb(108, 0, 170);
    transform:rotate(0deg);
  }
  .innerCircle {
    position: absolute;
    width: 120px;
    height: 120px;
    background-color: rgb(255, 255, 255);
    border-radius: 100%;
    top: 15px;
    left: 15px; 
    box-shadow: 0px 0px 8px rgba(140, 0, 255, 0.5) inset;
    color: white;
  }
  .innerCircle .content {
    position: absolute;
    display: block;
    width: 120px;
    top: 30px;
    left: 0;
    text-align: center;
    font-size: 14px;
  }
  ?>