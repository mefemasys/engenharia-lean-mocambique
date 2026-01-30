# Website Engenharia Lean Moçambique

Website profissional para a consultoria de Engenharia Lean em Moçambique, desenvolvido em PHP puro, seguindo padrões modernos de design e arquitetura.

## Tecnologias Utilizadas

- **PHP 8.x** (Puro, sem frameworks)
- **HTML5 & CSS3** (Custom Properties, Flexbox, Grid)
- **JavaScript** (Vanilla JS)
- **AOS** (Animate On Scroll Library)
- **Lucide Icons** (Ícones modernos)
- **Font Awesome** (Ícones sociais)

## Estrutura do Projeto

```text
engenharia-lean-mocambique/
├── index.php           # Ponto de entrada e roteamento
├── config/             # Configurações globais e DB
├── assets/             # Recursos estáticos (CSS, JS, Imagens)
├── includes/           # Partes reutilizáveis (Header, Footer, Navbar)
├── pages/              # Conteúdo das páginas
└── components/         # Componentes específicos
```

## Instalação e Configuração

1. **Requisitos:**
   - Servidor Web (Apache/Nginx)
   - PHP 7.4 ou superior
   - MySQL (Opcional, estrutura pronta no `config/database.php`)

2. **Passos:**
   - Clone ou copie os arquivos para o seu diretório web (`htdocs` ou `www`).
   - Configure o arquivo `config/config.php` se necessário (URL base).
   - Se utilizar base de dados, configure as credenciais em `config/database.php`.
   - Certifique-se de que o módulo `mod_rewrite` do Apache está ativo para suporte ao `.htaccess`.

## Design

- **Dark Mode:** O site foi concebido nativamente em modo escuro para uma aparência profissional e moderna.
- **Responsividade:** Totalmente adaptado para dispositivos móveis, tablets e desktops.
- **Animações:** Transições suaves ao carregar e ao fazer scroll.

## Licença

Este projeto é de uso exclusivo para Engenharia Lean Moçambique.

---
Desenvolvido por MEFEMA Systems.
