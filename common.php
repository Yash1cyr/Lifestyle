<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$con = mysqli_connect("localhost", "root", "yash@2002ip", "ecommerce")
        or die(mysqli_error($con));
session_start();