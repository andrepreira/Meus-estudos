FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx/
#RUN mkdir .docker
RUN rm -rf /usr/share/nginx/html
COPY . /usr/share/nginx
RUN chmod -R 777 /usr/share/nginx/storage
RUN ln -s public html

#/user/share/nginx/html #document root
#ln -s public html #link simbolico para achar a index no nginex
#docker-compose up -d --build
#docker-compose up -d
#docker-compose down
#docker exec -it <name_container> bash #acesso ao terminal do container
#docker images
#docker ps
#docker build -t <image_name/image_mane:version(latest)> . #cria imagem
#docker login #loga no docker hub
#docker push #envia imagem criada para o docker hub

