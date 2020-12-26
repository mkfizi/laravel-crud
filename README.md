# Laravel - CRUD basic tutorial
This repository is to help hown to setup a laravel with basic CRUD functions on Homestead

### Requirements
- Laravel
- Homestead

Follow these steps below to begin

### Cloning Setup
1 - Open Git Bash and change directory to homestead
```sh
$ cd ~/homestead
```

2 - Open Homestead.yaml using Vi Editor
```sh
$ vi Homestead.yaml
```
Note: Press 'escape' and write ':q!' to exit Vi Editor

3 - Clone repository to folder where you map Homestead to point folder at based in Homestead.yaml

Example, if **folders** in Homestead.yaml looks like below,
```sh
folders:
    - map: d:/Laravel
      to: /home/vagrant/code
```
So clone the repository to d:/Laravel

### Homestead Setup
1 - Open Git Bash and change directory to homestead
```sh
$ cd ~/homestead
```

2 - Open homestead.yaml using Vi Editor
```sh
$ vi Homestead.yaml
```

3 - Add new url mapping as below 
Example, if current mapping **sites** look like this
```sh
sites:
 - map: site.test
   to: /home/vagrant/code/site/public
```  
Add new url mapping as below
```sh
sites:
 - map: site.test
   to: /home/vagrant/code/site/public
 - map: crud.test
   to: /home/vagrant/code/laravel-crud/public**
```  
Note: Press 'escape' and enter ':wq!' to exit and save Vi Editor

### Host Setup
1 - Open Notepad as administrator, and open **hosts** file in C:\Windows\System32\drivers\etc
2 - Add new host url as below at the bottom of the file
```sh
192.168.10.10 crud.test
```

### System Setup
1 - Open Git Bash and change directory to homestead
```sh
$ cd ~/homestead
```

2 - Run vagrant server
```sh
$ vagrant up
```

If vagrant has already up, reload vagrant
```sh
$ vagrant reload --provision
```

3 - Enter vagrant ssh
```sh
$ vagrant ssh
```

4 - Change directory to repository folder
```sh
$ cd code/laravel-crud
```

5 - Run composer install
```sh
$ composer install
```

6 - Create .env file
```sh
$ cp .env.example .env
```

7 - Add key to .env
```sh
$ php artisan key:generate
```

8 - Open .env file
```sh
$ vi .env
```

9 - Edit .env file and change credentials as below
```sh
DB_DATABASE=crud
DB_USERNAME=homestead
DB_PASSWORD=secret
```
Note: Press 'escape' and enter ':wq!' to exit and save Vi Editor

### Database Setup
1 - Open database using Database Management System using credentials below
```sh
Hostname/IP: 192.168.10.10
User: homestead
Password: secret
```
2 - Create new database named **crud**

3 - Migrate database configs
```sh
$ php artisan migrate
```

### Completion
Open url **crud.test**
