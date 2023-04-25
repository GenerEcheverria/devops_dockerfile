pipeline {
    agent any
    stages {
        stage('Instalar dependencias') {
            bat 'composer install'
        }
        stage('Test') {
            steps {
                bat 'php artisan test --filter AlumnoControllerTest' 
            }
        }
        stage('Build') {
            steps {
                bat 'docker-compose build' 
                bat 'docker image ls' 
            }
        }
    }
}
