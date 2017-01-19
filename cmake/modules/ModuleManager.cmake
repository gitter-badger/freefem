FIND_PACKAGE(HDF5 REQUIRED)
FIND_PACKAGE(GLUT REQUIRED)
FIND_PACKAGE(OpenGL REQUIRED)
FIND_PACKAGE(Threads REQUIRED)
FIND_PACKAGE(MPI REQUIRED)

FIND_PACKAGE(GSL)
FIND_PACKAGE(LAPACK)

LIST(APPEND MODULE_LIST FFTW
                        GMM
                        IPOPT
                        NLOPT
                        SCOTCH
                        SUPERLU
                        TETGEN)


FOREACH(MODULE ${MODULE_LIST})
  FIND_PACKAGE(${MODULE})
  IF(NOT ${MODULE}_FOUND)
    LIST(APPEND DOWNLOAD_LIST ${MODULE})
  ENDIF(NOT ${MODULE}_FOUND)

ENDFOREACH(MODULE)

IF(ENABLE_DOWNLOAD)
  MESSAGE(STATUS "The following modules will be downloaded: ${DOWNLOAD_LIST}")
  INCLUDE(FFInstallPackage)
  FOREACH(MODULE ${DOWNLOAD_LIST})
    FF_INSTALL_PACKAGE(${MODULE}) 
  ENDFOREACH(MODULE)
ELSE()
  MESSAGE(STATUS "The following modules are missing: ${DOWNLOAD_LIST}")
ENDIF(ENABLE_DOWNLOAD)



