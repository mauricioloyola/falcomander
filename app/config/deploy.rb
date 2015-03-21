set :application, "Web frontend lograrme.com"
set :domain,      "69.195.198.111"
set :deploy_to,   "/var/www/vhosts/lograrme.com/symfony_projects/"
set :app_path,    "app"

set :user,      "usrlograrme"  
set :use_sudo,      false
ssh_options[:port] = 22123

set :repository,  "git@bitbucket.org:mauricioloyola/frontend.git"
set :scm,         :git
# Agregado por mauricio
set :scm_verbose, true
set :branch,        "master"
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`
set :deploy_via, :remote_cache

ssh_options[:forward_agent] = true

set :model_manager, "doctrine"

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain
role :db,         domain, :primary => true       # This may be the same as your `Web` server

set :use_sudo, false
set :keep_releases,  3
set :shared_files,        ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]
set :php_bin,             "/usr/bin/php"
set :update_vendors, true
set :dump_assetic_assets, true
default_run_options[:pty] = true

