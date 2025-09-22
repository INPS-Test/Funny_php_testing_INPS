<?php
echo "hello world";
echo PHP_INT_MAX;
$Firstvar = "Hi";
echo $Firstvar;
echo " ";
$Num1 = 58465;
$num2 = 6;
var_dump($num2);
echo " ";
var_dump($Firstvar);
$num3 = $Num1*$num2;
echo $num3;
//komment: niilo is working
echo " ";
$List[0]="Movie";
$List[1]="Movie 2";
var_dump($List);
echo " ";
echo($List[1]);
$List[1]=$Firstvar;
echo " ";
echo($List[1]);
echo " ";
var_dump($List);
$arraylistthingystuffy=array(
    "thing1"=>array(
        0=>"thingy1thing1",
        1=>"thingy1thing2",
        2=>"thingy1thing3",
        3=>"thingy1thing4"

    ),
    "thingy2"=>array(
        0=>"thingy2thing1",
        1=>9
    )
);
echo $arraylistthingystuffy["thing1"] [3];
echo " ";
$arraylist2stuffything=array(
    "array2thing1"=>array(
        0=> "array2thingy1thing1",
        1=>1,
    ),
    "array2thingy2"=>array(
        0=> "array2thingy2thing1"
    )
);
$arraylistcombinethingystuffything = $arraylistthingystuffy["thingy2"] [1]+ $arraylist2stuffything["array2thing1"] [1];
echo $arraylistcombinethingystuffything;
echo " ";
$sortatavalist=array(1,5,6,2,3);
sort($sortatavalist);   
print_r ($sortatavalist);
echo " ";
$funnynumvar=9;
$funnynumvar2=6;
if ($funnynumvar<$funnynumvar2){
    echo $funnynumvar2;
}
else{
    echo $funnynumvar;
};
echo " ";
$ndufasede=0;
switch($ndufasede){
    case 0:
        echo "Nice";
        break;
    case 1:
        echo "Number 1";
        break;
    case 2:
        echo "funny";
        break;
    default:
        echo "smth else";
        break;
};
echo " ";
$num4=0;
for ($num4; $num4<=6; $num4++) { //do not fucking replace the ++ with --
    echo $num4;
};
echo " ";
echo "funny text";
$funlist=array("Tiger","Dog","Flamingo","Leopard");
foreach($funlist as $mewvalueforfunylist) {
    echo $mewvalueforfunylist;
};
while ($num4<9) {
    $num4=$num4+1;
    echo $num4;
};
echo ("<br>");
$funnyvariablethingywillynalliwulli="sdfBHHDHUihsdurtAhif";
echo strtolower($funnyvariablethingywillynalliwulli);
echo strtoupper($funnyvariablethingywillynalliwulli);
echo strlen($funnyvariablethingywillynalliwulli);
$funnynumbervariable=1;
if (is_numeric($funnynumbervariable)) {
    echo " is number ";
    if ($funnynumbervariable<100) {
        echo "is lower than 100 ";
        if ($funnynumbervariable<50) {
            echo "is lower than 50 ";
        }
        else {
            echo "is higer than 50 ";
        }
    }
    else {
        echo "is higer than 100 ";
        if ($funnynumbervariable<1000) {
            echo "is lower than 1000 ";
        }
        else {
            echo "is higer than 1000 ";
        }
    };
};
$i=1;
while ($i<10){
    echo rand(1,1000);
    $i++;
};
echo " ";
echo pi();
echo " ";
function fuctio($number,$number2) {
    echo rand($number, $number2);
};
fuctio(100,200);
echo " ";
$ipAddress = $_SERVER['REMOTE_ADDR'];
echo $ipAddress;
echo " ",
$port = $_SERVER['SERVER_PORT'];
echo $port;
$Aip= ["::1"];
if (in_array($ipAddress,$Aip)){
    echo "acess granted";
}
else {
    echo "acess denied";
}