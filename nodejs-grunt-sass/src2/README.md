# Grunt.js #
> O Grunt é uma ferramenta capaz de automatizar diversas tarefas, como: concatenação, minificação e validação de arquivos, otimização de imagem, testes unitários, deploy de arquivos por ftp ou rsync, entre outras.

O Grunt vem integrado ao **Storms Framework v.2.0**, e para utilizá-lo é necessário ter instalado o [Node.js](http://nodejs.org/).

## Instalação Node ##

- Instale o [NodeJS](https://nodejs.org/)
- Instale o [GRUNT](http://gruntjs.com/)
	- Veja mais [intruções do GRUNT](http://gruntjs.com/getting-started)
	```bash
	$ npm update -g npm
	$ npm install -g grunt-cli
	```
- Instale o [Ruby](http://rubyinstaller.org/downloads/)
- Instale o [SASS](http://sass-lang.com/install)
- Instale o [grunt-postcss](https://github.com/nDmitry/grunt-postcss)
	- Veja mais em [postcss-autoprefixer](https://github.com/postcss/autoprefixer)
	```bash
	$ npm install grunt-postcss pixrem autoprefixer-core cssnano
	```

## Instalação dos pacotes do Grunt ##

Com o Grunt instalado, é hora de instalar as dependências responsáveis pela execução das tarefas do Grunt no seu projeto.

```bash
$ cd ROOT_PATH/wp-content/themes/stormsframework2/src/
$ npm update -g npm
$ npm install
$ npm install grunt-postcss pixrem autoprefixer-core cssnano
```

## Tarefas Disponíveis ##

*ATENÇÃO: Todos os comandos a seguir devem ser executados dentro da pasta `src`*.

### Compilar arquivos do Sass, minificar e validar scripts: ###

```bash
$ grunt
```

### Observar as mudanças no seu projeto ###

```bash
$ grunt watch
```

### Comprimir imagens na pasta `img/`: ###

```bash
$ grunt optimize
```

### Atualizar os arquivos do Bootstrap: ###

```bash
$ grunt bootstrap
```

### Atualizar os arquivos do FontAwesome: ###

```bash
$ grunt fontawesome
```

### Atualizar os arquivos do WooCommerce: ###

```bash
$ grunt woo
```

### Fazer o deploy dos arquivos: ###

#### 1. via FTP ####

```bash
$ grunt ftp
```

#### 2. via rsync ####

```bash
$ grunt rsync
```
