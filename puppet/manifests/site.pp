include remi
include php
include apache

package { "git":
  ensure => present,
}

file{ "/var/www/sites":
  ensure => directory,
  owner => "apache",
  group => "apache",
  mode => 0755,
}


file { "/var/www/sites/php_test":
  ensure => link,
  target => "/vagrant",
}

file { "/etc/php.ini":
  ensure => present,
  source => "puppet:///modules/core/php.ini",
  owner => "root",
  group => "root",
  mode => 0644,
}

Class[remi] -> Class[php] -> File["/etc/php.ini"]
