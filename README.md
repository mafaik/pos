# pos
Point Of Sale PT Sarana Medika Sejahtera

## Installation


To install, download and install [Vagrant](https://www.vagrantup.com/downloads.html) for your platform, then download and install [VirtualBox](http://virtualbox.org/).

Once Vagrant and VirtualBox are installed, you can download or clone the latest release of this GitHub repo, and unzip it. `cd` into the unzipped folder and run:

```bash
$ vagrant up
$ vagrant ssh
### VHots

On OSX and Linux, this is located at /etc/hosts, on Windows it is located at C:\Windows\System32\drivers\etc\hosts.

    192.168.56.101 sms-pos.dev

## SRC

You can download resource at [Dropbox](https://www.dropbox.com/sh/nwyfmf6mzeenoj1/AAC-MmoCWSn4hlJf_fkrFJ8Sa?dl=0)

##DB Connection

SSH
    Hostname: 192.168.56.101 (forwarded SSH port)
    Username: vagrant
    Port: 22
    Password: (do not use)
    SSH Key File: ..vagrantpath\puphpet\files\dot\ssh\insecure_private_key
                  (Locate your insercure_private_key)
MySQL
    Hostname: Localhost
    username: (root, or username)
    password: (password
    Server Port: 3306

create and clone database