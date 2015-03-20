set :application, "Web frontend lograrme.com"
set :domain,      "69.195.198.111"
set :deploy_to,   "/var/www/vhosts/lograrme.com/symfony_projects/"
set :app_path,    "app"

set :user,      "usrlograrme"  
set :use_sudo,      false
ssh_options[:port] = 22123
#set :php_bin,    "usr/bin/php" 

#set :repository,  "https://mauricioloyola@bitbucket.org/mauricioloyola/frontend.git"
set :repository,  "git@bitbucket.org:mauricioloyola/frontend.git"

set :scm,         :git
set :branch,        "master"
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain
role :db,         domain, :primary => true       # This may be the same as your `Web` server

set :use_composer, true
set :update_vendors, true

set  :keep_releases,  3

set :deploy_via, :rsync_with_remote_cache

set :shared_files,        ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]

set :writable_dirs,       ["app/cache", "app/logs"]
set :webserver_user,      "www-data"
set :permission_method,   :acl
set :use_set_permissions, true

after "deploy:update_code" do
  capifony_pretty_print "--> Fixing permissions"
  run "cd #{latest_release} && find . -type f -exec chmod 644 {} \\"
  run "cd #{latest_release} && find . -type d -exec chmod 755 {} \\"
  capifony_puts_ok
end