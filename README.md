# Desafio 123Milhas
Projeto php com exercícios resolvidos

Tecnologias usadas
* php
* html
* css
* mysql
* laravel
* uml
* postman (ou programa semelhante)

## Executar a aplicação 

Em um computador que tenha um ambiente de servidor instalado, acesse a pasta deste servidor e clone o projeto dentro dela utilizando os seguintes comandos:

* git init
* git clone https://github.com/renatinhah/desafioMilhas.git

Para acessar o projeto abra o brawser e acesse o caminho http://localhost/desafioMilhas/ ou equivalente.

### Questão 1

Acesse o caminho http://localhost/desafioMilhas/questao1.
Digite os  3 valores da equação e clique em calcular para que o valor seja mostrado na tela.

### Questão 2

Acesse a pasta clonada dentro do servidor e abra o arquivo questao2.php, ele contém um diagrama de classe UML com as classes necessárias para representar o estacionamento e suas classes complementares.


### Questão 3

Acesse o caminho http://localhost/desafioMilhas/questao3.
Clique no botão "enviar string de exemplo" e o menor valor será retornado de acordo com a string passada no exemplo. Para futuros testes, a variável $srt foi setada no arquivo questao3.php e poderá ser alterada e mostrará o menor valor da nova string na tela, porém a string de exemplo permanecerá a mesma na tela.

### Api

A api foi criada em um projeto laravel e precisa ter o ambiente laravel instalado assim como o mysql.
O arquivo .env deverá ser setado conforme as configurações da máquina.
Abra o terminal e entre na pasta do projeto com os comandos:
* cd Pasta onde o projeto foi clonado
* cd desafioMilhas/api-pizzaria
* digite o comando php serve artisan para rodar o projeto

#### Endpoints
Os endpoints implementados foram post / get / put / delete relacionados ao CRUD da entidade pizza.

GET
`<link>` : <http://127.0.0.1:8000/api/pizza>
Ele retorna a lista das pizzas cadastradas.


PUT
`<link>` : <http://127.0.0.1:8000/api/pizza/3>
Onde o 3 é o id do item que será alterado, além disso é necessário passar um json no body com os dados novos que serão alterados.

```sh
{
	"name":"c",
	"sabor":"calabresa",
	"tamanho": "15",
	"preco": "25"
}
```

DELETE
`<link>` : <http://127.0.0.1:8000/api/pizza/3>
Onde o 3 é o id do item que será excluído

POST
`<link>` : <http://127.0.0.1:8000/api/pizza>
É necessário passar um json no body com os dados que serão inseridos. Cada json deve ser passado separadamente na inserção de novos dados.

```sh
{
	"name":"a",
	"sabor":"bacon",
	"tamanho": "15",
	"preco": "35"
}

{
	"name":"b",
	"sabor":"frango com catupiry",
	"tamanho": "25",
	"preco": "40"
}

{
	"name":"c",
	"sabor":"calabresa",
	"tamanho": "45",
	"preco": "45"
}

{
	"name":"d",
	"sabor":"mussarela",
	"tamanho": "15",
	"preco": "35"
}

{
	"name":"e",
	"sabor":"quatro queijos",
	"tamanho": "15",
	"preco": "35"
}
```