# Índice

1. [Ambiente de desenvolvimento](#ambiente-de-desenvolvimento)
2. [Instalar XAMPP](#Instalar-xampp)
3. [Observações sobre o XAMPP](#obs)
4. [Arquitetura do projeto](#Arquitetura-do-projeto)
5. [Prevenção de erros](#erros)
6. [OFF-Topic](#OFF-TOPIC)

***
# <a id="ambiente-de-desenvolvimento">Ambiente de desenvolvimento</a>

  - Windows será utilizado como SO.

## <a id="Instalar-xampp">Instalar XAMPP: </a>
  - https://www.apachefriends.org/pt_br/download.html
    + Após instalar, se for preciso, configure da forma que quiser.

## <a id="obs">Observações sobre o XAMPP:</a>
  - Para rodar o projeto, é necessário deixar a pasta do projeto dentro do diretório C:\xampp\htdocs\
  - Depois, é só abrir o xampp > Start (Apache) > Admin (Apache). Ou acessar o localhost pelo navegador.
  - Após feito isso, abrir no navegador a pasta referente ao projeto.
  - Tutorial de instalação/configuração: https://www.youtube.com/watch?v=h7J4zptfuGU

***

# <a id="Arquitetura-do-projeto">Arquitetura do projeto</a>
  - Para o projeto, foi escolhido utilizar o FrameWork CodeIgniter. Sua arquitetura é composta por um padrão MVC e tem basicamente as seguintes pastas:
  - application: contém o projeto em si.
  - assets: arquivos .js, .css, imagens e etc.
  - settings: arquivos de configuração.
  - user_guide: um 'guia' do CodeIgniter.

***

# <a id="erros">Prevenção de erros **(LEIA ESSA PARTE)**</a>
 * Se você alterar o nome da pasta do projeto, ou colocar ela em um caminho diferente dentro da pasta 'C:\xampp\htdocs', vai ser necessário atualizar o arquivo de configuração do CodeIgniter que seta a url base para o projeto. Esse arquivo fica no seguinte diretório: 'C:\xampp\htdocs\CIC-SI\application\config' (Isso se você colocou a pasta do projeto exatamente como este exemplo)
 * Altere essa linha do arquivo `$config['base_url'] = 'http://localhost/CIC-SI/';` para o diretório que você colocou a pasta do projeto
 * Exemplo: A pasta foi colocada neste diretório: 'C:\xampp\htdocs\Back-end\CIC-SI', **consequentemente**, a variável **base_url** deve ser alterada para `$config['base_url'] = 'http://localhost/Back-end/CIC-SI/';`

***
# <a id="login">Notificação</a>
	
* Para fazer as notificações foi utiliado o plugin bootstrap-growl,comandos e configurações no link abaixo:
	https://github.com/ifightcrime/bootstrap-growl

***
# <a id="OFF-TOPIC">OFF-TOPIC</a>

Para quem nunca utilizou o GitHub, existem milhares de tutoriais no youtube.

Nunca, em hipótese alguma, fique dando commits na Branch Master. Sempre baixe a ultima versão de desenvolvimento, somente os líderes podem commitar no master e homologação.

Alguns comandos utilizados no git:
 * git pull origin master -> atualiza o código local 
 * git status -> mostra as mudanças
 * git add <nome_do_arquivo> / --all -> adiciona arquivos para serem comitados
 * git commit -m "<mensagem>" -> comita as mudanças locais
 * git push origin master -> publica mudanças no repositório


Sugestão de editor textos:
  - https://www.sublimetext.com/3 (o que eu uso, opção pessoal)
  - https://notepad-plus-plus.org/download/v7.4.1.html
  - https://code.visualstudio.com/
