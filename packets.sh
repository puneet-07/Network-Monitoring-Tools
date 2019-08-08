#!/bin/bash

tcpdump -ne -c 3000 > pack.txt
grep "Flags" pack.txt > tcp.txt
grep -ve "Flags" -ve "ARP" pack.txt > udp.txt
grep "ARP" pack.txt > arp.txt


//***********ARP************//
cut -d " " -f 1  arp.txt > arp_timestamp.txt
cut -d " " -f 2 arp.txt > arp_soumac.txt
cut -d " " -f 4 arp.txt | cut -d "," -f 1 > arp_desmac.txt
( grep "Reply" arp.txt | cut -f 11 -d " " && grep "Request" arp.txt | cut -f 12 -d " " ) > arp_sip.txt
( grep "Reply" arp.txt | cut -f 13 -d " " | cut -f 1  -d "," && grep "Request" arp.txt | cut -f 14 -d " " | cut -f 1  -d ",") > arp_dip.txt
cut -d " " -f 9  arp.txt | cut -d ":" -f 1 > arp_len.txt

//***********UDP************//

cut -d " " -f 1 udp.txt > udp_timestamp.txt
cut -d " " -f 2 udp.txt > udp_soumac.txt
cut -d " " -f 4 udp.txt | cut -d "," -f 1 > udp_desmac.txt

cut -d " " -f 9 udp.txt | cut -d ":" -f 1 > udp_len.txt

( grep "IPv4" udp.txt | cut -d " " -f 10 | cut -d "." -f 1-4   &&  grep "IPv6" udp.txt | cut -d " " -f 10 |cut -d "." -f 1  )  > udp_sip.txt


( grep "IPv4" udp.txt | cut -d " " -f 12 | cut -d "." -f 1-4  &&  grep "IPv6" udp.txt | cut -d " " -f 12 |cut -d "." -f 1  )  > udp_dip.txt

( grep "IPv4" udp.txt | cut -d " " -f 12 | cut -d "." -f 5 | cut -d ":" -f 1 &&  grep "IPv6" udp.txt | cut -d " " -f 12 |cut -d "." -f 2  | cut -d ":" -f 1)  > udp_dport.txt

 ( grep "IPv4" udp.txt | cut -d " " -f 10 | cut -d "." -f 5 | cut -d ":" -f 1 &&  grep "IPv6" udp.txt | cut -d " " -f 10 |cut -d "." -f 2 | cut -d ":" -f 1 )  > udp_sport.txt

//******TCP****//

cut -d " " -f 1 tcp.txt > tcp_timestamp.txt
cut -d " " -f 2 tcp.txt > tcp_soumac.txt
cut -d " " -f 4 tcp.txt | cut -d "," -f 1 > tcp_desmac.txt

cut -d " " -f 9 tcp.txt | cut -d ":" -f 1 > tcp_len.txt

( grep "IPv4" tcp.txt | cut -d " " -f 10 | cut -d "." -f 1-4   &&  grep "IPv6" tcp.txt | cut -d " " -f 10 |cut -d "." -f 1  )  > tcp_sip.txt


( grep "IPv4" tcp.txt | cut -d " " -f 12 | cut -d "." -f 1-4  &&  grep "IPv6" tcp.txt | cut -d " " -f 12 |cut -d "." -f 1  )  > tcp_dip.txt

( grep "IPv4" tcp.txt | cut -d " " -f 12 | cut -d "." -f 5 | cut -d ":" -f 1 &&  grep "IPv6" tcp.txt | cut -d " " -f 12 |cut -d "." -f 2  | cut -d ":" -f 1)  > tcp_dport.txt

 ( grep "IPv4" tcp.txt | cut -d " " -f 10 | cut -d "." -f 5 | cut -d ":" -f 1 &&  grep "IPv6" tcp.txt | cut -d " " -f 10 |cut -d "." -f 2 | cut -d ":" -f 1 )  > tcp_sport.txt
