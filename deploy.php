<?php
namespace Deployer;

require_once __DIR__.'/vendor/deployer/deployer/recipe/composer.php';

host('185.91.65.151')
    ->port(22)
    ->set('deploy_path', '~')
    ->user('wposlo_3691')
    ->set('branch', 'master')
    ->stage('production')
    ->identityFile('~/.ssh/id_rsa');

set('repository', 'git@github.com:ekandreas/oslo.git');

set('keep_releases', 10);
set('shared_dirs', ['web/app/uploads']);
set('shared_files', ['.env']);

task('deploy:restart', function () {
});
after('deploy','deploy:restart');
