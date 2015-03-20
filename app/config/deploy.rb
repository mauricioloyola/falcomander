set :application, "Web frontend lograrme.com"
set :domain,      "69.195.198.111"
set :deploy_to,   "/var/www/vhosts/lograrme.com/symfony_projects/"
set :app_path,    "app"

set :user,      "usrlograrme"  
set :use_sudo,      false
ssh_options[:port] = 22123
#set :php_bin,    "usr/bin/php" 

set :repository,  "https://mauricioloyola@bitbucket.org/mauricioloyola/frontend.git"
#set :repository,  "https://mloyolatirado@bitbucket.org/mloyolatirado/app_frontend.git"

set :scm,         :git
set :branch,        "master"
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
#role :app,        domain, :primary => true       # This may be the same as your `Web` server
role :app,        domain
role :db,         domain, :primary => true       # This may be the same as your `Web` server

set :use_composer, true
set :update_vendors, true

set  :keep_releases,  3

set :shared_files,        ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]