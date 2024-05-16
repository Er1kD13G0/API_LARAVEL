## Documentação

### Pré-Requisitos:
- PHP
- Composer
- Laravel 

Para instalar o Laravel, siga os passos abaixo:

1. Instale o Composer, se ainda não o tiver instalado. Você pode seguir as instruções de instalação padrão disponíveis em [getcomposer.org](https://getcomposer.org/).
2. Execute o seguinte comando para instalar o Laravel globalmente:
    ```
    composer global require laravel/installer
    ```

### Instalação e Uso da API:

Para usar a API, siga estas etapas:

1. **Atualize as Dependências**:
    Execute o comando `composer update` no diretório do projeto para garantir que todas as dependências estejam atualizadas.
   
2. **Configure o Arquivo .env**:
    Se o arquivo `.env` não existir, copie o exemplo fornecido no projeto chamado `.env.example` e adapte-o conforme as configurações do seu banco de dados.

3. **Migração do Banco de Dados**:
    Execute o comando `php artisan migrate` para migrar as tabelas do banco de dados conforme definido nas migrações.

4. **Inicie o Servidor**:
    Inicie o servidor localmente executando o comando `php artisan serve`.

5. **Teste a API**:
    Use uma ferramenta de cliente HTTP como `Thunder, Postman ou Insomnia` para testar a API. Cole o link do servidor local no seu cliente e faça requisições HTTP como POST, GET, UPDATE e DELETE conforme necessário.

Com esses passos, você estará pronto para usar a API Laravel. Se encontrar algum problema ou precisar de mais assistência, não hesite em entrar em contato.
