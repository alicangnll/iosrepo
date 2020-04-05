#!/bin/bash
rm -f Packages*
dpkg/dpkg-scanpackages -m ./TR /dev/null > Packages
bzip2 Packages
