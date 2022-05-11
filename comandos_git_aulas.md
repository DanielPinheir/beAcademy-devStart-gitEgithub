# Comandos vistos no módulo Git e Github

## _Configuração inicial:_

```
git config --global user.name 'Daniel Pinheiro'<br>
git config --global user.email 'dyelzim@gmail.com'
```

> - Configurando o nome do usuário e email: <br>
> - A partir desse comando todas as alterações e atualizações no git irão aparecer o autor e peródo que foram realizadas.

## _Repositórios:_

```
git init
```

> - Após criar uma pasta, abrir o cmd ou o guit bash com botão direito mouse iniciaremos um repositório.

```
git status
```

> - Criando um arquivo ‘arquivo.txt’ na pasta verificaremos se houve algum commit;
> - Verifica se a branch que você se encontra possui commits (atualizações) a serem feitos e se há algum processo pendente dando dicas sobre o qual o próximo passo a ser realizado.
> - Resumindo ele faz um gerenciamento dos processos;

```
git add arquivo.txt
git add .
```

> - Após verificar que houve uma atualização no repositório adicionaremos o comando add para irem para o processo de commit.
> - Preparando (empacotando) o que irá ser comitado.
> - Pode ser adicionado todos os arquivos (**_git add ._**) ou individulamente (**_git add arquivo.txt_**)

```
git rm --cached arquivo.txt
```

> - Caso queira desfazer a ultima ação:
> - Voltar ao estágio anterior

```
git commit -m "mensagem relacionada ao commit"
```

> - Agora chegou a hora de comitar após criar ou atualizar um arquivo no repositório.
> - A mensagem geralmente é algo que tenha alguma ligação e influência com o commit.

```
git log
```

> - Histórico dos seus comits mostrando um hash, branch dos seus comits, local, data, autor.

## Ramificação:

```
git branch
```

> - Mostrar qual é a branch que você está no momento.
> - Branch é como se fosse uma fotografia do seu sistema no ponto em que ela foi criada.

```
git branch nome_da_branch
```

> - Criar uma nova branch
> - Usar nome específico para a funcionalidade dela
> - Evitar letras maiúsculas, caracteres especiais e caso necessário, separar com traço ou underline.

```
git checkout nome_da_branch
```

> - Navegar de um branch para outra.

```
git checkout -b nome_nova_branch
```

> - Criar uma nova branch e já acessa ela diretamente (checkout).

```
git branch -d nome_da_branch
```

> - Remover uma branch.
> - No sistema geralmente serão mantidas apenas as branchs principais, sendo eliminadas as que foram criadas apenas para um uso específico.

```
git merge nome_da_branch
```

> - Quando quero atualizar uma branch com as modificações da outra branch.
> - Primeiramente se direcionar para a branch a ser atualizada usando o git checkout.
> - Logo após realizar o merge fazendo a atualização do arquivo.

## Criando repositório

```
git clone codigo_copiado
```

### Clonando o repositório através da chave SSH no git bash:

> - Após criar o repositório no _github_ clicamos em CODE e selecinando a opção SSH copiamos o código.
> - Abrindo o gitbash dentro da pasta onde vai ser salvo os arquivos do projeto digitamos **_gitclone_** mais o código copiado.

```
git remote -v
```

> - Visualizar os repositórios remotos

```
git push
```

> - Empurrando as atualizações para o repositório remoto.
