pipeline {
    agent { labels 'agente1' }
    stages {
        stage('Verificat tools') {
            steps {
                sh 'docker info'

                echo "URL: ${env.BUILD_URL}"
                echo "Build Number: ${env.BUILD_NUMBER}"
                echo "Job Name: ${env.JOB_NAME}"
                echo "Jenkins URL: ${env.JENKINS_URL}"
            }
        }
    }
}