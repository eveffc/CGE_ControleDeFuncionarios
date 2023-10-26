# Use a imagem oficial do PHP com Apache como imagem base
FROM php:7.4-apache

# Defina o diretório de trabalho no contêiner
WORKDIR /var/www/html

# Copie os arquivos do seu aplicativo PHP para o contêiner
COPY . .

# Instale as extensões do PHP necessárias (se aplicável)
# RUN docker-php-ext-install nome-da-extensão

# Exponha a porta do servidor web (geralmente a porta 80)
EXPOSE 80

# Comando de inicialização do Apache
CMD ["apache2-foreground"]
