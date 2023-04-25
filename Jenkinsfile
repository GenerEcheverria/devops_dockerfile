pipeline {
    agent any
    stages {
        stage('Instalar dependencias') {
            steps{
                bat 'composer install'
            }
        }
        stage('Test') {
            steps {
                bat 'php artisan test --filter AlumnoControllerTest' 
            }
        }
        stage('Build') {
            steps {
                bat 'docker-compose build' 
                bat 'docker-compose run' 
                bat 'docker image ls' 
            }
        }
    }
}
