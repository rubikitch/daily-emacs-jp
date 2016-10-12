#!/usr/local/bin/ruby
require 'json'
require 'open-uri'

JSON.parse(open("http://melpa.milkbox.net/download_counts.json",&:read)).sort_by{|p,c| c}.reverse.each {|pkg, dl|
  printf "# %6d %-40s (describe-package '%s)\n", dl, pkg, pkg
}
