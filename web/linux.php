<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1348.17">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 19.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 15.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p4 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Arial; color: #000000; -webkit-text-stroke: #000000}
    p.p5 {margin: 0.0px 0.0px 12.0px 0.0px; font: 12.0px Courier; color: #000000; -webkit-text-stroke: #000000}
    p.p6 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #2351d5; -webkit-text-stroke: #2351d5}
    p.p7 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Helvetica; color: #000000; -webkit-text-stroke: #000000; min-height: 13.0px}
    p.p8 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #000000; -webkit-text-stroke: #000000; min-height: 13.0px}
    p.p9 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #0433ff}
    p.p10 {margin: 0.0px 0.0px 0.0px 0.0px; font: 10.0px Monaco; min-height: 14.0px}
    p.p11 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial}
    p.p12 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; -webkit-text-stroke: #000000}
    p.p13 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; min-height: 12.0px}
    p.p14 {margin: 0.0px 0.0px 0.0px 0.0px; font: 10.0px Courier; color: #0433ff}
    p.p15 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Arial; color: #000000}
    p.p16 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Helvetica; color: #000000; -webkit-text-stroke: #000000}
    p.p17 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Courier; color: #0433ff; -webkit-text-stroke: #2351d5}
    p.p18 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px Monaco; color: #0433ff; -webkit-text-stroke: #2351d5}
    p.p19 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.0px Helvetica; color: #0433ff; -webkit-text-stroke: #000000}
    p.p20 {margin: 0.0px 0.0px 0.0px 0.0px; font: 11.0px 'Courier New'; color: #2351d5; -webkit-text-stroke: #2351d5}
    span.s1 {font-kerning: none}
    span.s2 {font: 12.0px Arial; text-decoration: underline ; font-kerning: none; color: #0000ee; -webkit-text-stroke: 0px #0000ee}
    span.s3 {font-kerning: none; color: #0000ff; -webkit-text-stroke: 0px #0000ff}
    span.s4 {font: 12.0px Times; font-kerning: none}
    span.s5 {font: 12.0px Arial; font-kerning: none}
    span.s6 {font: 11.0px Courier; font-kerning: none; color: #0f2b7a; -webkit-text-stroke: 0px #0f2b7a}
    span.s7 {font: 11.0px Helvetica; font-kerning: none}
    span.s8 {font: 11.0px Helvetica; font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000}
    span.s9 {font-variant-ligatures: no-common-ligatures}
    span.s10 {font: 11.0px Courier; font-kerning: none; color: #2351d5; -webkit-text-stroke: 0px #2351d5}
    span.s11 {font: 11.0px Courier; font-kerning: none; -webkit-text-stroke: 0px #2351d5}
    span.s12 {font: 11.0px 'Courier New'; font-kerning: none; color: #2351d5; -webkit-text-stroke: 0px #2351d5}
    span.Apple-tab-span {white-space:pre}
  </style>
</head>
<body>
<?php
//  comment in phpp ..
include 'phpfiles.php';
?>

<p class="p1"><span class="s1">How to compile FreeFem++ under Linux.<span class="Apple-converted-space"> </span></span></p>
<p class="p2"><span class="s1"><i>in tested FH (04/07/2017) on Ubuntu 16.04.4 LTS (form scatch) .</i></span></p>
<p class="p3"><span class="s1"><br>
</span></p>
<p class="p5"><span class="s1"> Before the build process check the installed software <A HREF="linux.php#before">   (here) </A>  </p> 
<p class="p5"><span class="s1">First download the tar.gz file contening source from  
    <? ppfile($sfile,"Source code") ?> </p>
 <p class="p5"><span class="s1"> or you can get the latest source from
an anonymous <A href="http://mercurial.selenic.com/" > Mercurial SCM </A> copy with the following unix shell commands&nbsp;:
</span></p>
<p class="p5"><span class="s3"><b>hg clone http://www.freefem.org/ff++/ff++<br>
</b></span><span class="s4"><br>
</span><span class="s5">if your version of automake &gt;= 1.13 , autoconf &gt;= 2.69 do <br>
</span><span class="s3"><b>autoreconf -i </b></span><span class="s1"><br>
</span><span class="s5">else it's  too old, then do <br>
</span><span class="s3"><b>tar zxvf AutoGeneratedFile.tar.gz<span class="Apple-converted-space"> </span></b></span></p>
<p class="p3"><span class="s1">To have correct configure script and Makefie<br>
</span></p>
<p class="p3"><span class="s1"><span class="Apple-converted-space"> </span>To compile with no additionnal sofware</span></p>
<p class="p3"><span class="s1"><br>
</span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space"> </span>./configure<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span>(to test de version)</b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space">  </span>(under root)</b></span></p>
<p class="p7"><span class="s6"><b><span class="Apple-converted-space"> </span></b></span><span class="s1"> <span class="Apple-converted-space"> </span></span></p>
<p class="p3"><span class="s7"><span class="Apple-converted-space"> </span></span><span class="s1">To compile with lot of additionnal software.</span></p>
<p class="p6"><span class="s8"><br>
</span><span class="s1"><b>./configure --enable-download<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span>(to test de version)</b></span></p>
<p class="p6"><span class="s1"><b><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space">  </span>(under root)</b></span></p>
<p class="p8"><span class="s1"><b></b></span><br></p>
<p class="p7"><span class="s1"></span><br></p>


<p class="p12"><span class="s1">To configure <span class="Apple-converted-space">  </span>with petsc and hpddm (need<span class="Apple-converted-space">  </span>c++ 11 features )</span></p>
<p class="p13"><span class="s9"></span><br></p>
<p class="p3"><span class="s1">1)  install  git and cmake</p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>sudo apt-get install git cmake</b></span></p>
<p class="p3"><span class="s1">2)  configure to def on compiler, mpi , ...</p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>./configure --enable-download .....</b></span></p>
<p class="p3"><span class="s1">3)  download and compile petsc, slepc in real and complex, ...</p>
<p class="p3"><span class="s1">  ...  Warning: Check that you can write in  directory : path_install/ff-petsc</p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>cd download/ff-petsc</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>make petsc-slepc SUDO=sudo (if need root access to install dir)</b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>make petsc-slepc</b></span></p>
<p class="p9"><span class="s9"><i>.... wait , ... wait , wait ...</i></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>cd -</b></span></p>
<p class="p3"><span class="s1">4)  reconfigure with  petsc, slepc in real and complex, ...</p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>./reconfigure <b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>make <b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>make check <b></span></p>
<p class="p9"><span class="s9"><b><span class="Apple-converted-space">  </span>make install <b>(under root)</span></p>
<p class="p12"></p>
<p class="p12"></p>
 <A NAME="before all install ">   
<p class="p3"><span class="s1">Before you have to install some usefull package with apt-get under Debian / Ubuntu.<span class="Apple-converted-space"> </span></span></p>
<p class="p3"><span class="s1"><span class="Apple-converted-space"> </span>you can install this package <span class="Apple-converted-space">  </span>software</span></p>
<p> </p>
<p class="p9"><span class="s9"><b>sudo apt-get install cpp  freeglut3-dev g++ gcc  gfortran</b></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span>ghostscript  m4 make  patch pkg-config wget python</b></span></p>
<p class="p3"><span class="s9"> # other lib of a full freefem++ can be change </span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span>libopenblas-dev liblapack-dev libhdf5-dev libgsl2-dev</b></span> </p>
<p class="p3"><span class="s9"> # Remark:  On old version pkg  "libgsl2-dev" is  "libgsl0-dev"</span></p>
<p class="p3"><span class="s9"> # Remark:  the next package can be download automaticaly by FreeFem++"</span></p>

<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span> libscotch-dev  libfftw3-dev   libarpack2-dev libsuitesparse-dev  </b></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span> libmumps-seq-dev  libnlopt-dev  coinor-libipopt-dev  libgmm++-dev libtet1.5-dev </b></span></p>
<p class="p3"><span class="s9"> # Remark:  superlu-dev  package is too old on ubuntu  Trusty (14.0.4) </span></p>
<p class="p3"><span class="s9"> # not mandatory package  but usefull for developpement </span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install autoconf automake autotools-dev  bison  flex gdb  valgrind </b></span></p>
<p class="p3"><span class="s9"> # not mandatory package for download with hg / mercurail tool</span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install mercurial </b></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install gnuplot-qt </b></span></p>

<p class="p10"><span class="s9"></span><br></p>
<p class="p11"><span class="s9"># install de mpich for parallel version <span class="Apple-converted-space"> </span></span></p>
<p class="p9"><span class="s9"><b>sudo apt-get install<span class="Apple-converted-space">  </span>mpich</b></span></p>
<p class="p10"><span class="s9"></span><br></p>

<p class="p18"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">Try to download and compile (add --enable-download flags to configure)</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>lot of related<span class="Apple-converted-space">  </span>software, (Please read the licence of all with software,</span></p>
<p class="p16"><span class="s1">if you use freefem++ for commercial purpose)<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">tetgen superlu fftw metis yams mshmet MUMPS</span></p>
<p class="p16"><span class="s1">blacs parmetis scalapack scotch superludist MUMPS pastix hypre hips<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">For the link with mmg3d software put the tar.gz archive in .../dowload/pgk directory.</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">Remark, you can also copy all the download file in ../download/pgk if you have not internet connection.</span></p>
<p class="p16"><span class="s1">To download all third party package do.<span class="Apple-converted-space"> </span></span></p>
<p class="p7"><span class="s1"></span><br></p>
<p class="p19"><span class="s1">./download/getall -a <br>
</span></p>
<p class="p7"><span class="s1"><span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1">TO simplify the link and compilation part,<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">I have add 3 files</span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY<span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span></span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-download</span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-config</span></p>
<p class="p16"><span class="s1"><br>
<br>
<br>
</span></p>
<p class="p16"><span class="s1">the files<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-config</span></p>
<p class="p16"><span class="s1">examples++-load/WHERE_LIBRARY-download</span></p>
<p class="p16"><span class="s1">are respectively created with ./configure commande ,</span></p>
<p class="p16"><span class="s1">the compilation of all download software.</span></p>
<p class="p16"><span class="s1">and the<span class="Apple-converted-space">  </span>examples++-load/Makefile.</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">Some configure flags use to build the current version</span></p>
<p class="p16"><span class="s1">-----------------------------------------------------</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1">*<span class="Apple-converted-space">  </span>Under Debian: ( 2008)</span></p>
<p class="p16"><span class="s1">----------------</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>the installed packages + dependance are:<span class="Apple-converted-space">   </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>gcc g++ g77</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>libsuitesparse-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>libarpack2-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>libx11-dev libxt-dev libxext-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>patch</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>wget</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>freeglut3-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- bluid the parallel version</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>openmpi-dev openmpi</span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- to rebuild de documentation: <span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>imagemagick<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>tetex-base <span class="Apple-converted-space">  </span>tetex-bin<span class="Apple-converted-space">  </span>tetex-extra<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>./configure<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span>(to test de version)</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space">  </span>(under root)</span></p>
<p class="p7"><span class="s1"><span class="Apple-converted-space">   </span></span></p>
<p class="p16"><span class="s1">*<span class="Apple-converted-space">  </span>Under Ubuntu (2008)</span></p>
<p class="p16"><span class="s1">---------------</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">  </span>the installed packages + dependance are:<span class="Apple-converted-space">   </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>gcc g++<span class="Apple-converted-space">  </span>g77</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>wget<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>m4 bison flex patch</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>libzip-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">   </span>libx11-dev libxt-dev libxext-dev<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libxpm4 libxpm4-dbg<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libsuitesparse-dev libarpack2-devlibarpack2 libarpack2-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libfltk1.1 libfltk1.1-dbg libfltk1.1-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libopenmpi1 libopenmpi-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libopenmpi-dbg libxpm-dev<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>freeglut3 freeglut3-dev</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libx11-dev<span class="Apple-converted-space">  </span>libxt-dev<span class="Apple-converted-space">  </span>libxext-dev<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>libglut3-dev<span class="Apple-tab-span">	</span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- bluid the parallel version</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>openmpi-dev openmpi</span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space"> </span>- to rebuild de documentation: <span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>imagemagick<span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><span class="Apple-converted-space">    </span>tetex-base <span class="Apple-converted-space">  </span>tetex-bin<span class="Apple-converted-space">  </span>tetex-extra<span class="Apple-converted-space"> </span></span></p>
<p class="p7"><span class="s1"><span class="Apple-converted-space"> </span></span></p>
<p class="p16"><span class="s1"><br>
</span></p>
<p class="p20"><span class="s1"><b><span class="Apple-converted-space"> </span>./configure --enable-download<span class="Apple-converted-space">  </span>--with-mpi=mpic++</b></span></p>
<p class="p20"><span class="s1"><b>#<span class="Apple-converted-space">  </span>utility of parameter:</b></span></p>
<p class="p20"><span class="s1"><b>#<span class="Apple-converted-space">  </span>--enable-download :<span class="Apple-converted-space">  </span>for fft and tetgen ...<span class="Apple-converted-space"> </span></b></span></p>
<p class="p20"><span class="s1"><b>#<span class="Apple-converted-space">  </span>--with-mpi=mpic++ : for mpi version<span class="Apple-converted-space"> </span></b></span></p>
<p class="p20"><span class="s1"><b><span class="Apple-converted-space">  </span>make<span class="Apple-converted-space"> </span></b></span></p>
<p class="p16"><span class="s12"><b><span class="Apple-converted-space">  </span>make check<span class="Apple-converted-space">    </span></b></span><span class="s1">(to test de version)</span></p>
<p class="p20"><span class="s1"><b><span class="Apple-converted-space">  </span>make install<span class="Apple-converted-space"> </span></b> </span><span class="s8">(under root)</span></p>
</body>
</html>
