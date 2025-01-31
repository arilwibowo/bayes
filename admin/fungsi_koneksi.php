<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "bayes";

// Koneksi dan memilih database di server
$con = mysqli_connect($server,$username,$password, $database);
if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
session_start();

$quisioner0 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[0]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[0]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[0]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[0]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[0]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[0]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[0]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[0]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[0]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[0]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[0]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[0]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[0] = $quisioner0['ya_tepat'];
$t1[0] = $quisioner0['tidak_tepat'];
$y2[0] = $quisioner0['ya_terlambat'];
$t2[0] = $quisioner0['tidak_terlambat'];

$quisioner1 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[1]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[1]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[1]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[1]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[1]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[1]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[1]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[1]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[1]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[1]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[1]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[1]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[1] = $quisioner1['ya_tepat'];
$t1[1] = $quisioner1['tidak_tepat'];
$y2[1] = $quisioner1['ya_terlambat'];
$t2[1] = $quisioner1['tidak_terlambat'];

$quisioner2 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[2]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[2]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[2]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[2]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[2]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[2]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[2]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[2]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[2]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[2]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[2]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[2]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[2] = $quisioner2['ya_tepat'];
$t1[2] = $quisioner2['tidak_tepat'];
$y2[2] = $quisioner2['ya_terlambat'];
$t2[2] = $quisioner2['tidak_terlambat'];

$quisioner3 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[3]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[3]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[3]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[3]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[3]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[3]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[3]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[3]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[3]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[3]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[3]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[3]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[3] = $quisioner3['ya_tepat'];
$t1[3] = $quisioner3['tidak_tepat'];
$y2[3] = $quisioner3['ya_terlambat'];
$t2[3] = $quisioner3['tidak_terlambat'];

$quisioner4 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[4]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[4]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[4]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[4]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[4]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[4]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[4]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[4]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[4]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[4]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[4]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[4]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[4] = $quisioner4['ya_tepat'];
$t1[4] = $quisioner4['tidak_tepat'];
$y2[4] = $quisioner4['ya_terlambat'];
$t2[4] = $quisioner4['tidak_terlambat'];

$quisioner5 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[5]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[5]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[5]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[5]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[5]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[5]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[5]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[5]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[5]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[5]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[5]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[5]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[5] = $quisioner5['ya_tepat'];
$t1[5] = $quisioner5['tidak_tepat'];
$y2[5] = $quisioner5['ya_terlambat'];
$t2[5] = $quisioner5['tidak_terlambat'];

$quisioner6 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[6]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[6]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[6]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[6]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[6]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[6]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[6]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[6]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[6]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[6]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[6]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[6]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[6] = $quisioner6['ya_tepat'];
$t1[6] = $quisioner6['tidak_tepat'];
$y2[6] = $quisioner6['ya_terlambat'];
$t2[6] = $quisioner6['tidak_terlambat'];

$quisioner7 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[7]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[7]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[7]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[7]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[7]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[7]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[7]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[7]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[7]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[7]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[7]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[7]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[7] = $quisioner7['ya_tepat'];
$t1[7] = $quisioner7['tidak_tepat'];
$y2[7] = $quisioner7['ya_terlambat'];
$t2[7] = $quisioner7['tidak_terlambat'];

$quisioner8 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[8]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[8]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[8]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[8]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[8]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[8]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[8]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[8]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[8]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[8]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[8]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[8]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[8] = $quisioner8['ya_tepat'];
$t1[8] = $quisioner8['tidak_tepat'];
$y2[8] = $quisioner8['ya_terlambat'];
$t2[8] = $quisioner8['tidak_terlambat'];

$quisioner9 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[9]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[9]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[9]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[9]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[9]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[9]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[9]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[9]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[9]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[9]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[9]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[9]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[9] = $quisioner9['ya_tepat'];
$t1[9] = $quisioner9['tidak_tepat'];
$y2[9] = $quisioner9['ya_terlambat'];
$t2[9] = $quisioner9['tidak_terlambat'];

$quisioner10 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[10]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[10]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[10]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[10]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[10]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[10]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[10]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[10]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[10]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[10]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[10]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[10]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[10] = $quisioner10['ya_tepat'];
$t1[10] = $quisioner10['tidak_tepat'];
$y2[10] = $quisioner10['ya_terlambat'];
$t2[10] = $quisioner10['tidak_terlambat'];

$quisioner11 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[11]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[11]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[11]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[11]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[11]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[11]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[11]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[11]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[11]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[11]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[11]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[11]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[11] = $quisioner11['ya_tepat'];
$t1[11] = $quisioner11['tidak_tepat'];
$y2[11] = $quisioner11['ya_terlambat'];
$t2[11] = $quisioner11['tidak_terlambat'];

$quisioner12 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[12]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[12]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[12]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[12]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[12]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[12]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[12]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[12]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[12]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[12]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[12]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[12]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[12] = $quisioner12['ya_tepat'];
$t1[12] = $quisioner12['tidak_tepat'];
$y2[12] = $quisioner12['ya_terlambat'];
$t2[12] = $quisioner12['tidak_terlambat'];

$quisioner13 = mysqli_fetch_array(mysqli_query($con, "select ROUND(count(CASE WHEN `quisioner[13]`='YA' and lulus_quisioner='TEPAT' 
THEN `quisioner[13]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[13]` END),2) as ya_tepat, ROUND(count(CASE WHEN `quisioner[13]`='TIDAK' and lulus_quisioner='TEPAT' 
THEN `quisioner[13]` END)/count(CASE WHEN lulus_quisioner='TEPAT' THEN `quisioner[13]` END),2) as tidak_tepat, ROUND(count(CASE WHEN `quisioner[13]`='YA' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[13]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[13]` END),2) as ya_terlambat, ROUND(count(CASE WHEN `quisioner[13]`='TIDAK' and lulus_quisioner='TERLAMBAT' 
THEN `quisioner[13]` END)/count(CASE WHEN lulus_quisioner='TERLAMBAT' THEN `quisioner[13]` END),2) as tidak_terlambat from `01_quisioner`"));
$y1[13] = $quisioner13['ya_tepat'];
$t1[13] = $quisioner13['tidak_tepat'];
$y2[13] = $quisioner13['ya_terlambat'];
$t2[13] = $quisioner13['tidak_terlambat'];
?>
