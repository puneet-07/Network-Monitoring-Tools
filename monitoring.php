<?php

$radio_selected=$_POST["networktype"];


$option_selected=$_POST["choice"];

echo " <b>$radio_selected</b> and its <b>$option_selected</b> header informatoin is:---------------- <br><br><br> ";


if($radio_selected=="ARP" && $option_selected=="Timestamp")
{
$myfile = fopen("arp_timestamp.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="ARP" && $option_selected=="Source Ip")
{
$myfile = fopen("arp_sip.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
    

}
if($radio_selected=="ARP" && $option_selected=="Destination Ip")
{
$myfile = fopen("arp_dip.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
    

}

if($radio_selected=="ARP" && $option_selected=="Source Mac Address")
{
$myfile = fopen("arp_soumac.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}


if($radio_selected=="ARP" && $option_selected=="Destination Mac Address")
{
$myfile = fopen("arp_desmac.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}



if($radio_selected=="ARP" && $option_selected=="Length of Packet")
{
$myfile = fopen("arp_len.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}


if($radio_selected=="ARP" && $option_selected=="Source Port")
    echo "No Source port found.";
if($radio_selected=="ARP" && $option_selected=="Destination Port")
    echo "No Destination port found.";
///////////////////////////////////////

if($radio_selected=="tcp" && $option_selected=="Timestamp")
{
$myfile = fopen("tcp_timestamp.txt", "r") or die("Unable to open file!");

 $k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="tcp" && $option_selected=="Source Ip")
{
$myfile = fopen("tcp_sip.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}if($radio_selected=="tcp" && $option_selected=="Destination Ip")
{
$myfile = fopen("tcp_dip.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}if($radio_selected=="tcp" && $option_selected=="Source Mac Address")
{
$myfile = fopen("tcp_soumac.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="tcp" && $option_selected=="Destination Mac Address")
{
$myfile = fopen("tcp_desmac.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="tcp" && $option_selected=="Length of Packet")
{
$myfile = fopen("tcp_len.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="tcp" && $option_selected=="Source Port")
    {$myfile = fopen("tcp_sport.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="tcp" && $option_selected=="Destination Port")
{$myfile = fopen("tcp_dport.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}

////////////////////////////////////////////

if($radio_selected=="udp" && $option_selected=="Timestamp")
{
$myfile = fopen("udp_timestamp.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}

if($radio_selected=="udp" && $option_selected=="Source Ip")
{
$myfile = fopen("udp_sip.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}if($radio_selected=="udp" && $option_selected=="Destination Ip")
{
$myfile = fopen("udp_dip.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}if($radio_selected=="udp" && $option_selected=="Source Mac Address")
{
$myfile = fopen("udp_soumac.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="udp" && $option_selected=="Destination Mac Address")
{
$myfile = fopen("udp_desmac.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}

if($radio_selected=="udp" && $option_selected=="Length of Packet")
{
$myfile = fopen("udp_len.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="udp" && $option_selected=="Source Port")
    {$myfile = fopen("udp_sport.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}
if($radio_selected=="udp" && $option_selected=="Destination Port")
{$myfile = fopen("udp_dport.txt", "r") or die("Unable to open file!");
$k=0;
while(!feof($myfile)) {
    
  $arr[$k]= fgets($myfile) ;
    $k++;

}
echo "<table border='1'  align='center' cellspacing='7'>";
        echo "<tr>";
echo "<td><b>$radio_selected $option_selected</b></td>";echo "</tr >";
for($i=0;$i<$k-1;$i++)
{
 echo "<tr>";
 
    echo "<td>$arr[$i]</td>";
echo "</tr >";
    
} 
    
    echo "</table>";
fclose($myfile);
}

?>
