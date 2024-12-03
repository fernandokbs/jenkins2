pipeline {
  agent { label 'agente1' }

  stages {
    stage('Vertificar Docker') {
      steps {
        sh 'docker info'
      }
    }

    stage('Sonarqube') {
      steps {
        scripts {
          docker.image('sonarsource/sonar-scanner-cli').inside('--network ci-network') {
            sh 'sonar-scanner'
          }
        }
      }
    }

    // stage('Docker build') {
    //   steps {
    //     sh 'docker build -t jenkins-laravel .'
    //   }
    // }

    // stage('Run test') {
    //   steps {
    //     sh 'docker run --rm jenkins-laravel ./vendor/bin/phpunit tests'
    //   }
    // }

    // stage('Deploy') {
    //   steps {
    //     sshagent(credentials: ['71a7ee52-1c6a-476a-860f-6070ab4eb875']) {
    //       sh './deploy.sh'
    //     }
    //   }
    // }
  }

  // post {
  //   success {
  //     slackSend(channel: '#tutorial', message: "Todo bien")
  //   }

  //   failure {
  //     slackSend(channel: '#tutorial', message: "Algo anda mal")
  //   }
  // }
}