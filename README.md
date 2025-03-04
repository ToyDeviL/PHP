
Roadmap Atualizado do Projeto: Aplicação de Gerenciamento Financeiro com PHP Laravel e Estilo Personalizado (PostgreSQL "contas") em Raspberry Pi 4

Informações de Acesso e Ambiente:

Servidor: Raspberry Pi 4 com Debian 12 Bookworm.
Endereço IP: 192.168.100.100 (acesso via LAN).
Acesso Externo: Acesso por outros PCs na mesma rede LAN.
Usuário de Acesso Inicial: Apenas o usuário "andrino" terá acesso inicialmente.
Banco de Dados: PostgreSQL.
Nome do Banco de Dados: contas
Tabela de Contas:
login: andrino
senha: Rebecca@2023
Fase 1: Configuração Inicial e Tema Global

Tarefa 1.1: Configuração do Ambiente PHP e Laravel (PostgreSQL "contas") no Raspberry Pi 4
Instalar Debian 12 Bookworm no Raspberry Pi 4.
Instalar PHP, Composer, PostgreSQL e dependências.
Configurar o PostgreSQL, criar o banco de dados "contas" e configurar o acesso.
Verificar as instalações.
Criar o diretório do projeto e configurar permissões.
Instalar o Laravel e suas dependências.
Configurar a estrutura de diretórios do projeto.
Configurar a conexão com o banco de dados PostgreSQL "contas" no arquivo .env (usando o IP 192.168.100.100).
Tarefa 1.2: Implementação do Tema Global e Login
Criar o arquivo styles.css em public/css e incluir a fonte "Poppins" do Google Fonts.
Definir variáveis CSS para cores de fundo, texto, cores primárias, secundárias e de destaque, bordas e cores de botões.
Implementar temas claro e escuro usando o atributo data-theme no elemento body.
Criar o layout principal app.blade.php em resources/views/layouts e incluir o link para styles.css.
Desenvolver a view login.blade.php em resources/views e aplicar os estilos do CSS fornecido.
Criar as rotas e controllers para a funcionalidade de login.
Implementar testes de login fácil usando as credenciais "andrino" e "Rebecca@2023".
Implementar a lógica JavaScript para alternar entre os temas e persistir a escolha no localStorage.
Tarefa 1.3: Funcionalidade de Logout
Implementar o botão de logout e a rota /logout no web.php e controller.
Fase 2: Funcionalidades de Despesas e Proventos

Tarefa 2.1: Adicionar Despesa
Criar um formulário modal reutilizável para adicionar despesas.
Implementar a lógica nos Controllers para salvar os dados no banco de dados "contas".
Aplicar os estilos CSS do modal e do formulário.
Tarefa 2.2: Adicionar Provento
Criar um formulário modal reutilizável para adicionar proventos.
Implementar a lógica nos Controllers para salvar os dados no banco de dados "contas".
Aplicar os estilos CSS do modal e do formulário.
Fase 3: Listagem e Filtro de Despesas

Tarefa 3.1: Listagem de Despesas
Criar uma tabela para exibir as despesas cadastradas com paginação e ordenação.
Implementar a lógica nos Controllers para buscar e exibir os dados do banco de dados "contas".
Aplicar os estilos CSS para a tabela.
Tarefa 3.2: Filtro de Despesas
Implementar os campos de filtro por período e a lógica nos Controllers, consultando o banco de dados "contas".
Fase 4: Relatórios e Gráficos

Tarefa 4.1: Relatórios de Despesas
Implementar os filtros, geração de relatórios e exportação para PDF e CSV.
Implementar a lógica nos Controllers para filtrar e exibir os dados em formato de relatório a partir do banco "contas".
Tarefa 4.2: Geração de Gráficos
Utilizar o Chart.js para gerar gráficos de despesas por categoria.
Exibir os gráficos na tela de relatórios, com dados do banco "contas".
Fase 5: Objetivos e Metas

Tarefa 5.1: Tela de Objetivos
Criar a tela para inserir e listar objetivos.
Tarefa 5.2: Adicionar Nova Meta
Implementar o formulário modal para adicionar novas metas.
Implementar a lógica nos Controllers para salvar as metas no banco de dados "contas".
Aplicar os estilos CSS do modal e do formulário.
Tarefa 5.3: Contribuições e Progresso
Implementar o formulário modal para adicionar contribuições.
Implementar a lógica nos Controllers para somar as contribuições e exibir o progresso.
Implementar o botão de excluir meta e as notificações de progresso.
Aplicar os estilos CSS do modal e do formulário.
Fase 6: Criação do Banco de Dados (PostgreSQL "contas")

Tarefa 6.1: Modelagem do Banco de Dados
Analisar a tabela contas e definir novas tabelas.
Definir os campos, tipos de dados e relações entre as tabelas.
Criar o diagrama ER.
Tarefa 6.2: Implementação do Banco de Dados (PostgreSQL "contas")
Criar o banco de dados PostgreSQL "contas", tabelas e chaves.
Implementar as consultas SQL para CRUD usando Migrations e Seeders do Laravel.
Tarefa 6.3: Integração com o Servidor (PostgreSQL "contas")
Configurar a conexão do Laravel com o PostgreSQL "contas".
Implementar as rotas e funções nos Controllers para interagir com o banco de dados "contas".
Considerações Finais

Manter as boas práticas de desenvolvimento web, validações de formulário e testes em diferentes navegadores e dispositivos.
Realizar testes unitários a cada funcionalidade implementada.
Priorizar a estilização das telas modais.
Criar arquivos de configuração de telas separados para manter o código organizado (Views e Controllers).
Comentar as seções do código em PT-BR.
Manter a documentação do projeto atualizada.
Configurar um pipeline de CI/CD.
Manter a consistência visual usando as variáveis CSS e aplicando os estilos de forma uniforme em todo o projeto.
Criar um arquivo javascript para a funcionalidade de alternancia de tema, e inclui-lo no layout principal.
Configurar o Firewall do linux para permitir o acesso a porta que o php ira usar.
Configurar o roteador para redirecionar a porta do raspberrypi para acesso externo caso deseje.
