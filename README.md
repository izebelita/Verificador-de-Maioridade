# 🆔 Verificador de Maioridade

## 📌 Sobre o projeto

O **Verificador de Maioridade** é uma página desenvolvida em **PHP** que permite informar o nome e o ano de nascimento de uma pessoa para verificar se ela possui 18 anos ou mais.

O projeto também utiliza um arquivo de texto para registrar os acessos permitidos.

## ⚙️ Funcionamento

O usuário preenche:

* **Nome**
* **Ano de nascimento**

Ao clicar em **Verificar**, o sistema calcula a idade com base no ano atual.

### ✅ Maior de idade

Se a idade for **18 anos ou mais**, o sistema exibe:

> Acesso permitido, [Nome]!

Além disso, o nome e a idade são registrados no arquivo `log_acessos.txt`.

### ❌ Menor de idade

Se a idade for menor que 18 anos, o sistema exibe:

> Acesso negado, [Nome]!

Nesse caso, o acesso não é registrado no arquivo.

## 🛠️ Tecnologias utilizadas

* **PHP**
* **HTML5**

## 📂 Estrutura do projeto

```text
Verificador-de-Maioridade/
│
├── index.php
└── log_acessos.txt
```

## 🎯 Objetivo

O objetivo do projeto é praticar conceitos básicos de **PHP**, como:

* Recebimento de dados através de formulário;
* Método `POST`;
* Variáveis;
* Condições `if/else`;
* Cálculo de idade;
* Manipulação de arquivos com `file_put_contents()`;
* Uso de `FILE_APPEND` para adicionar novos registros ao arquivo.
