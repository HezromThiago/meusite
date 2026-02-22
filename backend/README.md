# Backend Laravel (estrutura)

Este diretório contém a estrutura de backend em padrão Laravel para o projeto de catálogo/admin do site.

## Observação importante

O ambiente atual não permite baixar dependências do Composer (acesso ao Packagist bloqueado), então não foi possível inicializar um projeto Laravel completo com `vendor/`, `artisan` e framework instalado.

Mesmo assim, a estrutura, rotas, modelos, migrations e controllers já foram organizados no padrão Laravel para facilitar a inicialização imediata quando houver acesso ao Composer.

## Entidades implementadas

- Usuários (admin)
- Cidades (landing pages SEO)
- Produtos
- Depoimentos
- Configurações do site (incluindo scripts de header/footer, WhatsApp, redes sociais e favicon)

## Inicialização quando houver rede

1. Criar projeto Laravel completo (ou copiar esta pasta para dentro de um projeto Laravel existente).
2. Aplicar as migrations.
3. Rodar os seeders para criar a conta admin:
   - Email: `hezromthiago@gmail.com`
   - Senha: `6125496c`
4. Expor as rotas API listadas em `routes/api.php`.

## Endpoints principais

- `POST /api/login`
- CRUD: `/api/cities`
- CRUD: `/api/products`
- CRUD: `/api/testimonials`
- `GET/PUT /api/settings`

Rotas públicas SEO:

- `GET /api/pages/city/{slug}`
- `GET /api/pages/product/{slug}`

