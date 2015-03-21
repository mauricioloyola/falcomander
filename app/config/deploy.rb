set :application, "Web frontend lograrme.com"
set :deploy_to,   "/var/www/vhosts/lograrme.com/symfony_projects/frontend/"
set :domain,      "69.195.198.111"

set   :scm,       :git
set :repository,  "git@bitbucket.org:mauricioloyola/frontend.git"
set :branch,      "master"

role  :web,       domain
role  :app,       domain, :primary => true

set :user,        "usrlograrme"  
ssh_options[:port] = 22123
set   :use_sudo,      false
set   :keep_releases, 3