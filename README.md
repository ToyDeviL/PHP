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


Instruções Gerais para a IA:
Gere apenas um bloco de código por vez. Após gerar o código, espere por uma nova instrução antes de prosseguir com qualquer outra tarefa ou geração de código.
Implemente os modais somente após a conclusão da tela que os invoca. As etapas de criação e implementação do modal devem ser realizadas em uma fase separada, após a funcionalidade de chamada do modal estar completa e testada.
Mantenha as boas práticas de desenvolvimento web, validações de formulário e testes em diferentes navegadores e dispositivos.
Realize testes unitários a cada funcionalidade implementada.
Priorize a estilização das telas modais.
Crie arquivos de configuração de telas separados para manter o código organizado (Views e Controllers).
Comente as seções do código em PT-BR.
Mantenha a documentação do projeto atualizada.
Configure um pipeline de CI/CD.
Mantenha a consistência visual usando as variáveis CSS e aplicando os estilos de forma uniforme em todo o projeto.
Crie um arquivo javascript para a funcionalidade de alternância de tema, e inclua-o no layout principal.

Fase 1: Funcionalidades de Despesas e Proventos
Tarefa 1.1: Adicionar Despesa
Criar a tela principal que irá chamar o modal de adicionar despesas.
Implementar a funcionalidade de chamada do modal de adicionar novas despesas.
Implementar o formulário modal reutilizável para adicionar despesas.
Implementar a lógica nos Controllers para salvar os dados no banco de dados "contas".
Aplicar os estilos CSS do modal e do formulário.
Tarefa 1.2: Adicionar Provento
Criar a tela principal que irá chamar o modal de adicionar proventos.
Implementar a funcionalidade de chamada do modal de adicionar novos proventos.
Criar um formulário modal reutilizável para adicionar proventos.
Implementar a lógica nos Controllers para salvar os dados no banco de dados "contas".
Aplicar os estilos CSS do modal e do formulário.

Fase 2: Listagem e Filtro de Despesas
Tarefa 2.1: Listagem de Despesas
Criar uma tabela para exibir as despesas cadastradas com paginação e ordenação.
Implementar a lógica nos Controllers para buscar e exibir os dados do banco de dados "contas".
Aplicar os estilos CSS para a tabela.
Tarefa 2.2: Filtro de Despesas
Implementar os campos de filtro por período e a lógica nos Controllers, consultando o banco de dados "contas".

Fase 3: Relatórios e Gráficos
Tarefa 3.1: Relatórios de Despesas
Implementar os filtros, geração de relatórios e exportação para PDF e CSV.
Implementar a lógica nos Controllers para filtrar e exibir os dados em formato de relatório a partir do banco "contas".
Tarefa 3.2: Geração de Gráficos
Utilizar o Chart.js para gerar gráficos de despesas por categoria.
Exibir os gráficos na tela de relatórios, com dados do banco "contas".

Fase 4: Objetivos e Metas
Tarefa 4.1: Tela de Objetivos
Criar a tela para inserir e listar objetivos.
Tarefa 4.2: Adicionar Nova Meta
Criar a tela principal que irá chamar o modal de adicionar metas.
Implementar a funcionalidade de chamada do modal de adicionar novas metas.
Implementar o formulário modal para adicionar novas metas.
Implementar a lógica nos Controllers para salvar as metas no banco de dados "contas".
Aplicar os estilos CSS do modal e do formulário.
Tarefa 4.3: Contribuições e Progresso
Criar a tela principal que irá chamar o modal de adicionar contribuições.
Implementar a funcionalidade de chamada do modal de adicionar novas contribuições.
Implementar o formulário modal para adicionar contribuições.
Implementar a lógica nos Controllers para somar as contribuições e exibir o progresso.
Implementar o botão de excluir meta e as notificações de progresso.
Aplicar os estilos CSS do modal e do formulário.
