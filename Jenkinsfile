node {
    // Clean workspace before doing anything
    deleteDir()
  
        
        stage ('Clone') {
            checkout scm
        }
        stage ('Composer') {
            sh "composer install"
        }
        stage ('Tests') {
            sh "bin/mg2-builder tests-setup:install -Dproject.name=${PROJECT_NAME} -Ddatabase.admin.username=${DATABASE_USER} -Ddatabase.admin.password=${DATABASE_PASS} -Ddatabase.user=${DATABASE_USER} -Ddatabase.password=${DATABASE_PASS} -DskipDbUserCreation"
            parallel (
                'static': {sh "bin/grumphp run"},
                'unit': { sh "bin/phpunit --config magento/dev/tests/unit/phpunit.xml" },
                'integration': { sh "cd magento/dev/tests/integration && ../../../../bin/phpunit --config phpunit.xml" },
                failFast: true
            )
            sh "bin/mg2-builder util:db:clean -Dproject.name=${PROJECT_NAME} -Ddatabase.admin.username=${DATABASE_USER} -Ddatabase.admin.password=${DATABASE_PASS}"
        }
        stage ('Build') {
            sh "bin/dep build -vvv"
        }
        

}
