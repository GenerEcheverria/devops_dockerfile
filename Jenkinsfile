pipeline {
    agent any
    stages {
        stage('Test') {
            steps {
                sh 'php artisan test --filter AlumnoControllerTest' 
            }
        }
        stage('Build') {
            steps {
                sh 'docker-compose build' 
                sh 'docker image ls' 
            }
        }
    }
}
