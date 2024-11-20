# Usamos la imagen lts
FROM jenkins/jenkins:lts

# Usamos la imagen docker:dind y copias el binario a /usr/local/bin
COPY --from=docker:dind /usr/local/bin/docker /usr/local/bin

# Cambiamos de usuario a root para poder agregar al usuario jenkins al grupo root
USER root

# Agregamos al usuario jenkins al grupo root
RUN usermod -aG root jenkins

# Volvemos a cambiar al usuario jenkins
USER jenkins