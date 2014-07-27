#
# deploy.rb
#

# get current git branch
def current_branch
  branch = `git symbolic-ref HEAD 2> /dev/null`.strip.gsub(/^refs\/heads\//, '')
  puts "Deploying branch #{branch}"
  branch
end

host = '184.106.165.121'

set :application, "countdown"
set :repository,  "git@github.com:EscalateMedia/wf-widgets.git"
set :deploy_to,   "/home/widgets"
set :user,        'root'
set :password,    'idNB253Flemp'
set :scm,         'git'
set :keep_releases, 10                               # max number of release
set :deploy_via, :remote_cache                      # delete cache if you rename git url
set :branch, current_branch
set :ssh_options, { :forward_agent => true }

role :web, host                                     # Your HTTP server, Apache/etc
role :app, host                                     # This may be the same as your `Web` server
role :db,  host, :primary => true

default_run_options[:pty] = true                    # tells cap to create a pty for each process (see: http://goo.gl/KQa4E)

namespace :deploy do
  # symlink the channels dir to the shared location and makes it writable
  task :link_shared_dirs, :roles => :app do
    sudo "ln -s #{shared_path}/channels #{release_path}/views/channels"
    sudo "chmod 0777 #{release_path}/views/channels"

    sudo "ln -s #{shared_path}/thumbnails #{release_path}/public/assets/imgs/thumbnails"
    sudo "chmod 0777 #{release_path}/public/assets/imgs/thumbnails"

    sudo "ln -s #{shared_path}/pollen-maps #{release_path}/public/assets/imgs/spring-fling/pollen-maps"
    sudo "chmod 0777 #{release_path}/public/assets/imgs/spring-fling/pollen-maps"

    # create app.php file
    sudo "cp #{release_path}/app.sample.php #{release_path}/app.php"

    puts "Linked shared directories"
  end

end

after 'deploy', 'deploy:link_shared_dirs'
after "deploy:link_shared_dirs", "deploy:cleanup"