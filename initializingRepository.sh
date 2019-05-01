# $1 : Nome do Repositório Git
echo "# Initializing Repository $1 #"

git init
git remote add origin $1
git config --global user.email "fkadosh@yahoo.com.br"
git config --global user.name "Fábio Palmela de Oliveira"
git add .
git commit -m "Configuração inicial do Repositório"
git push -u origin master
git pull origin master

echo "# Repository $1 Initiated #"