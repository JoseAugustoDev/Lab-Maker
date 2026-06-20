Trabalho Final da Matéria de Desenvolvimento Web.

O Sistema foi desenvolvido utilizando o codeIgniter junto com o Xampp para rodar os servidores http e mysql.

Para rodar o sistema, baixe o repositorio na sua maquina local dentro de C://xampp/htdocs/labmaker.

Garanta que o .env esteja com as seguintes configs:

CI_ENVIRONMENT = development

database.default.hostname = localhost
database.default.database = labmaker
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port     = 3306

app.baseURL = 'http://localhost:8080/'

No xampp, garanta que os servidores http e mysql estejam rodando. No terminal, no diretorio do labmaker, rode o comando `php spark serve` para inicializar o projeto.
Acesse o localhost:8080/ para visualizar a home do projeto e assim usa-lo.

Aqui no repositório tem um arquivo chamado `db_labmaker.sql`. É necessário importá-lo no phpMyAdmin antes de tentar usar. O motivo disso é para que tudo seja criado da maneira como deve ser e os dados já sejam inseridos, facilitando o uso.

Lista de usuarios para testar as diversas formas de visualização do sistema:

aluno@labmaker.com
alunodois@labmaker.com

prof.robotica@labmaker.com
prof.arduino@labmaker.com

admin@labmaker.com

Todos tem a mesma senha: `teste`

Grupo: Jose Augusto, Letícia e Raissa.

**Propósito do Projeto**:

O projeto do LabMaker tem como objetivo atuar na área da educação, oferecendo uma plataforma voltada para a capacitação de professores no uso de ferramentas e equipamentos da cultura maker, como impressoras 3D, CNC, Arduino e programação.O sistema busca disponibilizar cursos e materiais de forma organizada, intuitiva e de fácil interação, facilitando o aprendizado e o acesso ao conteúdo. Além disso, a plataforma permite a comunicação entre professores e alunos de maneira simples e eficiente, promovendo maior colaboração durante o processo de ensino.
O LabMaker também oferece acompanhamento do progresso dos usuários nos cursos, auxiliando no controle das atividades realizadas e incentivando a evolução contínua no aprendizado das tecnologias maker.

**Minimundo**:

O LabMaker é uma plataforma educacional voltada para a capacitação de professores e alunos na área da cultura maker, oferecendo cursos relacionados a tecnologias como impressão 3D, CNC, Arduino, robótica e programação.
O sistema permite o cadastro de usuários, podendo estes serem alunos, professores ou administradores. De cada usuário deseja-se armazenar informações pessoais e dados de acesso à plataforma.
Os alunos podem se matricular em cursos e participar de turmas. Para cada aluno, o sistema registra informações como notas, frequência/presença, progresso nas atividades e participação nas avaliações. Além disso, os alunos têm acesso aos materiais disponibilizados pelos professores e podem acompanhar seu desempenho ao longo do curso.
As turmas são vinculadas a cursos e possuem informações como horários, materiais didáticos, atividades e avaliações. Cada turma pode possuir vários alunos matriculados e é acompanhada por um ou mais professores responsáveis.
Os professores são responsáveis por gerenciar suas turmas, disponibilizar materiais, criar atividades e avaliações, além de registrar notas e frequência dos alunos. O sistema também permite a comunicação entre professores e alunos de forma simples e organizada.
A área administrativa do sistema permite aos administradores realizar o controle e gerenciamento geral da plataforma, incluindo organização de cursos, turmas, usuários e conteúdos. Os administradores também podem acessar relatórios de desempenho, frequência, quantidade de alunos matriculados e andamento das turmas, auxiliando no gerenciamento e expansão da plataforma.