# Loja ToPerfum - Projeto

## DESAFIO FLEXPEAK

A solução a ser desenvolvida é para o seguinte problema:

Possuo uma pequena fábrica de perfumes. Para criar um perfume eu preciso de uma certa quantidade de água, de álcool e de alguma fragrância. Por exemplo:

100ml Perfume A: 70ml de água, 10ml de álcool e 20ml da fragrância X.
100ml Perfume B: 75ml de água, 15ml de álcool e 10ml de fragrância Y. 

Preciso ter um banco de dados dos perfumes que fabrico, qual a quantidade de cada ingrediente e se há quantidade desses ingredientes no estoque. Na hora da fabricação do perfume eu posso fabricar a quantidade em ml que eu quiser, portanto o sistema tem que converter a quantidade que preciso para a quantidade de ingrediente necessária. No final gostaria de ter uma área onde eu possa puxar dois relatórios: qual o perfume mais fabricado e qual a fragrância mais utilizada. 

Diferenciais:
- Laravel;
- VueJS;
- PSR2;
- SOLID;
- Separar o frontend do backend.

## 1. DESENVOLVIMENTO
Sistema Base: Linux #41~20.04.2-Ubuntu 2021 x86_64 x86_64 x86_64 GNU/Linux

### 1.2 Dependências
- Láravel
- Projeto Docker-Flex

# ^^ ==== ^^
### Entrar no container PHP
### Dentro de Docker-Flex executar
````
~$ sudo docker-compose exec --user=flexdock php7 bash
````

### Criar BD
### Dentro de Docker-Flex executar
````
~$ sudo docker-compose exec mysql bash
````

### Logar no MYSQL
````
~$ mysql -u root -p
````

### Executar criação do BD
````
~$ create database toperfum;
````

### Criar tabela dos componentes químicos
### Dentro do container do Projeto em curso
````
~$ php artisan make:migration create_componentes_table
````

### Criar Model
````
~$ php artisan make:model Componentes
````

### Criar Controller
````
~$ php artisan make:controller Site/ComponentesController -r
````


