## Video de demonstração do projeto

Assista ao vídeo de demonstração do projeto [aqui](https://drive.google.com/file/d/1o8NKafUDghh0KJvWpi8FjJpNrtRDqvHy/view?usp=sharing).

## Sobre o projeto:

Trata-se de um controle de orçamentos de uma oficina. Ao chegar um novo orçamento ele poderá ser cadastrado com facilidade no projeto, além de permitir facil manuseio pois serão filtradas dos orçamentos mais novos para os mais recentes e tambem pode ser feita uma pesquisa sobre um orçamento expecífico ultilzando filtros como data, cliente e denvdedor. Além de ser possível realizar a exclusão e edição dos orçamentos cadastrados.

## Passo a Passo para a execução do projeto:

1. Faça o download do XAMPP para utilizar o PHP e seus serviços [aqui](https://www.apachefriends.org/pt_br/index.html).

2. Faça o download do Laravel, o framework PHP que utilizei, [aqui](https://laravel.com/) e do composer [aqui](https://getcomposer.org/). 

3. Com o XAMPP e o Laravel devidamente instalados, abra o terminal em seu editor de código e clone o projeto:
    ```
    git clone https://github.com/Yuri-Rodrigues1/Oficina2.0.git
    ```
4. Crie um banco chamado oficina em seu banco de dados e faça a conexão do bancp com o códifo no arquivo chamado .env.

5. execute o migrate para criar as tabelas no banco de dados:
   ```
    php artisan migrate
    ``` 
7. Agora é só iniciar o projeto utilizando o comando:
    ```
    php artisan serve
    ```

Para mais dúvidas, entre em contato:
- Email: wyuriroigues@gmail.com
- Telefone: +55 31 99706 4091
