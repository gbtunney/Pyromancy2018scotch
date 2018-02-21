# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.hostname = "pyromancy.dev"

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.50"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]

    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

	config.vm.provision "shell", inline: <<-SHELL

        # Update composer
        composer self-update

        # add composer to path
        export PATH="~/.composer/vendor/bin:$PATH"

        # change public to web to comply with Bedrock standards
        mv /var/www/public /var/www/web
        sudo sed -i s,/var/www/public,/var/www/web,g /etc/apache2/sites-available/000-default.conf
        sudo sed -i s,/var/www/public,/var/www/web,g /etc/apache2/sites-available/scotchbox.local.conf
        sudo service apache2 restart

        # Install PHP7 and remove PHP5
        # ----------------------------

        # From https://github.com/scotch-io/scotch-box/issues/210#issuecomment-219956728 but
        # modified the one-line apt-get to multiline.
        # Update package list
        #sudo apt-get install python-software-properties
        #sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php

        #sudo apt-get update
        #sudo apt-get purge php5-common -y
        #sudo apt-get install php7.0
        #sudo apt-get install php7.0-fpm
        #sudo apt-get install php7.0-mysql
        #sudo apt-get install php-curl
        #sudo apt-get install libapache2-mod-php7.0
        #sudo apt-get install php7.0-mbstring
        #sudo apt-get --purge autoremove -y

        # Set timezone (i.e. date.timezone = Europe/Paris)
        #sudo sed -i "s/date.timezone = foo/date.timezone = Europe\/Stockholm/g" /etc/php/7.0/cli/php.ini
        #sudo sed -i "s/date.timezone = foo/date.timezone = Europe\/Stockholm/g" /etc/php/7.0/apache2/php.ini

        # Enable PHP7
        #sudo a2enmod php7.0

        #sudo service apache2 restart

        # Done installing PHP7
        # ----------------------------

        # Install mysql 5.6
        # ----------------------------
        # apt-get install -y mysql-server-5.6 mysql-server-core-5.6

        #sudo service apache2 restart

        # Done installing mysql 5.6
        # ----------------------------

	SHELL

end
