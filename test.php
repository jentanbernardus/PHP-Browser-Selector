<?php

require('css_browser_selector.php');

/*
Credits: Original list of browser agents by Rafael Lima
*/
$agents = array( 
		'unprocessable navigator string' => '',

		// Iron
		'mozilla/5.0 (windows; u; windows nt 5.1; en-us) applewebkit/530.1 (khtml, like gecko) iron/2.0.168.0 safari/530.1' => 'webkit safari iron win', // iron

		// Camino
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en; rv:1.8.1.6) Gecko/20070809 Camino/1.5.1' 	   => 'gecko mac', // camino
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.0.1) Gecko/20060118 Camino/1.0b2+' => 'gecko mac', // camino nightly
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.5b) Gecko/20030917 Camino/0.7+' => 'gecko mac', // camino
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.0.1) Gecko/20021104 Chimera/0.6' 		   => 'gecko mac', // camino chimera

		//Chrome
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13' 	 => 'webkit safari chrome win', 
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.2.149.27 Safari/525.13' => 'webkit safari chrome win',
		
		// Firefox
		'mozilla/5.0 (macintosh; u; intel mac os x 10.5; en-gb; rv:1.9.1) gecko/20090624 firefox/3.5'     	=> 'gecko ff3 ff3_5 mac', // firefox 3.5 mac
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6'      => 'gecko ff2 mac', // firefox 2 mac
		'Mozilla/5.0 (X11; U; Darwin Power Macintosh; en-US; rv:1.8.0.12) Gecko/20070803 Firefox/1.5.0.12 Fink Community Edition' => 'gecko mac', // firefox 1.5 darwin
		'Mozilla/5.0 (Windows; u; Windows NT 5.1; en-us; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1'        => 'gecko ff3 win', // firefox 3 win
		'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9a7) Gecko/2007080210 GranParadiso/3.0a7'     => 'gecko win', // firefox dev
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9b2pre) Gecko/2007120505 Minefield/3.0b2pre'  => 'gecko win', // firefox dev
		'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11'      => 'gecko ff2 win', // firefox 2 vista
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.13) Gecko/20060410 Firefox/1.0.8'           => 'gecko win', // firefox 1 xp
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.3) Gecko/20041002 Firefox/0.10.1'           => 'gecko win', // firefox pre v1
		'Mozilla/5.0 (X11; U; SunOS sun4m; en-US; rv:1.4b) Gecko/20030517 Mozilla Firebird/0.6'             => 'gecko linux', // firefox firebird
		'Mozilla/5.0 (Windows; U; WinNT4.0; en-US; rv:1.3a) Gecko/20021207 Phoenix/0.5'                     => 'gecko win', // firefox phoenix 
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.2b) Gecko/20020923 Phoenix/0.1'               => 'gecko win', // firefox phoenix xp
		'Mozilla/3.0 (x86 en Windows NT 5.1; Sun)'                                                        	=> 'gecko win', // hotjava
		
		// Navigator
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.8pre) Gecko/20071019 Firefox/2.0.0.8 Navigator/9.0.0.1' => 'gecko ff2 win', // Navigator 9 with Firefox fixes
		'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.5) Gecko/20050519 Netscape/8.0.1'                         => 'gecko win', // A real Firefox based Netscape 8 with a security patch (already) on Win 2K
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.2) Gecko/20040804 Netscape/7.2 (ax)'                      => 'gecko win', // Netscape 7.2 and still we're wondering what's the (ax)? 
		'Mozilla/5.0 (Windows; U; WinNT4.0; en-CA; rv:0.9.4) Gecko/20011128 Netscape6/6.2.1'                              => 'gecko win', // NS 6.2.1 on NT4.0.
		'Mozilla/4.8 en (X11; U; Linux 2.4.20-8 i686)'                                                                  	=> 'gecko linux', // NS 4.8 on Redhat 9
		'Mozilla/3.01 (WinNT; I) AXP'                                                                                   	=> 'gecko win', // NS 3.01 on DEC ALPHA under NT
		'Mozilla/2.02 fr (WinNT; I)'                                                                                    	=> 'gecko win', // NS 2.02 on MS NT 4.0.
		'Mozilla/0.91 Beta (Windows)'                                                                                     => 'gecko win', // The ex-new dinosaur string. Netscape 0.91, a pre-1.0 beta release from 1994.
		'Mozilla/0.6 Beta (Windows)'                                                                                      => 'gecko win',    // The new dinosaur string. Netscape 0.6 on WfWG 3.11.
		
		// Konqueror
		'Mozilla/5.0 (compatible; Konqueror/4.0; Microsoft Windows) KHTML/4.0.80 (like Gecko)'                                     => 'konqueror win', // konqueror win
		'Mozilla/5.0 (compatible; Konqueror/3.92; Microsoft Windows) KHTML/3.92.0 (like Gecko)'                                    => 'konqueror win', // konqueror win
		'Mozilla/5.0 (compatible; Konqueror/3.5; Darwin) KHTML/3.5.6 (like Gecko)'                                                 => 'konqueror mac', // konqueror mac
		'Mozilla/5.0 (compatible; Konqueror/3.5; Darwin 8.10.0; X11; Power Macintosh; en_US)KHTML/3.5.6 (like Gecko)'              => 'konqueror mac', // konqueror darwin
		'Mozilla/5.0 (compatible; Konqueror/3.5; Linux; X11; x86_64) KHTML/3.5.6 (like Gecko) (Kubuntu)'                           => 'konqueror linux', // konqueror linux
		'Mozilla/5.0 (compatible; Konqueror/3.4; CYGWIN_NT-5.1) KHTML/3.4.89 (like Gecko)'                                         => 'konqueror win', // konqueror cygwin
		'Mozilla/5.0 (compatible; Konqueror/3.5; Linux 2.6.14-kanotix-6; X11) KHTML/3.5.3 (like Gecko) (Debian package 4:3.5.3-1)' => 'konqueror linux', // konqueror linux
		'Mozilla/5.0 (compatible; Konqueror/3.5; Linux; X11; i686; en_US) KHTML/3.5.3 (like Gecko)'                                => 'konqueror linux', // konqueror suse linux
		'Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.3 (like Gecko) (Kubuntu package 4:3.4.3-0ubuntu1)'               => 'konqueror linux', // konqueror ubuntu
		'Mozilla/5.0 (compatible; Konqueror/3.4; FreeBSD) KHTML/3.4.3 (like Gecko)'                                                => 'konqueror freebsd', // konqueror freebsd
		'Mozilla/5.0 (compatible; Konqueror/3.4; Linux 2.6.8; X11; i686; en_US) KHTML/3.4.0 (like Gecko)'                          => 'konqueror linux', // konqueror mandriva
		'Mozilla/5.0 (compatible; Konqueror/3.4; Linux) KHTML/3.4.1 (like Gecko)'                                                  => 'konqueror linux', // konqueror mandriva
		'Mozilla/5.0 (compatible; Konqueror/3.4; Linux 2.6.8; X11; i686; en_US) KHTML/3.4.0 (like Gecko)'                          => 'konqueror linux', // konqueror Slaware Linux 10
		'Mozilla/5.0 (compatible; Konqueror/3.3; Linux 2.6.8.1-24mdk; X11; i686; en_GB, en_US) (KHTML, like Gecko)'                => 'konqueror linux', // Konqueror/KDE Version 3.3 on Linux Mandrake 10.1
		'Mozilla/5.0 (compatible; Konqueror/3.3; Linux) (KHTML, like Gecko)'                                                       => 'konqueror linux', // Konqueror/KDE Version 3.3 on Linux Mandrake 10.1
		'Mozilla/5.0 (compatible; Konqueror/3.2; Linux 2.6.7-3ajp; X11; i686) (KHTML, like Gecko)'                                 => 'konqueror linux', // Konqueror/KDE Version 3.2 on Linux Mandrake 10.0
		'Mozilla/5.0 (compatible; Konqueror/3.2; FreeBSD) (KHTML, like Gecko)'                                                     => 'konqueror freebsd', // Konqueror/KDE Version 3.2 on FreeBSD
		'Mozilla/5.0 (compatible; Konqueror/3.1; Linux 2.4.20)'                                                                    => 'konqueror linux', // Konqueror/KDE Version 3.1 on Linux
		'Mozilla/5.0 (compatible; Konqueror/3.1; Linux; X11; i686)'                                                                => 'konqueror linux', // Konqueror Linux Mandrake 9.0 under X windows
		'Mozilla/5.0 (compatible; Konqueror/3.1; Linux 2.4.19-32mdkenterprise; X11; i686; ar, en_US)'                              => 'konqueror linux', // Konqueror on KDE 3.1 on Linux Mandrake 9.0 under X windows
		'Mozilla/5.0 (compatible; Konqueror/2.1.1; X11)'                                                                           => 'konqueror linux',  // Konqueror 2.1.1 (KDE) on Linux Mandrake 8.0 under X windows

		// Opera
		'opera/9.50 (j2me/midp; opera mini/ 4.1.11320/546; u; pt)'                                => 'opera opera9 mobile', // Opera Mini 10.00 on MAC with OS X
		'Opera/10.00 (Macintosh; Intel Mac OS X; u; en) presto/2.2.0'                             => 'opera opera10 mac', // Opera 10.00 on MAC with OS X
		'Opera/9.20 (Macintosh; Intel Mac OS X; U; en)'                                           => 'opera opera9 mac', // Opera 9.20 on MAC with OS X
		'Opera/9.02 (Windows NT 5.0; U; en)'                                                      => 'opera opera9 win', // Opera 9.02 on Win 2K
		'Opera/9.00 (Windows NT 4.0; U; en)'                                                      => 'opera opera9 win', // Opera 9.0 on Windows NT 4.0
		'Opera/9.00 (X11; Linux i686; U; en)'                                                     => 'opera opera9 linux', // Opera 9.0 on linux 2.6, static Qt installation
		'Opera/9.00 (Windows NT 5.1; U; en)'                                                      => 'opera opera9 win', // Opera 9 on XP (spot the diff with the next one)
		'Opera/9.0 (Windows NT 5.1; U; en)'                                                       => 'opera opera9 win', // Opera 9
		'Opera/9.0 (Macintosh; PPC Mac OS X; U; en)'                                              => 'opera opera9 mac', // Opera 9
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 9.0'                        => 'opera opera9 win', // Opera 9
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; PPC; 480x640) Opera 8.60 en'              => 'opera opera8 win', // Opera Mobile 8.60 on a Dell Axim X51v
		'Opera/8.5 (Macintosh; PPC Mac OS X; U; en)'                                              => 'opera opera8 mac', // Opera 8.5 on the Mac
		'Mozilla/5.0 (Macintosh; PPC Mac OS X; U; en) Opera 8.5'                                  => 'opera opera8 mac', // Opera 8.5 on the Mac
		'Mozilla/4.0 (compatible; MSIE 6.0; Mac_PowerPC Mac OS X; en) Opera 8.5'                  => 'opera opera8 mac', // Opera 8.5 on the Mac
		'Opera/8.0 (Macintosh; PPC Mac OS X; U; en)'                                              => 'opera opera8 mac', // Opera 8.0 on the Mac
		'Mozilla/5.0 (Macintosh; PPC Mac OS X; U; en) Opera 8.0'                                  => 'opera opera8 mac', // Opera 8.0 on the Mac
		'Mozilla/4.0 (compatible; MSIE 6.0; Mac_PowerPC Mac OS X; en) Opera 8.0'                  => 'opera opera8 mac', // Opera 8.0 on the Mac
		'Opera/8.01 (Windows NT 5.1)'                                                             => 'opera opera8 win', // Opera 8.01 preview
		'Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.01'                                          => 'opera opera8 win', // Opera 8.01 preview
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)'                                      => 'ie ie6 win', // Opera 8.01 preview
		'Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.00'                                          => 'opera opera8 win', // Opera 8.00 (ex 7.60 preview) on XP Pro as Mozilla
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.00'                       => 'opera opera8 win', // Opera 8.00 (ex 7.60 preview) on XP Pro as MSIE
		'Opera/8.00 (Windows NT 5.1; U; en)'                                                      => 'opera opera8 win', // Opera 8.00 (ex 7.60 preview) on XP Pro
		'Mozilla/5.0 (X11; Linux i386; U) Opera 7.60 en-GB'                                       => 'opera opera7 linux', // Opera 7.60 (pretending to be Mozilla running on NetBSD
		'Opera/7.60 (Windows NT 5.2; U) en (IBM EVV/3.0/EAK01AG9/LE)'                             => 'opera opera7 win', // Opera 7.60 running on XP. // win
		'Opera/7.54 (Windows NT 5.1; U) pl'                                                       => 'opera opera7 win', // Opera 7.54 in native mode
		'Opera/7.50 (X11; Linux i686; U) en'                                                      => 'opera opera7 linux', // Opera 7.50 running on Mandrake Linux
		'Mozilla/5.0 (X11; Linux i686; U) Opera 7.50 en'                                          => 'opera opera7 linux', // Opera 7.50 running on Mandrake Linux
		'Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686) Opera 7.20 en'                       => 'opera opera7 linux', // Opera 7.20 running on Linux and pretending to be MSIE 6.0
		'Opera/7.11 (Windows NT 5.1; U) en'                                                       => 'opera opera7 win', // On Windows XP. 
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows ME) Opera 7.11 en'                            => 'opera opera7 win', // Opera 7.11 running on WME
		'Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.02 Bork-edition en' => 'opera opera7 win', // The infamous MSN version of Opera 7.02 on W2K
		'Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 4.0) Opera 7.0 en'               => 'opera opera7 win', // Opera 7.0 on NT 4.0. 
		'Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.0 en'                           => 'opera opera6 win', // Opera 6.0 on Windows 2000.
		'Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 6.01 en'                            => 'opera opera6 win', // Opera 6.01 on Windows 95.
		'Mozilla/4.0 (compatible; MSIE 5.0; Mac_PowerPC) Opera 5.0 en'                            => 'opera opera5 mac',     // Opera 5.0 on the Mac (OS8.6)

		// Internet Explorer
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.2; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)'                                                                                            => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; Media Center PC 6.0; InfoPath.2; MS-RTC LM 8)'                                                                                                                        => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; InfoPath.2)'                                                                                                                                      => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 3.0)'                                                                           => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; MS-RTC LM 8)'                                                                        => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3)'                                                                         => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; Zune 3.0; MS-RTC LM 8)'    => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; MS-RTC LM 8)'                                                            => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 4.0.20402; MS-RTC LM 8)'                                                    => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 1.1.4322; InfoPath.2)'                                                      => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; InfoPath.3; .NET CLR 4.0.20506)'                                                                          => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729)'                                                                                                          => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Win64; x64; Trident/4.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Tablet PC 2.0)'                                                                 => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Win64; x64; Trident/4.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 3.0.04506; Media Center PC 5.0; SLCC1)'                                => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Win64; x64; Trident/4.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)'                                                                                => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Win64; x64; Trident/4.0)'                                                                                                                                                                        => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Tablet PC 2.0; .NET CLR 3.0.04506; Media Center PC 5.0; SLCC1)'                             => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; FDM; Tablet PC 2.0; .NET CLR 4.0.20506; OfficeLiveConnector.1.4; OfficeLivePatch.1.3)'      => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 3.0.04506; Media Center PC 5.0; SLCC1; Tablet PC 2.0)'                             => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET CLR 1.1.4322; InfoPath.2)'                                                             => 'ie ie8 win',

		'mozilla/4.0 (compatible; msie 8.0; windows nt 6.0; trident/4.0; slcc1; .net clr 2.0.50727; wwtclient2; infopath.2; officeliveconnector.1.3; officelivepatch.0.0; .net clr 3.0.30618; .net clr 3.5.30729)' => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)'                                                          => 'ie ie8 win',
		'Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 6.0'                                                          => 'ie ie7 win',
		'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; Media Center PC 5.0; .NET CLR 1.1.4322; Windows-Media-Player/10.00.00.3990; InfoPath.2' => 'ie ie7 win', // MSIE 7 running on Windows Vista 64-bit with a ton of 'stuff'
		'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; InfoPath.1; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; Dealio Deskball 3.0)' => 'ie ie7 win', // MSIE 7 on XP and every version of .NET known to mankind
		'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; NeosBrowser; .NET CLR 1.1.4322; .NET CLR 2.0.50727)' => 'ie ie6 win', // Explanation: MSIE 6.x on XP with a skin from neos.tv who seem to specialize in the hospitality (read hotel) industry. 
		'Mozilla/4.0 (compatible; MSIE 5.5; Windows 98)'                                                              => 'ie ie5 win', // MSIE 5.5 on Windows 98
		'Mozilla/4.0 (compatible; MSIE 5.22; Mac_PowerPC)'                                                            => 'ie ie5 mac', // Latest MAC OS X version of MSIE
		'Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt)'                                                      => 'ie ie5 win', // MSIE 5.0 on MS NT 4.0
		'Mozilla/4.0 (compatible; MSIE 4.01; Windows NT 5.0)'                                                         => 'ie ie4 win', // Explanation: MSIE 4.01 on Windows XP SP2
		'Mozilla/2.0 (compatible; MSIE 3.02; Windows CE; 240x320)'                                                    => 'ie ie3 win', // MSIE 3.02 on a Pocket PC 2002
		'Mozilla/1.22 (compatible; MSIE 2.0; Windows 95)'                                                             => 'ie ie2 win',   // MSIE 2.0 in windows '95

		// Safari
		'mozilla/5.0 (windows; u; windows nt 6.0; pt-br) applewebkit/528.16 (khtml, like gecko) version/4.0 safari/528.16'          => 'webkit safari safari4 win',
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-gb) AppleWebKit/523.10.6 (KHTML, like Gecko) Version/3.0.4 Safari/523.10.6'  => 'webkit safari safari3 mac', // Safari 3.0.4 on Mac OS 10.5.1 Intel
		'Mozilla/5.0 (iPod; U; CPU like Mac OS X; en) AppleWebKit/420.1 (KHTML, like Gecko) Version/3.0 Mobile/3A100a Safari/419.3' => 'webkit safari safari3 ipod', // Safari 3.0 for the iPod touch
		'Mozilla/5.0 (iPhone; U; CPU like Mac OS X; en) AppleWebKit/420+ (KHTML, like Gecko) Version/3.0 Mobile/1C28 Safari/419.3'  => 'webkit safari safari3 iphone', // Safari 3.0 for the iPhone
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/522.11.1 (KHTML, like Gecko) Version/3.0.3 Safari/522.12.1'     => 'webkit safari safari3 mac', // Safari 3.0.3 for Intel version of iMac
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; bg) AppleWebKit/522.13.1 (KHTML, like Gecko) Version/3.0.2 Safari/522.13.1'       => 'webkit safari safari3 win', // Safari 3.0.2 beta for Windows XP
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru) AppleWebKit/522.11.3 (KHTML, like Gecko) Version/3.0 Safari/522.11.3'         => 'webkit safari safari3 win', // Safari browser V 3.0 Beta for Windows XP SP2
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/419.3 (KHTML, like Gecko) Safari/419.3'                         => 'webkit safari mac', // Safari browser V 2.o.4 with Beta for OS X
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/418.8 (KHTML, like Gecko) Safari/419.3'                           => 'webkit safari mac', // Safari browser 2.0.4 for MAC OS X (10.4.7)
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/417.9 (KHTML, like Gecko) Safari/417.8'                           => 'webkit safari mac', // Safari browser 2.0.3 for MAC OS X (10.4.4)
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/417.3 (KHTML, like Gecko) Safari/417.2'                         => 'webkit safari mac', // Safari browser 2.0 for MAC OS X (10.4.4 build)
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/412 (KHTML, like Gecko) Safari/412'                               => 'webkit safari mac', // Safari browser 2.0 for MAC OS X (10.4.1 build 8B15)
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.5.1 (KHTML, like Gecko) Safari/312.3.1'                    => 'webkit safari mac', // Safari 1.3.1 on 1.3.9 after after Security update 2005-008
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; fr-fr) AppleWebKit/312.5 (KHTML, like Gecko) Safari/312.3'                        => 'webkit safari mac', // Safari 1.3.1 (v312.3) 10.3.9 = last update on last version of Panther
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/124 (KHTML, like Gecko) Safari/125.1'                             => 'webkit safari mac', // Safari browser 1.25.1 for MAC OS 
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/106.2 (KHTML, like Gecko) Safari/100.1'                           => 'webkit safari mac', // Safari browser 1.0 for MAC OS X
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; es) AppleWebKit/85 (KHTML, like Gecko) Safari/85'                                 => 'webkit safari mac', // Safari browser 1.0 for MAC OS X with spanish language variant
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-us) AppleWebKit/74 (KHTML, like Gecko) Safari/74'                              => 'webkit safari mac', // Safari browser build 74 for MAC OS X
		'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/51 (like Gecko) Safari/51'                                        => 'webkit safari mac', // Safari browser for MAC OS X

		// WebTV
		'Mozilla/4.0 WebTV/2.8 (compatible; MSIE 4.0)' => 'gecko webtv', // WebTV 2.8
);

foreach($agents AS $ua => $expected) {
		$result = css_browser_selector($ua);
		if($result != $expected) echo 'error: ' . $expected . ' => ' . $result . ' => ' . $ua . '<br />';
}

?>