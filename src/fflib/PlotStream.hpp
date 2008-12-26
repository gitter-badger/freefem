/*
 *  PlotStream.hpp
 *
 *  Created by Frederic Hecht on 27/10/08.
 *  Copyright 2008 UPMC.
 *
 */

#include <cstdio>
#ifdef WIN32
#include <fcntl.h>
#endif
#include "endian.hpp"

using  Fem2D::Mesh;
class PlotStream 
{
public:
    
  FILE * TheStream;

  PlotStream(FILE *Stream) :TheStream(Stream) { }
  operator bool() const { return TheStream;}
  // datatype mush be < 0 to have no collistion with arg number. 
  enum datatype { dt_meshes=-1,dt_plots=-2,dt_endplot=-3,dt_endarg=99999,dt_newplot=-5  };
  
  void SendNewPlot() {  write((long )dt_newplot); set_binary_mode(); }
  void SendEndArgPlot() {write((long )dt_endarg); }
  void SendEndPlot() { write((long )dt_endplot);fflush(TheStream); set_text_mode() ;}
  void SendPlots() { write((long )dt_plots); }
  void SendMeshes() { write((long )dt_meshes);}
  void write(const void *data,size_t l) {fwrite(data,1,l,TheStream);}

  PlotStream& write(const bool& bb) {bool b=w_endian(bb);write(reinterpret_cast<const void *> (&b),sizeof(bool));return *this;}
  PlotStream& write(const long long& bb) {long long  b=w_endian(bb);write(reinterpret_cast<const void *> (&b),sizeof(long long));return *this;}
  PlotStream& write(const long& bb) { // always write 8 bits for  a long FH. 
    long long ll=bb;ll=w_endian(ll);write(reinterpret_cast<const void *> (&ll),sizeof(long long));
    return *this;}
  PlotStream& write(const int& bb) {int b=w_endian(bb);write(reinterpret_cast<const void *> (&b),sizeof(int));return *this;}
  PlotStream& write(const double& bb) {double b=w_endian(bb);write(reinterpret_cast<const void *> (&b),sizeof(double));return *this;}
  PlotStream& write(const string& b) {  
    int l=b.size();
    // cout << " l : " << b.size() <<endl; 
    write(reinterpret_cast<const void *> (&l),sizeof(size_t));
    write(b.data(),l);
    return *this;
  }
  
  void set_text_mode() 
  {    
#ifdef WIN32
        _setmode(fileno(TheStream),O_TEXT);	
#endif
  }
  void set_binary_mode()
  {    
#ifdef WIN32
    _setmode(fileno(TheStream),O_BINARY);	
#endif
  }
 
  PlotStream & operator << (const bool& b) 
  { return write(b); }
  PlotStream & operator << (const long& b) 
  { return write(b); }        
  PlotStream & operator << (const long long & b) 
  { return write(b); }        
  PlotStream & operator << (const int& b) 
  { return write(b); }        
  PlotStream & operator << (const double& b) 
  { return write(b); }
  PlotStream & operator << (const string& s) 
  { return write(s); }
  PlotStream & operator << (const string* s) 
  { ffassert(s); return write(*s); }
  PlotStream & operator << (const Mesh& Th) {
    Serialize s=Th.serialize();
    long  n=s.size();
    write( n );
    write(s,s.size());
    return *this;}
  PlotStream & operator << (const KN_<double>& b)
  {
    long n=b.N();
    write(n);
    for (int i=0;i<n;++i)
      write(b[i]);
    return *this;
  }
  
  void read( void *data,size_t l) {
	char * p= (char*)data;
	for(int i=0;i<l;++i)	
	  *p++ = (char) getc(TheStream);
	//	fread(  p++,1,1,TheStream);
	//       read(data,l);
}
  bool good() const {return ferror(TheStream)==0;}
  void GetNewPlot() { get(dt_newplot) ; set_binary_mode();}
  void GetEndArgPlot() {get(dt_endarg); }
  void GetEndPlot() {get(dt_endplot); set_text_mode();}
  void GetPlots() { get(dt_plots); }
  void GetMeshes() { get(dt_meshes);}
  void get(datatype t) { long tt; read(tt);
    if( tt !=(long) t) 
      cout << " Error Check :  get " << tt << " == wait for  "<< t << endl; 
    ffassert(tt==(long) t);}
  PlotStream& read( bool& b) {read(reinterpret_cast< void *> (&b),sizeof(bool));  b=r_endian(b);return *this;}
  PlotStream& read( long long& b) {read(reinterpret_cast< void *> (&b),sizeof(long long)); b=r_endian(b);return *this;}
  PlotStream& read( long& b) { long long l;
    read(reinterpret_cast< void *> (&l),sizeof(long long));
    l=r_endian(l);
    b=(long) l;
    if(( b-(long) l) !=0)
      { cout << " err err read long : error " << b << " !=  " << l << endl;
	assert( (b-(long) l)==0);}
    return *this;}
  PlotStream& read( int& b) {read(reinterpret_cast< void *> (&b),sizeof(int)); b=r_endian(b);return *this;}
  PlotStream& read( double& b) {read(reinterpret_cast< void *> (&b),sizeof(double)); b=r_endian(b);return *this;}
  PlotStream& read( string& b) {  	
    int l=b.size();
    read(reinterpret_cast< void *> (&l),sizeof(int));
    l=r_endian(l);
    b.resize(l);
    //    cout << "read str :len str=" << l << endl;
    read(& (b[0]),l);
    return *this;
  }
  
  
  
  PlotStream & operator >> ( bool& b)      { return read(b); }
  PlotStream & operator >> ( long& b)      { return read(b); }        
  PlotStream & operator >> ( long long& b) { return read(b); }        
  PlotStream & operator >> ( int& b)       { return read(b); }        
  PlotStream & operator >> ( double& b)    { return read(b); }
  PlotStream & operator >> ( string& s)    { return read(s); }
  PlotStream & operator >> ( string *& s) 
  { if(!s) s= new string; return read(*s);
    // cout << " fread string " << s <<endl;
  }
  
  PlotStream & operator >> ( Mesh *& Th)
  {
    long n;
    read(n);
    Serialize s(n,Mesh::magicmesh);
    read(s,n );
    Th= new Mesh(s);
    return *this;
  }
  
  PlotStream & operator >> ( KN<double>& b)
  {
    long n;
    read(n);
    if( ! b.N() ) b.init(n);
    ffassert( b.N()==n); 
    for (int i=0;i<n;++i)
	  read(b[i]);
    return *this;
  }
  
  
};

